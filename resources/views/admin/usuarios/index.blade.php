@extends('layout.main')
@section('content')

<div class="user-list-container">
    <center>
    <h1 class="user-list-title">Lista de Usuarios</h1>
    <br>
    @if ($usuarios->isEmpty())
        <p class="no-users-message">No hay usuarios registrados.</p>
    @else
        <table class="user-table">
            <thead class="user-table-head">
                <tr>
                    <th class="table-header-id">ID</th>
                    <th class="table-header-nombre">Nombre</th>
                    <th class="table-header-apellido">Apellido</th>
                    <th class="table-header-email">Email</th>
                    <th class="table-header-direccion">Dirección</th>
                    <th class="table-header-telefono">Teléfono</th>
                    <th class="table-header-rol">Rol</th>
                    {{--
                    <th class="table-header-acciones">Acciones</th>
                    --}}
                </tr>
            </thead>
            <tbody class="user-table-body">
                @foreach ($usuarios as $usuario)
                    <tr class="user-table-row">
                        <td class="table-cell-id">{{ $usuario->id }}</td>
                        <td class="table-cell-nombre">{{ $usuario->nombre }}</td>
                        <td class="table-cell-apellido">{{ $usuario->apellido }}</td>
                        <td class="table-cell-email">{{ $usuario->email }}</td>
                        <td class="table-cell-direccion">{{ $usuario->direccion ?? '-' }}</td>
                        <td class="table-cell-telefono">{{ $usuario->telefono ?? '-' }}</td>
                        <td class="table-cell-rol">{{ $usuario->rol }}</td>

                        {{--
                        <td class="table-cell-acciones">
                            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn-editar">Editar</a>
                            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-eliminar">Eliminar</button>
                            </form>
                        </td>
                        --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    </center>
</div>

@endsection
