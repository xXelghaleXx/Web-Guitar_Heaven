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
<br>
  <!-- Carrusel -->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('imagenes/bnz.jpg')}}" class="d-block w-100" alt="..." height="300" width="500">
      </div>
      <div class="carousel-item">
        <img src="{{asset('imagenes/gbsg.jpg')}}" class="d-block w-100" alt="..." height="300" width="500">
      </div>
      <div class="carousel-item">
        <img src="{{asset('imagenes/strtcstr.jpg')}}" class="d-block w-100" alt="..." height="300" width="500">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- fin del carousel -->

  <!-- Productos de ventas -->
  <br><br>

  <!-- Fin de productos de ventas -->
  <br>
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
