@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>{{ isset($producto) ? 'Editar Producto' : 'Agregar Producto' }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ isset($producto) ? route('productos.update', $producto->ProductoID) : route('productos.store') }}" method="POST">
            @csrf
            @if(isset($producto))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="Nombre">Nombre del Producto:</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ old('Nombre', isset($producto) ? $producto->Nombre : '') }}" required>
            </div>

            <div class="form-group">
                <label for="PrecioUnitario">Precio Unitario:</label>
                <input type="number" step="0.01" class="form-control" id="PrecioUnitario" name="PrecioUnitario" value="{{ old('PrecioUnitario', isset($producto) ? $producto->PrecioUnitario : '') }}" required>
            </div>

            <div class="form-group">
                <label for="Stock">Stock:</label>
                <input type="number" class="form-control" id="Stock" name="Stock" value="{{ old('Stock', isset($producto) ? $producto->Stock : '') }}" required>
            </div>

            <div class="form-group">
                <label for="Descripcion">Descripción:</label>
                <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" required>{{ old('Descripcion', isset($producto) ? $producto->Descripcion : '') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($producto) ? 'Actualizar' : 'Agregar' }}</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
