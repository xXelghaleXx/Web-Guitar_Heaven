<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function index()
    {
        return view('productos.modelos.index');
    }
    public function show($genero)
    {
        $productos = Producto::where('genero', $genero)->paginate(9);
        return view('productos.modelos.show', compact('productos'));
    }
}
