@extends('layouts.plantillabase')

@section('title','Correciones')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<!-- Button trigger modal -->
<form action="{{route('correccion.create')}}">
    <input class="btn btn-primary" type="submit" value="Nuevo" />
</form>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Actividad</th>
        <th scope="col">Responsable</th>
        <th scope="col">Fecha</th>
        <th scope="col">firma</th>
        <th scope="col">tipo</th>
        <th scope="col">id_desviacion</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($correcciones as $correccion)
      <tr>
        <th scope="row">{{$correccion->id}}</th>
        <td>{{$correccion->actividad}}</td>
        <td>{{$correccion->responsable}}</td>
        <td>{{$correccion->fecha_corre}}</td>
        <td>{{$correccion->firma_corre}}</td>
        <td>{{$correccion->tipo}}</td>
        <td>{{$correccion->desviacionCorrecion_id}}</td>
        <td>
            <button type="button" class="btn btn-success"><a style="color:white;" href="{{ route('correccion.edit', $correccion->id)}}">Editar</a></button>
            <button type="button" class="btn btn-danger">Eliminar</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table> 
@endsection
