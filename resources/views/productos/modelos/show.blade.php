@extends('layout.main')
@extends('layout.video-brack')
@extends('layout.rep_music')
@section('title', 'Modelos de Rock')

@section('content')
<div class="contenedor-imagen">
    <img src="{{asset('imagenes/' . request()->route('modelo') . '_guitar.jpeg')}}" alt="Guitarra de fondo" class="imagen-fondo-guitarra1">
    <div class="cuadro-negro">
        <h1 class="titulo-grande">{{ strtoupper(request()->route('modelo')) }}</h1>
        <p class="subtitulo">Modelos más Iconicos</p>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="filter-container">
                <label for="priceRange">FILTRAR POR PRECIO</label>
                <input type="range" id="priceRange" min="150" max="7980" step="10" value="150" oninput="updatePrice(this.value)">
                <button id="filterButton">FILTRAR</button>
                <p>Precio: S/<span id="priceValue">150</span> — S/7,980</p>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="row">
                @foreach ($productos as $producto)
                    <div class="col-6 col-md-4 mb-3 d-flex align-items-stretch">
                        {{-- Comienzo del card de producto --}}
                        <div class="tarjeta-producto">
                            <img src="{{ asset(asset('imagenes/producto' . $producto->id_producto . '.jpg')) }}">
                            <div class="nombre-producto">{{ $producto->detalles }}</div>
                            <div class="precio-producto">S/.{{ $producto->precio }}</div>
                            <a href="{{ route('productos.show', ['id' => $producto->id_producto ]) }}" class="btn-primario11">Ver producto</a>
                        </div>
                        {{-- Fin del card de producto --}}
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $productos->links() }}
            </div>
        </div>

    </div>
</div>
@endsection



