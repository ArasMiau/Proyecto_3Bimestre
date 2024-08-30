<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;

class ProductoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $productos = Producto::all();
        return view('producto.productos', compact('productos'));
    }

    public function crear() {
        $categorias = Categoria::all();
        $proveedors = Proveedor::all();
        return view('producto.verProducto', compact('categorias', 'proveedors'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:255|unique:productos,Nombre',
            'stock' => 'required|integer|min:0',
            'PrecioUnitario' => 'required|numeric|min:0',
            'Descripcion' => 'nullable|string|max:1000',
            'CategoriaID' => 'required|exists:categorias,CategoriaID',
            'ProveedorID' => 'required|exists:proveedors,ProveedorID',
        ]);

        Producto::create($validatedData);
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    public function show($id) {
        $producto = Producto::findOrFail($id);
        return view('producto.verProducto', ['datos' => $producto]);
    }

    public function edit($id) {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        $proveedors = Proveedor::all();
        return view('producto.verProducto', compact('producto', 'categorias', 'proveedors'));
    }

    public function update(Request $request, $id) {
        $producto = Producto::findOrFail($id);

        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:255|unique:productos,Nombre,' . $producto->ProductoID . ',ProductoID',
            'stock' => 'required|integer|min:0',
            'PrecioUnitario' => 'required|numeric|min:0',
            'Descripcion' => 'nullable|string|max:1000',
            'CategoriaID' => 'required|exists:categorias,CategoriaID',
            'ProveedorID' => 'required|exists:proveedors,ProveedorID',
        ]);

        $producto->update($validatedData);
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy($id) {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
