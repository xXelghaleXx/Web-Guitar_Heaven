<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function add(Request $request)
    {
        Comentario::create([
            'id_usuario' => auth()->id(),
            'id_producto' => $request->id_producto,
            'comentario' => $request->comentario,
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Comentario::destroy($id);
        return redirect()->back();
    }
}
