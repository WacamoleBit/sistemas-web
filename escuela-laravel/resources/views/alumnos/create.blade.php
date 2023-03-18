@extends('app')

@section('content')
    <div class="container w-25 border py-4">
        <form action="{{ route('guardar-alumno') }}" method="POST">
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
                <input type="number" name="edad" id="edad" class="form-control" placeholder="Edad">
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>     
@endsection