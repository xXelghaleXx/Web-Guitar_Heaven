<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{

    // USER

    public function indexMain()
    {
        $productos = Producto::paginate(9);
        return view('productos.index', compact('productos'));
    }

    public function index()
    {
        $productos = Producto::where('tipo', 'guitarra')->paginate(9);
        return view('principal', compact('productos'));
    }

    public function index2()
    {
        $productos = Producto::where('tipo', 'amplificador')->paginate(9);
        return view('productos.amplificadores.show', compact('productos'));
    }

    public function index3()
    {
        $productos = Producto::where('tipo', 'accesorio')->paginate(9);
        return view('productos.accesorios.show', compact('productos'));
    }

    public function filtro(Request $request)
    {
        $minimo = $request->valor;
        $productos = Producto::whereBetween('precio', [$minimo, 7980])->paginate(9);
        return view('productos.index', compact('productos'));
    }

    public function filtroExtra(Request $request)
    {
        $tipo = $request->tipo_producto;
        $minimo = $request->valor;

        if (rtrim($tipo, 's') == "producto") {
            $nuevaCadena = rtrim($tipo, 's');
        } elseif (substr($tipo, -2) == "es") {
            $nuevaCadena = substr($tipo, 0, -2);
        } else {
            $nuevaCadena = $tipo;
        }

        $productos = Producto::whereBetween('precio', [$minimo, 7980])
                ->where('tipo', $nuevaCadena)
                ->paginate(9);
        return view('productos.' . $tipo . '.show');
    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        $comentarios = DB::table('comentarios')
                    ->join('users', 'users.id', '=', 'comentarios.id_usuario')
                    ->where('comentarios.id_producto', '=', $id)
                    ->select('users.nombre', 'comentarios.comentario', 'comentarios.fecha_comentario')
                    ->get();
        return view('productos.show', compact('producto', 'comentarios'));
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
            $nombreImagen = 'producto' . $producto->id_producto . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('imagenes'), $nombreImagen);
        }

        $producto->save();

        return redirect()->route('productos.show', ['id' => $producto->id_producto])
                         ->with('success', 'Producto actualizado exitosamente');
    }


    public function create()
    {
        return view('admin.productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'detalles' => 'required',
            'marca' => 'required',
            'stock' => 'required|integer',
            'precio' => 'required|numeric',
            // 'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ejemplo de validación de imagen
        ]);

        $ultimoProducto = Producto::latest()->first();
        $ultimoId = $ultimoProducto ? $ultimoProducto->id : 0;

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nuevoId = $ultimoId + 1;
            $nombreImagen = 'producto' . $nuevoId . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('imagenes'), $nombreImagen);
        } else {
            return "Error";
        }

        $producto = new Producto();
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

        $producto->save();

        return redirect()->route('productos.list')->with('success', 'Producto creado correctamente');
    }

    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect()->route('productos.list');
    }
}
