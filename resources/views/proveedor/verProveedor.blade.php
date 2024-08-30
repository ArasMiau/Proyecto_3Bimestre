@extends('header.navbar')
@extends('body.cuerpo')

@section('title', isset($proveedor) ? 'Editar Proveedor' : 'Agregar Proveedor')

@section('navbar')

<div class="container mt-5">
    <h2 class="mb-4">{{ isset($proveedor) ? 'Editar Proveedor' : 'Agregar Proveedor' }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($proveedor) ? route('proveedors.update', $proveedor->ProveedorID) : route('proveedors.store') }}" method="POST">
        @csrf
        @if(isset($proveedor))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="Nombre">Nombre del Proveedor</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" 
                   value="{{ isset($proveedor) ? $proveedor->Nombre : old('Nombre') }}" 
                   placeholder="Ingrese el nombre del proveedor" required>
        </div>

        <div class="form-group">
            <label for="Telefono">Teléfono</label>
            <input type="text" class="form-control" id="Telefono" name="Telefono" 
                   value="{{ isset($proveedor) ? $proveedor->Telefono : old('Telefono') }}" 
                   placeholder="Ingrese el número de teléfono" required>
        </div>

        <div class="form-group">
            <label for="Direccion">Dirección</label>
            <input type="text" class="form-control" id="Direccion" name="Direccion" 
                   value="{{ isset($proveedor) ? $proveedor->Direccion : old('Direccion') }}" 
                   placeholder="Ingrese la dirección del proveedor" required>
        </div>

        <div class="form-group">
            <label for="Nit">NIT</label>
            <input type="text" class="form-control" id="Nit" name="Nit" 
                   value="{{ isset($proveedor) ? $proveedor->Nit : old('Nit') }}" 
                   placeholder="Ingrese el NIT del proveedor" required>
        </div>

        <div class="form-group">
            <label for="Marca">Marca</label>
            <input type="text" class="form-control" id="Marca" name="Marca" 
                   value="{{ isset($proveedor) ? $proveedor->Marca : old('Marca') }}" 
                   placeholder="Ingrese la marca del proveedor">
        </div>

        <button type="submit" class="btn btn-custom-primary">{{ isset($proveedor) ? 'Actualizar Proveedor' : 'Agregar Proveedor' }}</button>
        <a href="{{ route('proveedors.index') }}" class="btn btn-custom-secondary">Cancelar</a>
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

@endsection
