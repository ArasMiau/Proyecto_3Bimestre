@extends('body.cuerpo')

<<<<<<< HEAD
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
=======
<<<<<<< HEAD
@section('title', 'login')

@section('cuerpo')

=======
@section('title', 'Login')

@section('cuerpo')
    
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
@if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
<<<<<<< HEAD


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center">Iniciar sesión</h3>
                    </div>
                    <div class="card-body">
                        <form action= {{ route ('login')}} method="POST">
                            <!-- Token CSRF si estás usando Laravel -->
                            @csrf
                            <!-- Correo electrónico -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Contraseña -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <!-- Botón de inicio de sesión -->
                            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p>¿No tienes una cuenta? <a href="/register">Regístrate aquí</a></p>
                    </div>
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
@endsection
=======
=======
<div class="container">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
@endsection()
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
