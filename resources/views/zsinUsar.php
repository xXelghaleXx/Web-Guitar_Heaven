@extends('layout.main')
@section('tittle', 'marcas')
@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class="izquierda">
        <img class="imagen" src="{{ asset('imagenes/gbsg.jpg') }}" alt="Guitarra Godin-MULTIAC ACS SLIM">
        <div class="button-container">
            <button><a href="#">Añadir al carrito</a></button>
        </div>
    </div>

    <div class="texto">
        <div class="info">
            <h1>Guitarra Godin-MULTIAC ACS SLIM</h1>
            <h2>Godin</h2>
            <h3>Precio: S/.8,199.00</h3>
        </div>
        <div class="descripcion">
            <h2>DESCRIPCIÓN</h2>
            <table class="tabla">
                <tr>
                    <td>Cuerpo</td>
                    <td>Arce hoja de plata con alas de tilo laurentino canadiense</td>
                </tr>
                <tr>
                    <td>Parte superior</td>
                    <td>Tapa de cedro macizo</td>
                </tr>
                <tr>
                    <td>Cuello</td>
                    <td>Caoba</td>
                </tr>
                <tr>
                    <td>Diapasón</td>
                    <td>Richlite</td>
                </tr>
                <tr>
                    <td>Radio del diapasón</td>
                    <td>16" (406,4 mm)</td>
                </tr>
                <tr>
                    <td>Longitud de la escala</td>
                    <td>25,5" (647,7 mm)</td>
                </tr>
                <tr>
                    <td>Ancho de la tuerca</td>
                    <td>1,7" (43,18 mm)</td>
                </tr>
                <tr>
                    <td>Tipo de tuerca</td>
                    <td>Graphtech</td>
                </tr>
                <tr>
                    <td>Trastes</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td>Relación de la cabeza de la máquina</td>
                    <td>16:1</td>
                </tr>
                <tr>
                    <td>Incluye</td>
                    <td>Funda</td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection
