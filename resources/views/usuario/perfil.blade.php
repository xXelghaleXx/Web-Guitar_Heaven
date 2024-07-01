@extends('layout.main')
@extends('layout.video-brack')
@section('tittle', 'Perfil')
@section('content')
<div class="profile-container">
    <h2 class="profile-title">Mi Perfil</h2>
    <div class="profile-form-container">
        <div class="profile-form">
            <div class="form-group">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" id="name" name="name" value="{{ $usuario->nombre }}" required class="form-input" disabled>
            </div>

            <div class="form-group">
                <label for="name" class="form-label">Apellido</label>
                <input type="text" id="name" name="name" value="{{ $usuario->apellido }}" required class="form-input" disabled>
            </div>

            <div class="form-group">
                <label for="login" class="form-label">Correo</label>
                <input type="email" id="login" name="login" value="{{$usuario->email}}" required class="form-input" disabled>
            </div>

            <div class="form-group">
                <label for="name" class="form-label">Direccion</label>
                <input type="text" id="name" name="name" value="{{$usuario->direccion}}" required class="form-input" disabled>
            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Telefono</label>
                <input type="tel" id="phone" name="phone" value="{{$usuario->telefono}}" class="form-input" disabled>
            </div>

            <form action = "{{ route('usuarios.edit') }}">
                <div class="form-group">
                    <button type="submit" class="btn change-password-btn">Editar Perfil</button>
                </div>
            </form>
            <form action = "{{ route('usuarios.pedidos') }}">
                <div class="form-group">
                    <button type="submit" class="btn save-btn">Ver Pedidos</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
