<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarClienteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $clienteId = $this->route('id');
        return [
            'nombre' => 'required',
            'correo_electronico' => 'required|email|unique:clientes,correo_electronico,' . $clienteId,
            'direccion' => 'required|string',
            'telefono' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo de nombre es obligatorio.',
            'correo_electronico.required' => 'El campo de correo electrónico es obligatorio.',
            'correo_electronico.email' => 'Por favor, introduce un correo electrónico válido.',
            'correo_electronico.unique' => 'Este correo electrónico ya está registrado.',
            'direccion.required' => 'El campo de contraseña es obligatorio.',
            'telefono.required' => 'El campo de teléfono es obligatorio.',
            'telefono.numeric' => 'Por favor, ingrese un número válido en el campo de teléfono.',
        ];
    }
}
