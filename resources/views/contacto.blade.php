@extends('plantilla')

@section('contenido')

    <h1>Contato</h1>
    
    
    <form method="POST" action={{ route('contacto')}}>
        
        @csrf
        <input name="nombre" placeholder="Nombre" value="" ><br>
        {{!!$errors->first('nombre','<small>:message</small><br>')!!}} 
        <input name="email" placeholder="Email" value=""><br>
        {{!!$errors->first('email','<small>:message</small><br>')!!}} 
        <input name="subject" placeholder="Asunto" value=""><br>
        {{!!$errors->first('subject','<small>:message</small><br>')!!}} 
        <textarea name="contenido"></textarea>
        {{!!$errors->first('contenido','<small>:message</small><br>')!!}} 
        <button>Enviar</button>

    </form>
@endsection
@section('titulo','Contacto')
