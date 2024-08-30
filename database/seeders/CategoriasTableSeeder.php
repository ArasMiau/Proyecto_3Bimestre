<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoriasTableSeeder extends Seeder
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
            DB::table('categorias')->insert([
                'Nombre' => $faker->word(),
                'Descripcion' => $faker->sentence(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
