@extends('body.cuerpo')

@section('title', 'Iniciar Sesión')

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

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4 shadow-lg" style="width: 400px; background-color: #ffffff; border: none; border-radius: 15px;">
        <h2 class="text-center mb-4" style="color: #1E2875;">¡Bienvenido!</h2>
        <p class="text-center mb-4" style="color: #1E2875;">Ingresa a tu cuenta para explorar nuestras ofertas.</p>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="email" style="color: #1E2875;">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Introduce tu correo" required>
            </div>
            <div class="form-group mb-3">
                <label for="password" style="color: #1E2875;">Contraseña</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Introduce tu contraseña" required>
            </div>
            <div class="form-group form-check mb-3">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember" style="color: #1E2875;">Recuérdame</label>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn" style="background-color: #FFC029; color: #1E2875; width: 100%;">Ingresar</button>
            </div>
        </form>
        <div class="text-center mt-3">
            <a href="#" style="color: #1E2875;">Recuperar contraseña</a>
        </div>
        <div class="text-center mt-3">
            <p style="color: #1E2875;">¿Aún no tienes una cuenta? <a href="#" style="color: #FFC029;">Regístrate Ahora</a></p>
        </div>
    </div>
</div>

@endsection
