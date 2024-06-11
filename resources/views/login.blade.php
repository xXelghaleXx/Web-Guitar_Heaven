@extends('layout.main')
@section('title', 'login')
@section('content')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<body.login>

    <div class="login-container">
        <div class="row">
            <div class="col-md-6 login-logo">
                <img src="{{asset('imagenes/Logo-login.jpg')}}" alt="Guitar Heaven Logo">
            </div>
            <div class="col-md-6 login-form">
                <div class="login-header">
                    <h2>Login</h2>
                </div>
                <div class="google-login">
                    <img src="https://image.similarpng.com/very-thumbnail/2020/06/Logo-google-icon-PNG.png" alt="Google Icon" width="20">
                    <button>Inicia sesión con Google</button>
                </div>
                <form>
                    <div class="form-group">
                        <label for="username">Usuario</label>
                        <input type="text" class="form-control" id="username" placeholder="Ingresa tu usuario/correo">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-block">Login</button>
                        <a href="#">Olvidé mi contraseña</a>
                    </div>
                </form>
                <div class="register">
                    <p>¿No tienes cuenta? <a href="{{route('register')}}">Regístrate</a></p>
                </div>
            </div>
        </div>
    </div>

</body.login>
</html>

@endsection
