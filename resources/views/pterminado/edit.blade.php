@extends('layouts.plantillabase')

@section('title','Producto Terminado')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('pterminado.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('pterminado.update', $consulta->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-md-6">
      <label for="descripcion" class="form-label">descripcion</label>
      <input type="text" class="form-control" id="descripcion" value="{{$consulta->descripcion}}" name="descripcion" required>
    </div>
    <div class="col-md-3">
        <label for="id_sap" class="form-label">id_sap</label>
        <input type="text" class="form-control" value="{{$consulta->id_sap}}" id="id_sap" name="id_sap" required>
      </div>
      <div class="col-md-3">
        <label for="codigo" class="form-label">codigo</label>
        <input type="text" class="form-control" value="{{$consulta->codigo}}" id="codigo" name="codigo" required>
      </div>
    <div class="col-md-6">
      <label for="categoria" class="form-label">categoria</label>
      <input type="text" class="form-control" value="{{$consulta->categoria}}" id="categoria" name="categoria" required>
    </div>
    <div class="col-md-3">
        <label for="sub_categoria" class="form-label">sub_categoria</label>
        <input type="text" class="form-control" id="sub_categoria" value="{{$consulta->sub_categoria}}" name="sub_categoria" required>
      </div>
    <div class="col-6">
      <label for="marca" class="form-label">marca</label>
      <input type="text" class="form-control" id="marca" value="{{$consulta->marca}}" name="marca" required>
    </div>
    <div class="col-3">
      <label for="color_granel" class="form-label">color_granel</label>
      <input type="text" class="form-control" id="color_granel" value="{{$consulta->color_granel}}" name="color_granel" required>
    </div>
    <div class="col-md-3">
        <label for="olor_granel" class="form-label">olor_granel</label>
        <input type="text" class="form-control" value="{{$consulta->olor_granel}}" id="olor_granel" name="olor_granel" required>
    </div>
    <div class="col-md-3">
        <label for="almacen" class="form-label">apariencia_granel</label>
        <input type="text" class="form-control" value="{{$consulta->apariencia_granel}}" id="apariencia_granel" name="apariencia_granel" required>
    </div>
    <div class="col-md-3">
        <label for="almacenamiento" class="form-label">almacenamiento</label>
        <input type="text" class="form-control" value="{{$consulta->almacenamiento}}" id="almacenamiento" name="almacenamiento" required>
    </div>
    <div class="col-md-3">
        <label for="transporte" class="form-label">transporte</label>
        <input type="text" class="form-control" value="{{$consulta->transporte}}" id="transporte" name="transporte" required>
    </div>
    <div class="col-md-3">
        <label for="lote_caducidad" class="form-label">lote_caducidad</label>
        <input type="text" class="form-control" value="{{$consulta->lote_caducidad}}" id="lote_caducidad" name="lote_caducidad" required>
    </div>
    <div class="col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>tipo</th>
                    <th>producto</th>
                    <th>caja</th>
                    <th>palet</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta2 as $item)
                    
                
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_logistica[]" value="{{$item->id}}"></td>
                    <td><input class="form-control" type="text" name="tipo[]" value="{{$item->tipo}}"></td>
                    <td><input type="text" class="form-control" name="producto[]" value="{{$item->producto}}"></td>
                    <td><input type="text" class="form-control" name="caja[]" value="{{$item->caja}}"></td>
                    <td><input type="text" class="form-control" name="palet[]" value="{{$item->palet}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>cajas cama</th>
                    <th>camas palet</th>
                    <th>Unidad caja</th>
                    <th>Unidad palet</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta3 as $item)
                    
                
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_contenido[]" value="{{$item->id}}"></td>
                    <td><input type="text" class="form-control" name="cajas_cama[]" value="{{$item->cajas_cama}}"></td>
                    <td><input type="text" class="form-control" name="camas_palet[]" value="{{$item->camas_palet}}"></td>
                    <td><input type="text" class="form-control" name="unidad_caja[]" value="{{$item->unidad_caja}}"></td>
                    <td><input type="text" class="form-control" name="unidad_palet[]" value="{{$item->unidad_palet}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Material</th>
                    <th>Código de embalaje</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta4 as $item)
                    
                
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_embalaje[]" value="{{$item->id}}"></td>
                    <td><input type="text" class="form-control" name="material[]" value="{{$item->material}}"></td>
                    <td><input type="text" class="form-control" name="codigo_emb[]" value="{{$item->codigo_emb}}"></td>
                    <td><input type="text" class="form-control" name="descripcion1[]" value="{{$item->descripcion}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <div class="col-12">
      <button type="submit" class="btn btn-info"  style="color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Siguiente</button>
    </div>
  </form>
@endsection