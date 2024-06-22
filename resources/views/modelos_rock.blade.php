@extends('layout.main')
@extends('layout.rep_music')
@section('tittle', 'modelos_rock')
@section('content')

<div class="contenedor-imagen">
    <img src="{{asset('imagenes/rock_guitar.jpeg')}}" alt="Guitarra de fondo" class="imagen-fondo-guitarra1">
    <div class="cuadro-negro">
        <h1 class="titulo-grande">ROCK</h1>
        <p class="subtitulo">Modelos más Iconicos</p>
    </div>
</div>


@endsection
