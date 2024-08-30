@extends('body.cuerpo')

@section('title', 'Producto '.$productos)

@section('cuerpo')

<div class="container">
    <h1>PRODUCTOS</h1>
    <hr>
    <a href="{{route('productos.crear')}}" class="btn btn-warning">Agregar producto</a>
    <hr>
    <h2>Lista de Productos</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nombre</th>
            <th scope="col">precio unitario</th>
            <th scope="col">stock</th>
            <th scope="col">descripcion</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($productos as $tem)
            <tr>
                <th scope="row">{{$tem->ProductoID}}</th>
                <td>{{$tem->Nombre}}</td>
                <td>{{$tem->PrecioUnitario}}</td>
                <td>{{$tem->stock}}</td>
                <td>{{$tem->Descripcion}}</td>
                <td><a href="" class="btn btn-success">EDITAR</a></td>
                <td><a href="" class="btn btn-danger">ELIMINAR</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
    
    
@endsection()