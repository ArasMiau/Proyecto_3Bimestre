<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id('ProveedorID');
            $table->string('Nombre', 100);
<<<<<<< HEAD
            $table->string('Telefono');
            $table->string('Direccion', 100);
=======
            $table->integer('Telefono');
            $table->string('Descripcion', 100);
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
            $table->integer('Nit');
            $table->string('Marca', 100);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};
