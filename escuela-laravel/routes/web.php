<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\DocentesController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('home');

Route::get('/alumnos', [AlumnosController::class, 'index'])->name('alumnos');

Route::post('/alumnos', [AlumnosController::class, 'store']);

Route::get('/docentes', [DocentesController::class, 'index'])->name('docentes');

Route::get('/cursos', [CursosController::class, 'index'])->name('cursos');