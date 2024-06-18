@extends('layouts.plantillabase')

@section('title','bpm')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('bpm.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('bpm.update', $consulta->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-md-6">
      <label for="fecha" class="form-label">Fecha</label>
      <input type="date" class="form-control" id="fecha" value="{{$consulta->fecha}}" name="fecha" required>
    </div>
    <div class="col-md-3">
        <label for="turno" class="form-label">turno</label>
        <input type="text" class="form-control" value="{{$consulta->turno}}" id="turno" name="turno" required>
      </div>
      <div class="col-md-3">
        <label for="hora" class="form-label">hora</label>
        <input type="time" class="form-control" value="{{$consulta->hora}}" id="hora" name="hora" required>
      </div>
    <div class="col-md-6">
      <label for="ubicacion" class="form-label">ubicacion</label>
      <input type="text" class="form-control" value="{{$consulta->ubicacion}}" id="ubicacion" name="ubicacion" required>
    </div>
    <div class="col-md-3">
        <label for="realizo" class="form-label">realizo</label>
        <input type="text" class="form-control" id="realizo" value="{{$consulta->realizo}}" name="realizo" required>
      </div>
    <div class="col-6">
      <label for="vobo" class="form-label">vobo</label>
      <input type="text" class="form-control" id="vobo" value="{{$consulta->vobo}}" name="vobo" required>
    </div>
    <div class="col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>cofia</th>
                    <th>cubrebocas</th>
                    <th>Uniforme</th>
                    <th>manos</th>
                    <th>uñas</th>
                    <th>heridas</th>
                    <th>maquillaje</th>
                    <th>botas</th>
                    <th>perfume</th>
                    <th>enfermedad</th>
                    <th>articulos</th>
                    <th>observaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta2 as $item)
                    
                
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_parametros[]" value="{{$item->id}}"></td>
                    <td><input type="text" name="nombre[]" value="{{$item->nombre}}"></td>
                    <td><input type="text" name="cofia[]" value="{{$item->cofia}}"></td>
                    <td><input type="text" name="cubre[]" value="{{$item->cubre}}"></td>
                    <td><input type="text" name="uniforme[]" value="{{$item->uniforme}}"></td>
                    <td><input type="text" name="manos[]" value="{{$item->manos}}"></td>
                    <td><input type="text" name="unas[]" value="{{$item->unas}}"></td>
                    <td><input type="text" name="heridas[]" value="{{$item->heridas}}"></td>
                    <td><input type="text" name="maquillaje[]" value="{{$item->maquillaje}}"></td>
                    <td><input type="text" name="botas[]" value="{{$item->botas}}"></td>
                    <td><input type="text" name="perfume[]" value="{{$item->perfume}}"></td>
                    <td><input type="text" name="enfermedad[]" value="{{$item->enfermedad}}"></td>
                    <td><input type="text" name="articulos[]" value="{{$item->articulos}}"></td>
                    <td><input type="text" name="observaciones[]" value="{{$item->observaciones}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="col-12">
      <button type="submit" class="btn btn-info"  style="color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Actualizar</button>
    </div>
  </form>
@endsection