@extends('layouts.plantillabase')

@section('title','Envasado')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('envasado.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('envasado.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <div class="col-md-3">
      <label for="fecha" class="form-label">Fecha de llenado</label>
      <input type="datetime-local" class="form-control" id="fecha" name="fecha" required>
    </div>
    <div class="col-md-3">
      <label for="linea" class="form-label">Linea</label>
      <input type="text" class="form-control" id="linea" name="linea" required>
    </div>
    <div class="col-3">
      <label for="lote" class="form-label">Lote</label>
      <input type="text" class="form-control" id="lote" name="lote" required>
    </div>
    <div class="col-3">
      <label for="orden" class="form-label">Orden</label>
      <input type="text" class="form-control" id="orden" name="orden" required>
    </div>
    <div class="col-md-6">
        <label for="Producto" class="form-label">Producto</label>
        <input type="text" class="form-control" id="Producto" name="producto" required>
      </div>
      <div class="col-md-3">
        <label for="presentacion" class="form-label">Presentación</label>
        <input type="text" class="form-control" id="presentacion" name="presentacion" required>
      </div>
      <div class="col-md-3">
        <label for="verifico" class="form-label">Verificó</label>
        <input type="text" class="form-control" id="verifico" name="verifico" required>
      </div>
      <div class="col-md-12">
        <h4><strong>Selecciona SI o NO.</strong>A cada una de las siguientes preguntas:</h4>
      </div>
      <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q1" class="form-label"><strong>1. </strong>¿Los parámetros de área se encuentran dentro de especificación y el sistema de aire
                funciona correctamente?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                <input type="radio" class="form-radio-input" id="q1" name="q1" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q1" name="q1" value="NO" required>NO
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q2" class="form-label"><strong>2. </strong>¿Los equipos (tanques, balanzas, dosificadoras, bombas, etc.) A utilizar están
                identificados, en buen estado y funcionan correctamente ?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                <input type="radio" class="form-radio-input" id="q2" name="q2" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q2" name="q2" value="NO" required>NO
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q3" class="form-label"><strong>3. </strong>¿El área se encuentra sin golpes, rayones, manchones en techos paredes y pisos?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                <input type="radio" class="form-radio-input" id="q3" name="q3" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q3" name="q3" value="NO" required>NO
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q4" class="form-label"><strong>4. </strong>¿El área se encuentra correctamente identificada, ordenada, limpia, despejada de
                productos y formatos anteriores?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                <input type="radio" class="form-radio-input" id="q4" name="q4" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q4" name="q4" value="NO" required>NO
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q5" class="form-label"><strong>5. </strong>¿El personal involucrado está capacitado en el proceso a realizar y BPM ́s?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                <input type="radio" class="form-radio-input" id="q5" name="q5" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q5" name="q5" value="NO" required>NO
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q6" class="form-label"><strong>6. </strong>¿Están documentadas la limpieza del área y de los equipos en cuestión en el registro
                de limpieza y desinfección?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                <input type="radio" class="form-radio-input" id="q6" name="q6" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q6" name="q6" value="NO" required>NO
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q7" class="form-label"><strong>7. </strong>¿Los equipos identificados como limpios están en vigencia de limpieza?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                <input type="radio" class="form-radio-input" id="q7" name="q7" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q7" name="q7" value="NO" required>NO
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q8" class="form-label"><strong>8. </strong>¿Los recipientes con sanitizante están correctamente identificados, corresponden al
                sanitizante en turno y tienen fecha de caducidad vigente?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                <input type="radio" class="form-radio-input" id="q8" name="q8" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q8" name="q8" value="NO" required>NO
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q9" class="form-label"><strong>9. </strong>¿El uniforme del personal y equipo de seguridad se encuentra en buenas
                condiciones y se porta correctamente?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                <input type="radio" class="form-radio-input" id="q9" name="q9" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q9" name="q9" value="NO" required>NO
            </div>
       </div>
       <div class="col-md-12">
        <div class="col-md-8" style=" display: inline-block;">
            <label for="q10" class="form-label"><strong>10. </strong>¿Se encuentra disponible diagrama de proceso, ficha técnica del producto y orden
                de producción?</label>
        </div>
        <div class="col-md-1" style=" display: inline-block;"></div>
            <div class="col-md-2" style=" display: inline-block;">
                <input type="radio" class="form-radio-input" id="q10" name="q10" value="SI" required>SI
                <input type="radio" class="form-radio-input" id="q10" name="q10" value="NO" required>NO
            </div>
       </div>
       <div class="col-md-12">
        <h4><strong>Nota: </strong>en caso de que algún punto no se cumpla, realice las actividades necesarias hasta
            obtener el cumplimiento,<strong> anote qué fue lo corregido en las siguientes líneas.</strong></h4>
      </div>
      <div class="col-md-12">
        <input type="text" class="form-control" id="nota" name="nota">
      </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Siguiente</button>
    </div>
  </form>
@endsection