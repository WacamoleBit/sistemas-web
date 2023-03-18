<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AlumnosController extends Controller
{
    //store - guardar todo
    //index - mostrar todos los elementos
    //update - actualizar 
    //destroy - eliminar 
    //edit - mostrar el formulario de edición
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required'
        ]);

        $alumno = new Alumno;
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->edad = $request->edad;

        $alumno->save();

        // return redirect()->route('crearAlumno', ['success' => 'Alumno guardado exitosamente']);
        return redirect()->route('mostrar-alumnos');
    }

    public function index()
    {
        $alumnos = Alumno::all();

        return view('alumnos.index', ['alumnos' => $alumnos]);
    }

    public function details($id) 
    {
        $alumno = Alumno::find($id);

        return view('alumnos.details', ['alumno' => $alumno]);
    }

    public function edit($id){
        $alumno = Alumno::find($id);

        return view('alumnos.edit', ['alumno' => $alumno]);
    }

    public function update(Request $request, int $id) 
    {
        $alumno = Alumno::find($id);

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required'
        ]);

        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->edad = $request->edad;

        $alumno->save();

        return redirect()->route('mostrar-alumnos');
    }

    public function destroy(int $id) 
    {
        $alumno = Alumno::find($id);

        $alumno->delete();

        return redirect()->route('mostrar-alumnos');
    }
}
