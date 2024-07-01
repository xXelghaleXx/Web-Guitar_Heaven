@extends('layout.main')
@extends('layout.video-brack')
@section('title', 'login')
@section('content')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<body class="login">
    <div class="login-container">
        <div class="row">
            <div class="col-md-6 login-logo">
                <img src="{{asset('imagenes/Logo-login.jpg')}}" alt="Guitar Heaven Logo">
            </div>
            <div class="col-md-6 login-form">
                <div class="login-header">
                    <h2>Login</h2>
                </div>
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Correo</label>
                        <input type="text" class="form-control" id="username" placeholder="Ingresa tu usuario/correo" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" name="password">
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-block">Login</button>
                    </div>
                </form>
                <div class="register">
                    <p>¿No tienes cuenta? <a href="{{route('register')}}">Regístrate</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
