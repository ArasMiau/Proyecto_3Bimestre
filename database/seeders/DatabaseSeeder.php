<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamar al seeder para insertar datos de productos
        $this->call(ProductoSeeder::class);

        // Llamar al seeder para insertar datos de categorías
        $this->call(CategoriasTableSeeder::class);

        // Llamar al seeder para insertar datos de proveedores
        $this->call(ProveedoresTableSeeder::class);

        // Puedes descomentar esta línea para limpiar los datos de productos antes de insertar nuevos datos
        // $this->call(CleanUpProductosSeeder::class);
    }
}
