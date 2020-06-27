<?php

namespace App\Models;

use Carbon\Carbon;

/**
 * Class Rendimentos
 * @package App\Models
 */
class Rendimentos extends AbstractModel
{
    const VL_RECEBIDO = 'vl_recebido';
    const DT_PAGAMENTO = 'dt_pagamento';

    /**
     * @var string
     */
    public $table = 'rendimentos';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = [
        'nr_cotas',
        'vl_recebido',
        'dt_pagamento',
        'cd_fii',
        'cd_usuario',
    ];

    /**
     * @var array
     */
    protected $appends = [
        'vl_rendimento',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fii()
    {
        return $this->belongsTo(Fiis::class, 'cd_fii', 'id');
    }

    /**
     * @return string
     */
    public function getVlRendimentoAttribute()
    {
        return 'R$ ' . number_format(
                $this->getAttribute(self::VL_RECEBIDO),
                '2',
                ',',
                '.'
            );
    }

    /**
     * @param $vlRecebido
     */
    public function setVlRecebidoAttribute($vlRecebido)
    {
        $vlRecebido = preg_replace('/[^0-9]/', '', $vlRecebido);
        $this->attributes[self::VL_RECEBIDO] = substr_replace($vlRecebido, '.', -2, 0);
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
}
