<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatosRequest extends FormRequest
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
            'tipo'            => 'required | string  | min:2 | max:80',
            'telefone'        => 'required | numeric | max:99999999',
            'ddd'             => 'required | numeric | max:999',
            'membro_id'       => 'required ',
        ];
    }
}
