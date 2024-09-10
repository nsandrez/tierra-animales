<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'token' => 'required',
            'password' => 'required|min:3|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'token.required' => 'El token es obligatorio.',
            'password.required' => 'El campo contraseña es obligatorio.',
            'password.min' => 'La contraseña debe contener al menos 3 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ];
    }
}
