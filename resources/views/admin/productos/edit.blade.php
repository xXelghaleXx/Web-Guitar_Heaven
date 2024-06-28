@extends('layout.main')
@section('title', "Editar Producto - $producto->detalles")
@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <h1>Editar Producto</h1>

    <form action="{{ route('productos.update', ['id' => $producto->id_producto]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="izquierda">
            <img class="imagen" src="{{ asset('imagenes/gbsg.jpg') }}" alt="Guitarra Godin-MULTIAC ACS SLIM">
            <input type="file" name="imagen" accept="image/*"> {{-- Campo para subir nueva imagen --}}
        </div>

        <div class="texto">
            <div class="info">
                <label for="detalles">Detalles:</label>
                <input type="text" id="detalles" name="detalles" value="{{ $producto->detalles }}" required><br>

                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca" value="{{ $producto->marca }}" required><br>

                <label for="stock">Stock:</label>
                <input type="number" id="stock" name="stock" value="{{ $producto->stock }}" required><br>

                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio" value="{{ $producto->precio }}" required><br>
            </div>

            <div class="descripcion">
                <h2>DESCRIPCIÓN</h2>
                <label for="madera">Madera:</label>
                <input type="text" id="madera" name="madera" value="{{ $producto->madera }}"><br>

                <label for="cuello">Cuello:</label>
                <input type="text" id="cuello" name="cuello" value="{{ $producto->cuello }}"><br>

                <label for="diapason">Diapasón:</label>
                <input type="text" id="diapason" name="diapason" value="{{ $producto->diapason }}"><br>

                <label for="radio_diapason">Radio del diapasón:</label>
                <input type="text" id="radio_diapason" name="radio_diapason" value="{{ $producto->radio_diapason }}"><br>

                <label for="longitud_escala">Longitud de la escala:</label>
                <input type="text" id="longitud_escala" name="longitud_escala" value="{{ $producto->longitud_escala }}"><br>

                <label for="trastes">Trastes:</label>
                <input type="text" id="trastes" name="trastes" value="{{ $producto->trastes }}"><br>

                <label for="pastilla">Pastilla:</label>
                <input type="text" id="pastilla" name="pastilla" value="{{ $producto->pastilla }}"><br>

                <label for="extra">Extra:</label>
                <input type="text" id="extra" name="extra" value="{{ $producto->extra }}"><br>
            </div>
        </div>

        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('productos.list') }}">Volver a la Lista</a>
</div>

@endsection
