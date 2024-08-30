<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CleanUpProductosSeeder extends Seeder
{
    /**
     * Ejecuta la siembra de la base de datos.
     *
     * @return void
     */
    public function run()
    {
        // Limpiar todos los registros en la tabla 'productos'
        DB::table('productos')->truncate();
    }
}
