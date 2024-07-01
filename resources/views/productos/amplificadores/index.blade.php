@extends('layout.main')
@section('title', 'Amplificadores')
@section('content')

<div class="cuerpoo1">

    <div class="contenedor-amplificador">
        <div class="card-amplificador">
            <h1>Gran variedad de amplificadores</h1>
            <img src="https://marinimport.com.pe/wp-content/uploads/2017/12/gggggggggggggg.jpg" alt="Amplificador Marshall">
            <h1>MARSHALL</h1>
            <p>Operan utilizando transistores y circuitos de estado sólido en lugar de válvulas electrónicas</p>
        </div>
        <div class="card-amplificador">
            <h1>Gran variedad de amplificadores</h1>
            <img src="https://i.pinimg.com/736x/e7/84/14/e78414e7cb4e9a0057363618904532f8.jpg" alt="Amplificador Marshall">
            <h1>FENDER</h1>
            <p>Es conocido por su sonido limpio y cálido, versatilidad en tonos, y su construcción robusta. </p>
        </div>
        <div class="card-amplificador">
            <h1>Gran variedad de amplificadores</h1>
            <img src="https://i.pinimg.com/564x/d6/41/01/d641018789d64a07503671fec989e6df.jpg" alt="Amplificador Marshall">
            <h1>ORANGE</h1>
            <p>Son reconocidos por su distintivo sonido británico, con tonos cálidos y saturados, y una poderosa distorsión.</p>
        </div>
    </div>
    <a href="{{ route('amplificadores.all') }}">
        <button class="btn-ver-todos">Ver Todos los Amplificadores</button>
    </a>
</div>

@endsection
