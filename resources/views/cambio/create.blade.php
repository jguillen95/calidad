@extends('layouts.plantillabase')

@section('title','Control de cambios')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('cambio.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('cambio.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <div class="col-md-6">
      <label for="formato" class="form-label">Formato a Modificar</label>
      <select class="form-select" name="formato" id="formato" required>
        <option value="F-LDAC-058/DESVIACIÓN">F-LDAC-058/DESVIACIÓN</option>
        <option value="F-LDAC-009/ENVASADO">F-LDAC-009/ENVASADO</option>
        <option value="F-LDAC-066/LIMPIEZA">F-LDAC-066/LIMPIEZA</option>
        <option value="F-LDAC-010/MEZCLADO">F-LDAC-010/MEZCLADO</option>
        <option value="F-LDAC-015/FICHA TÉCNICA PT">F-LDAC-015/FICHA TÉCNICA PT</option>
        <option value="F-LDAC-025/HOJA DE SEGURIDAD">F-LDAC-025/HOJA DE SEGURIDAD</option>
        <option value="F-LDAC-026/ESPECIFIACIONES DE PT">F-LDAC-026/ESPECIFIACIONES DE PT</option>
        <option value="F-LDAC-014/SANITIZACIÓN Y LIMPIEZA">F-LDAC-014/SANITIZACIÓN Y LIMPIEZA</option>
        <option value="F-LDAC-031/BPMS">F-LDAC-031/BPMS</option>
        <option value="F-LDAC-055/CRITERIOS DE ACEPTACIÓN">F-LDAC-055/CRITERIOS DE ACEPTACIÓN</option>
      </select>
    </div>
    <div class="col-6">
        <label for="id_cambio" class="form-label">Id de formato a modificar</label>
        <input type="text" class="form-control" id="id_cambio" name="id_cambio" required>
      </div>
    <div class="col-12">
      <label for="valor_cambio" class="form-label">Valor a cambiar</label>
      <input type="text" class="form-control" id="valor_cambio" name="valor_cambio" required>
    </div>
    <div class="col-12">
      <label for="valor_nuevo" class="form-label">Valor nuevo</label>
      <input type="text" class="form-control" id="valor_nuevo" name="valor_nuevo" required>
    </div>
    <div class="col-md-12">
        <label for="motivo" class="form-label">Motivo de cambio</label>
        <input type="text" class="form-control" id="motivo" name="motivo" required>
      </div>
    <div class="col-12">
        <button type="submit" class="btn btn-info"  style="color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Siguiente</button>
    </div>
  </form>
@endsection