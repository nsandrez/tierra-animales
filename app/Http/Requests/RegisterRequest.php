<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
            'rol' => 'required|in:Administrador,Veterinario',
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
            'password.required' => 'El campo de contraseña es obligatorio.',
            'rol.required' => 'El campo de rol es obligatorio.',
            'rol.in' => 'El rol seleccionado no es válido. Debe ser Administrador o Veterinario.',
            'phone.required' => 'El campo de teléfono es obligatorio.',
            'phone.numeric' => 'Por favor, ingrese un número válido en el campo de teléfono.',
        ];
    }
}
