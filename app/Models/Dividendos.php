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
    const DT_FECHAMENTO = 'dt_fechamento';

    /**
     * @var string
     */
    public $table = 'dividendos';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $appends = [
        'vl_unitario_dividendo',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fii()
    {
        return $this->belongsTo(Fiis::class, 'cd_fii', 'id');
    }

    /**
     * @param $vlDividendo
     */
    public function setVlDividendoAttribute($vlDividendo)
    {
        $vlDividendo = preg_replace('/[^0-9]/', '', $vlDividendo);
        $this->attributes[self::VL_DIVIDENDO] = substr_replace($vlDividendo, '.', -2, 0);
    }

    /**
     * @param $dtPagamento
     * @return string
     */
    public function getDtPagamentoAttribute($dtPagamento)
    {
        return Carbon::parse($dtPagamento)->format('d/m/Y');
    }

    /**
     * @param $dtPagamento
     */
    public function setDtPagamentoAttribute($dtPagamento)
    {
        $this->attributes[self::DT_PAGAMENTO] = Carbon::createFromFormat('d/m/Y', $dtPagamento)->toDateTimeString();
    }

    /**
     * @param $dtFechamento
     * @return string
     */
    public function getDtFechamentoAttribute($dtFechamento)
    {
        return Carbon::parse($dtFechamento)->format('d/m/Y');
    }

    /**
     * @param $dtFechamento
     */
    public function setDtFechamentoAttribute($dtFechamento)
    {
        $this->attributes[self::DT_FECHAMENTO] = Carbon::createFromFormat('d/m/Y', $dtFechamento)->toDateTimeString();
    }

    /**
     * @return string
     */
    public function getVlUnitarioDividendoAttribute()
    {
        return 'R$ ' . number_format(
                $this->getAttribute(self::VL_DIVIDENDO),
                '2',
                ',',
                '.'
            );
    }
}
