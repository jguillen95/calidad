@extends('layouts.plantillabase')

@section('title','Reponsables')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<!-- Button trigger modal -->
<form action="{{route('responsable.create')}}">
    <input class="btn btn-primary" type="submit" value="Nuevo" />
</form>
<table class="table table-hover">
  <tbody>
    <thead>
      @if($user_login==1)
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        
        <th scope="col">Usuario</th>
        
        <th scope="col">Departamento</th>
        <th scope="col">Puesto</th>
        <th scope="col">estatus</th>
        <th scope="col">Acciones</th>
      </tr>
      @else
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Departamento</th>
        <th scope="col">Puesto</th>
        <th scope="col">Estatus</th>
        <th scope="col">Acciones</th>
      </tr>
      @endif
    </thead>
    
      @if($user_login==1)
        @foreach ($responsables as $responsable)
      <tr>
        <th scope="row">{{$responsable->id}}</th>
        <td>{{$responsable->name}}</td>
        <td>{{$responsable->username}}</td>
        <td>{{$responsable->type}}</td>
        <td>{{$responsable->puesto}}</td>
        @if($responsable->status==0)
        <td>Desactivado</td>
        @else
        <td>Activo</td>
        @endif
        <td>
            <button type="button" class="btn btn-success"><a style="color:white;" href="{{ route('responsable.edit', $responsable->id)}}">Cambiar contra</a></button>
            @if($responsable->status==1)
            <form style="margin-top: 10px;" action="{{route('responsable.escribe',$responsable->id)}}" method="POST">
              @csrf
              @method('PUT')
              <input class="btn btn-danger" onclick="return confirm('¿Estas seguro de eliminar este cliente?');" type="submit" value="borrar" />
              {{-- <button type="button"   class="btn btn-danger">Eliminar</button> --}}
            </form>
            @else
            <form style="margin-top: 10px;" action="{{route('responsable.activar',$responsable->id)}}" method="POST">
              @csrf
              @method('PUT')
              <input class="btn btn-info" onclick="return confirm('¿Estas seguro de activar este cliente?');" type="submit" value="activar" />
              {{-- <button type="button"   class="btn btn-danger">Eliminar</button> --}}
            </form>
            @endif
        </td>
      </tr>
      @endforeach
      @else
        @foreach ($responsables2 as $responsable)
        <tr>
          <th scope="row">{{$responsable->id}}</th>
          <td>{{$responsable->name}}</td>
          <td>{{$responsable->type}}</td>
          <td>{{$responsable->puesto}}</td>
          @if($responsable->status==0)
          <td>Desactivado</td>
          @else
          <td>Activo</td>
          @endif
          
          <td>
              <button type="button" class="btn btn-success"><a style="color:white;" href="{{ route('responsable.edit', $responsable->id)}}">Cambiar contra</a></button>
          </td>
        </tr>
        @endforeach 
      @endif

    </tbody>
  </table> 
@endsection
