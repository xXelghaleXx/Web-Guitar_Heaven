<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/the_only_one.css')}}">


</head>
<body class="footer-princip">

<nav class="navbar navbar-expand-lg navbar-dark flex-column">

    <div class="navbar-top d-flex w-100">
        <a class="navbar-brand" href="{{route('principal')}}">Guitar Heaven</a>
        <form class="form-inline d-flex ml-auto"> <!-- Utilidad ml-auto para alinear a la derecha -->
            <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-light search-btn" type="submit"><i class="fas fa-search"></i></button>
            <!-- Agregar iconos junto al buscador -->
            <a href="#" class="icon"><i class="fas fa-bell"></i></a>
            <a href="#" class="icon"><i class="fas fa-envelope"></i></a>
        </form>

        <div class="d-flex align-items-center">
            <a href="#" class="icon"><i class="fas fa-shopping-cart"></i></a>
            <a href="{{route('login')}}" class="icon"><i class="fas fa-user"></i></a>
        </div>
    </div>
    <div class="navbar-bottom d-flex w-100">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('marcas')}}">Marcas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Modelos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Amplificadores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Accesorios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Guías</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contactanos')}}">Contáctanos</a>
            </li>
        </ul>
    </div>
</nav>


@yield('content')

@include('layout.footer')
<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</body>
</html>
