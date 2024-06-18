@extends('layouts.plantillabase')

@section('title','Reponsables')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')


<form action="{{route('desviacion.voboUpdate', $consulta->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-6">
                   
        <label for="responsableC" class="form-label">Responsable Calidad</label>
        <select type="text" class="form-select" id="responsableC" name="responsableC">
          @foreach($responsablesC as $item)  
          <option value="{{$item->nombre_resp}}, {{$item->puesto_resp}}">{{$item->nombre_resp}}</option>
          @endforeach
        </select>
    </div>
        <div class="col-6">
        <label for="responsableP" class="form-label">Responsable Producción
        </label>
        <select type="text" class="form-select" id="responsableP" name="responsableP">
          @foreach($responsablesP as $item)  
          <option value="{{$item->nombre_resp}}, {{$item->puesto_resp}}">{{$item->nombre_resp}}</option>
          @endforeach
        </select>

      </div>
    <div class="col-12">
      <button type="submit" class="btn btn-info"  style="color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Actualizar</button>
    </div>
  </form>

@endsection