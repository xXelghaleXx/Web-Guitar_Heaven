@extends('layout.main')
@section('tittle', "$producto->detalles")
@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class="izquierda">
        <img class="imagen" src="{{ asset('imagenes/gbsg.jpg') }}" alt="Guitarra Godin-MULTIAC ACS SLIM">
        <form action="{{ route('producto.add', ['id' => $producto->id_producto]) }}">
            <div class="button-container">
                <button >Añadir al carrito</button>
            </div>
        </form>
    </div>
    <div class="texto">
        <div class="info">
            <h1>{{ $producto->detalles }}</h1>
            <h2>{{ $producto->marca }}</h2>
            <h3>Precio: S/.{{ $producto->precio }}</h3>
        </div>
        <div class="descripcion">
            <h2>DESCRIPCIÓN</h2>
        </div>
    </div>
</div>

@endsection
