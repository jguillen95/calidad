@extends('layouts.plantillabase')

@section('title','Envasado')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
{{-- <a href="{{route('envasado.index')}}" class="btn btn-warning">Buscar Registros</a> --}}
<form action="{{route('limpieza.update', $consulta->id)}}" method="Post" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-md-3">
      <label for="fecha" class="form-label">Fecha de llenado</label>
      <input type="datetime-local" class="form-control" id="fecha" name="fecha" value="{{ $consulta->fecha }}" required>
    </div>
    <div class="col-md-3">
      <label for="linea" class="form-label">Linea</label>
      <input type="text" class="form-control" id="linea" name="linea" value="{{ $consulta->linea }}" required>
    </div>
    <div class="col-3">
      <label for="lote" class="form-label">Lote</label>
      <input type="text" class="form-control" id="lote" name="lote" value="{{ $consulta->lote }}" required>
    </div>
    <div class="col-3">
      <label for="orden" class="form-label">Orden</label>
      <input type="text" class="form-control" id="orden" value="{{ $consulta->orden }}" name="orden" required>
    </div>
    <div class="col-md-6">
        <label for="Producto" class="form-label">Producto</label>
        <input type="text" class="form-control" id="Producto" value="{{ $consulta->producto }}" name="producto" required>
      </div>
      <div class="col-md-3">
        <label for="presentacion" class="form-label">Presentación</label>
        <input type="text" class="form-control" id="presentacion" name="presentacion" value="{{ $consulta->presentacion }}" required>
      </div>
      <div class="col-md-3">
        <label for="verifico" class="form-label">Verificó</label>
        <input type="text" class="form-control" id="verifico" name="verifico" value="{{ $consulta->verifico }}" required>
      </div>
      <div class="col-md-12">
        <h4><strong>Selecciona SI o NO.</strong>A cada una de las siguientes preguntas:</h4>
      </div>
      <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q1" class="form-label"><strong>1. </strong>¿Los pisos, ventanas, marcos de las puertas y paredes están limpios, secos y libres
                de polvo?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                @if($consulta->q1 == "SI")
                <input type="radio" checked class="form-radio-input" id="q1" name="q1" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q1" name="q1" value="NO" required>NO
                @else
                <input type="radio"  class="form-radio-input" id="q1" name="q1" value="SI" required>SI
                <input type="radio" checked class="form-radio-input" id="q1" name="q1" value="NO" required>NO
                @endif
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q2" class="form-label"><strong>2. </strong>¿Bandas transportadoras, superficies (mesas de acumulación) y escaleras están
                limpias, secas y libres de polvo?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                @if($consulta->q2 == 'SI')
                <input type="radio" checked class="form-radio-input" id="q2" name="q2" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q2" name="q2" value="NO" required>NO
                @else
                <input type="radio"  class="form-radio-input" id="q2" name="q2" value="SI" required>SI
                <input type="radio" checked class="form-radio-input" id="q2" name="q2" value="NO" required>NO
                @endif
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q3" class="form-label"><strong>3. </strong>¿Los utensilios que se utilizaran en la línea están limpios, secos y libres de polvo?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                @if($consulta->q3 == 'SI')
                <input type="radio" checked class="form-radio-input" id="q3" name="q3" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q3" name="q3" value="NO" required>NO
                @else
                <input type="radio"  class="form-radio-input" id="q3" name="q3" value="SI" required>SI
                <input type="radio" checked class="form-radio-input" id="q3" name="q3" value="NO" required>NO
                @endif
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q4" class="form-label"><strong>4. </strong>¿Los equipos se encuentran limpios, secos, libres de fugas, poseen las protecciones
                adecuadas y los dispositivos de seguridad requeridos?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                @if($consulta->q4 == 'SI')
                <input type="radio" checked class="form-radio-input" id="q4" name="q4" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q4" name="q4" value="NO" required>NO
                @else
                <input type="radio" class="form-radio-input" id="q4" name="q4" value="SI" required>SI
                <input type="radio" checked class="form-radio-input" id="q4" name="q4" value="NO" required>NO
                @endif
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q5" class="form-label"><strong>5. </strong>¿Se realizó una correcta limpieza de la línea de acuerdo al PNO y se tiene registro
                de la limpieza?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                @if($consulta->q5 == 'SI')
                <input type="radio" checked class="form-radio-input" id="q5" name="q5" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q5" name="q5" value="NO" required>NO
                @else
                <input type="radio" class="form-radio-input" id="q5" name="q5" value="SI" required>SI
                <input type="radio" checked class="form-radio-input" id="q5" name="q5" value="NO" required>NO
                @endif
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q6" class="form-label"><strong>6. </strong>¿Los materiales están identificados correctamente y están ubicados en un lugar sin
                invadir zonas de paso?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                @if($consulta->q6 == 'SI')
                <input type="radio" checked class="form-radio-input" id="q6" name="q6" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q6" name="q6" value="NO" required>NO
                @else
                <input type="radio" class="form-radio-input" id="q6" name="q6" value="SI" required>SI
                <input type="radio" checked class="form-radio-input" id="q6" name="q6" value="NO" required>NO
                @endif
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q7" class="form-label"><strong>7. </strong>¿Las señales de seguridad están visibles y correctamente distribuidas?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                @if($consulta->q7 == 'SI')
                <input type="radio" checked class="form-radio-input" id="q7" name="q7" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q7" name="q7" value="NO" required>NO
                @else
                <input type="radio" class="form-radio-input" id="q7" name="q7" value="SI" required>SI
                <input type="radio" checked class="form-radio-input" id="q7" name="q7" value="NO" required>NO
                @endif
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q8" class="form-label"><strong>8. </strong>¿Los sanitizantes empleados son como indica el rol y está vigente la caducidad?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                @if($consulta->q8 == 'SI')
                <input type="radio" checked class="form-radio-input" id="q8" name="q8" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q8" name="q8" value="NO" required>NO
                @else
                <input type="radio" class="form-radio-input" id="q8" name="q8" value="SI" required>SI
                <input type="radio" checked class="form-radio-input" id="q8" name="q8" value="NO" required>NO
                @endif
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q9" class="form-label"><strong>9. </strong>¿Existen contenedores de Residuos identificados correctamente y limpios?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                @if($consulta->q9 == 'SI')
                <input type="radio" checked class="form-radio-input" id="q9" name="q9" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q9" name="q9" value="NO" required>NO
                @else
                <input type="radio" class="form-radio-input" id="q9" name="q9" value="SI" required>SI
                <input type="radio" checked class="form-radio-input" id="q9" name="q9" value="NO" required>NO
                @endif
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q10" class="form-label"><strong>10. </strong>¿Existen medios de limpieza a disposición del personal del área?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                @if($consulta->q10 == 'SI')
                <input type="radio" checked class="form-radio-input" id="q10" name="q10" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q10" name="q10" value="NO" required>NO
                @else
                <input type="radio" class="form-radio-input" id="q10" name="q10" value="SI" required>SI
                <input type="radio" checked class="form-radio-input" id="q10" name="q10" value="NO" required>NO
                @endif
            </div>
       </div>
       <div class="col-md-12">
        <h4><strong>Nota: </strong>en caso de que algún punto no se cumpla, realice las actividades necesarias hasta
            obtener el cumplimiento,<strong> anote qué fue lo corregido en las siguientes líneas.</strong></h4>
      </div>
      <div class="col-md-12">
        <input type="text" class="form-control" id="nota" name="nota" value="{{$consulta->nota}}">
      </div>
    <div class="col-12">
      <input type="submit" class="btn btn-primary" style="color:rgb(23, 23, 202);">
    </div>
  </form>
@endsection