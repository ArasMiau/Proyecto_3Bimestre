@extends('header.navbar')
@extends('body.cuerpo')

@section('title', 'Categorías')

@section('navbar')

<<<<<<< HEAD
<div class="container mt-5">
    <h1 class="text-center mb-4">Categorías</h1>
    <hr>
    <a href="{{ route('categorias.crear') }}" class="btn btn-primary mb-3">Agregar Categoría</a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="bg-header">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $categoria->Nombre }}</td>
                    <td>{{ $categoria->Descripcion }}</td>
                    <td>
                        <a href="{{ route('categorias.edit', $categoria->CategoriaID) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('categorias.destroy', $categoria->CategoriaID) }}" method="POST" style="display:inline;">
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
        color: #333;
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
<div class="container">
  <h1>Categorías</h1>
  <hr>
  <a href="{{ route('categorias.crear') }}" class="btn btn-primary mb-3">Agregar Categoría</a>
  <table class="table table-striped">
      <thead>
          <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Acciones</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($categorias as $categoria)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $categoria->Nombre }}</td>
              <td>{{ $categoria->Descripcion }}</td>
              <td>
                  <a href="{{ route('categorias.edit', $categoria->CategoriaID) }}" class="btn btn-sm btn-primary">Editar</a>
                  <form action="{{ route('categorias.destroy', $categoria->CategoriaID) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
@endsection
