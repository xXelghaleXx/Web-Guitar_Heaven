@extends('layout.main')
@section('tittle', "$producto->detalles")
@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class="izquierda">
        <img class="imagen" src="{{ asset('imagenes/gbsg.jpg') }}" alt="Guitarra Godin-MULTIAC ACS SLIM">
        @if (auth()->user()->rol == 'admin')
        <form action="{{ route('productos.edit', ['id' => $producto->id_producto]) }}">
            <div class="button-container">
                <button >Editar Producto</button>
            </div>
        </form>
        @else
        <form action="{{ route('carrito.add', ['id' => $producto->id_producto]) }}">
            <div class="button-container">
                <button >Añadir al carrito</button>
            </div>
        </form>
        @endif
    </div>
    <div class="texto">
        <div class="info">
            <h1>{{ $producto->detalles }}</h1>
            <h2>{{ $producto->marca }}</h2>
            <h3>Stock: {{ $producto->stock }} UNIDADES</h1>
            <h3>Precio: S/.{{ $producto->precio }}</h3>
        </div>
        <div class="descripcion">
            <h2>DESCRIPCIÓN</h2>
            <p>Madera: {{ $producto->madera }}</p>
            <p>Cuello: {{ $producto->cuello }}</p>
            <p>Diapasón: {{ $producto->diapason }}</p>
            <p>Radio del diapasón: {{ $producto->radio_diapason }}</p>
            <p>Longitud de la escala: {{ $producto->longitud_escala }}</p>
            <p>Trastes: {{ $producto->trastes }}</p>
            <p>Pastilla: {{ $producto->pastilla }}</p>
            <p>Extra: {{ $producto->extra }}</p>
        </div>
    </div>
</div>

@endsection
