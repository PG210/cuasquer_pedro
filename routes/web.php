<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Principal;
use App\Http\Controllers\Libros;
use App\Http\Controllers\Editorial;
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

//Ruta Principal 
Route::get('/', [Principal::class, 'index']);
//Ruta lista libros
Route::get('/lista/libros', [Libros::class, 'index'])->name('listado');
//Ruta editorial
Route::get('/lista/editorial', [Editorial::class, 'lista_edit'])->name('listaEdit');
//Ruta registro editorial
Route::get('/lista/formulario/editorial', [Editorial::class, 'formulario'])->name('regEditorial');
//ruta post registro
Route::post('/formulario/registro', [Editorial::class, 'regis'])->name('registro');