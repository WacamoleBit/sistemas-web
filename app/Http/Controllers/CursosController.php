<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        $alumnos = $this->get_alumnos();

        return view('alumnos.index', ['alumnos' => $alumnos]);
    }

    public function get_alumnos(): array
    {   
        $lista[0] = new Curso;
        $lista[0]->id = '1';
        $lista[0]->firstname = 'Ricardo';
        $lista[0]->lastname = 'Martinez';
        $lista[0]->age = 15;

        $lista[1] = new Curso;
        $lista[1]->id = '2';
        $lista[1]->firstname = 'Oscar';
        $lista[1]->lastname = 'Perea';
        $lista[1]->age = 15;

        $lista[2] = new Curso;
        $lista[2]->id = '3';
        $lista[2]->firstname = 'Manuel';
        $lista[2]->lastname = 'Hernandez';
        $lista[2]->age = 25;

        return $lista;
    }
}
