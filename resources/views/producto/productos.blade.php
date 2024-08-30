@extends('body.cuerpo')
@extends('header.navbar')

@section('title', 'Productos')

@section('cuerpo')
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
@endsection
