<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string|',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.email' => 'Por favor, introduce un correo electrónico válido.',
            'password.required' => 'El campo de contraseña es obligatorio.',
        ];
    }
}
