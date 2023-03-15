@extends('app')

@section('content')
    <div class="jumbotron jumbotron-fluid p-1">
        <div class="container-fluid">
            <h1 class="display-1">Sección de alumnos</h1>
            <p class="lead">En esta sección se muestran los datos de los alumnos en una tabla.</p>
        </div>
    </div>
    <div class="container w-25 border py-4">
        <form action="{{ route('alumnos') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group mb-3">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido">
            </div>
            <div class="form-group mb-3">
                <label for="edad">Edad</label>
                <input type="text" name="edad" id="edad" class="form-control" placeholder="Edad">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            
        </form>
    </div> 
    <div class="container-fluid">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad </th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                <tr>
                    <td> {{$alumno->id}} </td>
                    <td> {{$alumno->nombre}} </td>
                    <td> {{$alumno->apellido}} </td>
                    <td> {{$alumno->edad}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection