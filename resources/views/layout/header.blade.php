<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Header</title>
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand">Guitar Heaven</a>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
                <a class="img-func" href="#">
                  <img src="{{asset('imagenes/usuario.png')}}" alt="Inicio de sesion" width="40" height="28">
                </a>
                <a class="img-func2" href="#">
                  <img src="{{asset('imagenes/Carrito de compras.png')}}" alt="Carro de compras" width="40" height="28">
                </a>
            </div>
          </nav>
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
</body>
<style>
    header{
        background-color: #102C57;
    }

    .navbar-brand{
        color: azure;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .nav-link{
        color: azure;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 15px;
    }

    .img-func{
        border-radius: 50% 10px;
        object-fit: cover;
        background-color: #ffffff
    }

    .img-func2{
        border-radius: 5px;
        object-fit: cover;
        background-color: #ffffff;
    }

    .img-func, .img-func2 {
        display: inline-block; /* Asegura que los enlaces sean elementos en línea */
    }
</style>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
