<?php

namespace App\Services\Auth;

class RoleService
{
    public function redirectBasedOnRole($rol)
    {
        switch ($rol) {
            case 'Veterinario':
                return view('loading')->with('redirectRoute', route('home.dashboard_vet'));
            case 'Administrador':
                return view('loading')->with('redirectRoute', route('home.dashboard_admin'));
            case 'Test':
                return view('loading')->with('redirectRoute', route('home.dashboard_test'));
            default:
                return redirect()->route('acceso');
        }
    }
}
