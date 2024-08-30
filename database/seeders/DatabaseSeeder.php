<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // Llamar al seeder para insertar datos de productos
        $this->call(ProductoSeeder::class);

        $this->call(CategoriasTableSeeder::class);

        $this->call(ProveedoresTableSeeder::class);

        // Puedes descomentar esta línea para limpiar los datos de productos antes de insertar nuevos datos
        // $this->call(CleanUpProductosSeeder::class);
=======
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
<<<<<<< HEAD
        $this->call(ProductoSeeder::class);
        // Llamar al seeder para limpiar los datos de productos
        //$this->call(CleanUpProductosSeeder::class);
=======
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
    }
}
