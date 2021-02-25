@extends('adminlte::page')

@section('title', 'Sortware | Editar Producto')

@section('content_header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Producto</h2>
@stop

@section('content')
<form action="/productos/{{$producto->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$producto->codigo}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombreP" name="nombreP" type="text" class="form-control" value="{{$producto->nombreP}}" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$producto->descripcion}}" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" stop="any" class="form-control" value="{{$producto->precio}}" tabindex="4">
    </div>
    <a href="/productos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>    
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop