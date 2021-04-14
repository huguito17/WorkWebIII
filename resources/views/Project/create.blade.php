@extends('plantilla')
@section('titulo', 'Crear')
@section('Contenido')
    <h1>Crear Projecto</h1>
    <form action={{ route('Portafolio.store') }}>
        @csrf
        <label>
            titulo de projecto <br>
            <input type="text" name="title">
        </label>
        <br>
        <label>
            Description del proyecto <br>
            <input type="text" name="description">
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection
