<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg" style="background-color: #9a7aa4;">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('resources/img/duo.png') }}" width="40" height="40" class="d-inline-block align-top" alt="Logo">
                MiApp
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/productos') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/categorias') }}">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/proveedores') }}">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/logout') }}">Salir</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-light rounded-pill me-3" type="submit">Buscar</button>
                </form>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle text-white d-flex align-items-center" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('ruta/del/perfil.png') }}" width="30" height="30" class="rounded-circle me-2" alt="Perfil">
                        Nombre de Usuario
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">Perfil</a></li>
                        <li><a class="dropdown-item" href="{{ url('/settings') }}">Configuración</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ url('/logout') }}">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('navbar')
    @vite('resources/js/app.js')
</header>
