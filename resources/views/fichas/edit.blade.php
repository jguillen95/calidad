@extends('layouts.plantillabase')

@section('title','Fichas')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('fichas.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('fichas.update', $consulta->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-md-6">
      <label for="producto" class="form-label">Producto</label>
      <input type="text" class="form-control" id="producto" value="{{$consulta->producto}}" name="producto" required>
    </div>
    <div class="col-md-3">
        <label for="lote" class="form-label">lote</label>
        <input type="text" class="form-control" value="{{$consulta->lote}}" id="lote" name="lote" required>
      </div>
      <div class="col-md-3">
        <label for="fecha" class="form-label">fecha</label>
        <input type="text" class="form-control" value="{{$consulta->fecha}}" id="fecha" name="fecha" required>
      </div>
    <div class="col-md-6">
      <label for="contenido" class="form-label">contenido</label>
      <input type="text" class="form-control" value="{{$consulta->contenido}}" id="contenido" name="contenido1" required>
    </div>
    <div class="col-md-3">
        <label for="id_sap" class="form-label">id_sap</label>
        <input type="text" class="form-control" id="id_sap" value="{{$consulta->id_sap}}" name="id_sap" required>
      </div>
    <div class="col-6">
      <label for="descripcion" class="form-label">descripcion</label>
      <input type="text" class="form-control" id="descripcion" value="{{$consulta->descripcion}}" name="descripcion" required>
    </div>
    <div class="col-3">
      <label for="porcion" class="form-label">porcion</label>
      <input type="text" class="form-control" id="porcion" value="{{$consulta->porcion}}" name="porcion1" required>
    </div>
    <div class="col-md-3">
        <label for="uso" class="form-label">uso</label>
        <input type="text" class="form-control" value="{{$consulta->uso}}" id="uso" name="uso" required>
    </div>
    <div class="col-md-3">
        <label for="almacen" class="form-label">almacen</label>
        <input type="text" class="form-control" value="{{$consulta->almacen}}" id="almacen" name="almacen" required>
    </div>
    <div class="col-md-3">
        <label for="advertencias" class="form-label">advertencias</label>
        <input type="text" class="form-control" value="{{$consulta->advertencias}}" id="advertencias" name="advertencias" required>
    </div>
    <div class="col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Contendio</th>
                    <th>Porción</th>
                    <th>Porción G</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta2 as $item)
                    
                
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_ficha[]" value="{{$item->id}}"></td>
                    <td><input type="text" name="contenido[]" value="{{$item->contenido}}"></td>
                    <td><input type="text" name="porcion[]" value="{{$item->porcion}}"></td>
                    <td><input type="text" name="porcion_g[]" value="{{$item->porcion_g}}"></td>
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
                    <th>ingrediente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta3 as $item)
                    
                
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_suplemento[]" value="{{$item->id}}"></td>
                    <td><input type="text" name="ingrediente[]" value="{{$item->ingrediente}}"></td>
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