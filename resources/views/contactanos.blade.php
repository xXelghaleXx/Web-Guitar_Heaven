@extends('layout.main')
@section('tittle', 'contactanos')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body.contactanos>

    <div class="contact-container">
        <div class="row">
            <div class="col-md-6 contact-logo">
                <img src="https://previews.123rf.com/images/floartz/floartz2310/floartz231000619/215290505-fondo-abstracto-de-varios-fondos-de-pantalla-de-m%C3%BAsica-de-guitarras.jpg" alt="Fondo guitarra">
            </div>
            <div class="col-md-6 contact-form">
                <div class="contact-header">
                    <h2>CONTÁCTANOS</h2>
                    <p>Si tienes alguna duda, comentario o sugerencia, puedes contactarnos y nos comunicaremos contigo lo antes posible.</p>
                </div>
                <form>
                    <div class="form-group">
                        <label for="name">Nombre completo</label>
                        <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingresa tu email">
                    </div>
                    <div class="form-group">
                        <label for="contact-area">Deseo contactar con el área de </label>
                        <select class="form-control" id="contact-area">
                            <option value="" selected>-- Selecciona una opción --</option>
                            <option value="ventas">Ventas</option>
                            <option value="soporte">Soporte</option>
                            <option value="general">Información General</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comments">Comentarios</label>
                        <textarea class="form-control" id="comments" rows="5" placeholder="Escribe tus comentarios aquí"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="privacy-policy">
                        <label class="form-check-label" for="privacy-policy">He leído y acepto la <a href="#">política de privacidad</a></label>
                    </div>
                    <button type="submit" class="btn btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body.contactanos>
</html>

@endsection
