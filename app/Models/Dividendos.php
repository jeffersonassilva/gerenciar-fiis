<?php

namespace App\Models;

use Carbon\Carbon;

/**
 * Class Dividendos
 * @package App\Models
 */
class Dividendos extends AbstractModel
{
    const VL_DIVIDENDO = 'vl_dividendo';
    const DT_PAGAMENTO = 'dt_pagamento';

    /**
     * @var string
     */
    public $table = 'dividendos';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

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
    public function setVlDividendoAttribute($value)
    {
        $value = preg_replace('/[^0-9]/', '', $value);
        $this->attributes[self::VL_DIVIDENDO] = substr_replace($value, '.', -2, 0);
    }

    /**
     * @param $value
     * @return string
     */
    public function getDtPagamentoAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    /**
     * @param $value
     */
    public function setDtPagamentoAttribute($value)
    {
        $this->attributes[self::DT_PAGAMENTO] = Carbon::createFromFormat('d/m/Y', $value)->toDateTimeString();
    }
}
