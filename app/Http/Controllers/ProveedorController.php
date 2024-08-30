<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor; // Asegúrate de importar el modelo correspondiente

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mostrar todos los proveedores
        $proveedors = Proveedor::all();
        return view('proveedor.proveedors', compact('proveedors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function crear()
    {
        return view('proveedor.verProveedor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar y crear un nuevo proveedor
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Telefono' => 'required|string|max:20',
            'Direccion' => 'required|string|max:255',
            'Nit' => 'required|string|max:15',
            'Marca' => 'nullable|string|max:100',
        ]);

        $proveedor = Proveedor::create($request->all());

        return redirect()->route('proveedors.index')->with('success', 'Proveedor creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mostrar un proveedor específico
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedor.verProveedor', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mostrar el formulario para editar un proveedor
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedor.verProveedor', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar y actualizar un proveedor
        $proveedor = Proveedor::findOrFail($id);

        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Telefono' => 'required|string|max:20',
            'Direccion' => 'required|string|max:255',
            'Nit' => 'required|string|max:15',
            'Marca' => 'nullable|string|max:100',
        ]);

        $proveedor->update($request->all());

        return redirect()->route('proveedors.index')->with('success', 'Proveedor actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Eliminar un proveedor
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        return redirect()->route('proveedors.index')->with('success', 'Proveedor eliminado exitosamente.');
    }
}
