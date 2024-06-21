@extends('layout.main')
@section('tittle', 'modelos_gen')
@section('content')

<div class="encabezado-principal">
    <div class="encabezado">
        <span class="titulo-generos">Géneros :</span>
        <a href="#" class="enlace-todos-productos">Ver todos los productos</a>
    </div>
    <div class="genero genero-rock">
        <img src="{{asset('imagenes/rock_guitar.jpg')}}" class="genero-prev-rock">
        <span class="nombre-genero">ROCK</span>
        <a href="{{route('rock')}}" class="boton-ver-mas">VER MÁS</a>
    </div>
    <div class="genero genero-metal">
        <img src="{{asset('imagenes/metal_guitar.webp')}}" class="genero-prev-metal">
        <span class="nombre-genero">METAL</span>
        <a href="#" class="boton-ver-mas">VER MÁS</a>
    </div>
     <div class="genero genero-blues">
        <img src="{{asset('imagenes/blues_guitar.jpeg')}}" class="genero-prev-blues">
        <span class="nombre-genero">BLUES</span>
        <a href="#" class="boton-ver-mas">VER MÁS</a>
    </div>
    <div class="genero genero-reggae">
        <img src="{{asset('imagenes/reggae_guitar.jpeg')}}" class="genero-prev-reggae">
        <span class="nombre-genero">REGGAE</span>
        <a href="#" class="boton-ver-mas">VER MÁS</a>
    </div>
</div>


@endsection
