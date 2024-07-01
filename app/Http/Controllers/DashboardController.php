<?php

namespace App\Http\Controllers;

use App\Models\DetVenta;
use App\Models\Pedido;
use App\Models\User;
use App\Models\Venta;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ventas = Venta::count();

        $inicioMes = Carbon::now()->startOfMonth();
        $finalMes = Carbon::now()->endOfMonth();
        $ventasMensuales = Venta::whereBetween('fecha_venta', [$inicioMes, $finalMes])->count();
        $pedidos = Pedido::count();
        $pedidosPendientes = Pedido::where('estado', 'pendiente')->count();
        $ingresosString = DetVenta::sum('total');
        $ingresos = floatval($ingresosString);
        $usuarios = User::count();
        $usuariosSinDireccion = User::whereNull('direccion')->count();

        // Datos de ventas mensuales para el gráfico
        $ventasEnero = Venta::whereMonth('fecha_venta', 1)->count();
        $ventasFebrero = Venta::whereMonth('fecha_venta', 2)->count();
        $ventasMarzo = Venta::whereMonth('fecha_venta', 3)->count();
        $ventasAbril = Venta::whereMonth('fecha_venta', 4)->count();
        $ventasMayo = Venta::whereMonth('fecha_venta', 5)->count();
        $ventasJunio = Venta::whereMonth('fecha_venta', 6)->count();

        return view('admin.dashboard.index', compact(
            'ventas',
            'ventasMensuales',
            'pedidos',
            'pedidosPendientes',
            'ingresos',
            'usuarios',
            'usuariosSinDireccion',
            'ventasEnero',
            'ventasFebrero',
            'ventasMarzo',
            'ventasAbril',
            'ventasMayo',
            'ventasJunio'
        ));
    }
}
