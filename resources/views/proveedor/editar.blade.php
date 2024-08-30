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
        <form action="{{ route('productos.edit') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nombre" style="color: #1E2875;">Nombre del Producto</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese el nombre del producto" required style="background-color: #f8f9fa; color: #1E2875; border: 1px solid #1E2875;">
            </div>
            <div class="form-group mb-3">
                <label for="stock" style="color: #1E2875;">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Ingrese la cantidad en stock" required style="background-color: #f8f9fa; color: #1E2875; border: 1px solid #1E2875;">
            </div>
            <div class="form-group mb-3">
                <label for="precio_unitario" style="color: #1E2875;">Precio Unitario</label>
                <input type="number" step="0.01" class="form-control" id="PrecioUnitario" name="PrecioUnitario" placeholder="Ingrese el precio unitario" required style="background-color: #f8f9fa; color: #1E2875; border: 1px solid #1E2875;">
            </div>
            <div class="form-group mb-3">
                <label for="descripcion" style="color: #1E2875;">Descripción</label>
                <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" placeholder="Ingrese la descripción del producto" required style="background-color: #f8f9fa; color: #1E2875; border: 1px solid #1E2875;"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn" style="background-color: #FFC029; color: #1E2875; width: 100%;">Actualizar Producto</button>
            </div>
        </form>
    </div>
</div>

@endsection
