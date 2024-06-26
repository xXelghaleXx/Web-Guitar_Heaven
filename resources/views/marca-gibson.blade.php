@extends('layout.main')
@section('tittle', 'Marcas-gibson')
@section('content')
<body class="bd-002">
    <div class="bnnr-001">
        <img src="{{asset('imagenes/gibson.png')}}" alt="Fender Guitarras La pasión nos une" class="bnnr-img-001">
    </div>
    <div class="prd-hdr-001">
        PRODUCTOS GIBSON/EPIPHONE
    </div>
    <div class="lgos-001">
        <a href="https://www.fender.com" target="_blank">
            <img src="{{asset('imagenes/gibson1.png')}}" alt="Fender logo" class="lg-001">
        </a>
        <a href="https://www.fender.com/squier" target="_blank">
            <img src="{{asset('imagenes/gibson2.png')}}" alt="Squier by Fender logo" class="lg-001">
        </a>
    </div>
</body>
@endsection
