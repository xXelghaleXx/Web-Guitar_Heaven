
    <center>
    <h1>Crear Nuevo Producto</h1>

    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Sección de Detalles -->
        <h2>Detalles del Producto</h2>
        <label for="detalles">Detalles:</label><br>
        <input type="text" id="detalles" name="detalles" required><br>

        <label for="marca">Marca:</label><br>
        <input type="text" id="marca" name="marca" required><br>

        <label for="stock">Stock:</label><br>
        <input type="number" id="stock" name="stock" required><br>

        <label for="precio">Precio:</label><br>
        <input type="text" id="precio" name="precio" required><br>

        <!-- Sección de Descripción -->
        <h2>Descripción del Producto</h2>
        <label for="imagen">Imagen:</label><br>
        <input type="file" id="imagen" name="imagen" accept="image/*"><br>

        <label for="madera">Madera:</label><br>
        <input type="text" id="madera" name="madera"><br>

        <label for="cuello">Cuello:</label><br>
        <input type="text" id="cuello" name="cuello"><br>

        <label for="diapason">Diapasón:</label><br>
        <input type="text" id="diapason" name="diapason"><br>

        <label for="radio_diapason">Radio del diapasón:</label><br>
        <input type="text" id="radio_diapason" name="radio_diapason"><br>

        <label for="longitud_escala">Longitud de la escala:</label><br>
        <input type="text" id="longitud_escala" name="longitud_escala"><br>

        <label for="trastes">Trastes:</label><br>
        <input type="text" id="trastes" name="trastes"><br>

        <label for="pastilla">Pastilla:</label><br>
        <input type="text" id="pastilla" name="pastilla"><br>

        <label for="extra">Extra:</label><br>
        <input type="text" id="extra" name="extra"><br><br>

        <button type="submit">Crear</button>
    </form>

    <a href="{{ route('productos.list') }}">Volver a la Lista</a>
    <center>
