@extends('layout.main')
@section('content')

<div class="container mt-5">
    <div class="dashboard-title">Inventory Management Dashboard</div>
    <div class="row">
        <div class="col card ventas-totales-card">
            <div class="card-body text-center">
                <h5 class="card-title">Ventas Totales</h5>
                <p class="card-text ventas-totales">{{ $ventas }}</p>
            </div>
        </div>
        <div class="col card ventas-mensuales-card">
            <div class="card-body text-center">
                <h5 class="card-title">Ventas del Mes</h5>
                <p class="card-text ventas-mensuales">{{ $ventasMensuales }}</p>
            </div>
        </div>
        <div class="col card pedidos-totales-card">
            <div class="card-body text-center">
                <h5 class="card-title">Pedidos Totales</h5>
                <p class="card-text pedidos-totales">{{ $pedidos }}</p>
            </div>
        </div>
        <div class="col card pedidos-pendientes-card">
            <div class="card-body text-center">
                <h5 class="card-title">Pedidos Pendientes</h5>
                <p class="card-text pedidos-pendientes">{{ $pedidosPendientes }}</p>
            </div>
        </div>
        <div class="col card usuarios-registrados-card">
            <div class="card-body text-center">
                <h5 class="card-title">Usuarios Registrados</h5>
                <p class="card-text usuarios-registrados">{{ $usuarios }}</p>
            </div>
        </div>
        <div class="col card usuarios-sin-direccion-card">
            <div class="card-body text-center">
                <h5 class="card-title">Usuarios Sin Dirección Asignada</h5>
                <p class="card-text usuarios-sin-direccion">{{ $usuariosSinDireccion }}</p>
            </div>
        </div>
        <div class="col card chart-card">
            <div class="card-body">
                <h5 class="card-title">Gráfico de Ventas Mensuales</h5>
                <canvas id="ventasMensualesCanvas" width="400" height="200"></canvas>
            </div>
        </div>
        <div class="col card ingresos-totales-card">
            <div class="card-body text-center">
                <h5 class="card-title">Ingresos Totales</h5>
                <p class="card-text ingresos-totales">S/ {{ $ingresos }}</p>
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
