<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/hd_ft.css') }}">
    <title>Header</title>
</head>
<body>
    <header class="cabeza-1">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand">Guitar Heaven</a>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
              <div class="navbar-right">
                <a class="img-func" href="#">
                  <img src="{{ asset('imagenes/usuario.png') }}" alt="Inicio de sesion" width="40" height="28">
                </a>
                <a class="img-func2" href="#">
                  <img src="{{ asset('imagenes/Carrito de compras.png') }}" alt="Carro de compras" width="40" height="28">
                </a>
              </div>
            </div>
          </nav>
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Marcas</a>
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
                    <a class="nav-link" href="#">Soporte</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contactanos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
