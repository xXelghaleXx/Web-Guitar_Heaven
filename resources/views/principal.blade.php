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
@endsection
