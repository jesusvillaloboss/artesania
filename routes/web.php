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

// ruta para mostrar productos de piece
Route::get('malaquita',[PiedraController::class,'piedra1'])->name('malaquita.piedra1');

//ruta donde envias los datos que necesitas para mostrar el registro que seleccionas

Route::get('malaquita/{piece}',[PiedraController::class,'mostrar'])->name('malaquita.mostrar');

//ruta utilizada para agregar comentarios a un producto
Route::post('malaquita',[PiedraController::class,'store'])->name('malaquita.store'); 

//ruta para mostrar lo mas nuevo de los productos
Route::get('nuevo',[PiedraController::class, 'nuevo'])->name('nuevo');

//Ruta para mostrar los descuentos
Route::get('descuentos',[PiedraController::class, 'descuentos'])->name('descuentos');
