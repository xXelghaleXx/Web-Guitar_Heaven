<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\DetCarrito;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    public function index(){

        $userId = Auth::id();

        if (!$userId){
            return redirect('login');
        }


        $carrito = Carrito::where('id_usuario', $userId)->first();

        // Si no hay carrito crear uno

        if (!$carrito) {
            $carrito = new Carrito();
            $carrito->id_usuario = $userId;
            $carrito->save();
        }

        $detCarritos = $carrito->det_carritos;
        return view('carrito.index', compact('detCarritos'));
    }


    public function add($productoId)
    {
        $producto = Producto::find($productoId);

        $userId = Auth::id();

        if (!$userId){
            return redirect('login');
        }

        if (!$producto) {
            return back()->with('error', 'Producto no encontrado.');
        }

        $userId = Auth::id();

        $carrito = Carrito::where('id_usuario', $userId)->first();

        if (!$carrito) {
            $carrito = new Carrito();
            $carrito->id_usuario = $userId;
            $carrito->save();
        }

        $detalle = DetCarrito::where('id_carrito', $carrito->id_carrito)
                        ->where('id_producto', $productoId)
                        ->first();

        if($detalle){
            DetCarrito::where('id_carrito', $carrito->id_carrito)
                      ->where('id_producto', $productoId)
                      ->update([
                        'cantidad' => $detalle->cantidad + 1,
                        'total' => $detalle->producto->precio * ($detalle->cantidad + 1),
                      ]);
            return redirect()->route('carrito.index');
        }

        $detalle = new DetCarrito();
        $detalle->id_carrito = $carrito->id_carrito;
        $detalle->id_producto = $producto->id_producto;
        $detalle->cantidad = 1;
        $detalle->total = $producto->precio * 1;
        $detalle->save();

        return redirect()->route('carrito.index');
    }


    public function update(Request $request, $id_carrito, $id_producto)
    {
        $detalle = DetCarrito::where('id_carrito', $id_carrito)
                             ->where('id_producto', $id_producto)
                             ->firstOrFail();

        if ($request->input('action') === 'increase')
        {
            DetCarrito::where('id_carrito', $id_carrito)
                      ->where('id_producto', $id_producto)
                      ->update([
                        'cantidad' => $detalle->cantidad + 1,
                        'total' => $detalle->producto->precio * ($detalle->cantidad + 1),
                      ]);
        }
        elseif ($request->input('action') === 'decrease')
        {
            if ($detalle->cantidad > 1)
            {
                DetCarrito::where('id_carrito', $id_carrito)
                      ->where('id_producto', $id_producto)
                      ->update([
                        'cantidad' => $detalle->cantidad - 1,
                        'total' => $detalle->producto->precio * ($detalle->cantidad - 1),
                      ]);
            }
             else
            {
                DetCarrito::where('id_carrito', $id_carrito)
                          ->where('id_producto', $id_producto)
                          ->delete();
            }
        }

        return redirect()->route('carrito.index')->with('success', 'Cantidad actualizada correctamente');
    }


    public function destroy(Request $request, $id_carrito, $id_producto)
    {
        DetCarrito::where('id_carrito', $id_carrito)
                  ->where('id_producto', $id_producto)
                  ->delete();

        return redirect()->route('carrito.index')->with('success', 'Producto eliminado del carrito');
    }


    public function pay()
    {
        if(auth()->user()->apellido == Null){
            return redirect()->route('usuarios.edit');
        }
        $userId = auth()->id();
        $detalle = DB::select('CALL sp_mostrar_pago_carrito(?)', array($userId));
        return view('carrito.pago', compact('detalle'));
    }
}
