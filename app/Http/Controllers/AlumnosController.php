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
            'nombre' => 'required|min:3'
        ]);
        $alumno = new Alumno;
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->edad = $request->edad;

        $alumno->save();

        // return redirect()->route('alumnos')->('success', 'Alumno guardado exitosamente');
    }

    public function index()
    {
        $alumnos = $this->get_alumnos();

        return view('alumnos.index', ['alumnos' => $alumnos]);
    }

    public function get_alumnos(): array
    {   
        $lista[0] = new Alumno;
        $lista[0]->id = '1';
        $lista[0]->firstname = 'Ricardo';
        $lista[0]->lastname = 'Martinez';
        $lista[0]->age = 15;

        $lista[1] = new Alumno;
        $lista[1]->id = '2';
        $lista[1]->firstname = 'Oscar';
        $lista[1]->lastname = 'Perea';
        $lista[1]->age = 15;

        $lista[2] = new Alumno;
        $lista[2]->id = '3';
        $lista[2]->firstname = 'Manuel';
        $lista[2]->lastname = 'Hernandez';
        $lista[2]->age = 25;

        return $lista;
    }

    // public function index()
    // {
    //     // $alumnos[] = new Alumno(1, "Manuel", "Hernandez", 25);
        
    //     // return view('alumnos.index', ['alumnos' => $alumnos]);
    // }
}
