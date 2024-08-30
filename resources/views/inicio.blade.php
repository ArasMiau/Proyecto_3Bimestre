<<<<<<< HEAD
@extends('header.navbar')
=======
<<<<<<< HEAD
@extends('header.navbar')
=======
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
@extends('body.cuerpo')

@section('title', 'Inicio')

<<<<<<< HEAD
@section('navbar')
    <div class="mt-4 text-center">
        <h2 class="display-5 text-secondary">Bienvenido, Usuario</h2>
    </div>

    <!-- Sección de productos -->
    <div class="container mt-5">
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('photos/Products/product1.jpg') }}" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Producto 1</h5>
                        <p class="card-text">Descripción breve del producto. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="card-text"><strong>Precio: $99.99</strong></p>
                        <a href="#" class="btn btn-primary">Comprar Ahora</a>
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('photos/Products/product2.jpg') }}" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Producto 2</h5>
                        <p class="card-text">Descripción breve del producto. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="card-text"><strong>Precio: $79.99</strong></p>
                        <a href="#" class="btn btn-primary">Comprar Ahora</a>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('photos/Products/product3.jpg') }}" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Producto 3</h5>
                        <p class="card-text">Descripción breve del producto. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="card-text"><strong>Precio: $89.99</strong></p>
                        <a href="#" class="btn btn-primary">Comprar Ahora</a>
                    </div>
                </div>
            </div>

            <!-- Producto 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('photos/Products/product1.jpg') }}" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Producto 1</h5>
                        <p class="card-text">Descripción breve del producto. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="card-text"><strong>Precio: $99.99</strong></p>
                        <a href="#" class="btn btn-primary">Comprar Ahora</a>
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('photos/Products/product2.jpg') }}" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Producto 2</h5>
                        <p class="card-text">Descripción breve del producto. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="card-text"><strong>Precio: $79.99</strong></p>
                        <a href="#" class="btn btn-primary">Comprar Ahora</a>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('photos/Products/product3.jpg') }}" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Producto 3</h5>
                        <p class="card-text">Descripción breve del producto. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="card-text"><strong>Precio: $89.99</strong></p>
                        <a href="#" class="btn btn-primary">Comprar Ahora</a>
                    </div>
                </div>
            </div>S

            <!-- Agrega más productos aquí -->

        </div>
    </div>

    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-envelope"></i> correo@ejemplo.com</li>
                        <li><i class="bi bi-telephone"></i> +123 456 7890</li>
                        <li><i class="bi bi-geo-alt"></i> Calle Falsa 123, Ciudad</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Información</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Sobre Nosotros</a></li>
                        <li><a href="#" class="text-white">Política de Privacidad</a></li>
                        <li><a href="#" class="text-white">Términos y Condiciones</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Redes Sociales</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white"><i class="bi bi-facebook"></i> Facebook</a></li>
                        <li><a href="#" class="text-white"><i class="bi bi-twitter"></i> Twitter</a></li>
                        <li><a href="#" class="text-white"><i class="bi bi-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
            <p class="mt-4 mb-0">&copy; {{ date('Y') }} ARUTEX. Todos los derechos reservados.</p>
        </div>
    </footer>
@endsection
=======
<<<<<<< HEAD
@section('navbar')
@section('cuerpo')
=======
@section('cuerpo')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SIIP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Clientes</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" >Salir</a>
            {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form> --}}
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://via.placeholder.com/30" alt="User" class="rounded-circle me-1"> 
              @if (Auth::check())
              <p>Bienvenido, {{ Auth::user()->name }}</p>
          @else
              <p>No has iniciado sesión.</p>
          @endif
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807

@endsection()
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
