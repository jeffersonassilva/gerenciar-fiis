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
            'vl_cota' => 'required',
            'dt_compra' => 'required',
            'cd_fii' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'vl_cota' => 'Valor',
            'dt_compra' => 'Data da Compra',
            'cd_fii' => 'Código do Fii',
        ];
    }
}
