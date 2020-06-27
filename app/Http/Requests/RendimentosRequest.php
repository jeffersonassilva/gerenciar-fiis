<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class RendimentosRequest
 * @package App\Http\Requests
 */
class RendimentosRequest extends FormRequest
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
            'nr_cotas' => 'required',
            'vl_recebido' => 'required',
            'dt_pagamento' => 'required',
            'cd_fii' => 'required',
            'cd_usuario' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'nr_cotas' => 'Número de cotas',
            'vl_recebido' => 'Valor recebido',
            'dt_pagamento' => 'Data do pagamento',
            'cd_fii' => 'Código do Fii',
            'cd_usuario' => 'Código do usuário',
        ];
    }
}
