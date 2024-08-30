@extends('body.cuerpo')
@extends('header.navbar')

@section('title', isset($categoria) ? 'Editar Categoría' : 'Crear Categoría')

@section('cuerpo')
<div class="container mt-5">
    <h2 class="mb-4">{{ isset($categoria) ? 'Editar Categoría' : 'Agregar Categoría' }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($categoria) ? route('categorias.update', $categoria->CategoriaID) : route('categorias.store') }}" method="POST">
        @csrf
        @if(isset($categoria))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="Nombre">Nombre de la Categoría</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" 
                   value="{{ isset($categoria) ? $categoria->Nombre : old('Nombre') }}" 
                   placeholder="Ingrese el nombre de la categoría" required>
        </div>

        <div class="form-group">
            <label for="Descripcion">Descripción</label>
            <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" 
                      placeholder="Ingrese la descripción de la categoría">{{ isset($categoria) ? $categoria->Descripcion : old('Descripcion') }}</textarea>
        </div>

<<<<<<< HEAD
        <button type="submit" class="btn btn-custom-primary">{{ isset($categoria) ? 'Actualizar Categoría' : 'Agregar Categoría' }}</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-custom-secondary">Cancelar</a>
    </form>
</div>

<style>
    /* Estilo de los botones */
    .btn-custom-primary {
        background-color: #81638b;
        border-color: #81638b;
        color: #fff;
    }

    .btn-custom-primary:hover {
        background-color: #6e4b6e;
        border-color: #6e4b6e;
    }

    .btn-custom-secondary {
        background-color: #f8f9fa;
        border-color: #ced4da;
        color: #333;
    }

    .btn-custom-secondary:hover {
        background-color: #e2e6ea;
        border-color: #dae0e5;
    }
</style>
=======
        <button type="submit" class="btn btn-primary">{{ isset($categoria) ? 'Actualizar Categoría' : 'Agregar Categoría' }}</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
@endsection
