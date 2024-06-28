@extends('layout.main')
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
    @foreach ($productos as $producto)
        <div class="col-md-4">
            {{-- Comienzo del card de producto --}}
            <div class="tarjeta-producto">
                <img src="{{ asset('imagenes/jaguar.jpg') }}">
                <div class="nombre-producto">{{ $producto->detalles }}</div>
                <div class="precio-producto">S/.{{ $producto->precio }}</div>
                <a href="{{ route('productos.show', ['id' => $producto->id_producto ]) }}" class="btn-primario">Ver producto</a>
            </div>
            {{-- Fin del card de producto --}}
        </div>
    @endforeach
</body>
@endsection
