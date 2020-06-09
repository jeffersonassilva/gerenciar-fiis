<?php

namespace App\Models;

use Carbon\Carbon;

/**
 * Class Cotas
 * @package App\Models
 */
class Cotas extends AbstractModel
{
    const NR_COTAS = 'nr_cotas';
    const VL_COTA = 'vl_cota';
    const DT_COMPRA = 'dt_compra';
    const IC_SUBSCRICAO = 'ic_subscricao';

    /**
     * @var string
     */
    public $table = 'cotas';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $appends = [
        'vl_unitario_cota',
        'vl_investido',
        'ds_sigla',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fii()
    {
        return $this->belongsTo(Fiis::class, 'cd_fii', 'id');
    }

    /**
     * @param $value
     */
    public function setVlCotaAttribute($value)
    {
        $value = preg_replace('/[^0-9]/', '', $value);
        $this->attributes[self::VL_COTA] = substr_replace($value, '.', -2, 0);
    }

    /**
     * @param $value
     * @return string
     */
    public function getDtCompraAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    /**
     * @param $value
     */
    public function setDtCompraAttribute($value)
    {
        $this->attributes[self::DT_COMPRA] = Carbon::createFromFormat('d/m/Y', $value)->toDateTimeString();
    }

    /**
     * @return string
     */
    public function getVlUnitarioCotaAttribute()
    {
        return 'R$ ' . number_format(
                $this->getAttribute(self::VL_COTA),
                '2',
                ',',
                '.'
            );
    }

    /**
     * @return string
     */
    public function getVlInvestidoAttribute()
    {
        return 'R$ ' . number_format(
                $this->getAttribute(self::NR_COTAS) * $this->getAttribute(self::VL_COTA),
                '2',
                ',',
                '.'
            );
    }

    /**
     * @return mixed|string
     */
    public function getDsSiglaAttribute()
    {
        $ic_subscricao = $this->getAttribute(self::IC_SUBSCRICAO);
        $fii = $this->fii()->first();
        return $ic_subscricao === 1 ? $fii->co_sigla . ' (subscrição)' : $fii->co_sigla;
    }
}
