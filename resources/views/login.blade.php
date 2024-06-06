<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .login-container {
            display: flex;
            background-color: white;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            max-width: 800px;
            width: 100%;
        }
        .login-image {
            flex: 1;
            background: url('/mnt/data/IMG-20240605-WA0045.jpg') no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-image img {
            width: 150px;
            height: 150px;
        }
        .login-form {
            flex: 1.5;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .login-form h1 {
            margin-bottom: 20px;
        }
        .login-form .form-group {
            margin-bottom: 15px;
        }
        .login-form .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .login-form .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .login-form .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .login-form .form-actions button {
            padding: 10px 20px;
        }
        .login-form .form-actions a {
            color: #666;
            text-decoration: none;
        }
        .login-form .google-login {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .login-form .google-login img {
            margin-right: 10px;
        }
        header, footer {
            background-color: #003366;
            color: white;
            padding: 10px 20px;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header nav a, footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        footer {
            text-align: center;
        }
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }
            .login-image {
                display: none;
            }
        }
    </style>
</head>
<body>
    @include('layout.header')
    <div class="content">
        <div class="login-container">
            <div class="login-image">
                <img src="https://pin.it/5GzUrHN6l" alt="a">
            </div>
            <div class="login-form">
                <h1>Login</h1>
                <div class="google-login">
                    <img src="https://image.similarpng.com/very-thumbnail/2020/06/Logo-google-icon-PNG.png" alt="Google Icon" width="20">
                    <button>Login with Google</button>
                </div>
                <form>
                    <div class="form-group">
                        <label for="username">USERNAME</label>
                        <input type="text" id="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" id="password" placeholder="Enter your password">
                    </div>
                    <div class="form-actions">
                        <button type="submit">LOGIN</button>
                        <a href="#">I forgot my password</a>
                    </div>
                </form>
                <div class="register">
                    <p>¿No tienes cuenta? <a href="#">Regístrate</a></p>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
</body>
</html>
