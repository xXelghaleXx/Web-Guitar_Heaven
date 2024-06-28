@extends('layout.main')

@section('title', 'Modelos de Rock')

@section('content')
<div class="contenedor-imagen">
    <img src="{{asset('imagenes/rock_guitar.jpeg')}}" alt="Guitarra de fondo" class="imagen-fondo-guitarra1">
    <div class="cuadro-negro">
        <h1 class="titulo-grande">{{ strtoupper(request()->route('modelo')) }}</h1>
        <p class="subtitulo">Modelos más Iconicos</p>
    </div>
</div>
@endsection

@section('musica', 'Reproductor de Música')

@include('layout.rep_music')
