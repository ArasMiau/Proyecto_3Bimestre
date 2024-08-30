<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sojan',
            'email' => 'sojan@gmail.com',
            'password' => Hash::make('sojan'), // Encriptar la contraseña
        ]);
    }
}
