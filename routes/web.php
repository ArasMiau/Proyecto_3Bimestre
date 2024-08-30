<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\InicioController;
<<<<<<< HEAD
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;

=======
<<<<<<< HEAD
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;

=======
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

<<<<<<< HEAD
=======
/*Route::get('/', function () {
    return view('welcome');
});*/
<<<<<<< HEAD



Route::get('/', [loginController::class, 'loginInicio'])->name('login');
Route::get('login', [loginController::class, 'loginInicio'])->name('login');
Route::post('login', [loginController::class, 'login'])->name('login');
Route::get('logout', [loginController::class, 'logout'])->name('logout');

//MIDLEWARE

Route::middleware('auth')->group(function (){

    Route::get('inicio', [InicioController::class, 'inicio'])->name('inicio');  
=======
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
Route::get('/', [LoginController::class, 'loginInicio'])->name('login');
Route::get('login', [LoginController::class, 'loginInicio'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
<<<<<<< HEAD

// Middleware
Route::middleware('auth')->group(function () {

    Route::get('inicio', [InicioController::class, 'inicio'])->name('inicio');  
    
    // Producto Routes
    Route::controller(ProductoController::class)->group(function () {
        Route::get('/productos', 'index')->name('productos.index');
        Route::get('/productos/crear', 'crear')->name('productos.crear');
        Route::post('/productos', 'store')->name('productos.store');
        Route::get('/productos/{id}/editar', 'edit')->name('productos.edit');
        Route::put('/productos/{id}', 'update')->name('productos.update');
        Route::delete('/productos/{id}', 'destroy')->name('productos.destroy');
    });
    

    // Categoria Routes
    Route::controller(CategoriaController::class)->group(function () {
        Route::get('/categorias', 'index')->name('categorias.index');
        Route::get('/categorias/crear', 'crear')->name('categorias.crear');
        Route::post('/categorias', 'store')->name('categorias.store');
        Route::get('/categorias/{id}', 'show')->name('categorias.show');
        Route::get('/categorias/{id}/editar', 'edit')->name('categorias.edit');
        Route::put('/categorias/{id}', 'update')->name('categorias.update');
        Route::delete('/categorias/{id}', 'destroy')->name('categorias.destroy');
    });

    Route::prefix('proveedors')->group(function() {
        Route::get('/', [ProveedorController::class, 'index'])->name('proveedors.index');
        Route::get('/crear', [ProveedorController::class, 'crear'])->name('proveedors.crear');
        Route::post('/', [ProveedorController::class, 'store'])->name('proveedors.store');
        Route::get('/{id}', [ProveedorController::class, 'show'])->name('proveedors.show');
        Route::get('/{id}/editar', [ProveedorController::class, 'edit'])->name('proveedors.edit');
        Route::put('/{id}', [ProveedorController::class, 'update'])->name('proveedors.update');
        Route::delete('/{id}', [ProveedorController::class, 'destroy'])->name('proveedors.destroy');
    });


    // Clientes Routes
    Route::controller(ClientesController::class)->group(function () {
        Route::get('cliente', 'index');
        Route::get('cliente/creando', 'crear');
    });
});

// Clientes
Route::get('clientes', function () {
    return 'HOLA Clientes';
});
=======
//midelware

Route::middleware('auth')->group(function (){
    Route::get('home', [InicioController::class, 'inicio'])->name('inicio');

>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
    Route::controller(ProductoController::class)->group(function () {
<<<<<<< HEAD
        Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
        Route::get('/productos/crear', [ProductoController::class, 'crear'])->name('productos.crear'); // Esta es la ruta para el formulario de creación
        Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
        Route::get('/productos/{id}/editar', [ProductoController::class, 'edit'])->name('productos.edit');
        Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');
        Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');
=======
        Route::get('productos', 'index')->name('productos.index');
        Route::get('productos/creando',  'crear')->name('productos.crear');
        Route::post('productos', 'store')->name('productos.store');
<<<<<<< HEAD
        Route::get('productos/{id}',  'show')->name('productos.show');
        Route::delete('productos/{id}',  'destroy')->name('productos.destroy');
        Route::put('productos', 'update')->name('productos.edit');
>>>>>>> d83a5d555e0e16366128acc4bbef93a1dd869ad0
    });
    

Route::controller(CategoriaController::class)->group(function () {

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/crear', [CategoriaController::class, 'crear'])->name('categorias.crear');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::get('/categorias/{id}/editar', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

});

    
    Route::controller(CategoriaController::class)->group(function(){
        Route::get('categoria', 'index')->name('categoria.index');
        Route::get('categoria/creando', 'crear')->name('categoria.crear');
    });
    Route::controller(ClientesController::class)->group(function () {
        Route::get('cliente', 'index');
        Route::get('cliente/creando',  'crear');
    //Route::get('cliente/{datos}',  'verProducto');
});

});
=======
        Route::get('productos/{id}', 'show')->name('productos.show');
        Route::delete('productos/{ProductoID}', 'destroy')->name('productos.delete');
        Route::put('productos', 'update')->name('productos.edit');
    });
    Route::controller(ClientesController::class)->group(function () {
        Route::get('cliente', 'index');
        Route::get('cliente/creando',  'crear');
        //Route::get('cliente/{datos}',  'verProducto');
    });
});
    

>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
// Route::get('productos', [ProductoController::class, 'index']);
// Route::get('productos/creando', [ProductoController::class, 'crear']);

// //paso de variables
// Route::get('productos/{datos}', [ProductoController::class, 'verProducto'] );


//clientes
Route::get('clientes', function () {
   return 'HOLA Clientes' ;
});

//rutas mas datos.


//paso de parametros con dos variables.
// Route::get('productos/{datos}/{cliente}', function($datos, $cliente){
//     return "producto $datos, $cliente";
// });
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
