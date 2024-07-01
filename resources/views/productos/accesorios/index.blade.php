@extends('layout.main')
@extends('layout.video-brack')
@section('title', 'Accesorios')
@section('content')

<div class="amplificadores-container">
    <div class="row">
    </div>
</div>

<div class="body022">
    <div class="container5X1Y2">
        <div class="intro5X1Y2">
            <img src="https://i.pinimg.com/564x/b2/08/f5/b208f53c447b1d81a4206efe153c1d22.jpg" alt="Accesorios" class="img5X1Y2">
            <div class="text-container5X1Y2">
                <p class="text5X1Y2">
                    Explora nuestra amplia gama de accesorios para guitarras, diseñados para mejorar tu experiencia musical. Tenemos todo lo que necesitas para mantener tu guitarra en perfecto estado y llevar tu música al siguiente nivel.
                </p>
            </div>
        </div>
        <div class="products5X1Y2">
            <div class="product5X1Y2">
                <img src="https://i.pinimg.com/564x/e2/9d/70/e29d70a4a1b6de7e229eb4cdb629e85a.jpg" alt="Estuche" class="prod-img5X1Y2">
                <p class="prod-btn5X1Y2">ESTUCHES</p>
            </div>
            <div class="product5X1Y2">
                <img src="https://i.pinimg.com/564x/1b/f7/48/1bf748885ed7c27fc569070e648b6c0e.jpg" alt="Afinador" class="prod-img5X1Y2">
                <p class="prod-btn5X1Y2">AFINADORES</p>
            </div>
            <div class="product5X1Y2">
                <img src="https://i.pinimg.com/564x/e8/0c/5e/e80c5e0ed53f60cdf5cdcd57418e56ef.jpg" alt="Correa" class="prod-img5X1Y2">
                <p class="prod-btn5X1Y2">CORREAS</p>
            </div>
            <div class="product5X1Y2">
                <img src="https://audiomusica.vtexassets.com/arquivos/ids/155447/202378_1jpg.jpg?v=637691700798770000" alt="Correa" class="prod-img5X1Y2">
                <p class="prod-btn5X1Y2">PEDALES</p>
            </div>

        </div>
        <a href="{{ route('accesorios.all') }}">
            <button class="btn-ver-todos5X1Y2">Ver Todos los Accesorios</button>
        </a>
    </div>
</div>

@endsection
