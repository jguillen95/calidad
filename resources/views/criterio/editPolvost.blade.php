@extends('layouts.plantillabase')

@section('title','Criterios')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('criterio.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('polvotemplate.update', $consulta->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-4">
        <label for="id_sap_pt" class="form-label">Id sap PT</label>
        <input value="{{$consulta->id_sap_pt}}" type="text" class="form-control" id="id_sap_pt" name="id_sap_pt" required>
      </div>
      <div class="col-4">
        <label for="producto" class="form-label">Producto</label>
        <input value="{{$consulta->producto}}" type="text" class="form-control" id="producto" name="producto" required>
      </div>
      <div class="col-md-12">
          <label for="pesos" class="form-label">Peso</label>
          <input value="{{$consulta->pesos}}" type="text" class="form-control" id="pesos" name="pesos" required>
        </div>
        <div class="col-md-12">
          <label for="notas" class="form-label">Notas</label>
          <input class="form-control" value="{{$consulta->notas}}" name="notas" id="notas">
        </div>

        @foreach ($consulta2 as $item)
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Id sap de la etiqueta</label>
            <input name="sap_id_etiqueta" value="{{$item->sap_id_etiqueta}}" type="text" class="form-control" >
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Descripción de la etiqueta</label>
            <input name="desc_si_etiqueta"  value="{{$item->desc_si_etiqueta}}" type="text" class="form-control" >
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Descripción de la mezcla</label>
            <input name="desc_si_mezcla"  value="{{$item->desc_si_mezcla}}" type="text" class="form-control" >
          </div>
          <div class="col-6">
            <label for="inputCity" class="form-label">Descripción Lotificado del envase</label>
            <input  value="{{$item->desc_lotificado_si}}"  name="desc_lotificado_si" class="form-control" id="inputCity">
          </div>
          <div class="col-6">
            <label for="inputCity" class="form-label">lote</label>
            <input  name="lote_envase"  value="{{$item->lote_envase}}" class="form-control" id="inputCity">
          </div>
          <div class="col-6">
            <label for="inputCity" class="form-label">caducidad</label>
            <input  name="cad_envase"  value="{{$item->cad_envase}}" class="form-control" id="inputCity">
          </div>
      @endforeach
    <div class="col-12">
      <button type="submit" class="btn btn-info"  style=" color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Actualizar</button>
    </div>
  </form>
@endsection