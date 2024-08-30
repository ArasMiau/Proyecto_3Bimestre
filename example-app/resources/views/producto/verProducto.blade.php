@extends('body.cuerpo')

@section('title', 'Ver Producto '.$datos)

@section('cuerpo')
    <h1>ver producto {{$datos}}</h1>
    <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
      </div>
@endsection()
