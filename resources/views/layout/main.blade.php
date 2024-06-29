<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
    <!-- Font Awesome -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/the_only_one.css')}}">
</head>
<body class="footer-princip">

<nav class="navbar navbar-expand-lg navbar-dark flex-column">

    <div class="navbar-top d-flex w-100">
        <a class="navbar-brand" href="{{route('principal')}}"><img src="{{asset('imagenes/Logo_oficial.jpg')}}" alt="El logo oficial de nuestra empresa" class="logo_1"></a>

        <div class="barra_busqueda" >
        <input type="search" placeholder="Buscar..." aria-label="Buscar">
        <button type="submit"><i class="fa fa-search"></i></button>
        </div>

        <div class="d-flex align-items-center">

            <a href="{{ route('carrito.index') }}" class="icon"><i class="fas fa-shopping-cart"></i></a>

            @guest

            <a href="{{ route('login') }}" class="icon"><i class="fas fa-user"></i></a>

            @else

            <a href="{{ route('logout') }}" class="icon"><i class="fas fa-sign-out-alt"></i></a>

            @endguest

        </div>
    </div>

    @if (auth()->check() && auth()->user()->rol == 'admin')

        <div class="de-todo">
            <label>
                <input class="input_unico" type="checkbox">
                <div class="toggle_unico">
                    <span class="topo_unico comun_unico"></span>
                    <span class="medio_unico comun_unico"></span>
                    <span class="bajo_unico comun_unico"></span>
                </div>
                <div class="slide_unico">
                    <h1 class="titulo_unico">Admin Menu</h1>
                    <ul class="ul_unico">
                        <li class="li_unico"><a class="a_unico" href="{{ route('productos.list') }}"><i class="icono_unico fas fa-tv"></i>Productos</a></li> {{-- Faltante --}}
                        <li class="li_unico"><a class="a_unico" href="{{ route('usuarios.list') }}"><i class="icono_unico fas fa-user"></i>Usuarios</a></li> {{-- Faltante --}}
                        <li class="li_unico"><a class="a_unico" href="#"><i class="icono_unico fas fa-comments"></i>dashboard</a></li> {{-- Faltante --}}
                        <li class="li_unico"><a class="a_unico" href="#"><i class="icono_unico fas fa-comments"></i>dashboard</a></li> {{-- Faltante --}}
                        <li class="li_unico"><a class="a_unico" href="#"><i class="icono_unico fas fa-folder"></i>dashboard</a></li> {{-- Faltante --}}
                        <li class="li_unico"><a class="a_unico" href="#"><i class="icono_unico fas fa-address-book"></i>dashboard</a></li> {{-- Faltante --}}
                    </ul>
                </div>
            </label>
        </div>

    @else

    <div class="navbar-bottom d-flex w-100">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Marcas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('modelos.index')}}">Modelos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('amplificadores')}}">Amplificadores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Accesorios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('guias')}}">Guías</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contactanos')}}">Contáctanos</a>
            </li>
        </ul>
    </div>

    @endif

</nav>

@yield('content')



@include('layout.footer')
<!-- Bootstrap JS, Popper.js, and jQuery -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{asset('js/slideprice.js')}}"></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
