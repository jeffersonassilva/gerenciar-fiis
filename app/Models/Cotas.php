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
     * @return float|int
     */
    public function getVlInvestidoAttribute()
    {
        return $this->getAttribute('nr_cotas') * $this->getAttribute('vl_cota');
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
