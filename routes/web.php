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
    return redirect('/alertas');
});
Route::get('/home', function () {
    return redirect('/alertas');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/alerta/{data}/{ciudadela}/{guardia}', [App\Http\Controllers\Alerta\AlertaController::class,'alertar']);
Route::get('/alertas', [App\Http\Controllers\Alerta\AlertaController::class,'consultar_activas']);
Route::post('/cerrar', [App\Http\Controllers\Alerta\AlertaController::class,'cerrar']);
