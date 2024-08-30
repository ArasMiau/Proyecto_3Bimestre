<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', InicioController::class);

Route::controller(ProductoController::class)->group(function () {
    Route::get('productos', 'index');
    Route::get('productos/creando',  'crear')->name('productos.crear');
    Route::post('productos',  'store')->name('productos.store');
    Route::get('productos/{datos}',  'verProducto');
});
Route::controller(ClientesController::class)->group(function () {
    Route::get('cliente', 'index');
    Route::get('cliente/creando',  'crear');
    //Route::get('cliente/{datos}',  'verProducto');
});
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
