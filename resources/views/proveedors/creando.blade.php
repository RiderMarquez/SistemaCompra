@extends('body.cuerpo')

@section('title', 'Creando Proveedor')

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
        <h2 class="text-center mb-4" style="color: #1E2875;">Agregar Proveedor</h2>
        <form action="{{ route('proveedor.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nombre" style="color: #1E2875;">Nombre del Proveedor</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del proveedor" required style="background-color: #f8f9fa; color: #1E2875; border: 1px solid #1E2875;">
            </div>
            <div class="form-group mb-3">
                <label for="email" style="color: #1E2875;">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el correo electrónico" required style="background-color: #f8f9fa; color: #1E2875; border: 1px solid #1E2875;">
            </div>
            <div class="form-group mb-3">
                <label for="telefono" style="color: #1E2875;">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el número de teléfono" required style="background-color: #f8f9fa; color: #1E2875; border: 1px solid #1E2875;">
            </div>
            <div class="form-group mb-3">
                <label for="direccion" style="color: #1E2875;">Dirección</label>
                <textarea class="form-control" id="direccion" name="direccion" rows="3" placeholder="Ingrese la dirección del proveedor" required style="background-color: #f8f9fa; color: #1E2875; border: 1px solid #1E2875;"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn" style="background-color: #FFC029; color: #1E2875; width: 100%;">Agregar Proveedor</button>
            </div>
        </form>
    </div>
</div>

@endsection
