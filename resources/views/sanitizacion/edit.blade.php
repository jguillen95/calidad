@extends('layouts.plantillabase')

@section('title','Sanitización')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('sanitizacion.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('sanitizacion.update', $consulta->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-md-6">
      <label for="fecha" class="form-label">fecha</label>
      <input type="date" class="form-control" id="fecha" value="{{$consulta->fecha}}" name="fecha" required>
    </div>
    <div class="col-md-3">
        <label for="h_inicio" class="form-label">hora inicio</label>
        <input type="time" class="form-control" value="{{$consulta->h_inicio}}" id="h_inicio" name="h_inicio" required>
      </div>
      <div class="col-md-3">
        <label for="h_final" class="form-label">hora final</label>
        <input type="time" class="form-control" value="{{$consulta->h_final}}" id="h_final" name="h_final" required>
      </div>
    <div class="col-md-6">
      <label for="p_anterior" class="form-label">producto anterior</label>
      <input type="text" class="form-control" value="{{$consulta->p_anterior}}" id="p_anterior" name="p_anterior" required>
    </div>
    <div class="col-md-3">
        <label for="p_entrada" class="form-label">producto entrada</label>
        <input type="text" class="form-control" id="p_entrada" value="{{$consulta->p_entrada}}" name="p_entrada" required>
      </div>
    <div class="col-6">
      <label for="equipo" class="form-label">equipo</label>
      <input type="text" class="form-control" id="equipo" value="{{$consulta->equipo}}" name="equipo" required>
    </div>
    <div class="col-3">
      <label for="observaciones" class="form-label">observaciones</label>
      <input type="text" class="form-control" id="observaciones" value="{{$consulta->observaciones}}" name="observaciones" required>
    </div>
    <div class="col-md-3">
        <label for="nombre_supervisor" class="form-label">nombre supervisor</label>
        <input type="text" class="form-control" value="{{$consulta->nombre_supervisor}}" id="nombre_supervisor" name="nombre_supervisor" required>
    </div>
    <div class="col-md-3">
        <label for="firma_supervisor" class="form-label">firma supervisor</label>
        <input type="text" class="form-control" value="{{$consulta->firma_supervisor}}" id="firma_supervisor" name="firma_supervisor" required>
    </div>
    <div class="col-md-3">
        <label for="nombre_calidad" class="form-label">nombre calidad</label>
        <input type="text" class="form-control" value="{{$consulta->nombre_calidad}}" id="nombre_calidad" name="nombre_calidad" required>
    </div>
    <div class="col-md-3">
        <label for="firma_calidad" class="form-label">firma_calidad</label>
        <input type="text" class="form-control" value="{{$consulta->firma_calidad}}" id="firma_calidad" name="firma_calidad" required>
    </div>
    <div class="col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Actividad</th>
                    <th>Sustancia</th>
                    <th>Concentración</th>
                    <th>Realizó</th>
                    <th>Cumple</th>
                    <th>Verificó</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta2 as $item)
                    
                
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_desinfeccion[]" value="{{$item->id}}"></td>
                    <td><input class="form-control" type="text" name="actividad[]" value="{{$item->actividad}}"></td>
                    <td><input type="text" class="form-control" name="sustancia[]" value="{{$item->sustancia}}"></td>
                    <td><input type="text" class="form-control" name="concentracion[]" value="{{$item->concentracion}}"></td>
                    <td><input type="text" class="form-control" name="realizo[]" value="{{$item->realizo}}"></td>
                    <td><input type="text" class="form-control" name="cumple[]" value="{{$item->cumple}}"></td>
                    <td><input type="text" class="form-control" name="verifico[]" value="{{$item->verifico}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="col-12">
      <button type="submit" class="btn btn-info"  style="color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Siguiente</button>
    </div>
  </form>
@endsection