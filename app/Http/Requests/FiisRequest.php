<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class FiisRequest
 * @package App\Http\Requests
 */
class FiisRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'co_sigla' => 'required|max:10',
            'ds_alvo' => 'required|max:50',
            'ds_tipo' => 'required|max:100',
            'ds_administrador' => 'required|max:255',
            'vl_ultimo_rendimento' => 'required|max:255',
            'dt_pagamento' => 'required|max:255',
            'nr_cotistas' => 'required|max:255',
            'vl_patrimonio' => 'required|max:30',
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'co_sigla' => 'Sigla',
            'ds_alvo' => 'Público Alvo',
            'ds_tipo' => 'Tipo',
            'ds_administrador' => 'Administrador',
            'vl_ultimo_rendimento' => 'Valor Último Rendimento',
            'dt_pagamento' => 'Valor Último Rendimento',
            'nr_cotistas' => 'Valor Último Rendimento',
            'vl_patrimonio' => 'Valor Último Rendimento',
        ];
    }
}
