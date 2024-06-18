@extends('layouts.plantillabase')

@section('title','Limpieza y sanitización pre-operacional')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('sanitizacion.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('sanitizacion.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <div class="col-md-4">
      <label for="fecha" class="form-label">Fecha</label>
      <input type="date" class="form-control" id="fecha" name="fecha" required>
    </div>
    <div class="col-md-4">
      <label for="h_inicio" class="form-label">Hora inicial</label>
      <input type="time" class="form-control" id="h_inicio" name="h_inicio" required>
    </div>
    <div class="col-4">
      <label for="h_final" class="form-label">Hora Final</label>
      <input type="time" class="form-control" id="lote" name="h_final" required>
    </div>
    <div class="col-6">
      <label for="p_anterior" class="form-label">Producto Anterior</label>
      <input type="text" class="form-control" id="p_anterior" name="p_anterior" required>
    </div>
    <div class="col-md-6">
        <label for="p_entrada" class="form-label">Producto Entrada</label>
        <input type="text" class="form-control" id="p_entrada" name="p_entrada" required>
      </div>
      <div class="col-md-12">
        <label for="equipo" class="form-label">Equipo</label>
        <input type="text" class="form-control" id="equipo" name="equipo" required>
      </div>
      <div class="col-md-12">
        <label for="observaciones" class="form-label">Observaciones</label>
        <input type="text" class="form-control" id="observaciones" name="observaciones" required>
      </div>
      <div class="col-md-3">
        <label for="nombre_supervisor" class="form-label">Nombre del  supervisor de producción/Lider de linea</label>
        <input type="text" class="form-control" id="nombre_supervisor" name="nombre_supervisor" required>
      </div>
      <div class="col-md-3">
        <label for="firma_supervisor" class="form-label">Firma Supervisor</label>
        <input type="text" class="form-control" id="firma_supervisor" name="firma_supervisor" required>
      </div>
      <div class="col-md-3">
        <label for="nombre_calidad" class="form-label">Nombre del  inspector de control y aseguramiento de calidad</label>
        <input type="text" class="form-control" id="nombre_calidad" name="nombre_calidad" required>
      </div>
      <div class="col-md-3">
        <label for="firma_calidad" class="form-label">Firma de inspector calidad </label>
        <input type="text" class="form-control" id="firma_calidad" name="firma_calidad" required>
      </div>
      
    <div class="col-12">
        <button type="submit" class="btn btn-info"  style="color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Siguiente</button>
    </div>
  </form>
@endsection