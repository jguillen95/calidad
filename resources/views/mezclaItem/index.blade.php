@extends('layouts.plantillabase')

@section('title','Mezclas Items')
@section('h-title','Documentos Dibar')


@section('content')
<!-- Button trigger modal -->
<form action="{{route('mezclaItem.create')}}">
    <input class="btn btn-primary" type="submit" value="Nuevo" />
</form>
<table class="table table-responsive table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Fecha</th>
        <th scope="col">Hora Inicial del Mezclado</th>
        <th scope="col">Hora Final del Mezclado</th>
        <th scope="col">Tiempo del Mezclado</th>
        <th scope="col">Apariencia</th>
        <th scope="col">Color</th>
        <th scope="col">Olor</th>
        <th scope="col">Cumple</th>
        <th scope="col">firma Realizó</th>
        <th scope="col">firma Verificó</th>
        <th scope="col">Id MEzcla</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($mezclaItem as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->fecha}}</td>
        <td>{{$item->i_mezcla}}</td>
        <td>{{$item->f_mezcla}}</td>
        <td>{{$item->tiempo}}</td>
        <td>{{$item->apariencia}}</td>
        <td>{{$item->color}}</td>
        <td>{{$item->olor}}</td>
        <td>{{$item->cumple}}</td>
        <td>{{$item->firma_realizo}}</td>
        <td>{{$item->firma_verifico}}</td>
        <td>{{$item->mezcla_id}}</td>
      </tr>
      @endforeach
    </tbody>
  </table> 
@endsection
