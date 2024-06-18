@extends('layouts.plantillabase')

@section('title','BPMS')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('bpm.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('bpm.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
  @csrf
  <div class="col-md-3">
    <label for="fecha" class="form-label">Fecha:</label>
    <input type="date" class="form-control" id="fecha" name="fecha" required>
  </div>
  <div class="col-md-3">
    <label for="turno" class="form-label">Turno:</label>
    <input type="text" class="form-control" id="turno" name="turno" required>
  </div>
  <div class="col-3">
    <label for="hora" class="form-label">Hora:</label>
    <input type="time" class="form-control" id="hora" name="hora" required>
  </div>
  <div class="col-3">
    <label for="ubicacion" class="form-label">Ubicación:</label>
    <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
  </div>
  <div class="col-3">
      <label for="realizo" class="form-label">Realizó:</label>
      <input type="text" class="form-control" id="realizo" name="realizo" required>
    </div>
  {{-- <div class="col-md-3">
      <label for="vobo" class="form-label">VoBo:</label>
      <input type="text" class="form-control" id="vobo" name="vobo" required>
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
</script>
@endsection