<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Principal;
use App\Http\Controllers\Libros;
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