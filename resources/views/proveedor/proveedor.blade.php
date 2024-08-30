
@extends('body.cuerpo')

@section('title', 'Producto '.$productos)

@section('cuerpo')

<div class="container-fluid"> 
    <div class="row">
                <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark text-white shadow" style="background: linear-gradient(180deg, #003366, #0c78e4); padding-top: 60px; padding-bottom: 450px;">
                    <div class="position-sticky">
                <div class="text-center my-4">
                    <img src="{{ asset('../assets/logo.png') }}" alt="Logo" style="width: 120px;">
                    <h4>Bolivia Mar</h4>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url ('/home') }}" style="color: #ffffff;">
                            <i class="bi bi-house-door"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url ('/productos') }}" style="color: #ffffff; text-align: center;">
                            <i class="bi bi-box"></i> Productos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url ('/proveedor') }}" style="color: #ffffff;">
                            <i class="bi bi-truck"></i> Proveedores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" style="color: #FFC029;">
                            <i class="bi bi-box-arrow-right"></i> Salir
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="border-color: #003366;">
                <h1 class="h2" style="color: #003366;">Panel de Control</h1>
                <form class="d-flex w-50">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-primary" type="submit" style="background-color: #FFC029; color: #003366;">
                        Buscar
                    </button>
                </form>
            </div>
            <div class="container mt-5">
              <h1 class="mb-4" style="color: #1E2875;">Productos</h1>
              <hr style="border-color: #1E2875;">
              <a href="{{ route('productos.crear') }}" class="btn" style="background-color:  #1E2875; color: #f8f8f8;">Agregar Producto</a>
              <hr style="border-color: #1E2875;">
              
              <h2 class="mb-4" style="color: #1E2875;">Lista de Productos</h2>
              <table class="table" style="background-color: #ffffff; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                  <thead>
                      <tr>
                          <th scope="col" style="color: #1E2875;">#</th>
                          <th scope="col" style="color: #1E2875;">Nombre</th>
                          <th scope="col" style="color: #1E2875;">Stock</th>
                          <th scope="col" style="color: #1E2875;">Precio Unitario</th>
                          <th scope="col" style="color: #1E2875;">Descripción</th>
                          <th scope="col"></th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($productos as $index => $producto)
                      <tr>
                          <th scope="row">{{ $index + 1 }}</th>
                          <td>{{ $producto->Nombre }}</td>
                          <td>{{ $producto->stock }}</td>
                          <td>{{ $producto->PrecioUnitario }}</td>
                          <td>{{ $producto->Descripcion }}</td>
                          <td>
                              <a href="{{ route('productos.show', $producto->ProductoID) }}" class="btn" style="background-color: #FFC029; color: #1E2875;">Editar</a>
                              <form action="{{ route('productos.delete', $producto) }}" method="post" style="display: inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger" style="background-color: #dc3545; color: #ffffff;">Eliminar</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>

            
        </main>
    </div>
</div>


@endsection
