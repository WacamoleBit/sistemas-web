<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AlumnosController extends Controller
{
    //index - mostrar todos los elementos
    //store - guardar todo
    //update - actualizar todo
    //destroy - eliminar todo
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
        return redirect()->route('alumnos');
    }

    public function index()
    {
        $alumnos = Alumno::all();

        return view('alumnos.index', ['alumnos' => $alumnos]);
    }

    public function show($id){
        $alumno = Alumno::find($id);

        return view('alumnos.edit', ['alumno' => $alumno]);
    }

    public function update(Request $request, int $id) 
    {
        $alumno = Alumno::find($id);

        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->edad = $request->edad;

        $alumno->save();

        return redirect()->route('alumnos');
    }

    public function destroy(int $id) 
    {
        $alumno = Alumno::find($id);

        $alumno->delete();

        return redirect()->route('alumnos');
    }
}
