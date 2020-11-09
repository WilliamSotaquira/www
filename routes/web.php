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
    return view('welcome');
});

Route::get('/somos', 'GeneralController@mostrarSomos')->name('somos');
Route::get('/servicio', 'GeneralController@mostrarServicio')->name('servicio');
Route::get('/alianza', 'GeneralController@mostrarAlianza')->name('alianza');
Route::get('/documento', 'GeneralController@mostrarDocumento')->name('documento');
Route::get('/cliente', 'GeneralController@mostrarCliente')->name('cliente');
Route::get('/contacto', 'GeneralController@mostrarContacto')->name('contacto');
