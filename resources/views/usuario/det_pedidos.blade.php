@extends('layout.main')
@extends('layout.video-brack')
@section('tittle', 'detpedidos')
@section('content')
<div class="pedido-detalles-container">
    <div class="pedido-detalles-content">
        <center>
        <h2 class="pedido-detalles-title">Detalles del Pedido</h2>
        <table class="pedido-detalles-table">
            <thead>
                <tr>
                    <th class="pedido-detalles-header">COD-PRODUCTO</th>
                    <th class="pedido-detalles-header">Producto</th>
                    <th class="pedido-detalles-header">Cantidad</th>
                    <th class="pedido-detalles-header">Total</th>
                    <th class="pedido-detalles-header">Extra</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detVentas as $detVenta)
                <tr>
                    <td class="pedido-detalles-cell">{{ $detVenta->id_producto }}</td>
                    <td class="pedido-detalles-cell">{{ $detVenta->producto->detalles }}</td>
                    <td class="pedido-detalles-cell">{{ $detVenta->cantidad }}</td>
                    <td class="pedido-detalles-cell">{{ $detVenta->total }}</td>
                    <td class="pedido-detalles-cell"><a href="{{ route('productos.show', ['id' => $detVenta->producto->id_producto]) }}" class="pedido-detalles-link">Ver Producto</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pedido-detalles-button-container">
            <a href="{{ route('usuarios.pedidos') }}" class="pedido-detalles-button">Volver a los Pedidos</a>
        </div>
        </center>
    </div>
</div>
@endsection
