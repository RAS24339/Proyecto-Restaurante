<?php

use App\Http\Controllers\MexicanaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');


Route::get('/login',[MexicanaController::class,'show'])->name('login-muro');
Route::get('/welcome',[MexicanaController::class,'showinicio'])->name('inicio-muro');
//menu

Route::get('/menu',[MexicanaController::class,'showmenu'])->name('menu-muro');
//introducir
//mostrar
Route::get('/Mostrar', [MexicanaController::class, 'mostrarProd'])->name('mostrar-productos');
//imagenes


//agregar
Route::get('/introducir',[LoginController::class,'menu'])->name('agregar-menu');


//agregar
Route::post('/introducir',[MexicanaController::class,'agregar'])->name('agregar-producto');
//


Route::get('/Mostrar', [MexicanaController::class, 'mostrarProd'])->name('mostrar-productos');


//reservaciones clientes

Route::get('/reserva',[MexicanaController::class,'showreservaciones'])->name('reserva-usuarios');

// reservar
Route::post('/almacenar-reserva', [LoginController::class, 'almacenarReserva'])->name('almacenar-reserva');
//salir
Route::get('/salir',[MexicanaController::class,'showresalir'])->name('salir-muro');



//////
Route::get('/contacto',[MexicanaController::class,'showcontacto'])->name('contacto-muro');
///
Route::get('/horarios',[MexicanaController::class,'showhorarios'])->name('horarios-muro');

// este es el controlar para irte al registro envia
Route::get('/registro',[LoginController::class,'registro'])->name('registro-log');
// este es el controlar para irte al registro resive
Route::post('/aplicaregistro',[LoginController::class,'registrar'])->name('aplicar-registro');
//MENSAJE ERROR
//Route::get('/login',[LoginController::class,'loginc'])->name('mostrar-login');

Route::post('/validar',[LoginController::class,'loginc'])->name('validar-usuario');


//

Route::post('/validar',[LoginController::class,'loginc'])->name('validar-usuario');

// menus
Route::get('/menuc', [MexicanaController::class, 'mostrarmenuc'])->name('mostrar-mexicana');

// reservaciones
Route::post('/reservaciones', [ReservaController::class, 'almacenarReserva'])->name('almacenar-reserva');
Route::get('/mostrarreserva', [ReservaController::class, 'mostrarreserva'])->name('mostrar-reserva');



//eliminar menu de ad eliminar
Route::post('/eliminarmenu/{id}',[MexicanaController::class,'destroy'])->name('eliminar-mexicana');


// modificar el menu 
Route::get('/mostrarmexicana', [MexicanaController::class, 'mostrarmexicana'])->name('mostrar-mexicana');
Route::get('/mostrarmx', [MexicanaController::class, 'mostrarmx'])->name('mostrar-mx');

//modificar y actualizar
Route::get('/mostrar-formulario/{id}', [MexicanaController::class, 'mostrarFormularioModificar'])->name('mostrar-formulario'); 
Route::put('/actualizar-elemento/{id}', [MexicanaController::class, 'actualizarElemento'])->name('actualizar-elemento');
