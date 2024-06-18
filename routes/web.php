<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;

// index //

Route::get('/', [ProductoController::class, 'index'])->name('principal');

// Login //

Route::view('/register',  'register')->name('register');
Route::post('/register', [LoginController::class, 'register']);
Route::view('/login',  'login')->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Producto //

Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto');
Route::get('/producto/{id}', [ProductoController::class, 'add'])->name('producto.add');





// Sin implementar //

// Route::view('/marcas', 'marcas')->name('marcas');
Route::view('/main', 'layout.main')->name('main');
Route::view('/contactanos',  'contactanos')->name('contactanos');
Route::view('/guias',  'guias')->name('guias');


Route::view('/prueba', 'prueba')->name('prueba');
