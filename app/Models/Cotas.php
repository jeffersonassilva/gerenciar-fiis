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
    protected $appends = array('vl_investido');

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
}
