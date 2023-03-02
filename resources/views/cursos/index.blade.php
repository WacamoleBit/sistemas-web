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
                <label for="nrc">NRC</label>
                <input type="text" name="nrc" id="nrc" class="form-control" placeholder="NRC">
            </div>
            <div class="form-group mb-3">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group mb-3">
                <label for="turn">Turno</label>
                <input type="text" name="turn" id="turn" class="form-control" placeholder="Turno">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            
        </form>
    </div>
@endsection