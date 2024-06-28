<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\UsuarioController;

// index //

Route::get('/', [ProductoController::class, 'index'])->name('principal');

// Login //

Route::view('/register',  'autenticacion.register')->name('register');
Route::post('/register', [LoginController::class, 'register']);
Route::view('/login',  'autenticacion.login')->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Usuario //

    // ADMIN

    Route::get('/admin/usuarios', [UsuarioController::class, 'index'])->name('usuarios.list');

// Producto //

Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('productos.show');

    // ADMIN CRUD

    Route::get('/admin/productos/', [ProductoController::class, 'list'])->name('productos.list');
    Route::get('/admin/productos/create', [ProductoController::class, 'create'])->name('productos.create');
    Route::post('/admin/productos/store', [ProductoController::class, 'store'])->name('productos.store');
    Route::get('/admin/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
    Route::put('/admin/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');
    Route::get('/admin/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');

// Carrito

Route::get('carrito', [CarritoController::class, 'index'])->name('carrito.index');
Route::get('carrito/{id}', [CarritoController::class, 'add'])->name('carrito.add');
Route::middleware(['auth'])->group(function () {
    Route::put('/carrito/{id_carrito}/{id_producto}', [CarritoController::class, 'update'])->name('carrito.update');
    Route::delete('/carrito/{id_carrito}/{id_producto}', [CarritoController::class, 'destroy'])->name('carrito.destroy');
});

// Marca

Route::get('marcas/{marca}', [MarcaController::class, 'show'])->name('marcas.show');

// Modelos

Route::get('/modelos', [ModeloController::class, 'index'])->name('modelos.index');
Route::get('/modelos/{modelo}', [ModeloController::class, 'show'])->name('modelo.show');

// Extras

    // amplificadores

    Route::view('/amplificadores',  'productos.amplificadores.index')->name('amplificadores');


Route::view('/main', 'layout.main')->name('main'); //layout!!

Route::view('/rep_music', 'layout.rep_music')->name('musica');

Route::view('/video-back', 'layout.video')->name('video');

Route::view('/contactanos',  'extra.contactanos')->name('contactanos');

Route::view('/guias',  'extra.guias')->name('guias');






