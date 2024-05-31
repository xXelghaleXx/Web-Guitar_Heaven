<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Envoy Footer</title>
</head>
<body>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>Guitar Heaven</h3>
                <p>Nosotros creamos posibilidades para conectar con el mundo<br><strong>Sé apasionado</strong></p>
            </div>
            <div class="footer-section">
                <h3>Explora</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Visítanos</h3>
                <p>Av. Wilson, Lima<br>34 Tesla, Ste 100<br>Lima, Ca5</p>
                <h3>New Business</h3>
                <p><a href="mailto:engage@weareenvoy.com">puntosoloro@gmail.com</a><br>974-859-548</p>
            </div>
            <div class="footer-section">
                <h3>Follow</h3>
                <ul>
                    <li><a href="https://www.instagram.com/audiomusicape/?hl=es-la">Instagram</a></li>
                    <li><a href="https://x.com/i/flow/login?redirect_after_login=%2Fdocguitarra">Twitter</a></li>
                    <li><a href="https://www.facebook.com/FabricaDeGuitarrasAndina/">Facebook</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Legal</h3>
                <ul>
                    <li><a href="#">Términos</a></li>
                    <li><a href="#">Privacidad</a></li>
                </ul>
            </div>
            <div class="footer-section next-about">
                <a href="#">Next: About</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 Punto sonoro. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>

<style>
    body {
    margin: 0;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
footer {
    background-color: #000;
    color: #fff;
    padding: 20px 0;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 0 10%;
}

.footer-section {
    flex: 1;
    margin: 10px 0;
    font-size: 15px;
}

.footer-section h3, .footer-section h4 {
    margin: 0;
    font-size: 15px;
}

.footer-section p, .footer-section ul {
    margin: 10px 0;
    line-height: 1.6;
    font-size: 15px;
}

.footer-section ul {
    list-style: none;
    padding: 0;
    font-size: 15px;
}

.footer-section ul li {
    margin: 5px 0;
    font-size: 15px;
}

.footer-section ul li a, .footer-section p a {
    color: #fff;
    text-decoration: none;
    font-size: 15px;
}

.footer-section ul li a:hover, .footer-section p a:hover {
    text-decoration: underline;
    font-size: 15px;
}

.footer-section.next-about a {
    color: #fff;
    text-decoration: none;
    font-size: 1.2em;
    font-size: 15px;
}

.footer-bottom {
    text-align: center;
    padding: 10px 0;
    border-top: 1px solid #444;
    font-size: 15px;
}

</style>
