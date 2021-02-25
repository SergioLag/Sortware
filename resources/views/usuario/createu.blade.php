@extends('adminlte::page')

@section('title', 'Sortware | Nuevo Usuario')

@section('content_header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Usuario</h2>
@stop

@section('content')
<form action="/usuarios" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="email" name="email" type="email" class="form-control" tabindex="3" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input id="password" name="password" type="password" class="form-control"  tabindex="4"required>
    </div>
    <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>    
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop