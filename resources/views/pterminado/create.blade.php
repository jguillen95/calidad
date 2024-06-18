@extends('layouts.plantillabase')

@section('title','Especificaciones')
@section('h-title','Documentos Dibar')


@section('content')

<a href="{{route('pterminado.index')}}" class="btn btn-warning">Buscar Registros</a>
<div class="container-fluid  ">
        <div class="row justify-content-md-center">
          <div class="col-md-12 ">
              <div class="card px-5 py-3 shadow">
                 <h3 class="text-danger text-center mb-4">Especificaciones de producto terminado</h3>
  
                          <div class="nav nav-fill my-3">
                            <label class="nav-link shadow-sm step0    border ml-2 ">info de PT</label>
                            <label class="nav-link shadow-sm step1   border ml-2 " >Imagenes</label>
                            <label class="nav-link shadow-sm step3   border ml-2 " >Producto a Granel</label>
                            <label class="nav-link shadow-sm step4   border ml-2 " >Almacenamiento</label>
                          </div>
            
                  <form action="{{route('pterminado.store')}}" method="POST" enctype="multipart/form-data" class="employee-form">
                   @csrf
                  <div class="form-section">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="area" name="descripcion" required>
                    <label for="id_sap" class="form-label">ID SAP</label>
                    <input type="text" class="form-control" id="id_sap" name="id_sap" required>
                    <label for="codigo" class="form-label">código</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" required>
                    <label for="categoria" class="form-label">categoria</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" required>
                    <label for="sub_categoria" class="form-label">sub_categoria</label>
                    <input type="text" class="form-control" id="sub_categoria" name="sub_categoria" required>
                    <label for="marca" class="form-label">marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" required>
                  </div>
                  <div class="form-section">
                    <label for="img_envase" class="form-label">Envase</label><br>
                    <input type="file" name="img_envase" required> <br> <br>
                    <label for="img_display" class="form-label">Display</label><br>
                    <input type="file" name="img_display"> <br> <br>
                    <label for="img_caja" class="form-label">Producto en caja</label><br>
                    <input type="file" name="img_caja" required> <br> <br>
                    <label for="img_palet" class="form-label">Cajas en palet</label><br>
                    <input type="file" name="img_palet" required> <br><br>
                    <label for="img_opc" class="form-label">Otros</label><br>
                    <input type="file" name="img_opc" required>
                  </div>
                  <div class="form-section">
                    <label for="apariencia_granel" class="form-label">Apariencia</label>
                    <input type="text" class="form-control" id="apariencia_granel" name="apariencia_granel" required>
                    <label for="color_granel" class="form-label">Color</label>
                    <input type="text" class="form-control" id="color_granel" name="color_granel" required>
                    <label for="olor_granel" class="form-label">Olor</label>
                    <input type="text" class="form-control" id="olor_granel" name="olor_granel" required>
                </div>
                  <div class="form-section">
                    <label for="almacenamiento" class="form-label">Almacenamiento</label>
                    <input type="text" class="form-control" id="almacenamiento" name="almacenamiento">
                    <label for="transporte" class="form-label">Transporte</label>
                    <input type="text" class="form-control" id="transporte" name="transporte">
                    <label for="lote_caducidad" class="form-label">Lote y fecha de caducidad</label>
                    <input type="text" class="form-control" id="lote_caducidad" name="lote_caducidad">
                  </div>
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
