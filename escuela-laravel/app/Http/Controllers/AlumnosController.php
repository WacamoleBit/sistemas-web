<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use stdClass;

class AlumnosController extends Controller
{
    //index - mostrar todos los elementos
    //store - guardar todo
    //update - actualizar todo
    //destroy - eliminar todo
    //edit - mostrar el formulario de edición
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required'
        ]);

        $alumno = new Alumno;
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->edad = $request->edad;

        $alumno->save();

        return redirect()->route('alumnos', ['success' => 'Alumno guardado exitosamente']);
        
    }

    public function index()
    {
        $alumnos = Alumno::all();

        return view('alumnos.index', ['alumnos' => $alumnos]);
    }
}
