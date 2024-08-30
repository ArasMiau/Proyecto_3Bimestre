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
            $table->unsignedBigInteger('CategoriaID'); // Asegúrate de que esto coincide con la clave primaria en la tabla categorias
            $table->unsignedBigInteger('ProveedorID');
            $table->string('Nombre', 100);
            $table->integer('PrecioUnitario');
            $table->integer('stock');
            $table->string('Descripcion', 100)->nullable();
            $table->timestamps();

            $table->foreign('CategoriaID')
                ->references('CategoriaID') // Nombre de la columna en la tabla categorias
                ->on('categorias') // Nombre de la tabla a referenciar
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('ProveedorID')
                ->references('ProveedorID') // Nombre de la columna en la tabla proveedores
                ->on('proveedors') // Nombre de la tabla a referenciar
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
