@extends('app')

@section('content')
    <div class="container w-25 border py-4">
        <form action="{{ route('actualizar-alumno', ['id' => $alumno->id]) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group mb-3">
                <label for="nombre"></label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="{{ $alumno->nombre }}">
            </div>
            <div class="form-group mb-3">
                <label for="apellido"></label>
                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" value="{{ $alumno->apellido }}">
            </div>
            <div class="form-group mb-3">
                <label for="edad"></label>
                <input type="number" name="edad" id="edad" class="form-control" placeholder="Edad" value="{{ $alumno->edad }}">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('mostrar-alumnos') }}">Regresar</a>
        </form>
    </div>     
@endsection