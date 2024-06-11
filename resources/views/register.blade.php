@extends('layout.main')
@section('title', 'register')
@section('content')


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<body.register>

    <div class="register-container">
        <div class="row">
            <div class="col-md-6 register-logo">
                <img src="{{asset('imagenes/Logo-login.jpg')}}" alt="Guitar Heaven Logo">
            </div>
            <div class="col-md-6 register-form">
                <div class="register-header">
                    <h2>Regístrate</h2>
                </div>
                <form>
                    <div class="form-group">
                        <label for="username">Usuario</label>
                        <input type="text" class="form-control" id="username" placeholder="Ingresa tu usuario">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="confirm-password" placeholder="Confirma tu contraseña">
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-block">Regístrate</button>
                    </div>
                </form>
                <div class="login-link">
                    <p>¿Ya tienes una cuenta? <a href="{{route('login')}}">Inicia sesión</a></p>
                </div>
            </div>
        </div>
    </div>

</body.register>
</html>

@endsection
