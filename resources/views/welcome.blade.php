<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guitar Heaven</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="cuerpo-general">

    @include('layout.header')
<br>
  <!-- Carrusel -->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('imagenes/strato.png')}}" class="d-block w-100" alt="..." height="300" width="500">
      </div>
      <div class="carousel-item">
        <img src="{{asset('imagenes/strato_azul.png')}}" class="d-block w-100" alt="..." height="300" width="500">
      </div>
      <div class="carousel-item">
        <img src="{{asset('imagenes/les_paul.png')}}" class="d-block w-100" alt="..." height="300" width="500">
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
    <div class="image-buttons">
        <a href="#" class="image-button">
            <img src="{{ asset('imagenes/fender_logo.jpg') }}" alt="Botón 1" height="500px" width="400px">
            <p class="nombre-btn">Fender</p>
        </a>
        <a href="#" class="image-button">
            <img src="{{ asset('imagenes/gibson_logo.jpg') }}" alt="Botón 2" height="500px" width="400px">
            <p class="nombre-btn">Gibson</p>
        </a>
        <a href="#" class="image-button">
            <img src="{{ asset('imagenes/Ibanez_logo.jpg') }}" alt="Botón 3" height="500px" width="400px">
            <p class="nombre-btn">Ibanez</p>
        </a>
    </div>
  </div>
  <!-- Fin de marcas de productos de ventas -->



  @include('layout.footer')


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
