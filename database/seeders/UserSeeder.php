<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@tierraanimales.com',
            'password' => Hash::make('123'),
            'rol' => 'Administrador',
            'phone' => '+569 12345678',
            'status' => 'OPERATIVO',
        ]);

        User::create([
            'name' => 'Veterinario',
            'email' => 'vet@tierraanimales.com',
            'password' => Hash::make('123'),
            'rol' => 'Veterinario',
            'phone' => '+569 12345678',
            'status' => 'OPERATIVO',
        ]);

        User::create([
            'name' => 'Test',
            'email' => 'test@tierraanimales.com',
            'password' => Hash::make('password123'),
            'rol' => 'Test',
            'phone' => '+569 12345678',
            'status' => 'OPERATIVO',
        ]);
    }
}
