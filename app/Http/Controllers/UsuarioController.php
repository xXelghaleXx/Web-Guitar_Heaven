<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::get();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function profile()
    {
        if (auth()->user()->apellido == null){
            return redirect()->route('usuarios.edit');
        }

        $userId = auth()->id();
        $usuario = User::find($userId);
        return view('usuario.perfil', compact('usuario'));
    }

    public function edit()
    {
        $userId = auth()->id();
        $usuario = User::find($userId);
        return view('usuario.edit', compact('usuario'));
    }

    public function update(Request $request)
    {
        $userId = auth()->id();
        User::where('id', $userId)
            ->update([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'email' => $request->email,
                'direccion' => $request->direccion,
                'telefono' => $request->telefono,
            ]);
        return redirect()->route('usuarios.profile');
    }
}
