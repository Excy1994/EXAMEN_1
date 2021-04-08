@extends('layouts.plantillabase')

@section('contenido')
<h1>CREAR REGISTROS</h1>
<form action="/estudiantes/{{ $estudiantes->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input type="text" id="codigo" name="codigo" class="form-control" value="{{$estudiantes->codigo}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{$estudiantes->nombre}}" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" id="apellido" name="apellido" value="{{$estudiantes->apellido}}" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha de nacimiento</label>
        <input type="text" id="fecha de nacimiento" name="fecha de nacimiento" value="{{$estudiantes->fecha de nacimiento}}" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Localidad</label>
        <input type="text" id="localidad" name="localidad" value="{{$estudiantes->localidad}}" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input type="number" id="telefono" name="telefono" step="any" value="{{$estudiantes->telefono}}" class="form-control" tabindex="6">
    </div>
    <a href="/estudiantes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection