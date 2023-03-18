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
})->name('inicio');

Route::get('/alumnos', [AlumnosController::class, 'index'])->name('mostrar-alumnos');

Route::get('/alumnos/nuevo', function () {
    return view('alumnos.create');
})->name('crear-alumno');

Route::post('/alumnos/guardar', [AlumnosController::class, 'store'])->name('guardar-alumno');

Route::get('/alumnos/{id}/detalles', [AlumnosController::class, 'details'])->name('detalles-alumno');

Route::get('/alumnos/{id}/editar', [AlumnosController::class, 'edit'])->name('editar-alumno');

Route::patch('/alumnos/{id}/actualizar', [AlumnosController::class, 'update'])->name('actualizar-alumno');

Route::delete('/alumnos/{id}/borrar', [AlumnosController::class, 'destroy'])->name('borrar-alumno');

Route::get('/docentes/todos', [DocentesController::class, 'index'])->name('mostrar-docentes');

Route::get('/cursos/todos', [CursosController::class, 'index'])->name('mostrar-cursos');