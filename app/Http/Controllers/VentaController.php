<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    public function add(Request $request)
    {
        $userId = auth()->id();
        $metodoPago = $request->paymentMethod;

        DB::select('CALL crear_venta(?, ?, @p_id_venta)', array($userId, $metodoPago));
        $id_venta  = DB::select('SELECT @p_id_venta as p_id_venta')[0]->p_id_venta;
        DB::select('CALL vaciar_carrito(?)', array($userId));

        Pedido::create([
            'id_venta' => $id_venta,
            'id_usuario' => $userId,
            'destinatario' => $request->nombre,
            'telefono_destinatario' => $request->telefono,
            'direccion_envio' => $request->direccion,
        ]);

        return redirect()->route('usuarios.pedidos');
    }

    public function list()
    {
        $ventas = Venta::all();
        return view('admin.ventas.index', compact('ventas'));
    }
}
