<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use App\Models\Producto;

class ProductoController extends Controller
{
    //
    // public function __invoke() {
        
    // }

    public function index() {
        $productos = Producto::all();
        return view('producto.productos', ["productos"=> $productos]);
    }
    
    public function crear(){
        return view('producto.creando');
    }

    public function verProducto($datos) {
        return view('producto.verProducto',["datos"=> $datos]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string|max:1000',
        ]);
        return 'se guardo correctamente los productos'.$request;
    }

}
