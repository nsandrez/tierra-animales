<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password123'), 
            'rol' => $this->faker->randomElement(['Administrador', 'Veterinario', 'Test']),
            'phone' => $this->faker->phoneNumber,
            'status' => $this->faker->randomElement(['OPERATIVO', 'NO HABILITADO']),
        ];
    }
}
