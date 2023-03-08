<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        $cursos = $this->get_cursos();

        return view('cursos.index', ['cursos' => $cursos]);
    }

    public function get_cursos(): array
    {   
        $lista[0] = new Curso;
        $lista[0]->NRC = 33234;
        $lista[0]->name = 'Tecnologías Web';
        $lista[0]->turn = 'Matutino';

        $lista[1] = new Curso;
        $lista[1]->NRC = 33412;
        $lista[1]->name = 'Tecnologías Web';
        $lista[1]->turn = 'Vespertino';

        $lista[2] = new Curso;
        $lista[2]->NRC = 32254;
        $lista[2]->name = 'Desarrollo de software';
        $lista[2]->turn = 'Matutino';

        $lista[3] = new Curso;
        $lista[3]->NRC = 32216;
        $lista[3]->name = 'Desarrollo de software';
        $lista[3]->turn = 'Vespertino';

        return $lista;
    }
}
