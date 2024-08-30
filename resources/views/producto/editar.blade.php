@extends('body.cuerpo')
<<<<<<< HEAD
@extends('header.navbar')

@section('title', 'Creando Producto ')

@section('navbar')
=======

@section('title', 'Creando Producto ')

>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
@section('cuerpo')
<div class="container mt-5">
    <h2 class="mb-4">Agregar Producto</h2>
    <form action="{{ route('productos.edit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del Producto</label>
<<<<<<< HEAD
            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese el nombre del producto" required>
=======
            <input type="text" class="form-control" id="Nombre"  name="Nombre" placeholder="Ingrese el nombre del producto" required>
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" placeholder="Ingrese la cantidad en stock" required>
        </div>
        <div class="form-group">
            <label for="precio_unitario">Precio Unitario</label>
            <input type="number" step="0.01" class="form-control" id="PrecioUnitario" name="PrecioUnitario" placeholder="Ingrese el precio unitario" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" placeholder="Ingrese la descripción del producto" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </form>
</div>


@endsection()