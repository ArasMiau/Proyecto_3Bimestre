@extends('body.cuerpo')

@section('title', 'Creando Producto ')

@section('cuerpo')
    <div class="container mt-5">
        <h2>Registro de producto</h2>
        <form action="{{route('productos.store')}}" method="POST">
            <div class="form-group">
                <label for="productName">Nombre del Producto</label>
                <input type="text" class="form-control" id="productName" placeholder="Ingrese el nombre del producto">
            </div>
            <div class="form-group">
                <label for="productPrice">Precio Unitario</label>
                <input type="number" class="form-control" id="productPrice" placeholder="Ingrese el precio unitario" step="0.01">
            </div>
            <div class="form-group">
                <label for="productStock">Stock</label>
                <input type="number" class="form-control" id="productStock" placeholder="Ingrese la cantidad en stock">
            </div>
            <div class="form-group">
                <label for="productDescription">Descripción</label>
                <textarea class="form-control" id="productDescription" rows="3" placeholder="Ingrese una descripción del producto"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Producto</button>
        </form>
    </div>
@endsection()