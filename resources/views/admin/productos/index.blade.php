@extends('layout.main')
@section('content')

<div class="product-list-container">
    <h1 class="product-list-title">Lista de Productos</h1>
    <a class="create-product-link" href="{{ route('productos.create') }}">Crear Nuevo Producto</a>

    <br>

    @if($productos->isEmpty())
        <p class="no-products-message">No hay productos disponibles.</p>
    @else
    <br>

        <table class="product-table">
            <thead class="product-table-head">
                <tr>
                    <th class="table-header">Detalles</th>
                    <th class="table-header">Marca</th>
                    <th class="table-header">Stock</th>
                    <th class="table-header">Precio</th>
                    <th class="table-header">Acciones</th>
                </tr>
            </thead>
            <tbody class="product-table-body">
                @foreach ($productos as $producto)
                    <tr class="product-table-row">
                        <td class="table-cell">{{ $producto->detalles }}</td>
                        <td class="table-cell">{{ $producto->marca }}</td>
                        <td class="table-cell">{{ $producto->stock }}</td>
                        <td class="table-cell">{{ $producto->precio }}</td>
                        <td class="table-cell actions-cell">
                            <a href="{{ route('productos.show', ['id' => $producto->id_producto ]) }}" class="btn-primario">Ver Detalles</a>
                            <a href="{{ route('productos.edit', $producto->id_producto) }}" class="btn-secundario">Editar</a>
                            <form action="{{ route('productos.destroy', $producto->id_producto) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-eliminar">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
