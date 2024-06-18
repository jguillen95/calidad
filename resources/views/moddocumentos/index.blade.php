@extends('layouts.plantillabase')

@section('title','Documentos a Modificar')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<!-- Button trigger modal -->
<form action="{{route('moddocumentos.create')}}">
    <input class="btn btn-primary" type="submit" value="Nuevo" />
</form>
<table class="table table-responsive table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Código</th>
        <th scope="col">Título</th>
        <th scope="col">Responsable</th>
        <th scope="col">Fecha</th>
        <th scope="col">Firma Responsable</th>
        <th scope="col">Desviación</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($moddocumentos as $moddocumento)
      <tr>
        <th scope="row">{{$moddocumento->id}}</th>
        <td>{{$moddocumento->codigo}}</td>
        <td>{{$moddocumento->titulo}}</td>
        <td>{{$moddocumento->responsable}}</td>
        <td>{{$moddocumento->fecha}}</td>
        <td>{{$moddocumento->firma_mod}}</td>
        <td>{{$moddocumento->desviacionDoc_id}}</td>
        <td>
            <button type="button" class="btn btn-success"><a style="color:white;" href="{{ route('moddocumentos.edit', $moddocumento->id)}}">Editar</a></button>
            {{-- <button type="button" class="btn btn-danger">Eliminar</button> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table> 
@endsection
