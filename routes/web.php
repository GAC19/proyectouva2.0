<?php

use App\Http\Controllers\admcontroller;
use App\Http\Controllers\clientecontroler;
use App\Http\Controllers\clientecontroler_Index;
use App\Http\Controllers\pagescontroller;
use Illuminate\Support\Facades\Auth;
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

Route::post('/agregar', [admcontroller::class, 'agregar'])->name('agregar'); //para agregar a la BD
Route::post('/agregarpersonal', [admcontroller::class, 'agregarpersonal'])->name('agregarpersonal'); 

Route::get('/', [clientecontroler_Index::class, 'index']);

Route::get('cliente/user', [clientecontroler::class, 'user'])->name('home');
Route::get('cliente/producto',[clientecontroler::class, 'producto']);
Route::get('cliente/historial', [clientecontroler::class, 'historial']);
Route::post('/comprasrealizada',[clientecontroler::class, 'comprasrealizada'])->name('comprasrealizada');

Route::get('cliente/editar/{id}',[clientecontroler::class, 'editar'])->name('cliente.editar');
Route::put('cliente/editar/{id}', [clientecontroler::class, 'update'])->name('cliente.update');
Route::delete('cliente/eliminar/{id}', [clientecontroler::class, 'eliminar'])->name('cliente.eliminar');

Route::get('adm/home_adm', [admcontroller::class, 'administrador'])->name('home_adm');
Route::get('adm/personal', [admcontroller::class, 'personal']);
Route::get('adm/historialtotal', [admcontroller::class, 'historialtotal']);
Route::get('adm/editarpersonal', [admcontroller::class, 'editarpersonal'])->name('editar');

Route::get('adm/editar/{id}', [admcontroller::class, 'editar'])->name('adm.editar');
Route::put('adm/editar/{id}', [admcontroller::class, 'update'])->name('adm.update');
Route::delete('eliminar/{id}', [admcontroller::class, 'eliminar'])->name('adm.eliminar');
Route::get('adm/editarcompra/{id}', [admcontroller::class, 'editarcompra'])->name('adm.editarcompra');
Route::put('adm/editarcompra/{id}', [admcontroller::class, 'updatecompra'])->name('adm.updatecompra');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

