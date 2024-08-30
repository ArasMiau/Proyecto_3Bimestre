<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('proveedors')->insert([
                'Nombre' => $faker->company(),
                'Telefono' => $faker->phoneNumber(),
                'Direccion' => $faker->address(),
                'Nit' => $faker->randomNumber(9, true), // NIT como número de 9 dígitos
                'Marca' => $faker->word(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
