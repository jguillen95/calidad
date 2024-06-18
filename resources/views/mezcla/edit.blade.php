@extends('layouts.plantillabase')

@section('title','Mezcla')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('mezcla.index')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('mezcla.update', $consulta->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <div class="col-md-6">
      <label for="producto" class="form-label">Producto</label>
      <input type="text" class="form-control" id="producto" value="{{$consulta->producto}}" name="producto" required>
    </div>
    <div class="col-md-3">
        <label for="q1" class="form-label">Fecha</label>
        <input type="date" class="form-control" value="{{$consulta->q1}}" id="q1" name="q1" required>
      </div>
      <div class="col-md-3">
        <label for="q3" class="form-label">Caducidad</label>
        <input type="text" class="form-control" value="{{$consulta->q3}}" id="q3" name="q3" required>
      </div>
    <div class="col-md-3">
      <label for="lote" class="form-label">Lote</label>
      <input type="text" class="form-control" value="{{$consulta->q4}}" id="lote" name="q4" required>
    </div>
    <div class="col-md-3">
        <label for="q4" class="form-label">OP</label>
        <input type="text" class="form-control" id="q4" value="{{$consulta->q5}}" name="q5" required>
      </div>
    <div class="col-3">
      <label for="reviso" class="form-label">Revisó (Supervisor/Lider de linea)</label>
      <input type="text" class="form-control" id="reviso" value="{{$consulta->reviso}}" name="reviso" required>
    </div>
    <div class="col-3">
      <label for="autorizo" class="form-label">Liberó (Inspector/Calidad)</label>
      <input type="text" class="form-control" id="autorizo" value="{{$consulta->autorizo}}" name="autorizo" required>
    </div>
    <div class="col-md-12">
        <label for="observaciones" class="form-label">Observaciones</label>
        <input type="text" class="form-control" value="{{$consulta->observaciones}}" id="observaciones" name="observaciones" required>
    </div>
    <div class="col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Inicio Mezcla</th>
                    <th>Fin Mezcla</th>
                    <th>Tiempo</th>
                    <th>Apariencia</th>
                    <th>Color</th>
                    <th>Olor</th>
                    <th>Sabor</th>
                    <th>Granulometría</th>
                    <th>Consistencia</th>
                    <th>Solubilidad</th>
                    <th>PH</th>
                    <th>Peso Teórico</th>
                    <th>Peso Real</th>
                    <th>Cumple</th>
                    <th>Realizó</th>
                    <th>Verificó</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta2 as $item)
                    
                
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_mezcla[]" value="{{$item->id}}"></td>
                    <td><input type="time" name="i_mezcla[]" value="{{$item->i_mezcla}}"></td>
                    <td><input type="time" name="f_mezcla[]" value="{{$item->f_mezcla}}"></td>
                    <td><input type="text" name="tiempo[]" value="{{$item->tiempo}}"></td>
                    <td><input type="text" name="apariencia[]" value="{{$item->apariencia}}"></td>
                    <td><input type="text" name="color[]" value="{{$item->color}}"></td>
                    <td><input type="text" name="olor[]" value="{{$item->olor}}"></td>
                    <td><input type="text" name="sabor[]" value="{{$item->sabor}}"></td>
                    <td><input type="text" name="granulometria[]" value="{{$item->granulometria}}"></td>
                    <td><input type="text" name="consistencia[]" value="{{$item->consistencia}}"></td>
                    <td><input type="text" name="solubilidad[]" value="{{$item->solubilidad}}"></td>
                    <td><input type="text" name="ph[]" value="{{$item->ph}}"></td>
                    <td><input type="text" name="peso_teorico[]" value="{{$item->peso_teorico}}"></td>
                    <td><input type="text" name="peso_real[]" value="{{$item->peso_real}}"></td>
                    <td><input type="text" name="cumple[]" value="{{$item->cumple}}"></td>
                    <td><input type="text" name="firma_realizo[]" value="{{$item->firma_realizo}}"></td>
                    <td><input type="text" name="firma_verifico[]" value="{{$item->firma_verifico}}"></td>
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