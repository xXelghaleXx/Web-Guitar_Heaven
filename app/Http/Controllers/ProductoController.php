<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{

    // USER

    public function index()
    {
        $productos = Producto::paginate(9);
        return view('principal', compact('productos'));
    }

    public function show($id){
        $producto = Producto::find($id);
        return view('productos.show', compact('producto'));
    }

    // ADMIN

    public function list()
    {
        $productos = Producto::get();
        return view('admin.productos.index', compact('productos'));
    }

    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('admin.productos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        if (!$producto) {
            abort(404, 'Producto no encontrado');
        }

        $producto->detalles = $request->detalles;
        $producto->marca = $request->marca;
        $producto->stock = $request->stock;
        $producto->precio = $request->precio;
        $producto->madera = $request->madera;
        $producto->cuello = $request->cuello;
        $producto->diapason = $request->diapason;
        $producto->radio_diapason = $request->radio_diapason;
        $producto->longitud_escala = $request->longitud_escala;
        $producto->trastes = $request->trastes;
        $producto->pastilla = $request->pastilla;
        $producto->extra = $request->extra;

        if ($request->hasFile('imagen')) {

            $imagen = $request->file('imagen');
            $nombre_imagen = 'producto' . $id . "." . $imagen->getClientOriginalExtension();;
            $ruta_imagen = public_path('/imagenes');
            $imagen->move($ruta_imagen, $nombre_imagen);
        }

        $producto->save();

        return redirect()->route('productos.show', ['id' => $producto->id_producto])
                         ->with('success', 'Producto actualizado exitosamente');
    }


    public function create(Request $request)
    {

    }
}
