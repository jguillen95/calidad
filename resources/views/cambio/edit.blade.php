@extends('layouts.plantillabase')

@section('title','Control de cambios')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('cambio.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('cambio.update', $consulta->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-4">
        <label for="estatus" class="form-label">Estatus</label>
        <select class="form-select" name="estatus" id="estatus">
            <option value="APLICADO">CAMBIO APLICADO</option>
            <option value="RECHAZADO">CAMBIO RECHAZADO</option>
        </select>
    </div>        
    <div class="col-12">
      <button type="submit" class="btn btn-info"  style=" color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Actualizar</button>
    </div>
  </form>
@endsection