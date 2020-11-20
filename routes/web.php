<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('nosotros', function () {
    return view('equipo.nosotros');
});

Route::get('servicios', function () {
    return view('servicios.servicios');
});

Route::get('precios', function () {
    return view('precios.precios');
});

Route::get('contactar', function () {
    return view('contactar.contactar');
});

Route::get('terminos', function () {
    return view('terminos.terminos');
});