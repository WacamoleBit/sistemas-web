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

Route::get('/alumnosCreate', function () {
    return view('alumnos.create');
})->name('crearAlumno');

Route::get('/alumnoShow/{id}', [AlumnosController::class, 'show'])->name('mostrarAlumno');

Route::patch('/alumnoEdit/{id}', [AlumnosController::class, 'update'])->name('editarAlumno');

Route::delete('/alumnoDelete/{id}', [AlumnosController::class, 'destroy'])->name('borrarAlumno');

Route::post('/alumnoStore', [AlumnosController::class, 'store'])->name('guardarAlumno');

Route::get('/docentes', [DocentesController::class, 'index'])->name('docentes');

Route::get('/cursos', [CursosController::class, 'index'])->name('cursos');