@extends('layout.main')
@section('content')

    <center>
    <h1>Lista de Productos</h1>
    <a href="{{ route('productos.create') }}">Crear Nuevo Producto</a>

    <br>

    @if($productos->isEmpty())
        <p>No hay productos disponibles.</p>
    @else
    <br>

        <table>
            <thead>
                <tr>
                    <th>Detalles</th>
                    <th>Marca</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->detalles }}</td>
                        <td>{{ $producto->marca }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>
                            <a href="{{ route('productos.show', ['id' => $producto->id_producto ]) }}" class="btn-primario">Ver Detalles</a>
                            <a href="{{ route('productos.edit', $producto->id_producto) }}">Editar</a>
                            <form action="{{ route('productos.destroy', $producto->id_producto) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    </center>
@endsection
