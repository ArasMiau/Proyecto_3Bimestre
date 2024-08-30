<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar rutas web para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider y todas serán
| asignadas al grupo de middleware "web".
|
*/

Route::get('/', [LoginController::class, 'loginInicio'])->name('login');
Route::get('login', [LoginController::class, 'loginInicio'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Middleware para rutas protegidas
Route::middleware('auth')->group(function () {

    // Ruta de inicio
    Route::get('inicio', [InicioController::class, 'inicio'])->name('inicio');

    // Rutas de productos
    Route::controller(ProductoController::class)->group(function () {
        Route::get('/productos', 'index')->name('productos.index');
        Route::get('/productos/crear', 'crear')->name('productos.crear');
        Route::post('/productos', 'store')->name('productos.store');
        Route::get('/productos/{id}/editar', 'edit')->name('productos.edit');
        Route::put('/productos/{id}', 'update')->name('productos.update');
        Route::delete('/productos/{id}', 'destroy')->name('productos.destroy');
        Route::get('/productos/{id}', 'show')->name('productos.show');  // Añadido para ver detalles del producto
    });

    // Rutas de categorías
    Route::controller(CategoriaController::class)->group(function () {
        Route::get('/categorias', 'index')->name('categorias.index');
        Route::get('/categorias/crear', 'crear')->name('categorias.crear');
        Route::post('/categorias', 'store')->name('categorias.store');
        Route::get('/categorias/{id}', 'show')->name('categorias.show');
        Route::get('/categorias/{id}/editar', 'edit')->name('categorias.edit');
        Route::put('/categorias/{id}', 'update')->name('categorias.update');
        Route::delete('/categorias/{id}', 'destroy')->name('categorias.destroy');
    });

    // Rutas de proveedores
    Route::prefix('proveedors')->group(function() {
        Route::get('/', [ProveedorController::class, 'index'])->name('proveedors.index');
        Route::get('/crear', [ProveedorController::class, 'crear'])->name('proveedors.crear');
        Route::post('/', [ProveedorController::class, 'store'])->name('proveedors.store');
        Route::get('/{id}', [ProveedorController::class, 'show'])->name('proveedors.show');
        Route::get('/{id}/editar', [ProveedorController::class, 'edit'])->name('proveedors.edit');
        Route::put('/{id}', [ProveedorController::class, 'update'])->name('proveedors.update');
        Route::delete('/{id}', [ProveedorController::class, 'destroy'])->name('proveedors.destroy');
    });

    // Rutas de clientes
    Route::controller(ClientesController::class)->group(function () {
        Route::get('cliente', 'index')->name('clientes.index');
        Route::get('cliente/creando', 'crear')->name('clientes.crear');
    });
});

// Ruta de prueba para clientes
Route::get('clientes', function () {
    return 'HOLA Clientes';
});
