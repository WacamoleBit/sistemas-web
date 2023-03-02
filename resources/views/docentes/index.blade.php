@extends('app')

@section('content')
    <div class="jumbotron jumbotron-fluid p-1">
        <div class="container-fluid">
            <h1 class="display-1">Sección de alumnos</h1>
            <p class="lead">En esta sección se puede registrar nuevos alumnos y los muestra en una tabla.</p>
        </div>
    </div>
    <div class="container w-25 border p-4">
        <form>
            <div class="form-group mb-3">
                <label for="firstname">Nombre</label>
                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group mb-3">
                <label for="lastname">Apellido</label>
                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Apellido">
            </div>
            <div class="form-group mb-3">
                <label for="age">Edad</label>
                <input type="text" name="age" id="age" class="form-control" placeholder="Edad">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection