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
            'sigla' => 'required|max:10',
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'sigla' => 'Sigla',
        ];
    }
}
