@extends('body.cuerpo')

@section('title', 'Login')

@section('cuerpo')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="text-center">Iniciar sesión</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <!-- Correo electrónico -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <!-- Checkbox Recordarme -->
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember" value="1">
                            <label class="form-check-label" for="remember">Recordarme</label>
                        </div>

                        <!-- Botón de inicio de sesión -->
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <p>¿No tienes una cuenta? <a href="/register">Regístrate aquí</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
