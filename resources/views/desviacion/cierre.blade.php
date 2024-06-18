@extends('layouts.plantillabase')

@section('title','Reponsables')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')


<form action="{{route('desviacion.cierreUpdate', $consulta->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-3">
        <label for="departamento" class="form-label">Departamento que cierra</label>
        <input type="text" class="form-control" id="departamento" name="departamento">
    </div>
    <div class="col-3">
        <label for="firma_cierre" class="form-label">Firma de Cierre</label>
        <input type="text" class="form-control" id="firma_cierre" name="firma_cierre">
    </div> 
    <div class="col-3"> 
        <label for="fecha_cierre" class="form-label">fecha de Cierre</label>
        <input type="datetime-local" class="form-control" id="fecha_cierre" name="fecha_cierre">
    </div>
    <div class="col-3"> 
        <label for="estatus" class="form-label">Estatus</label>
        <select type="text" class="form-select" id="estatus" name="estatus">
            <option value="1">Abierto</option>
            <option value="2">Pendiente</option>
            <option value="3">Cerrado</option>
        </select>
      </div>
    <div class="col-12">
      <button type="submit" class="btn btn-info"  style="color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Actualizar</button>
    </div>
  </form>

@endsection