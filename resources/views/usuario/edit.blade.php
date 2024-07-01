@extends('layout.main')
@extends('layout.video-brack')
@section('tittle', 'Perfil')
@section('content')
<div class="profile-container">
    <h2 class="profile-title">Editar Perfil</h2>
    <div class="profile-form-container">

        <form class="profile-form" action="{{ route('usuarios.update') }}">
            <div class="form-group">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" id="name" name="nombre" value="{{ $usuario->nombre }}" required class="form-input">
            </div>

            <div class="form-group">
                <label for="name" class="form-label">Apellido</label>
                <input type="text" id="name" name="apellido" value="{{ $usuario->apellido }}" required class="form-input">
            </div>

            <div class="form-group">
                <label for="login" class="form-label">Correo</label>
                <input type="email" id="login" name="email" value="{{ $usuario->email }}" required class="form-input">
            </div>

            <div class="form-group">
                <label for="name" class="form-label">Direccion</label>
                <input type="text" id="name" name="direccion" value="{{ $usuario->direccion }}" required class="form-input">
            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Telefono</label>
                <input type="tel" id="phone" name="telefono" value="{{ $usuario->telefono }}" required class="form-input">
            </div>

            <div class="form-group">
                <button type="submit" class="btn save-btn">Guardar</button>
            </div>
        </form>

    </div>
</div>
@endsection
