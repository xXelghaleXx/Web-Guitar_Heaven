@extends('layout.main')
@extends('layout.video-brack')
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
        <a href="{{ route('modelo.show', ['modelo' => 'rock'] ) }}" class="boton-ver-mas">VER MÁS</a>
    </div>
    <div class="genero genero-metal">
        <img src="{{asset('imagenes/metal_guitar.webp')}}" class="genero-prev-metal">
        <span class="nombre-genero">METAL</span>
        <a href="{{ route('modelo.show', ['modelo' => 'metal'] ) }}" class="boton-ver-mas">VER MÁS</a>
    </div>
     <div class="genero genero-blues">
        <img src="{{asset('imagenes/blues_guitar.jpeg')}}" class="genero-prev-blues">
        <span class="nombre-genero">BLUES</span>
        <a href="{{ route('modelo.show', ['modelo' => 'blues'] ) }}" class="boton-ver-mas">VER MÁS</a>
    </div>
    <div class="genero genero-reggae">
        <img src="{{asset('imagenes/criolla_guitar.jpg')}}" class="genero-prev-reggae">
        <span class="nombre-genero">CRIOLLO</span>
        <a href="{{ route('modelo.show', ['modelo' => 'criollo'] ) }}" class="boton-ver-mas">VER MÁS</a>
    </div>
</div>


@endsection
