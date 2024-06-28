<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function show($marca)
    {
        $productos = Producto::where('marca', $marca)->get();
        return view('productos.marcas.show', compact('productos'));
    }
}
