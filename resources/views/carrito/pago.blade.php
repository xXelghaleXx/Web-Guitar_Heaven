@extends('layout.main')
@extends('layout.video-brack')

@section('title', 'Pago')

@section('content')
<form class="page-content" method="POST">
    @csrf
    <div class="checkout-container">
        <div class="checkout-form">
            <h2 class="form-title">Ingrese una direccion de envio</h2>
            <div class="form-group">
                <label for="name" class="form-label">Nombre completo</label>
                <input type="text" id="name" name="nombre" class="form-input" value="{{ $detalle[0]->nombre }} {{ $detalle[0]->apellido }}">
            </div>
            <div class="form-group">
                <label for="phone" class="form-label">Numero de Telefono</label>
                <input type="tel" id="phone" name="telefono" class="form-input" value="{{ $detalle[0]->telefono }}">
            </div>
            <div class="form-group">
                <label for="address" class="form-label">Direccion</label>
                <input type="text" id="address" name="direccion" class="form-input" value="{{ $detalle[0]->direccion }}">
            </div>
        </div>

        <div class="order-summary">
            <h2 class="summary-title">Resumen de la orden</h2>
            <p class="summary-item">Productos: {{ $detalle[0]->articulos}}</p>
            <p class="summary-item">Total before tax: --</p>
            <p class="summary-item">Estimated tax to be collected: --</p>
            <p class="summary-total">Order total: <span class="total-amount">S/ {{$detalle[0]->importe}}</span></p>
            <button type="button" class="open-modal-btn">Metodo de Pago</button>
        </div>
    </div>

    <div id="paymentModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <h2>Confirme su pago para terminar</h2>

        {{--
        <div class="payment-details">
            <div class="user-info">
                <p><strong>{{ $detalle->nombre ?? 'Nombre' }} {{ $detalle->apellido ?? 'Apellido' }}</strong></p>
                <a href="#">Cerrar sesión</a>
            </div>
        </div>
        --}}


        <div class="payment-form">
            <div class="form-group">
                <label for="paymentMethod" class="form-label">Método de pago</label><br>
                <div id="paymentMethod" class="form-input">
                    <label>
                        <br>
                        <input type="radio" name="paymentMethod" value="tarjeta_credito"> Tarjeta de crédito
                        <br>
                    </label><br>
                    <label>
                        <br>
                        <input type="radio" name="paymentMethod" value="tarjeta_debito"> Tarjeta de débito
                        <br>
                    </label><br>
                    <label>
                        <br>
                        <input type="radio" name="paymentMethod" value="paypal"> PayPal
                        <br>
                    </label>
                </div>
            </div>
        </div>
        <div class="order-summary-modal">
            <h2>Detalles de tu compra</h2>
            <p>Productos: {{ $detalle[0]->articulos }}</p>
            <p>Pagas: ${{ $detalle[0]->importe }}</p>
            <button class="pay-button" type="submit">Pagar</button>
        </div>
    </div>
    </div>
</form>
@endsection
