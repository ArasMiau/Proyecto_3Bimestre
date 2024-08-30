<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Ejecuta la siembra de la base de datos.
     *
     * @return void
     */
    public function run()
    {
        // Crear 5000 registros usando el factory
        Producto::factory(5000)->create();
    }
}
class CleanUpSeeder extends Seeder
{
    public function run()
    {
        // Limpiar todos los registros en la tabla 'productos'
        DB::table('productos')->truncate();
    }
}
