<?php

namespace App\Services\Auth;

class RoleService
{
    public function redirectBasedOnRole($rol)
    {
        switch ($rol) {
            case 'Veterinario':
                return redirect()->route('home.dashboard_vet');
            case 'Administrador':
                return redirect()->route('home.dashboard_admin');
            case 'Test':
                return redirect()->route('home.dashboard_test');
            default:
                return redirect()->route('acceso');
        }
    }
}
