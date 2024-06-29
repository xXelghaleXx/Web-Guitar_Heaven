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
                            <div class="cart-item-details">{{ $detCarritos->producto->detalles }}</div>
                        </div>
                    </td>
                    <td>S/. {{ $detCarritos->total }}</td>
                    <td>
                        <div class="cantidad-contenedor">
                            <form action="{{ route('carrito.update', ['id_carrito' => $detCarritos->id_carrito, 'id_producto' => $detCarritos->id_producto]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button class="decrease-btn" name="action" value="decrease">-</button>
                            </form>
                            <input type="text" value="{{ $detCarritos->cantidad }}" readonly>
                            <form action="{{ route('carrito.update', ['id_carrito' => $detCarritos->id_carrito, 'id_producto' => $detCarritos->id_producto]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button class="increase-btn" name="action" value="increase">+</button>
                            </form>
                            <form action="{{ route('carrito.destroy', ['id_carrito' => $detCarritos->id_carrito, 'id_producto' => $detCarritos->id_producto]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fas fa-trash-alt delete-icon"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="text-align: center; margin-top: 20px;">
            <button class="pago"><a href="{{ route('carrito.pago' )}}">Pagar</a></button>
        </div>
    </div>
@endsection
