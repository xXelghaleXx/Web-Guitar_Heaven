@extends('layout.main')
@section('title', 'Sobre Nosotros')
@section('content')
<div class="about-container-sobrenosotros">
    <div class="about-header-sobrenosotros">
        <h1>Sobre Nosotros</h1>
        <p>Somos una empresa dedicada a la venta de guitarras y accesorios musicales de alta calidad.</p>
    </div>
    <div class="about-content-sobrenosotros">
        <div class="about-section-sobrenosotros">
            <h2>Nuestra Historia</h2>
            <div class="about-section-content-sobrenosotros">
                <img src="{{ asset('https://i.pinimg.com/564x/a5/12/3a/a5123a2059794d12450af3c507d4f42a.jpg') }}" alt="Nuestra Historia">
                <p>Desde nuestros humildes comienzos en 2024, hemos crecido hasta convertirnos en una de las tiendas de guitarras más respetadas del país. Nuestra pasión por la música y el compromiso con la calidad nos han llevado a ofrecer una amplia variedad de productos para todos los niveles de músicos.</p>
            </div>
        </div>
        <div class="about-section-sobrenosotros">
            <h2>Visión y Misión</h2>
            <div class="about-section-content-sobrenosotros">
                <img src="{{ asset('https://i.pinimg.com/564x/66/ec/34/66ec34e670cec9a3055f06abb9502210.jpg') }}" alt="Visión y Misión">
                <p>Nuestra misión es proporcionar las mejores guitarras y accesorios musicales a precios accesibles, mientras fomentamos una comunidad de músicos apasionados. Nuestra visión es ser el destino preferido para todos los guitarristas, desde principiantes hasta profesionales.</p>
            </div>
        </div>
        <div class="about-section-sobrenosotros">
            <h2>Nuestro Equipo</h2>
            <div class="about-section-content-sobrenosotros">
                <img src="{{ asset('https://i.pinimg.com/564x/3e/3a/3e/3e3a3e30b20b7a20f030498ece28c5a1.jpg') }}" alt="Nuestro Equipo">
                <p>Contamos con un equipo de expertos apasionados por la música, siempre dispuestos a ayudarte a encontrar el instrumento perfecto. Ya sea que necesites asesoramiento sobre una compra o asistencia técnica, estamos aquí para ayudarte.</p>
            </div>
        </div>
    </div>
</div>
@endsection
