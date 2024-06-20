<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\DetCarrito;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{

    public function index()
    {
        $userId = Auth::id();

        if (!$userId) {
            return redirect('login');
        }

        $userId = Auth()->id();
        $carrito = Carrito::where('id_usuario', $userId)->first();
        $detCarritos = $carrito->det_carritos;

        if (!$detCarritos)
        {
            return view('carrito');
        }

        return view('carrito', compact('detCarritos'));
    }

    public function add($productoId)
    {
        $userId = Auth::id();

        if (!$userId) {
            return redirect('login');
        }

        $producto = Producto::find($productoId);

        if (!$producto) {
            return back()->with('error', 'Producto no encontrado.');
        }

        $carrito = Carrito::where('id_usuario', $userId)->first();

        if (!$carrito) {
            $carrito = new Carrito();
            $carrito->id_usuario = $userId;
            $carrito->save();
        }

        $detalle = new DetCarrito();
        $detalle->id_carrito = $carrito->id_carrito;
        $detalle->id_producto = $producto->id_producto;
        $detalle->cantidad = 1;
        $detalle->total = $producto->precio * 1;
        $detalle->save();

        return redirect()->back();
    }
}
