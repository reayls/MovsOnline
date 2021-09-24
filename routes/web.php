<?php

use App\Http\Controllers\PeliculaController;
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

Route::get('/', [PeliculaController::class,'home']);

Route::get('/ver/{id}/{title}', [PeliculaController::class,'ver']);

Route::get('/buscar', [PeliculaController::class,'buscar']);
