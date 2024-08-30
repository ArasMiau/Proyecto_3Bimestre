<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria; // Asegúrate de importar el modelo correspondiente

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mostrar todas las categorías
        $categorias = Categoria::all();
        return view('categoria.categorias', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function crear()
    {
        return view('categoria.verCategoria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar y crear una nueva categoría
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Descripcion' => 'nullable|string',
        ]);

        $categoria = Categoria::create($request->all());

        return redirect()->route('categorias.index')->with('success', 'Categoría creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mostrar una categoría específica
        $categoria = Categoria::findOrFail($id);
        return view('categoria.verCategoria', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mostrar el formulario para editar una categoría
        $categoria = Categoria::findOrFail($id);
        return view('categoria.verCategoria', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar y actualizar una categoría
        $categoria = Categoria::findOrFail($id);

        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Descripcion' => 'nullable|string',
        ]);

        $categoria->update($request->all());

        return redirect()->route('categorias.index')->with('success', 'Categoría actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Eliminar una categoría
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'Categoría eliminada exitosamente.');
    }
}
