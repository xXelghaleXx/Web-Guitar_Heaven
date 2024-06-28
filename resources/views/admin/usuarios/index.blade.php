@extends('layout.main')
@section('content')
<center>
    <h1>Lista de Usuarios</h1>
    <br>
    @if ($usuarios->isEmpty())
        <p>No hay usuarios registrados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Rol</th>
                    {{--
                    <th>Acciones</th>
                    --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->apellido }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->direccion ?? '-' }}</td>
                        <td>{{ $usuario->telefono ?? '-' }}</td>
                        <td>{{ $usuario->rol }}</td>

                        {{--
                        <td>
                            <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                        --}}

                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</center>

@endsection
