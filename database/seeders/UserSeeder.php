<?php

namespace Database\Seeders;

use App\Models\User;
<<<<<<< HEAD
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

<<<<<<< HEAD

=======
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        User::create([
            'name' => 'Sojan',
            'email' => 'sojan@gmail.com',
            'password' => Hash::make('sojan'), // Encriptar la contraseña
=======
        //
        User::create([
<<<<<<< HEAD
            'name' => 'Sojan',
            'email' => 'sojan@gmail.com',
            'password' => Hash::make('sojan'),
=======
            'name' => 'Alan Brito',
            'email' => 'alanbrito@gmail.com',
            'password' => Hash::make('alan'), // Encriptar la contraseña
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
        ]);
    }
}
