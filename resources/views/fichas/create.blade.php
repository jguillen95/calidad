@extends('layouts.plantillabase')

@section('title','Ficha técnica de producto terminado')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('fichas.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('fichas.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
  @csrf
  <div class="col-md-12" >
     <b>¿Es suplemento?</b>
    <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
 </div>
  <div class="col-md-3">
    <label for="producto" class="form-label">Nombre del Producto:</label>
    <input type="text" class="form-control" id="producto" name="producto" required>
  </div>
  <div class="col-md-3">
    <label for="lote" class="form-label">Lote:</label>
    <input type="text" class="form-control" id="lote" name="lote" required>
  </div>
  <div class="col-3">
    <label for="fecha_cad" class="form-label">Fecha de Caducidad (En meses):</label>
    <input type="text" class="form-control" id="fecha_cad" name="fecha_cad" required>
  </div>
  <div class="col-3">
    <label for="contenido" class="form-label">Contenido Neto</label>
    <input type="text" class="form-control" id="contenido" name="contenido" required>
  </div>
  <div class="col-3">
      <label for="id_sap" class="form-label">Id:</label>
      <input type="text" class="form-control" id="id_sap" name="id_sap" required>
    </div>
  <div class="col-md-9">
      <label for="descripcion" class="form-label">Descripción del Producto</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion" required>
    </div>
    <div class="col-md-6">
      <label for="caracteristicas" class="form-label">Caracteristicas organolépticas</label>
      <input type="text" class="form-control" id="caracteristicas" name="caracteristicas" required>
    </div>
    <div class="col-md-6">
      <label for="porcion" class="form-label">Tamaño de proción</label>
      <input type="text" class="form-control" id="porcion" name="porcion" required>
    </div>
    {{-- <div id="content" style="display: none;">
      <div class="col-md-3">
        <label for="ingredientes" class="form-label">Ingresa el tamaño de la porción de la tabla nutrimental mg:</label>
        <input type="text" class="form-control" id="ingredientes" name="ingredientes" required>
      </div>
      <div class="col-md-3">
        <label for="info_nutri" class="form-label">Ingresa las porciones por envase de la tabla nutrimental:</label>
        <input type="text" class="form-control" id="info_nutri" name="info_nutri" required>
      </div>
    </div> --}}
   <div class="col-md-3">
      <label for="presentacion_img" class="form-label">Presentación IMG</label>
      <input type="file" class="form-control" aria-describedby="inputGroupFileAddon04" aria-label="Upload" id="presentacion_img" name="presentacion_img" required>
    </div>
    <div class="col-md-3">
      <label for="uso" class="form-label">Modo de uso</label>
      <input type="text" class="form-control" id="uso" name="uso" required>
    </div>
    <div class="col-md-3">
      <label for="almacen" class="form-label">Almacenamiento</label>
      <input type="text" class="form-control" id="almacen" name="almacen" required>
    </div>
    <div class="col-md-3">
      <label for="advertencias" class="form-label">Advertencias</label>
      <input type="text" class="form-control" id="advertencias" name="advertencias" required>
    </div>
    {{-- <div class="col-md-3">
      <label for="elaboro" class="form-label">Elaboró</label>
      <input type="text" class="form-control" id="elaboro" name="elaboro" required>
    </div> --}}
  <div class="col-12">
    <input type="submit" class="btn btn-primary" value="Siguiente"></button>
  </div>
</form>

{{-- <script type="text/javascript">
  function showContent() {
      element = document.getElementById("content");
      check = document.getElementById("check");
      if (check.checked) {
          element.style.display='block';
      }
      else {
          element.style.display='none';
      }
  } --}}
{{-- </script> --}}
@endsection