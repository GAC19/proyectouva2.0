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

/* Route::get('/',[pagescontroller::class, 'index']);

Route::get('login',[pagescontroller::class, 'login']);
Route::get('create',[pagescontroller::class, 'create']); */

/* Route::get('editar/{id}', 'pagescontroller@editar' )->name('datos.editar'); */
Route::post('/agregar', [admcontroller::class, 'agregar'])->name('agregar'); //para agregar a la BD
Route::post('/agregarpersonal', [admcontroller::class, 'agregarpersonal'])->name('agregarpersonal'); 
Route::get('/editarpersonal', [admcontroller::class, 'editarpersonal'])->name('editarpersonal');

Route::get('/', [clientecontroler_Index::class, 'index']);
Route::get('create',[clientecontroler::class, 'create']);
Route::get('login2',[clientecontroler::class, 'login2']);

Route::get('cliente/user', [clientecontroler::class, 'user'])->name('home');
Route::get('cliente/producto',[clientecontroler::class, 'producto']);
Route::post('/comprasrealizada',[clientecontroler::class, 'comprasrealizada'])->name('comprasrealizada');
Route::get('cliente/historial', [clientecontroler::class, 'historial']);
Route::get('cliente/consulta', [clientecontroler::class, 'consulta']);
Route::get('cliente/informacion', [clientecontroler::class, 'informacion']);


Route::get('adm/home_adm', [admcontroller::class, 'administrador']);
Route::get('adm/usuarios', [admcontroller::class, 'usuarios']);
Route::get('adm/personal', [admcontroller::class, 'personal']);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
