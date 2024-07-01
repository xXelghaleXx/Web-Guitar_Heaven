<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DashboardController;

// index //

Route::get('/', [ProductoController::class, 'index'])->name('principal');

// Login //

Route::view('/register',  'autenticacion.register')->name('register');
Route::post('/register', [LoginController::class, 'register']);
Route::view('/login',  'autenticacion.login')->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Usuario //

    Route::get('/usuario/perfil', [UsuarioController::class, 'profile'])->name('usuarios.profile');
    Route::get('/usuario/perfil/editar', [UsuarioController::class, 'edit'])->name('usuarios.edit');
    Route::get('/usuario/perfil/update', [UsuarioController::class, 'update'])->name('usuarios.update');
    Route::get('/usuario/pedidos', [PedidoController::class, 'show'])->name('usuarios.pedidos');
    Route::get('/usuario/pedidos/{id}', [PedidoController::class, 'detPedido'])->name('usuarios.det_pedidos');

    // ADMIN

    Route::get('/admin/usuarios', [UsuarioController::class, 'index'])->name('usuarios.list');
    Route::get('/admin/ventas', [VentaController::class, 'list'])->name('ventas.list');
    Route::get('/admin/pedidos', [PedidoController::class, 'list'])->name('pedidos.list');
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Producto //

    Route::get('/producto/all', [ProductoController::class, 'indexMain'])->name('productos.all');
    Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('productos.show');
    Route::post('/producto/comentario', [ComentarioController::class, 'add'])->name('comentario.add');
    Route::post('/producto/comentario/destroy/{id}', [ComentarioController::class, 'destroy'])->name('comentario.destoy');
    Route::post('/producto/filtro', [ProductoController::class, 'filtro'])->name('productos.filtro');
    Route::post('/producto/filtro/extra', [ProductoController::class, 'filtroExtra'])->name('productos.filtroExtra');

    // ADMIN CRUD

    Route::get('/admin/productos/', [ProductoController::class, 'list'])->name('productos.list');
    Route::get('/admin/productos/create', [ProductoController::class, 'create'])->name('productos.create');
    Route::post('/admin/productos/store', [ProductoController::class, 'store'])->name('productos.store');
    Route::get('/admin/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
    Route::put('/admin/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');
    Route::delete('/admin/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');

// Carrito

Route::get('carrito', [CarritoController::class, 'index'])->name('carrito.index');
Route::get('carrito/{id}', [CarritoController::class, 'add'])->name('carrito.add');
Route::middleware(['auth'])->group(function () {
    Route::put('/carrito/{id_carrito}/{id_producto}', [CarritoController::class, 'update'])->name('carrito.update');
    Route::delete('/carrito/{id_carrito}/{id_producto}', [CarritoController::class, 'destroy'])->name('carrito.destroy');
});

// Pago

Route::get('/pago', [CarritoController::class, 'pay'])->name('carrito.pago');
Route::post('/pago', [VentaController::class, 'add'])->name('carrito.pago');

// Marca

Route::get('marcas/{marca}', [MarcaController::class, 'show'])->name('marcas.show');

// Modelos

Route::get('/modelos', [ModeloController::class, 'index'])->name('modelos.index');
Route::get('/modelos/{modelo}', [ModeloController::class, 'show'])->name('modelo.show');

// Extras

// amplificadores

Route::view('/amplificadores','productos.amplificadores.index')->name('amplificadores');
Route::get('/amplificadores/all', [ProductoController::class, 'index2'])->name('amplificadores.all');
Route::view('/accesorios','productos.accesorios.index')->name('accesorios');
Route::get('/accesorios/all', [ProductoController::class, 'index3'])->name('accesorios.all');


Route::view('/main', 'layout.main')->name('main'); //layout!!

Route::view('/rep_music', 'layout.rep_music')->name('musica');

Route::view('/video-back', 'layout.video')->name('video');

Route::view('/contactanos',  'extra.contactanos')->name('contactanos');

Route::view('/guias',  'extra.guias')->name('guias');


//Térmnos y codiciones

Route::view('/terminos','terminos.index')->name('terminos.index');
Route::view('/privacidad','privacidad.index')->name('privacidad');
Route::view('/sobrenosotros','sobre.index')->name('sobre');




