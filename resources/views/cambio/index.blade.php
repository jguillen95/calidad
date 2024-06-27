@extends('layouts.plantillabase')

@section('title','Control de cambios')
@section('h-title','Control de cambios')
{{-- @section('card-title','Desviación de proceso') --}}
@if (auth()->user()->usertype_id==1)
@section('content')
<a href="{{route('cambio.create')}}" style="float: right" class="btn btn-warning">Crear una solicitud</a>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">id a cambiar</th>
        <th scope="col">Formato a cambiar</th>
        <th scope="col">valor a cambiar</th>
        <th scope="col">valor de nuevo</th>
        <th scope="col">Fecha de solicitud</th>
        <th scope="col">Usuario que solicita</th>
        <th scope="col">Motivo</th>
        <th scope="col">Fecha de modificación</th>
        <th scope="col">Usuario que modifica</th>
        <th scope="col">Estatus</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
@foreach ($data as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->id_cambio}}</td>
        <td>{{$item->formato}}</td>
        <td>{{$item->valor_cambio}}</td>
        <td>{{$item->valor_nuevo}}</td>
        <td>{{$item->fecha_soli}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->motivo}}</td>
        <td>{{$item->fecha_mod}}</td>
        <td>{{$item->user_mod}}</td>
        @if ($item->estatus=='SOLICITADO')
        <td><button class="btn btn-warning">Solicitado</button></td>
        @elseif ($item->estatus=='APLICADO')
        <td><button class="btn btn-success">Aplicado</button></td>
        @else
        <td><button class="btn btn-danger">Rechazado</button></td>
        @endif
        <td><button type="button" class="btn btn-info"><a style="color:white;" href="{{ route('cambio.edit', $item->id)}}">A/R</a></button></td>
        
      </tr>
@endforeach
    </tbody>
  </table>

@endsection
@else
@section('content')
<a href="{{route('cambio.create')}}" style="float: right" class="btn btn-warning">Crear una solicitud</a>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">id a cambiar</th>
        <th scope="col">Formato a cambiar</th>
        <th scope="col">valor a cambiar</th>
        <th scope="col">valor de nuevo</th>
        <th scope="col">Fecha de solicitud</th>
        <th scope="col">Usuario que solicita</th>
        <th scope="col">Motivo</th>
        <th scope="col">Fecha de modificación</th>
        <th scope="col">Usuario que modifica</th>
        <th scope="col">Estatus</th>
      </tr>
    </thead>
    <tbody>
@foreach ($data as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->id_cambio}}</td>
        <td>{{$item->formato}}</td>
        <td>{{$item->valor_cambio}}</td>
        <td>{{$item->valor_nuevo}}</td>
        <td>{{$item->fecha_soli}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->motivo}}</td>
        <td>{{$item->fecha_mod}}</td>
        <td>{{$item->user_mod}}</td>
        @if ($item->estatus=='SOLICITADO')
        <td><button class="btn btn-warning">Solicitado</button></td>
        @elseif ($item->estatus=='APLICADO')
        <td><button class="btn btn-success">Aplicado</button></td>
        @else
        <td><button class="btn btn-danger">Rechazado</button></td>
        @endif
      </tr>
@endforeach
    </tbody>
  </table>

@endsection
    
@endif