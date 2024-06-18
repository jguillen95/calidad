@extends('layouts.plantillabase')

@section('title','Desviación')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')

<form action="{{route('desviacion.update', $desviaciones->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-md-3">
      <label for="area" class="form-label">Área</label>
      <input type="text" class="form-control" id="area" name="area" value="{{$desviaciones->area_des}}">
    </div>
    <div class="col-md-3">
      <label for="producto" class="form-label">Producto</label>
      <input type="text" class="form-control" id="producto" name="producto" value="{{$desviaciones->prodcuto_des}}">
    </div>
    <div class="col-3">
      <label for="presentacion" class="form-label">Presentación</label>
      <input type="text" class="form-control" id="presentacion" name="presentacion" value="{{$desviaciones->presentacion_des}}">
    </div>
    <div class="col-3">
      <label for="lote" class="form-label">Lote</label>
      <input type="text" class="form-control" id="lote" name="lote" value="{{$desviaciones->lote_des}}">
    </div>
    <div class="col-md-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{$desviaciones->cantidad_des}}">
      </div>
      <div class="col-md-9">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$desviaciones->descripcion_des}}">
      </div>
      <div class="col-md-12">
        <label for="desviacion" class="form-label">Desviación</label>
        <input type="text" class="form-control" id="desviacion" name="desviacion" value="{{$desviaciones->desviacion_des}}">
      </div>
      <div class="col-md-12">
        <label for="investigacion" class="form-label">investigacion</label>
        <input type="text" class="form-control" id="investigacion" name="investigacion" value="{{$desviaciones->investigacion_des}}">
      </div>
      <div class="col-lg-12">
        <table class="table table-striped">
              <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Actividad</th>
                <th>Responsable</th>
                <th>Fecha de la acción</th>
                <th>Firma</th>
              </tr>
              <tbody>
                @foreach ($correcciones as $item)
                <tr>
                  <td>{{$item->id}}<input hidden type="text" name="id_correcciones[]" value="{{$item->id}}"></td>
                  <td>{{$item->tipo}}</td>
                  <td><input name="actividad[]" class="form-control" type="text" value="{{$item->actividad}}"></td>
                  <td><input name="responsable[]" class="form-control" type="text" value="{{$item->responsable}}"></td>
                  <td><input name="fecha_corre[]" class="form-control" type="dateTime-local" value="{{$item->fecha_corre}}"></td>
                  <td><input name="firma_corre[]" class="form-control" type="text" value="{{$item->firma_corre}}"></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div> 
          
          <div class="col-lg-12">
            <table class="table table-striped">
                  <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Responsable</th>
                    <th>Fecha</th>
                    <th>Firma</th>
                  </tr>
                  <tbody>
                    @foreach ($documentos as $item)
                    <tr>
                      <td>{{$item->id}}<input hidden type="text" name="id_documentos[]" value="{{$item->id}}"></td>
                      <td><input name="codigo_mod[]" class="form-control" type="text" value="{{$item->codigo}}"></td>
                      <td><input name="titulo_mod[]" class="form-control" type="text" value="{{$item->titulo}}"></td>
                      <td><input name="responsable_mod[]" class="form-control" type="text" value="{{$item->responsable}}"></td>
                      <td><input name="fecha_mod[]" class="form-control" type="text" value="{{$item->fecha}}"></td>
                      <td><input name="firma_mod[]" class="form-control" type="text" value="{{$item->firma_mod}}"></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
      <div class="col-md-3">
        <label for="firma_des" class="form-label">Firma de quien elaboró</label>
        <input type="text" class="form-control" id="firma_des" name="firma_des" value="{{$desviaciones->firma}}">
      </div>
      <div class="col-md-3">
        <label for="vobo" class="form-label">Elaborado Por</label>
        <input type="text" class="form-control" id="vobo" name="vobo" value="{{$desviaciones->vobo_des}}">
      </div>
      <div class="col-md-3">
        <label for="responsableC" class="form-label">Vobo Calidad</label>
        <input type="text" class="form-control" id="responsableC" name="responsableC" value="{{$desviaciones->responsableC}}">
      </div>
      <div class="col-md-3">
        <label for="responsableP" class="form-label">Vobo Producción</label>
        <input type="text" class="form-control" id="responsableP" name="responsableP" value="{{$desviaciones->responsableP}}">
      </div>

      <div class="col-lg-12">
        <table class="table table-striped">
              <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Realizó</th>
                <th>Fecha</th>
              </tr>
              <tbody>
                @foreach ($seguimientos as $item)
                <tr>
                  <td>{{$item->id}}<input hidden type="text" name="id_seguimientos[]" value="{{$item->id}}"></td>
                  <td><input name="descripcion_seg[]" class="form-control" type="text" value="{{$item->descripcion_seg}}"></td>
                  <td><input name="realizo_seg[]" class="form-control" type="text" value="{{$item->realizo_seg}}"></td>
                  <td><input name="fecha_seg[]" class="form-control" type="text" value="{{$item->fecha_seg}}"></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

      <div class="col-md-3">
        <label for="dptoCierre_des" class="form-label">Departamento que cierra</label>
        <input type="text" class="form-control" id="dptoCierre_des" name="dptoCierre_des" value="{{$desviaciones->dptoCierre_des}}">
      </div>
      <div class="col-md-3">
        <label for="firma_cierre" class="form-label">Firma de cierre</label>
        <input type="text" class="form-control" id="firma_cierre" name="firma_cierre" value="{{$desviaciones->firma_cierre}}">
      </div>
      <div class="col-md-3">
        <label for="fecha_cierre" class="form-label">fecha de Cierre</label>
        <input type="datetime-local" class="form-control" id="fecha_cierre" name="fecha_cierre" value="{{$desviaciones->fechaCierre_des}}">
      </div>
      <div class="col-md-3">
        <label for="estatus" class="form-label">Estatus</label>
        <select type="text" class="form-select" id="estatus" name="estatus">
          @if ($desviaciones->Estatus_des == "1")
            <option selected value="1">Abierto</option>
            <option  value="2">Pendiente</option>
            <option value="3">Cerrado</option>
          @elseif($desviaciones->Estatus_des == "2")
            <option selected value="2">Pendiente</option>
            <option  value="1">Abierto</option>
            <option value="3">Cerrado</option>
            @else
            <option selected value="3">Cerrado</option>
            <option value="1">Abierto</option>
            <option  value="2">Pendiente</option>
          @endif
        </select>
      </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Actualizar Datos</button>
    </div>
  </form>
@endsection