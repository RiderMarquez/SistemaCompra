@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>{{ isset($proveedor) ? 'Editar Proveedor' : 'Agregar Proveedor' }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ isset($proveedor) ? route('proveedores.update', $proveedor->ProveedorID) : route('proveedores.store') }}" method="POST">
            @csrf
            @if(isset($proveedor))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="Nombre">Nombre:</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ old('Nombre', isset($proveedor) ? $proveedor->Nombre : '') }}" required>
            </div>

            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" id="Email" name="Email" value="{{ old('Email', isset($proveedor) ? $proveedor->Email : '') }}" required>
            </div>

            <div class="form-group">
                <label for="Telefono">Teléfono:</label>
                <input type="text" class="form-control" id="Telefono" name="Telefono" value="{{ old('Telefono', isset($proveedor) ? $proveedor->Telefono : '') }}" required>
            </div>

            <div class="form-group">
                <label for="Direccion">Dirección:</label>
                <textarea class="form-control" id="Direccion" name="Direccion" rows="3" required>{{ old('Direccion', isset($proveedor) ? $proveedor->Direccion : '') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($proveedor) ? 'Actualizar' : 'Agregar' }}</button>
            <a href="{{ route('proveedors.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
