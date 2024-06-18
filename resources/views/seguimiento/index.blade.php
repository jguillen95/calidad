@extends('layouts.plantillabase')

@section('title','Seguimientos')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<!-- Button trigger modal -->
<form action="{{route('seguimiento.create')}}">
    <input class="btn btn-primary" type="submit" value="Nuevo" />
</form>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Descripción</th>
        <th scope="col">Realizo:</th>
        <th scope="col">Fecha</th>
        <th scope="col">Desviación</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($seguimientos as $seguimiento)
      <tr>
        <th scope="row">{{$seguimiento->id}}</th>
        <td>{{$seguimiento->descripcion_seg}}</td>
        <td>{{$seguimiento->realizo_seg}}</td>
        <td>{{$seguimiento->fecha_seg}}</td>
        <td>{{$seguimiento->descripcion_des}}</td>
        <td>
            <button type="button" class="btn btn-success"><a style="color:white;" href="{{ route('seguimiento.edit', $seguimiento->id)}}">Editar</a></button>
            <button type="button" class="btn btn-danger">Eliminar</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table> 
@endsection
