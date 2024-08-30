@extends('body.cuerpo')
<<<<<<< HEAD
=======
<<<<<<< HEAD
@extends('header.navbar')
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f

@section('title', isset($producto) ? 'Editar Producto' : 'Crear Producto')

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
<<<<<<< HEAD
    @csrf
    @if(isset($producto))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="Nombre">Nombre del Producto</label>
        <input type="text" class="form-control" id="Nombre" name="Nombre" 
               value="{{ isset($producto) ? $producto->Nombre : old('Nombre') }}" 
               required>
    </div>

    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" class="form-control" id="stock" name="stock" 
               value="{{ isset($producto) ? $producto->stock : old('stock') }}" 
               required>
    </div>

    <div class="form-group">
        <label for="PrecioUnitario">Precio Unitario</label>
        <input type="number" step="0.01" class="form-control" id="PrecioUnitario" name="PrecioUnitario" 
               value="{{ isset($producto) ? $producto->PrecioUnitario : old('PrecioUnitario') }}" 
               required>
    </div>

    <div class="form-group">
        <label for="Descripcion">Descripción</label>
        <textarea class="form-control" id="Descripcion" name="Descripcion">{{ isset($producto) ? $producto->Descripcion : old('Descripcion') }}</textarea>
    </div>

    <div class="form-group">
        <label for="CategoriaID">Categoría</label>
        <select class="form-control" id="CategoriaID" name="CategoriaID" required>
            <option value="">Seleccionar Categoría</option>
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
            <option value="">Seleccionar Proveedor</option>
            @foreach($proveedors as $proveedor)
                <option value="{{ $proveedor->ProveedorID }}" {{ isset($producto) && $producto->ProveedorID == $proveedor->ProveedorID ? 'selected' : '' }}>
                    {{ $proveedor->Nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-custom-primary">{{ isset($producto) ? 'Actualizar Producto' : 'Agregar Producto' }}</button>
    <a href="{{ route('productos.index') }}" class="btn btn-custom-secondary">Cancelar</a>
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
=======
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
<<<<<<< HEAD
@endsection
=======


@endsection()
=======

@section('title', 'Ver Producto '.$datos)

@section('cuerpo')
    {{-- <h1>ver producto {{$datos}}</h1> --}}
    {{-- <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
      </div> --}}

      <div class="container mt-5">
        <h2 class="mb-4">Editar Producto</h2>
        <form action="{{ route('productos.edit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Producto</label>
                <input type="text" class="form-control" id="Nombre"  name="Nombre" placeholder="Ingrese el nombre del producto" required value="{{$datos->Nombre}}">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Ingrese la cantidad en stock" required value="{{$datos->stock}}">
            </div>
            <div class="form-group">
                <label for="precio_unitario">Precio Unitario</label>
                <input type="number" step="0.01" class="form-control" id="PrecioUnitario" name="PrecioUnitario" placeholder="Ingrese el precio unitario" required value="{{$datos->PrecioUnitario}}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" placeholder="Ingrese la descripción del producto" required value="{{$datos->Descripcion}}"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </form>
    </div>
@endsection()
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
>>>>>>> d83a5d555e0e16366128acc4bbef93a1dd869ad0
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
