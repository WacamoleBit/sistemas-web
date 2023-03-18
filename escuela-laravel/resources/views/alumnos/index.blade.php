@extends('app')

@section('content')
    <div class="jumbotron jumbotron-fluid p-1">
        <div class="container-fluid">
            <h1 class="display-1">Sección de alumnos</h1>
            <p class="lead">En esta sección se muestran los datos de los alumnos en una tabla.</p>
        </div>
    </div>

    <div class="container-fluid">
        <p>Crear <a href="{{ route('crearAlumno') }}">nuevo alumno</a></p>
    </div>
    <div class="container-fluid">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad </th>
                    <th colpan="2">Opciones</th>
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
                        <a href="{{ route('mostrarAlumno', ['id' => $alumno->id]) }}">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('borrarAlumno', ['id' => $alumno->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection