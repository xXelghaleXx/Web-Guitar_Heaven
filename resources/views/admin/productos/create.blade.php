@extends('layout.main')
@section('title', 'AdminMenu-create')
@section('content')

<div class="create-product-container">
    <h1 class="create-product-title">Crear Nuevo Producto</h1>

    <form class="create-product-form" action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Sección de Detalles -->
        <h2 class="section-title">Detalles del Producto</h2>
        <div class="form-group">
            <label for="detalles">Detalles:</label>
            <input class="input-field" type="text" id="detalles" name="detalles" required>
        </div>

        <div class="form-group">
            <label for="marca">Marca:</label>
            <input class="input-field" type="text" id="marca" name="marca" required>
        </div>

        <div class="form-group">
            <label for="stock">Stock:</label>
            <input class="input-field" type="number" id="stock" name="stock" required>
        </div>

        <div class="form-group">
            <label for="precio">Precio:</label>
            <input class="input-field" type="text" id="precio" name="precio" required>
        </div>

        <!-- Sección de Descripción -->
        <h2 class="section-title">Descripción del Producto</h2>
        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input class="input-field" type="file" id="imagen" name="imagen" accept="image/*">
        </div>

        <div class="form-group">
            <label for="madera">Madera:</label>
            <input class="input-field" type="text" id="madera" name="madera">
        </div>

        <div class="form-group">
            <label for="cuello">Cuello:</label>
            <input class="input-field" type="text" id="cuello" name="cuello">
        </div>

        <div class="form-group">
            <label for="diapason">Diapasón:</label>
            <input class="input-field" type="text" id="diapason" name="diapason">
        </div>

        <div class="form-group">
            <label for="radio_diapason">Radio del diapasón:</label>
            <input class="input-field" type="text" id="radio_diapason" name="radio_diapason">
        </div>

        <div class="form-group">
            <label for="longitud_escala">Longitud de la escala:</label>
            <input class="input-field" type="text" id="longitud_escala" name="longitud_escala">
        </div>

        <div class="form-group">
            <label for="trastes">Trastes:</label>
            <input class="input-field" type="text" id="trastes" name="trastes">
        </div>

        <div class="form-group">
            <label for="pastilla">Pastilla:</label>
            <input class="input-field" type="text" id="pastilla" name="pastilla">
        </div>

        <div class="form-group">
            <label for="extra">Extra:</label>
            <input class="input-field" type="text" id="extra" name="extra">
        </div>

        <button class="submit-button" type="submit">Crear</button>
        <a class="back-link" href="{{ route('productos.list') }}">Volver a la Lista</a>
    </form>
</div>
@endsection
