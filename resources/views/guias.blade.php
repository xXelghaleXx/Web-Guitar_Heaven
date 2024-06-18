@extends('layout.main')
@section('title', 'guías')
@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<body.guías>

    <div class="guides-container">
        <h2>GUÍAS</h2>
        <div class="guide-sections">
            <div class="row">
                <div class="col-md-4 guide-item">
                    <a href="/guia1" class="guide-link">
                        <img src="{{asset('imagenes/banner1.jpg')}}" alt="Guía 1">
                        <div class="guide-caption">
                            <p>Guía para hacer compras de manera segura</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 guide-item">
                    <a href="/guia2" class="guide-link">
                        <img src="{{asset('imagenes/banner1.jpg')}}" alt="Guía 2">
                        <div class="guide-caption">
                            <p>5 Consejos para comprar por internet</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 guide-item">
                    <a href="/guia3" class="guide-link">
                        <img src="{{asset('imagenes/banner1.jpg')}}" alt="Guía 3">
                        <div class="guide-caption">
                            <p>3 Tips para comprar online</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body.guías>
</html>

@endsection
