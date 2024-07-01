@extends('layout.main')
@section('tittle', "$producto->detalles")
@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class="izquierda">
        <img class="imagen" src="{{ asset('imagenes/producto' . $producto->id_producto . '.jpg') }}" alt="Guitarra Godin-MULTIAC ACS SLIM">
        @if (auth()->check() && auth()->user()->rol == 'admin')
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
            @if($producto->tipo == 'guitarra')
            <p>Madera: {{ $producto->madera }}</p>
            <p>Cuello: {{ $producto->cuello }}</p>
            <p>Diapasón: {{ $producto->diapason }}</p>
            <p>Radio del diapasón: {{ $producto->radio_diapason }}</p>
            <p>Longitud de la escala: {{ $producto->longitud_escala }}</p>
            <p>Trastes: {{ $producto->trastes }}</p>
            <p>Pastilla: {{ $producto->pastilla }}</p>
            <p>Extra: {{ $producto->extra }}</p>
            @else
            <p>Extra: {{ $producto->extra }}</p>
            @endif
        </div>
    </div>
</div>

@if(auth()->check() && auth()->user()->rol == 'usuario')
<h2 class="publicar-comentario-titulo">Publicar Comentario</h2>
<form action="{{ route('comentario.add') }}" method="POST" class="comentario-formulario">
    @csrf
    <div class="form-group">
        <input type="hidden" name="id_producto" value="{{$producto->id_producto}}">
    </div>
    <div class="form-group">
        <label for="comment" class="comentario-label">Comentario:</label>
        <textarea id="comment" name="comentario" rows="4" required class="comentario-textarea"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="comentario-boton">Publicar</button>
    </div>
</form>
@endif
<h2 class="comentarios-titulo">Comentarios</h2>
<div class="comentarios-container">
    @foreach ($comentarios as $comentario)
        <div class="comentario">
            <div class="comentario-info">
                <span class="comentario-usuario">{{ $comentario->nombre }}</span>
                <span class="comentario-fecha">{{ $comentario->fecha_comentario }}</span>
            </div>
            <div class="comentario-texto">{{ $comentario->comentario }}</div>
        </div>
    @endforeach
</div>



@endsection
