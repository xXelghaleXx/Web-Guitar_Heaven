<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('principal', compact('productos'));
    }

    public function show($id){
        $producto = Producto::find($id);
        return view('producto', compact('producto'));
    }
}
