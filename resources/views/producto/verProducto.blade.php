@extends('body.cuerpo')

@section('title', 'Ver Producto '.$datos)

@section('cuerpo')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4 shadow-lg" style="width: 400px; background-color: #ffffff; border: none; border-radius: 15px;">
        <h2 class="text-center mb-4" style="color: #1E2875;">Editar Producto</h2>
        <form action="{{ route('productos.edit', $datos->ProductoID) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="nombre" style="color: #1E2875;">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" required value="{{ $datos->Nombre }}" style="background-color: #f8f9fa; color: #1E2875; border: 1px solid #1E2875;">
            </div>
            <div class="form-group mb-3">
                <label for="precio" style="color: #1E2875;">Precio Unitario</label>
                <input type="number" class="form-control" id="PrecioUnitario" name="PrecioUnitario" step="0.01" required value="{{ $datos->PrecioUnitario }}" style="background-color: #f8f9fa; color: #1E2875; border: 1px solid #1E2875;">
            </div>
            <div class="form-group mb-3">
                <label for="stock" style="color: #1E2875;">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" required value="{{ $datos->stock }}" style="background-color: #f8f9fa; color: #1E2875; border: 1px solid #1E2875;">
            </div>
            <div class="form-group mb-3">
                <label for="Descripcion" style="color: #1E2875;">Descripción</label>
                <input type="text" class="form-control" id="Descripcion" name="Descripcion" required value="{{ $datos->Descripcion }}" style="background-color: #f8f9fa; color: #1E2875; border: 1px solid #1E2875;">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn" style="background-color: #FFC029; color: #1E2875; width: 100%;">Editar Producto</button>
            </div>
        </form>
    </div>
</div>

@endsection
