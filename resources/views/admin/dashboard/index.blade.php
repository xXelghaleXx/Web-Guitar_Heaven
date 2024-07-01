@extends('layout.main')
@extends('layout.video-brack')
@section('content')

<div class="container-12">
    <div class="dashboard-title-12">Inventory Management Dashboard</div>
    <div class="card-container-12">
        <div class="card-12 dashboard-card-12">
            <div class="card-content-12">
                <h5 class="card-title-12">Ventas Totales</h5>
                <p class="card-text-12 ventas-totales">{{ $ventas }}</p>
            </div>
        </div>
        <div class="card-12 dashboard-card-12">
            <div class="card-content-12">
                <h5 class="card-title-12">Ventas del Mes</h5>
                <p class="card-text-12 ventas-mensuales">{{ $ventasMensuales }}</p>
            </div>
        </div>
        <div class="card-12 dashboard-card-12">
            <div class="card-content-12">
                <h5 class="card-title-12">Pedidos Totales</h5>
                <p class="card-text-12 pedidos-totales">{{ $pedidos }}</p>
            </div>
        </div>
        <div class="card-12 dashboard-card-12">
            <div class="card-content-12">
                <h5 class="card-title-12">Pedidos Pendientes</h5>
                <p class="card-text-12 pedidos-pendientes">{{ $pedidosPendientes }}</p>
            </div>
        </div>
        <div class="card-12 dashboard-card-12">
            <div class="card-content-12">
                <h5 class="card-title-12">Usuarios Registrados</h5>
                <p class="card-text-12 usuarios-registrados">{{ $usuarios }}</p>
            </div>
        </div>
        <div class="card-12 dashboard-card-12">
            <div class="card-content-12">
                <h5 class="card-title-12">Usuarios Sin Dirección Asignada</h5>
                <p class="card-text-12 usuarios-sin-direccion">{{ $usuariosSinDireccion }}</p>
            </div>
        </div>
        <div class="card-12 dashboard-card-12">
            <div class="card-content-12">
                <h5 class="card-title-12">Ingresos Totales</h5>
                <p class="card-text-12 ingresos-totales">S/ {{ $ingresos }}</p>
            </div>
        </div>
        <div class="card-12 dashboard-card-12 chart-card-12">
            <div class="card-content-12">
                <h5 class="card-title-12">Gráfico de Ventas Mensuales</h5>
                <canvas id="ventasMensualesCanvas" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Script para inicializar gráficos con JavaScript puro -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var canvas = document.getElementById('ventasMensualesCanvas');
        var ctx = canvas.getContext('2d');
        var ventasMensualesData = [{{ $ventasEnero }}, {{ $ventasFebrero }}, {{ $ventasMarzo }}, {{ $ventasAbril }}, {{ $ventasMayo }}, {{ $ventasJunio }}];
        var labels = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];

        var maxVentas = Math.max(...ventasMensualesData);
        var canvasHeight = canvas.height;
        var canvasWidth = canvas.width;
        var barWidth = canvasWidth / ventasMensualesData.length;

        ctx.clearRect(0, 0, canvasWidth, canvasHeight);

        for (var i = 0; i < ventasMensualesData.length; i++) {
            var barHeight = (ventasMensualesData[i] / maxVentas) * (canvasHeight - 20);
            ctx.fillStyle = 'rgba(54, 162, 235, 0.6)';
            ctx.fillRect(i * barWidth, canvasHeight - barHeight, barWidth - 10, barHeight);

            ctx.fillStyle = '#000';
            ctx.textAlign = 'center';
            ctx.fillText(labels[i], i * barWidth + (barWidth - 10) / 2, canvasHeight - 5);
            ctx.fillText(ventasMensualesData[i], i * barWidth + (barWidth - 10) / 2, canvasHeight - barHeight - 5);
        }
    });
</script>

@endsection
