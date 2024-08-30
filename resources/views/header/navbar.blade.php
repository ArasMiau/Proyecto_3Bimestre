<<<<<<< HEAD

<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg" style="background-color: #9a7aa4;">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('ruta/del/logo.png') }}" width="40" height="40" class="d-inline-block align-top">
                Mi Sitio Web
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/inicio') }}">Inicio</a>
=======
<header>  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="resources\img\duo.png" alt="">
        <a class="navbar-brand" href="{{ url('/') }}">MiApp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Inicio</a>
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/productos') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/categorias') }}">Categorias</a>
                </li>
                <li class="nav-item">
<<<<<<< HEAD
                    <a class="nav-link" href="{{ url('/proveedors') }}">Proveedores</a>
=======
                    <a class="nav-link" href="{{ url('/proveedor') }}">Proveedores</a>
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('logout') }}">Salir</a>
                </li>
            </ul>
<<<<<<< HEAD
                <form class="d-flex">
                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-light rounded-pill me-3" type="submit">Buscar</button>
                </form>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle text-white d-flex align-items-center" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('ruta/del/perfil.png') }}" width="30" height="30" class="rounded-circle me-2">
                        Nombre de Usuario
                    </a>
                    <ul class="navbar-nav">
                <li class="nav-item dropdown">

=======
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> Usuario
                    </a>
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/profile') }}">Perfil</a>
                        <a class="dropdown-item" href="{{ url('/settings') }}">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/logout') }}">Cerrar sesión</a>
                    </div>
                </li>
            </ul>
<<<<<<< HEAD
                </div>
            </div>
        </nav>
    </div>
    @yield('navbar')
    @vite('resources/js/app.js')
</header>
=======
        </div>
    </nav>
    @yield('navbar')
    @vite('resources/js/app.js')
</header>
   
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
