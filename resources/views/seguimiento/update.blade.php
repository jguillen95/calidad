@extends('layouts.plantillabase')

@section('title','Seguimientos')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')

<form action="{{route('seguimiento.update', $seguimientos->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-md-6">
      <label for="descripcion_seg" class="form-label">Descripción</label>
      <input type="text" class="form-control" id="descripcion_seg" name="descripcion_seg" value="{{$seguimientos->descripcion_seg}}">
    </div>
    <div class="col-md-6">
      <label for="realizo" class="form-label">Realizó</label>
      <input type="text" class="form-control" id="realizo" name="realizo" value="{{$seguimientos->realizo_seg}}">
    </div>
    <div class="col-6">
      <label for="fecha" class="form-label">fecha</label>
      <input type="datetime-local" class="form-control" id="fecha" name="fecha" placeholder="fecha" value="{{$seguimientos->fecha_seg}}">
    </div>
    <div class="col-6">
        <label for="desviacion_id" class="form-label">Id Desviación</label>
        <select type="text" class="form-select" id="desviacion_id" name="desviacion_id" placeholder="Desviación">
            @foreach ($list_desviaciones as $lista)
            <option value="{{$lista->id}}">{{$lista->descripcion_des}}</option>
            @endforeach
        </select>
        </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
  </form>
@endsection