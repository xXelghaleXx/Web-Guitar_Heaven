@extends('layout.main')
@extends('layout.video-brack')
@section('tittle', 'pedidos')
@section('content')
<div class="pedido-container">
    <div class="pedido-content">
        <center>
        <h2 class="pedido-title">Mis Pedidos</h2>
        <table class="pedido-table">
            <thead>
                <tr>
                    <th class="pedido-header">Destinatario</th>
                    <th class="pedido-header">Dirección</th>
                    <th class="pedido-header">Teléfono</th>
                    <th class="pedido-header">Fecha de Entrega</th>
                    <th class="pedido-header">Estado</th>
                    <th class="pedido-header">Productos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                <tr>
                    <td class="pedido-cell">{{ $pedido->destinatario }}</td>
                    <td class="pedido-cell">{{ $pedido->direccion_envio }}</td>
                    <td class="pedido-cell">{{ $pedido->telefono_destinatario }}</td>
                    <td class="pedido-cell">{{ $pedido->fecha_entrega }}</td>
                    <td class="pedido-cell">{{ $pedido->estado }}</td>
                    <td class="pedido-cell"><a href="{{ route('usuarios.det_pedidos', ['id' => $pedido->id_venta]) }}" class="pedido-link">Detalles del Pedido {{ $pedido->id_venta }}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pedido-button-container">
            <a href="{{ route('usuarios.profile') }}" class="pedido-button">Volver al Perfil</a>
        </div>
        </center>
    </div>
</div>
@endsection
