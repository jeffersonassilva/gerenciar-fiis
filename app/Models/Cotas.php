<?php

namespace App\Models;

/**
 * Class Cotas
 * @package App\Models
 */
class Cotas extends AbstractModel
{
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
     * @return false|string
     */
    public function getDtCompraAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    /**
     * @return string
     */
    public function getVlUnitarioCotaAttribute()
    {
        return 'R$ ' . number_format(
                $this->getAttribute('vl_cota'),
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
                $this->getAttribute('nr_cotas') * $this->getAttribute('vl_cota'),
                '2',
                ',',
                '.'
            );
    }

    /**
     * @return mixed
     */
    public function getDsSiglaAttribute()
    {
        $ic_subscricao = $this->getAttribute('ic_subscricao');
        $fii = $this->fii()->first();
        return $ic_subscricao === 1 ? $fii->co_sigla . ' (subscrição)' : $fii->co_sigla;
    }
}
