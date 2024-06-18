@extends('layouts.plantillabase')

@section('title','Mezcla')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('mezcla.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('mezcla.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <div class="col-md-6">
      <label for="producto" class="form-label">Producto</label>
      <input type="text" class="form-control" id="producto" name="producto" required>
    </div>
    <div class="col-md-3">
        <label for="q1" class="form-label">Fecha</label>
        <input type="date" class="form-control" id="q1" name="q1" required>
      </div>
      <div class="col-md-3">
        <label for="q3" class="form-label">Caducidad</label>
        <input type="text" class="form-control" id="q3" name="q3" required>
      </div>
    <div class="col-md-3">
      <label for="lote" class="form-label">Lote</label>
      <input type="text" class="form-control" id="lote" name="lote" required>
    </div>
    <div class="col-md-3">
        <label for="q4" class="form-label">OP</label>
        <input type="text" class="form-control" id="q4" name="q4" required>
      </div>
    <div class="col-3">
      <label for="reviso" class="form-label">Revisó (Supervisor/Lider de linea)</label>
      <input type="text" class="form-control" id="reviso" name="reviso" required>
    </div>
    <div class="col-3">
      <label for="autorizo" class="form-label">Liberó (Inspector/Calidad)</label>
      <input type="text" class="form-control" id="autorizo" name="autorizo" required>
    </div>
    <div class="col-md-12">
        <label for="observaciones" class="form-label">Observaciones</label>
        <input type="text" class="form-control" id="observaciones" name="observaciones" required>
      </div>
    <div class="col-12">
      <button type="submit" class="btn btn-info"  style="color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Siguiente</button>
    </div>
  </form>
@endsection