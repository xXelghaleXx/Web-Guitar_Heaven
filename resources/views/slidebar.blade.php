<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .product-card {
            position: relative;
            display: inline-block;
            max-width: 200px;
            margin: 20px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 16px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
        }
        .price {
            font-size: 1.5em;
            color: #333;
            margin: 10px 0;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px 0;
            background-color: #1a3d7c;
            color: #fff;
            text-align: center;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #142c5c;
        }
        .icon {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 50%;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .icon i {
            font-size: 1.2em;
            color: #333;
        }
    </style>
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

