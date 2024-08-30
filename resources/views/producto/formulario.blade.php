@extends('body.cuerpo')
@extends('header.navbar')

@section('title', $producto ? 'Editar Producto' : 'Crear Producto')

@section('navbar')
@section('cuerpo')
<div class="container mt-5">
    <h2 class="mb-4">{{ $producto ? 'Editar Producto' : 'Agregar Producto' }}</h2>
    <form action="{{ $producto ? route('productos.edit', $producto->id) : route('productos.store') }}" method="POST">
        @csrf
        @if($producto)
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="nombre">Nombre del Producto</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $producto->Nombre ?? '' }}" placeholder="Ingrese el nombre del producto" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $producto->stock ?? '' }}" placeholder="Ingrese la cantidad en stock" required>
        </div>
        <div class="form-group">
            <label for="precio_unitario">Precio Unitario</label>
            <input type="number" step="0.01" class="form-control" id="PrecioUnitario" name="PrecioUnitario" value="{{ $producto->PrecioUnitario ?? '' }}" placeholder="Ingrese el precio unitario" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" placeholder="Ingrese la descripción del producto" required>{{ $producto->Descripcion ?? '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">{{ $producto ? 'Actualizar Producto' : 'Agregar Producto' }}</button>
    </form>
</div>
@endsection
