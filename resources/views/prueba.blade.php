@extends('layout.main')
@section('tittle', 'Guitar Heaven')
@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('imagenes/banner1.jpg')}}" class="d-block w-100" alt="Imagen 1">
        </div>
        <div class="carousel-item">
            <img src="{{asset('imagenes/banner2.jpg')}}" class="d-block w-100" alt="Imagen 2">
        </div>
        <div class="carousel-item">
            <img src="{{asset('imagenes/banner3.jpg')}}" class="d-block w-100" alt="Imagen 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>

<div class="service-container">
    <div class="service-item">
        <img class ="icon1" src="https://thumbs.dreamstime.com/b/l%C3%ADnea-asesor-en-l%C3%ADnea-icono-89649811.jpg" alt="Asesores y soporte técnico">
        <h3>Asesores y soporte técnico</h3>
        <p>Contacta a un asesor</p>
    </div>
    <div class="service-item">
        <img class="icon2" src="https://cdn.icon-icons.com/icons2/1759/PNG/512/4124813-badge-insignia-premium-badge-quality-star-badge_113911.png" alt="Productos originales, nuevos y con garantía">
        <h3>Productos originales, nuevos y con garantía</h3>
        <p>Productos originales, nuevos y con garantía</p>
    </div>
    <div class="service-item">
        <img class= "icon3"src="https://previews.123rf.com/images/tatianasun/tatianasun1803/tatianasun180300126/97302797-tarjeta-de-cr%C3%A9dito-con-el-icono-de-candado-ilustraci%C3%B3n-de-tarjeta-bancaria-bloqueada-vector.jpg" alt="Paga de forma fácil y segura">
        <h3>Paga de forma fácil y segura</h3>
        <p>Paga con Izipay y más métodos</p>
    </div>
    <div class="service-item">
        <img class="icon4"src="https://static.vecteezy.com/system/resources/previews/027/213/483/non_2x/fast-delivery-truck-quick-delivery-transportation-with-clock-symbol-van-icon-courier-service-lorry-vehicle-speedy-cargo-user-interface-business-and-finance-shipment-illustration-vector.jpg">
        <div class="subir">
            <h3>Envío rápido dentro de las 24 horas hábiles</h3>
            <p>En distritos de Lima y provincia seleccionadas</p>
        </div>
    </div>
</div>


<div class="body">
    <h1>──────────────────── EVERYTHING YOU NEED ─────────────────── </h1>
    <div class="container">
        <div class="image-button" id="ibanez">
            <img src="https://i.pinimg.com/564x/1a/0b/86/1a0b862640d27f037fa393c83e42ea0f.jpg" alt="Ibanez Guitar">
            <div class="overlay"></div>
            <div class="label">IBANEZ</div>
        </div>
        <div class="image-button" id="gibson">
            <img src="https://i.pinimg.com/564x/20/16/09/201609111ea213fcb45603b2739f6420.jpg" alt="Gibson Guitar">
            <div class="overlay"></div>
            <div class="label">GIBSON</div>
        </div>
        <div class="image-button" id="fender">
            <img src="https://i.pinimg.com/564x/03/fa/e8/03fae892652d70ed441282bfd318410b.jpg" alt="Fender Guitar">
            <div class="overlay"></div>
            <div class="label">FENDER</div>
        </div>
    </div>
</div>

<h1>Lista de Productos</h1>
<!-- Slider de precio-->
<div class="app-container">
    <div class="filter-wrapper">
        <div class="filter-container">
            <label for="priceRange" class="filter-label">FILTRAR POR PRECIO</label>
            <input type="range" id="priceRange" class="filter-range" min="0.00" max="10000.00" step="10" value="150" oninput="updatePrice(this.value)">
            <button id="filterButton" class="filter-button">FILTRAR</button>
            <p class="filter-price">Precio: S/<span id="priceValue">00.00</span></p>
        </div>
    </div>

    <!-- Contenedor principal de las tarjetas -->
    <div class="cards-container">
        <div class="card">
            <button class="cart-button"><i class="fas fa-shopping-cart"></i></button>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2rETeg2EifzFm-JewaMJ-iVqHJS0nrWZb8w&s" alt="Producto">
            <div class="nombre"> Guitarra gibson 09</div>
            <div class="price">S./240.00</div>
            <button class="segundo">Ver producto</button>
        </div>

        <div class="card">
            <button class="cart-button"><i class="fas fa-shopping-cart"></i></button>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2rETeg2EifzFm-JewaMJ-iVqHJS0nrWZb8w&s" alt="Producto">
            <div class="nombre"> Guitarra gibson 09</div>
            <div class="price">S./240.00</div>
            <button class="segundo">Ver producto</button>
        </div>

        <div class="card">
            <button class="cart-button"><i class="fas fa-shopping-cart"></i></button>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2rETeg2EifzFm-JewaMJ-iVqHJS0nrWZb8w&s" alt="Producto">
            <div class="nombre"> Guitarra gibson 09</div>
            <div class="price">S./240.00</div>
            <button class="segundo">Ver producto</button>
        </div>
    </div>
</div>

<style>
    @keyframes buttonHover {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }

    .cards-container {
        display: flex;
        justify-content: space-between; /* Espacio entre las tarjetas */
        flex-wrap: wrap;
        gap: 10px; /* Espacio entre las tarjetas */
    }

    .card {
        border: 1px solid black;
        border-radius: 20px;
        width: 200px;
        height: 430px;
        padding: 20px;
        text-align: center;
        box-shadow: 2px 2px 12px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }

    .card img {
        width: 100%;
        height: auto;
        border-bottom: 1px solid black;
        padding-bottom: 20px;
        transition: transform 0.3s ease;
    }

    .card img:hover {
        transform: scale(1.1);
    }

    .card .price {
        font-size: 1.5em;
        margin: 20px 0;
    }

    .card .nombre {
        font-size: 1.3em;
        margin: 20px 0;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card button {
        background-color: #102C57;
        color: white;
        border: none;
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 2px 2px;
        cursor: pointer;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .card button:hover {
        background-color: #000000;
        animation: buttonHover 0.6s;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,0.20);
    }

    .card .cart-button {
        color: white;
        position: relative;
        right:-71px;
    }

    .segundo {
        background-color: #102C57;
        color: white;
        border: none;
        padding: 10px 15px;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        margin: 2px 2px;
        cursor: pointer;
        border-radius: 8px;
        position: relative;
        width: 220px;
        left: -15px;
        transition: background-color 0.3s ease;
    }

    .segundo:hover {
        background-color: #000000;
        animation: buttonHover 0.6s;
    }
</style>

<script>
    function updatePrice(value) {
        document.getElementById('priceValue').innerText = parseFloat(value).toFixed(2);
    }

    document.getElementById('filterButton').addEventListener('click', function() {
        // Tu lógica de filtrado
    });
</script>



@endsection
