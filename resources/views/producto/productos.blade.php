<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
@extends('header.navbar')
@extends('body.cuerpo')

@section('title', 'Productos')

@section('navbar')
<<<<<<< HEAD
<div class="container mt-5">
    <h1 class="text-center mb-4">Productos</h1>
    <hr>
    <a href="{{ route('productos.crear') }}" class="btn btn-primary mb-3">Agregar Producto</a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="bg-header">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Precio Unitario</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Proveedor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $producto->Nombre }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>${{ number_format($producto->PrecioUnitario, 2) }}</td>
                    <td>{{ $producto->Descripcion }}</td>
                    <td>{{ $producto->categoria->Nombre ?? 'N/A' }}</td>
                    <td>{{ $producto->proveedor->Nombre ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto->ProductoID) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->ProductoID) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    /* Color de fondo para la cabecera de la tabla */
    .bg-header th {
        background-color: #dac9df;
    }

    /* Color de fondo para la fila de encabezado general */
    thead {
        background-color: #81638b;
        color: #fff;
    }

    /* Estilo de la tabla */
    .table-bordered {
        border: 1px solid #81638b;
    }

    .table-bordered th, .table-bordered td {
        border: 1px solid #81638b;
        padding: 12px;
        text-align: center;
    }

    /* Efecto hover para las filas */
    .table-hover tbody tr:hover {
        background-color: #f5f5f5;
    }

    /* Estilo de los botones */
    .btn-primary {
        background-color: #81638b;
        border-color: #81638b;
    }

    .btn-primary:hover {
        background-color: #6e4b6e;
        border-color: #6e4b6e;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>

=======

<<<<<<< HEAD
=======

=======
@extends('body.cuerpo')

@section('title', 'Producto '.$productos)

@section('cuerpo')

   
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
>>>>>>> d83a5d555e0e16366128acc4bbef93a1dd869ad0
<div class="container">
  <h1>Productos</h1>
  <hr>
  <a href="{{ route('productos.crear') }}" class="btn btn-primary mb-3">Agregar Producto</a>
  <table class="table table-striped">
      <thead>
          <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Stock</th>
              <th>Precio Unitario</th>
              <th>Descripción</th>
              <th>Acciones</th>
          </tr>
<<<<<<< HEAD
      </thead>
      <tbody>
          @foreach ($productos as $producto)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $producto->Nombre }}</td>
              <td>{{ $producto->stock }}</td>
              <td>{{ $producto->PrecioUnitario }}</td>
              <td>{{ $producto->Descripcion }}</td>
              <td>
                  <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-sm btn-primary">Editar</a>
                  <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
=======
        </thead>
        
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <th scope="row">1</th>
                <td>{{$producto->Nombre}}</td>
                <td>{{$producto->stock}}</td>
                <td>{{$producto->PrecioUnitario}}</td>
                <td>{{$producto->Descripcion}}</td>
                <td>
<<<<<<< HEAD
                  <a href="{{route ('productos.show', $producto ->ProductoID)}}" class="btn btn-primary">Editar</a>
                  <form action="{{route('productos.destroy', $producto->ProductoID)}}" method="POST">
=======
                  <a href="{{ route('productos.show', $producto->ProductoID)}}" class="btn btn-primary">Editar</a>
                  <form action="{{ route('productos.delete', $producto) }}" method="post">
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
>>>>>>> d83a5d555e0e16366128acc4bbef93a1dd869ad0
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
@endsection
