@extends('layout.main')
@section('tittle', 'login')
@section('content')
    <div class="content">
        <div class="login-container">
            <div class="login-image">
                <img src="{{asset('imagenes/fondo.jpg')}}" alt="guitarras de fondo">
            </div>
            <div class="login-form">
                <h1>Login</h1>
                <div class="google-login">
                    <img src="https://image.similarpng.com/very-thumbnail/2020/06/Logo-google-icon-PNG.png" alt="Google Icon" width="20">
                    <button>Inicia sesion con Google</button>
                </div>
                <form>
                    <div class="form-group">
                        <label for="username">Usuario</label>
                        <input type="text" id="username" placeholder="ingresa tu usuario/correo">
                    </div>
                    <div class="form-group">
                        <label for="password">Contrasena</label>
                        <input type="password" id="password" placeholder="ingresa tu contrasena">
                    </div>
                    <div class="form-actions">
                        <button type="submit">Login</button>
                        <a href="#">Olvide mi contrasena</a>
                    </div>
                </form>
                <div class="register">
                    <p>¿No tienes cuenta? <a href="#">Regístrate</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection
