@extends('layouts.plantillabase')

@section('title','BPMS')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('bpm.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('bpm.autorizaStore', $consulta->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-md-6">
      <label for="vobo" class="form-label">Vobo</label>
      <input type="text" class="form-control" id="fecha" name="vobo" required>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-info"  style="color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Autorizar</button>
    </div>
  </form>
@endsection