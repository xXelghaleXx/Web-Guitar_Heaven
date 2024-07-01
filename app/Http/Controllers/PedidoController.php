<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Venta;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function show()
    {
        $userId = auth()->id();
        $pedidos = Pedido::where('id_usuario', $userId)->get();
        return view('usuario.pedidos', compact('pedidos'));
    }

    public function detPedido($id)
    {
        $venta = Venta::find($id);
        $detVentas = $venta->det_ventas;
        return view('usuario.det_pedidos', compact('detVentas'));
    }

    public function list()
    {
        $pedidos = Pedido::all();
        return view('admin.pedidos.index', compact('pedidos'));
    }
}
