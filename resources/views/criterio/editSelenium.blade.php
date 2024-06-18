@extends('layouts.plantillabase')

@section('title','Criterios')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('criterio.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('selenium.update', $consulta->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
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
        <label for="inputEmail4" class="form-label">Id Sap Etiqueta</label>
        <input value="{{$item->id_sap_display}}" name="id_sap_display" type="text" class="form-control" >
      </div>
      @endforeach
      @foreach ($consulta3 as $item)
      <div class="col-12">
        <label for="inputAddress" class="form-label">Descripción Termoencogible</label>
        <input value="{{$item->desc_si_termo}}" type="text" name="desc_si_termo" class="form-control" id="inputAddress">
      </div>
      <div class="col-6">
        <label for="inputAddress2" class="form-label">Temperatura y velocidad de banda</label>
        <input value="{{$item->desc_no_termo}}" type="text" name="desc_no_termo" class="form-control" id="inputAddress2" >
      </div>
      @endforeach
      @foreach ($consulta4 as $item)
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Lote del envase</label>
        <input type="text" value="{{$item->lote_envase_c}}" name="lote_envase_c" class="form-control" id="inputCity">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Caducidad del envase</label>
        <input type="text" value="{{$item->cad_envase_c}}" name="cad_envase_c" class="form-control" id="inputCity">
      </div>
      @endforeach
      @foreach ($consulta5 as $item)
      <div class="col-12">
        <label for="inputCity" class="form-label">Descripción del embalaje</label>
        <input value="{{$item->desc_si_sellado}}"  name="desc_si_sellado" class="form-control" id="inputCity">
      </div>
      @endforeach
    <div class="col-12">
      <button type="submit" class="btn btn-info"  style=" color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Actualizar</button>
    </div>
  </form>
@endsection