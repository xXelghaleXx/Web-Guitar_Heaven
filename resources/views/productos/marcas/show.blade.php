@extends('layout.main')
@extends('layout.video-brack')
@section('tittle', 'Marcas-gibson')
@section('content')
<body class="bd-003">
    <div class="bnnr-002">
        <img src="{{asset('imagenes/'. request()->route('marca') .'_marca.png')}}" alt="Fender Guitarras La pasión nos une" class="bnnr-img-002">
    </div>
    <div class="prd-hdr-002">
        PRODUCTOS {{ strtoupper(request()->route('marca')) }}
    </div>
    <div class="lgos-002">
        <a href="https://www.fender.com" target="_blank">
            <img src="{{asset('imagenes/' . request()->route('marca') . '_2.png')}}" alt="Fender logo" class="lg-002">
        </a>
    </div>
    @if( request()->route('marca') == 'fender')
    <div class="lgos-002">
        <a href="https://www.fender.com" target="_blank">
            <img src="{{asset('imagenes/' . request()->route('marca') . '_squier.png')}}" alt="Fender logo" class="lg-002">
        </a>
    </div>
    @endif
    @if( request()->route('marca') == 'gibson')
    <div class="lgos-002">
        <a href="https://www.fender.com" target="_blank">
            <img src="{{asset('imagenes/' . request()->route('marca') . '_epiphone.png')}}" alt="Fender logo" class="lg-002">
        </a>
    </div>
    @endif

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="filter-container">
                    <label for="priceRange">FILTRAR POR PRECIO</label>
                    <form action="{{ route('productos.filtroExtra') }}" method="POST">
                        @csrf
                        <input type="hidden" name="tipo_producto" value="{{ request()->segment(1) }}">
                        <input type="range" id="priceRange" name="valor" min="150" max="7980" step="10" value="150" oninput="updatePrice(this.value)">
                        <button id="filterButton" type="submit">FILTRAR</button>
                    </form>
                    <p>Precio: S/<span id="priceValue">150</span> — S/7,980</p>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="row">
                    @foreach ($productos as $producto)
                        <div class="col-6 col-md-4 mb-3 d-flex align-items-stretch">
                            {{-- Comienzo del card de producto --}}
                            <div class="tarjeta-producto">
                                <img src="{{ asset('imagenes/producto' . $producto->id_producto . '.jpg') }}">
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

</body>
@endsection
