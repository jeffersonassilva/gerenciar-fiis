<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CotasRequest
 * @package App\Http\Requests
 */
class CotasRequest extends FormRequest
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
            'vl_cota' => 'required',
            'dt_compra' => 'required',
            'ic_subscricao' => 'required',
            'cd_fii' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'nr_cotas' => 'Quantidade de cotas',
            'vl_cota' => 'Valor por cota',
            'dt_compra' => 'Data da compra',
            'ic_subscricao' => 'Indicador de subscrição',
            'cd_fii' => 'Código do Fii',
        ];
    }
}
