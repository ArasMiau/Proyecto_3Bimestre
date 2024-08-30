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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('ProductoID');
<<<<<<< HEAD
            $table->unsignedBigInteger('CategoriaID'); // Asegúrate de que esto coincide con la clave primaria en la tabla categorias
            $table->unsignedBigInteger('ProveedorID');
=======
<<<<<<< HEAD
            $table->unsignedBigInteger('CategoriaID'); // Asegúrate de que esto coincide con la clave primaria en la tabla categorias
            $table->unsignedBigInteger('ProveedorID');
=======
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
            $table->string('Nombre', 100);
            $table->integer('PrecioUnitario');
            $table->integer('stock');
            $table->string('Descripcion', 100)->nullable();
            $table->timestamps();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f

            $table->foreign('CategoriaID')
                ->references('CategoriaID') // Nombre de la columna en la tabla categorias
                ->on('categorias') // Nombre de la tabla a referenciar
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('ProveedorID')
<<<<<<< HEAD
                ->references('ProveedorID') // Nombre de la columna en la tabla proveedores
                ->on('proveedors') // Nombre de la tabla a referenciar
                ->onUpdate('cascade')
                ->onDelete('cascade');
=======
                ->references('ProveedorID') // Nombre de la columna en la tabla categorias
                ->on('proveedors') // Nombre de la tabla a referenciar
                ->onUpdate('cascade')
                ->onDelete('cascade');
=======
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
