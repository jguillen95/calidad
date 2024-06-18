@extends('layouts.plantillabase')

@section('title','Desviación')
@section('h-title','Documentos Dibar')


@section('content')

<a href="{{route('desviacion.index')}}" class="btn btn-warning">Buscar Registros</a>
<div class="container-fluid  ">
        <div class="row justify-content-md-center">
          <div class="col-md-12 ">
              <div class="card px-5 py-3 shadow">
                 <h3 class="text-danger text-center mb-4">Desviación</h3>
  
                          <div class="nav nav-fill my-3">
                            <label class="nav-link shadow-sm step0    border ml-2 ">Desviación</label>
                            <label class="nav-link shadow-sm step1   border ml-2 " >Anexos</label>
                            {{-- <label class="nav-link shadow-sm step2   border ml-2 " >Elaborado por</label>
                            <label class="nav-link shadow-sm step3   border ml-2 " >Cierre</label> --}}
                          </div>
            
                  <form action="{{route('desviacion.store')}}" method="POST" enctype="multipart/form-data" class="employee-form">
                   @csrf
                  <div class="form-section">
                    <label for="area" class="form-label">Área</label>
                    <input type="text" class="form-control" id="area" name="area" required>
                    <label for="producto" class="form-label">Producto</label>
                    <input type="text" class="form-control" id="producto" name="producto" required>
                    <label for="presentacion" class="form-label">Presentación</label>
                    <input type="text" class="form-control" id="presentacion" name="presentacion" required>
                    <label for="lote" class="form-label">Lote</label>
                    <input type="text" class="form-control" id="lote" name="lote" required>
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad" required>
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    <label for="desviacion" class="form-label">Desviación</label>
                    <input type="text" class="form-control" id="desviacion" name="desviacion" required>
                    <label for="investigacion" class="form-label">investigacion</label>
                    <input type="text" class="form-control" id="investigacion" name="investigacion" required>
                  </div>
                  <div class="form-section">
                    <label for="anexos" class="form-label">Anexos</label>
                    <input type="file" name="anexos">
                  </div>
                  {{-- <div class="form-section">
                   
                    <label for="responsableC" class="form-label">Responsable Calidad</label>
                    <select type="text" class="form-select" id="responsableC" name="responsableC">
                      @foreach($responsablesC as $item)  
                      <option value="{{$item->nombre_resp}}, {{$item->puesto_resp}}">{{$item->nombre_resp}}</option>
                      @endforeach
                    </select>
                    <label for="responsableP" class="form-label">Responsable Producción
                    </label>
                    <select type="text" class="form-select" id="responsableP" name="responsableP">
                      @foreach($responsablesP as $item)  
                      <option value="{{$item->nombre_resp}}, {{$item->puesto_resp}}">{{$item->nombre_resp}}</option>
                      @endforeach
                    </select>

                  </div>
                  <div class="form-section">
                    <label for="departamento" class="form-label">Departamento que cierra</label>
                    <input type="text" class="form-control" id="departamento" name="departamento">
                    <label for="firma_cierre" class="form-label">Firma de Cierre</label>
                    <input type="text" class="form-control" id="firma_cierre" name="firma_cierre">
                    <label for="fecha_cierre" class="form-label">fecha de Cierre</label>
                    <input type="datetime-local" class="form-control" id="fecha_cierre" name="fecha_cierre">
                    <label for="estatus" class="form-label">Estatus</label>
                    <select type="text" class="form-select" id="estatus" name="estatus">
                        <option value="1">Abierto</option>
                        <option value="2">Pendiente</option>
                        <option value="3">Cerrado</option>
                    </select>
                  </div> --}}
                <div class="form-navigation mt-3">
                   <button type="button" class="previous btn btn-primary float-left">&lt; Previous</button>
                   <button type="button" class="next btn btn-primary float-right">Next &gt;</button>
                   <button type="submit" class="btn btn-success float-right">Siguiente</button>
                </div>
  
              </form>
          </div>
              
          </div>
        </div>
      </div>
  
  
  
  
  <script>
  
      $(function(){
          var $sections=$('.form-section');
  
          function navigateTo(index){
  
              $sections.removeClass('current').eq(index).addClass('current');
  
              $('.form-navigation .previous').toggle(index>0);
              var atTheEnd = index >= $sections.length - 1;
              $('.form-navigation .next').toggle(!atTheEnd);
              $('.form-navigation [Type=submit]').toggle(atTheEnd);
  
       
              const step= document.querySelector('.step'+index);
              step.style.backgroundColor="rgb(34 46 60)";
              step.style.color="white";
  
  
  
          }
  
          function curIndex(){
  
              return $sections.index($sections.filter('.current'));
          }
  
          $('.form-navigation .previous').click(function(){
              navigateTo(curIndex() - 1);
          });
  
          $('.form-navigation .next').click(function(){
              $('.employee-form').parsley().whenValidate({
                  group:'block-'+curIndex()
              }).done(function(){
                  navigateTo(curIndex()+1);
              });
  
          });
  
          $sections.each(function(index,section){
              $(section).find(':input').attr('data-parsley-group','block-'+index);
          });

         
  
          navigateTo(0);
  
   });
  
  </script>
  
  
  
{{-- Cierre código multistep --}}
@endsection
