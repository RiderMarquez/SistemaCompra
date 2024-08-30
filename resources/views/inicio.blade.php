@extends('body.cuerpo')

@section('title', 'Inicio')

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
                        <a class="nav-link active" href="#" style="color: #ffffff;">
                            <i class="bi bi-house-door"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url ('/productos') }}" style="color: #ffffff;">
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


            <div class="card shadow-lg mb-4" style="border-radius: 10px; background: linear-gradient(145deg, #003366, #004080);">
                <div class="card-header" style="background-color: #003366; color: #FFC029;">
                    Productos Top
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="color: #003366;">Producto</th>
                                <th style="color: #003366;">Inventario</th>
                                <th style="color: #003366;">Ventas</th>
                                <th style="color: #003366;">Precio</th>
                                <th style="color: #003366;">Hoy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color: #003366;">Yogurt</td>
                                <td>10 unidades</td>
                                <td>Bs. 592</td>
                                <td>Bs. 15</td>
                                <td>Bs. 10</td>
                            </tr>
                            <tr>
                                <td style="color: #003366;">OMO de 2.1Kg / Bolsa</td>
                                <td>50 unidades</td>
                                <td>Bs. 785</td>
                                <td>Bs. 47</td>
                                <td>Bs. 40</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

<script>
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'scale(1.03)';
            card.style.boxShadow = '0px 0px 20px rgba(0, 0, 0, 0.2)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'scale(1)';
            card.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.1)';
        });
    });

    document.querySelector('.btn-primary').addEventListener('mouseenter', (e) => {
        e.target.style.backgroundColor = '#FF6A10';
    });
    document.querySelector('.btn-primary').addEventListener('mouseleave', (e) => {
        e.target.style.backgroundColor = '#FFC029';
    });
</script>
@endsection
