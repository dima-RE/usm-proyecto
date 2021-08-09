<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    @yield('css')

    <title>Chamelo's</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid bg-warning">
                <a href="{{route('home')}}" class="navbar-brand">
                    <img class="logo" src="{{asset('img/logo.png')}}" alt="logo.png">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav nav-tabs">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Boleta</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Productos</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{route('ver_productos')}}">Ver Productos</a></li>
                              <li><a class="dropdown-item" href="{{route('agregar_producto')}}">Agregar Producto</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Proveedores</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{route('ver_proveedores')}}">Ver Proveedores</a></li>
                              <li><a class="dropdown-item" href="{{route('agregar_proveedor')}}">Agregar Proveedor</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Empresas</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{route('ver_empresas')}}">Ver Empresas</a></li>
                              <li><a class="dropdown-item" href="{{route('agregar_empresa')}}">Agregar Empresa</a></li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    <main class="container-fluid">
        @yield("contenido")

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset('js/axios_config.js')}}"></script>

    @yield("javascript")
    
</body>
</html>