@extends('layouts.plantillabase')

@section('title','Criterios')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('criterio.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('criterio.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <div class="col-md-4">
      <label for="tipo" class="form-label">Tipo de PT a llenar</label>
      <select class="form-select" name="tipo" id="tipo" required>
        <option value="VISCOSO-1">VISCOSO CON ENVASE Y TAPA</option>
        {{-- <option value="VISCOSO-2">VISCOSO CON ENVASE Y ATOMIZADOR</option> --}}
        <option value="TABLETAS">TABLETAS</option>
        <option value="SACHET">SACHET</option>
        <option value="POLVOS">POLVOS</option>
        <option value="LIQUIDOS">LIQUIDOS</option>
        <option value="CAPSULAS">CAPSULAS</option>
        <option value="GOMITAS-SOFTGEL">GOMITAS O SOFTGEL</option>
        <option value="2">Capsulas selenium Machote</option>
        <option value="3">Capsulas biovita Machote</option>
        <option value="4">Polvos Machote</option>
      </select>
    </div>
    <div class="col-4">
      <label for="id_sap_pt" class="form-label">Id sap PT</label>
      <input type="text" class="form-control" id="id_sap_pt" name="id_sap_pt" required>
    </div>
    <div class="col-4">
      <label for="producto" class="form-label">Producto</label>
      <input type="text" class="form-control" id="producto" name="producto" required>
    </div>
    <div class="col-md-12">
        <label for="pesos" class="form-label">Peso</label>
        <input type="text" class="form-control" id="pesos" name="pesos" required>
      </div>
      <div class="col-md-12">
        <label for="notas" class="form-label">Notas</label>
        <textarea name="notas" id="notas" cols="150" rows="10"></textarea>
      </div>
    <div class="col-12">
        <button type="submit" class="btn btn-info"  style="color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Siguiente</button>
    </div>
  </form>
@endsection