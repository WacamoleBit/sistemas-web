@extends('app')

@section('content')
    <div class="jumbotron jumbotron-fluid p-1">
        <div class="container-fluid">
            <h1 class="display-1">Sección de alumnos</h1>
            <p class="lead">En esta sección se muestran los datos de los alumnos en una tabla.</p>
        </div>
    </div>

    <div class="container-fluid">
        <form action="{{ route('crear-alumno') }}" method="GET">
            <button class="btn btn-primary float-end mb-3" type="submit">
                Nuevo Alumno
            </button>
        </form>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad </th>
                    <th colspan="3">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                <tr>
                    <td> {{$alumno->id}} </td>
                    <td> {{$alumno->nombre}} </td>
                    <td> {{$alumno->apellido}} </td>
                    <td> {{$alumno->edad}} </td>
                    <td>
                        <form action="{{ route('editar-alumno', ['id' => $alumno->id]) }}" method="GET">
                            <button class="btn btn-warning float-end" type="submit">Editar</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('detalles-alumno', ['id' => $alumno->id]) }}" method="GET">
                            <button class="btn btn-info float-end" type="submit">Detalles</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('borrar-alumno', ['id' => $alumno->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn sm float-end">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection