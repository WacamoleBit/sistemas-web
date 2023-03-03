<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    public function index()
    {
        $docente = $this->get_docentes();

        return view('docentes.index', ['docentes' => $docente]);
    }

    public function get_docentes(): array
    {   
        $lista[0] = new Docente;
        $lista[0]->personal_number = 4141231;
        $lista[0]->firstname = 'Rafael';
        $lista[0]->lastname = 'Rojano';

        $lista[1] = new Docente;
        $lista[1]->personal_number = 5123123;
        $lista[1]->firstname = 'Katia';
        $lista[1]->lastname = 'Blanco';

        $lista[2] = new Docente;
        $lista[2]->personal_number = 9412876;
        $lista[2]->firstname = 'Fredy';
        $lista[2]->lastname = 'Castañeda';

        $lista[3] = new Docente;
        $lista[3]->personal_number = 623524;
        $lista[3]->firstname = 'Itzel';
        $lista[3]->lastname = 'Reyes';

        return $lista;
    }
}
