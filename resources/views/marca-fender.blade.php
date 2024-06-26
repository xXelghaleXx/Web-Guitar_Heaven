@extends('layout.main')
@section('tittle', 'Marcas-fender')
@section('content')
<body class="bd-001">
    <div class="fndr-123-banner">
        <img src="{{asset('imagenes/fender1.png')}}" alt="Fender Guitarras La pasión nos une" class="fndr-456-banner-image">
    </div>
    <div class="fndr-789-product-header">
        PRODUCTOS FENDER/SQUIER
    </div>
    <div class="fndr-101-logos">
        <a href="https://www.fender.com" target="_blank">
            <img src="{{asset('imagenes/fender2.png')}}" alt="Fender logo" class="fndr-112-logo">
        </a>
        <a href="https://www.fender.com/squier" target="_blank">
            <img src="{{asset('imagenes/squier.png')}}" alt="Squier by Fender logo" class="fndr-112-logo">
        </a>
    </div>
</body>
@endsection
