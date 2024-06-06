<?php

use Illuminate\Support\Facades\Route;




Route::view('/', 'welcome')->name('pag_principal');
Route::view('/login',  'login')->name('login');

Route::view('/contactanos',  'contactanos')->name('contactanos');
Route::view('/cards', 'cards_main')->name('cards');
Route::view('/slidebar', 'slidebar')->name('slidebar');
Route::view('/carrusel', 'carrusel')->name('carrusel');
Route::view('/descripcion', 'descripcion')->name('descripcion');
route::view('/header', 'header')->name('header');
