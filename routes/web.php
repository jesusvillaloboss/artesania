<?php

use App\Http\Controllers\PiedraController;
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

Route::get('malaquita',[PiedraController::class,'piedra1'])->name('malaquita.piedra1');

Route::get('malaquita/{piece}',[PiedraController::class,'mostrar'])->name('malaquita.mostrar');
