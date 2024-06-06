<?php

use Illuminate\Support\Facades\Route;



Route::view('/main', 'layout.main')->name('main');
Route::view('/', 'principal')->name('principal');
Route::view('/marcas', 'marcas')->name('marcas');
Route::view('/login',  'login')->name('login');
Route::view('/contactanos',  'contactanos')->name('contactanos');

