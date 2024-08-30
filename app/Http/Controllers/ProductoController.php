<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;

class ProductoController extends Controller
{
<<<<<<< HEAD
    public function __construct() {
        $this->middleware('auth');
    }

=======
<<<<<<< HEAD
=======
    //
    // public function __invoke() {
        
    // }
<<<<<<< HEAD

=======
    
    public function __construct() {
        $this->middleware('auth');
    }
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
>>>>>>> d83a5d555e0e16366128acc4bbef93a1dd869ad0
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
    public function index() {
        $productos = Producto::all();
        return view('producto.productos', compact('productos'));
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
    public function crear() {
        $categorias = Categoria::all();
        $proveedors = Proveedor::all();
        return view('producto.verProducto', compact('categorias', 'proveedors'));
    }

<<<<<<< HEAD
    public function store(Request $request)
{
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
        return view('producto.verProducto', ["datos" => $producto]);
=======
    public function store(Request $request) {
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:255|unique:productos,Nombre',
=======
    public function show($id) {

<<<<<<< HEAD
        $producto = Producto::findOrFail($id);
        return view('producto.verProducto',["datos"=> $producto]);
=======
        $produsto = Producto::findOrFail($id);
        return view('producto.verProducto',["datos"=> $produsto]);
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
    }

    public function store(Request $request){

        $validatedData= $request->validate([
<<<<<<< HEAD
            'Nombre' => 'required|string|max:255|unique:productos,nombre',
=======
            'Nombre' => 'required|string|max:255',
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
>>>>>>> d83a5d555e0e16366128acc4bbef93a1dd869ad0
            'stock' => 'required|integer|min:0',
            'PrecioUnitario' => 'required|numeric|min:0',
            'Descripcion' => 'nullable|string|max:1000',
            'CategoriaID' => 'required|exists:categorias,CategoriaID',
            'ProveedorID' => 'required|exists:proveedors,ProveedorID',
        ]);

        Producto::create($validatedData);
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
<<<<<<< HEAD
=======
        
<<<<<<< HEAD
        //return 'se guardo correctamente los productos'. $request;
>>>>>>> d83a5d555e0e16366128acc4bbef93a1dd869ad0
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
    }

    public function edit($id) {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        $proveedors = Proveedor::all();
        return view('producto.verProducto', compact('producto', 'categorias', 'proveedors'));
    }

    public function update(Request $request, $id) {
        $producto = Producto::findOrFail($id);
<<<<<<< HEAD
    
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:255|unique:productos,Nombre,' . $producto->ProductoID . ',ProductoID',
=======
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:255|unique:productos,Nombre,'.$producto->ProductoID,
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
            'stock' => 'required|integer|min:0',
            'PrecioUnitario' => 'required|numeric|min:0',
            'Descripcion' => 'nullable|string|max:1000',
            'CategoriaID' => 'required|exists:categorias,CategoriaID',
            'ProveedorID' => 'required|exists:proveedors,ProveedorID',
        ]);
<<<<<<< HEAD
    
        $producto->update($validatedData);
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }
    
=======

        $producto->update($validatedData);
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f

    public function destroy($id) {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public function update()
    {
        $producto = Producto::findORfail($id);
        $producto->update();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
=======
       //return 'se guardo correctamente los productos'. $request->Nombre;
    }

    public function destroy(Producto $ProductoID) {
        //$producto = Producto::findOrFail($ProductoID);
        $ProductoID->delete();
        return redirect()->route('productos.index')->with('success', 'Se elimono.');
    }

    public function update() {
        
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
    }

>>>>>>> d83a5d555e0e16366128acc4bbef93a1dd869ad0
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
}
