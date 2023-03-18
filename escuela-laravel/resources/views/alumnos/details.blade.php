@extends('app')

@section('content')
    <div class="container w-25 border py-4">
        <form action="{{ route('editar-alumno', ['id' => $alumno->id]) }}" method="GET">
            <div class="form-group mb-3">
                <label for="nombre" class="fw-bold">Nombre: </label><br>
                <label id="nombre">{{ $alumno->nombre }}</label>
            </div>
            <div class="form-group mb-3">
                <label for="apellido" class="fw-bold">Apellido: </label><br>
                <label id="nombre">{{ $alumno->apellido }}</label>
            </div>
            <div class="form-group mb-3">
                <label for="edad" class="fw-bold">Edad: </label><br>
                <label id="nombre">{{ $alumno->edad }}</label>
            </div>

            <button type="submit" class="btn btn-primary">Editar</button>
            <a href="{{ route('mostrar-alumnos') }}">Regresar</a>
        </form>
    </div>     
@endsection