@extends('plantilla')
@section('titulo', 'Portafolio | '.$project->title)
@section('Contenido')
    <h1>{{$project->title}}</h1>
    <p>{{$project->description}}</p>
    <p>{{$project->created_at->diffForHumans()}}</p>
@endsection
