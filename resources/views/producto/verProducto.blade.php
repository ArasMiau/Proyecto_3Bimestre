@extends('body.cuerpo')

@section('title', isset($producto) ? 'Editar Producto' : 'Agregar Producto')

@section('cuerpo')
<div class="container mt-5">
    <h2 class="mb-4">{{ isset($producto) ? 'Editar Producto' : 'Agregar Producto' }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($producto) ? route('productos.update', $producto->ProductoID) : route('productos.store') }}" method="POST">
        @csrf
        @if(isset($producto))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="Nombre">Nombre del Producto</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" 
                   value="{{ isset($producto) ? $producto->Nombre : old('Nombre') }}" 
                   placeholder="Ingrese el nombre del producto" required>
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" 
                   value="{{ isset($producto) ? $producto->stock : old('stock') }}" 
                   placeholder="Ingrese la cantidad en stock" required>
        </div>

        <div class="form-group">
            <label for="PrecioUnitario">Precio Unitario</label>
            <input type="number" step="0.01" class="form-control" id="PrecioUnitario" name="PrecioUnitario" 
                   value="{{ isset($producto) ? $producto->PrecioUnitario : old('PrecioUnitario') }}" 
                   placeholder="Ingrese el precio unitario" required>
        </div>

        <div class="form-group">
            <label for="Descripcion">Descripción</label>
            <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" 
                      placeholder="Ingrese la descripción del producto">{{ isset($producto) ? $producto->Descripcion : old('Descripcion') }}</textarea>
        </div>

        <div class="form-group">
            <label for="CategoriaID">Categoría</label>
            <select class="form-control" id="CategoriaID" name="CategoriaID" required>
                <option value="">Seleccione una categoría</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->CategoriaID }}" {{ isset($producto) && $producto->CategoriaID == $categoria->CategoriaID ? 'selected' : '' }}>
                        {{ $categoria->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ProveedorID">Proveedor</label>
            <select class="form-control" id="ProveedorID" name="ProveedorID" required>
                <option value="">Seleccione un proveedor</option>
                @foreach($proveedors as $proveedor)
                    <option value="{{ $proveedor->ProveedorID }}" {{ isset($producto) && $producto->ProveedorID == $proveedor->ProveedorID ? 'selected' : '' }}>
                        {{ $proveedor->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($producto) ? 'Actualizar Producto' : 'Agregar Producto' }}</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<style>
    /* Estilo de los botones */
    .btn-primary {
        background-color: #81638b;
        border-color: #81638b;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #6e4b6e;
        border-color: #6e4b6e;
    }

    .btn-secondary {
        background-color: #f8f9fa;
        border-color: #ced4da;
        color: #333;
    }

    .btn-secondary:hover {
        background-color: #e2e6ea;
        border-color: #dae0e5;
    }
</style>
@endsection
