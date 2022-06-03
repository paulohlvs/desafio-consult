<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnderecosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cep'                => 'required | numeric | max: 99999999 ', 
            'tipo_endereco'      => 'required | string  | max:80', 
            'logradouro'         => 'required | string  | max:80',
            'numero'             => 'required | numeric | max: 9999999999',
            'complemento'        => 'required | string  | max:80',
            'bairro'             => 'required | string  | max:80 ',
            'estado'             => 'required | alpha  | max:2',
            'cidade'             => 'required | alpha  | max:80',
            'membro_id'          => 'required',
        ];
    }
}
