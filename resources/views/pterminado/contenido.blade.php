@extends('layouts.plantillabase')

@section('title','PT:')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<form action="{{route('contenido.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <div class="col-md-2">
      <label for="cajas_cama" class="form-label">Cajas por cama</label>
      <input type="text" class="form-control" id="cajas_cama" name="cajas_cama" required>
    </div>
    <div class="col-2">
      <label for="camas_palet" class="form-label">Camas por palet</label>
      <input type="text" class="form-control" id="camas_palet" name="camas_palet" required>
    </div>
    <div class="col-2">
      <label for="caja_palet" class="form-label">cajas por palet</label>
      <input type="text" class="form-control" id="caja_palet" name="caja_palet" required>
    </div>
    <div class="col-md-3">
        <label for="unidad_caja" class="form-label">Unidades por caja</label>
        <input type="text" class="form-control" id="unidad_caja" name="unidad_caja" required>
      </div>
      <div class="col-md-3">
        <label for="unidad_palet" class="form-label">Unidades por palet</label>
        <input type="text" class="form-control" id="unidad_palet" name="unidad_palet" required>
      </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary" style="color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;">Siguiente</button>
    </div>
  </form>
@endsection