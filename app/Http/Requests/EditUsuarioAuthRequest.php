<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUsuarioAuthRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $userId = auth()->id();

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $userId,
            'password' => 'nullable|string',
            'phone' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo de nombre es obligatorio.',
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.email' => 'Por favor, introduce un correo electrónico válido.',
            'email.unique' => 'Este correo electrónico ya está registrado.',
            'phone.required' => 'El campo de teléfono es obligatorio.',
            'phone.numeric' => 'Por favor, ingrese un número válido en el campo de teléfono.',
        ];
    }
}
