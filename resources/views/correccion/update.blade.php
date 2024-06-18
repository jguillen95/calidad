@extends('layouts.plantillabase')

@section('title','Corrección')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')

<form action="{{route('correccion.update', $correcciones->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-md-3">
      <label for="actividad" class="form-label">Actividad</label>
      <input type="text" class="form-control" id="actividad" name="actividad" value="{{$correcciones->actividad}}">
    </div>
    <div class="col-md-3">
      <label for="responsable" class="form-label">Responsable</label>
      <input type="text" class="form-control" id="responsable" name="responsable" value="{{$correcciones->responsable}}">
    </div>
    <div class="col-3">
      <label for="fecha" class="form-label">Fecha</label>
      <input type="datetime-local" class="form-control" id="fecha" name="fecha" value="{{$correcciones->fecha_corre}}">
    </div>
    <div class="col-3">
      <label for="Firma" class="form-label">Firma</label>
      <input type="text" class="form-control" id="Firma" name="firma" value="{{$correcciones->firma_corre}}">
    </div>
    <div class="col-md-3">
        <label for="tipo" class="form-label">Tipo</label>
        <select type="text" class="form-select" id="tipo" name="tipo">
            <option value="Corrección">Corrección</option>
            <option value="Acción">Acción</option>
        </select>
      </div>
      {{-- <div class="col-md-9">
        <label for="desviacion_id" class="form-label">Desviacion</label>
        <select type="text" class="form-select" id="desviacion_id" name="desviacion_id">
            @foreach ($list_desviaciones as $lista)
            <option value="{{$lista->id}}">{{$lista->descripcion_des}}</option>
            @endforeach
        </select>
      </div> --}}
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>
@endsection