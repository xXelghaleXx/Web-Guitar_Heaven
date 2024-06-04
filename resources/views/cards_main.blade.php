<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/cards.css') }}">
    <title>Producto</title>
</head>
<body>
    <div class="product-card">
        <div class="card">
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <img src="{{ asset('imagenes/strtcstr.jpg') }}" alt="Producto">
            <div class="price">S/. 456.00</div>
            <a href="#" class="btn">Ver producto</a>
        </div>
    </div>
</body>
</html>
