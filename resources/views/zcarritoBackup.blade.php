@extends('layout.main')
@section('tittle', 'carro_compras')
@section('content')
<div class="carrito-contenidoo">
        <div class="carritto-tituloo">Carrito de compras</div>
        <table class="carrito-tablaa">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                @foreach ($detCarritos as $detCarritos)
                <tr>
                    <td>
                        <div style="display: flex; align-items: center;">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2rETeg2EifzFm-JewaMJ-iVqHJS0nrWZb8w&s" alt="Producto">
                            <div class="cart-item-details">Guitarra acústica - con un unicornio integrado</div>
                        </div>
                    </td>
                    <td>S/. 426</td>
                    <td>
                        <div class="cantidad-contenedor">
                            <button class="decrease-btn">-</button>
                            <input type="text" value="1" readonly>
                            <button class="increase-btn">+</button>
                            <i class="fas fa-trash-alt delete-icon"></i>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
