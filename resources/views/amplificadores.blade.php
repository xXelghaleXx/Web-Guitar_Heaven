@extends('layout.main')
@section('title', 'Amplificadores')
@section('content')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    .container {
        margin-top: 50px;
    }
    .product-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
    }
    .product-card img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }
    .product-card h5 {
        margin-top: 10px;
        text-align: center;
    }
    .product-card p {
        font-size: 1.2em;
        text-align: center;
        color: #007bff;
    }
    .product-card a {
        display: block;
        text-align: center;
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
    }
</style>

<div class="container">
    <h2>Amplificador de Guitarra Eléctrica</h2>
    <div class="row">
        <!-- Producto 1 -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://i.pinimg.com/564x/5a/0a/8b/5a0a8b9fd4f3f40194e86385f0eafe52.jpg" alt="Amplificador Fender Champion 100">
                <h5>Amplificador para Guitarra Eléctrica Fender Champion 40</h5>
                <p> S/. 1,009.00</p>
                <a href="#" class="btn btn-primary">Ver producto</a>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://i.pinimg.com/564x/5a/0a/8b/5a0a8b9fd4f3f40194e86385f0eafe52.jpg" alt="Amplificador Fender Champion 100">
                <h5>Amplificador NUX Mighty Space</h5>
                <p>S/. 1,299.00</p>
                <a href="#" class="btn btn-primary">Ver producto</a>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://i.pinimg.com/564x/5a/0a/8b/5a0a8b9fd4f3f40194e86385f0eafe52.jpg" alt="Amplificador Fender Champion 100">
                <h5>Amplificador Fender Mustang GTX50</h5>
                <p>S/. 1,520.00</p>
                <a href="#" class="btn btn-primary">Ver producto</a>
            </div>
        </div>
    </div>
</div>

@endsection
