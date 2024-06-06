<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guitar Heaven</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/body_main.css')}}">
</head>
<body class="cuerpo-general">
    @include('layout.header')

    <!-- Carrusel de baners -->

    @include('layout.carrusel')

    <!-- fin del carrusel -->

    @include('layout.seccion')


  <!-- Productos de venta -->



  <!-- Fin de productos de ventas -->



  <!-- Marcas de productos de ventas -->
  <div class="body">
    <div class="content">
        <h2>⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯ Marcas Populares ⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</h2>
        <div class="image-buttons">
            <div class="image-button">
                <img src="{{ asset('imagenes/fender_logo.jpg') }}" alt="Fender">
            </div>
            <div class="image-button">
                <img src="{{ asset('imagenes/gibson_logo.jpg') }}" alt="Gibson">
            </div>
            <div class="image-button">
                <img src="{{ asset('imagenes/ibanez_logo.jpg') }}" alt="Ibanez">
            </div>
        </div>
    </div>
</div>
  <!-- Fin de marcas de productos de ventas -->

  @include('layout.footer')


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
