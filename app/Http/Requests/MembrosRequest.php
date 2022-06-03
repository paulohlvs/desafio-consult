<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembrosRequest extends FormRequest
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

    public function rules()
    {
        return [
            'nome'            => 'required | min:3 | max:80',
            'cpf'             => 'required | numeric | digits:11',
            'nascimento'      => 'required | date ',
        ];
    }
}
