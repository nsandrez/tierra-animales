<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@tierraanimales.com',
            'password' => bcrypt('123'),
            'rol' => 'Administrador',
            'phone' => '+569 12345678',
            'status' => 'OPERATIVO',
        ]);

        User::create([
            'name' => 'Veterinario',
            'email' => 'vet@tierraanimales.com',
            'password' => bcrypt('123'),
            'rol' => 'Veterinario',
            'phone' => '+569 12345678',
            'status' => 'OPERATIVO',
        ]);

        User::create([
            'name' => 'Test',
            'email' => 'test@tierraanimales.com',
            'password' => bcrypt('password123'),
            'rol' => 'Test',
            'phone' => '+569 12345678',
            'status' => 'OPERATIVO',
        ]);

        User::factory()->count(200)->create();
    }
}
