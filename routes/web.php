<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;

// index //

Route::get('/', [ProductoController::class, 'index'])->name('principal');

// Login //

Route::view('/register',  'register')->name('register');
Route::post('/register', [LoginController::class, 'register']);
Route::view('/login',  'login')->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Producto //

Route::get('producto/{id}', [ProductoController::class, 'show'])->name('productos.show');
Route::get('carrito/{id}', [CarritoController::class, 'add'])->name('producto.add');
Route::get('carrito', [CarritoController::class, 'index'])->name('carritos.index');

// Sin implementar //

// Route::view('/marcas', 'marcas')->name('marcas');
Route::view('/main', 'layout.main')->name('main');
Route::view('/contactanos',  'contactanos')->name('contactanos');
Route::view('/guias',  'guias')->name('guias');
Route::view('/modelos_gen','modelos_gen')->name('generos');
Route::view('/modelos_rock', 'modelos_rock')->name('rock');
Route::view('/prueba', 'prueba')->name('prueba');
