<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class DividendosRequest
 * @package App\Http\Requests
 */
class DividendosRequest extends FormRequest
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
            'vl_dividendo' => 'required',
            'dt_pagamento' => 'required',
            'cd_fii' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'vl_dividendo' => 'Valor do dividendo',
            'dt_pagamento' => 'Data do pagamento',
            'cd_fii' => 'Código do Fii',
        ];
    }
}
