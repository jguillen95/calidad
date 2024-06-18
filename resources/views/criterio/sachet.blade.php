@extends('layouts.plantillabase')

@section('title','Tabletas')
@section('h-title','Documentos Dibar')

{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<div class="container-fluid  ">
        <div class="row justify-content-md-center">
          <div class="col-md-12 ">
              <div class="card px-5 py-3 shadow">
                 <h3 class="text-danger text-center mb-4">Capsulas</h3>
  
                          <div class="nav nav-fill my-3">
                            <label class="nav-link shadow-sm step0    border ml-2 ">Bolsa</label>
                            <label class="nav-link shadow-sm step1   border ml-2 " >Etiquetas</label>
                            <label class="nav-link shadow-sm step2    border ml-2 ">Laminado</label>
                            <label class="nav-link shadow-sm step3   border ml-2 " >Mezcla</label>
                            <label class="nav-link shadow-sm step4   border ml-2 " >Etiqueta Bolsa</label>
                            <label class="nav-link shadow-sm step5   border ml-2 " >Caducidad Sachet</label>
                            <label class="nav-link shadow-sm step6   border ml-2 " >Lote en Bolsa</label>
                            <label class="nav-link shadow-sm step7   border ml-2 " >Condiciones de Sachet</label>
                            <label class="nav-link shadow-sm step8   border ml-2 " >Sellado</label>
                            <label class="nav-link shadow-sm step9   border ml-2 " >Corrugado</label>
                          </div>
            
                  <form action="{{route('sachet.store')}}" method="POST" enctype="multipart/form-data" class="employee-form">
                   @csrf
                  <div class="form-section col-lg-12">
                    <div class="col-md-4">
                      <label for="">Id sap Bolsa:</label>
                      <input type="text" class="form-control" name="id_sap_envase" required>
                    </div> <br>
                    <div class="col-md-4">
                      <label for="">Img bolsa aprovado:</label>
                      <input type="file" class="form-control" name="img_si_envase" required>
                    </div> <br>
                    <div class="col-md-12">
                      <label for="">Descripción de bolsa aprovado:</label>
                      <textarea name="desc_si_envase" id="desc_si" cols="140" rows="10" required></textarea>
                    </div> <br>
                    <div class="col-md-4">
                      <label for="">Img bolsa desaprovado:</label>
                      <input type="file" class="form-control" name="img_no_envase" required>
                    </div> <br>
                    <div class="col-md-12">
                      <label for="">Descripción de bolsa desaprovado:</label>
                      <textarea name="desc_no_envase" id="desc_no" cols="140" rows="10" required></textarea>
                    </div><br>
                   </div>
              <div class="form-section col-lg-12">
                   <div class="col-md-4">
                    <label for="">Id sap etiqueta:</label>
                    <input type="text" class="form-control" name="id_sap_tapa" required>
                  </div> <br>
                <div class="col-md-4">
                  <label for="">Img etiqueta aprovado:</label>
                  <input type="file" class="form-control" name="img_si_tapa" required>
                </div><br>
                <div class="col-md-12">
                  <label for="">Descripción etiqueta aprovado:</label>
                  <textarea name="desc_si_tapa" id="desc_si" cols="140" rows="10" required></textarea>
                </div><br>
                <div class="col-md-4">
                  <label for="">Img etiqueta desaprovado:</label>
                  <input type="file" class="form-control" name="img_no_tapa" required>
                </div><br>
                <div class="col-md-12">
                  <label for="">Descripción etiqueta desaprovado:</label>
                  <textarea name="desc_no_tapa" id="desc_no" cols="140" rows="10" required></textarea>
                </div>
                <div class="col-md-4">
                    <label for="">Id Sap etiqueta reverso</label>
                    <input type="text" class="form-control" name="id_sap_sello" required>
                  </div><br>
                <div class="col-md-4">
                    <label for="">Img etiqueta reverso aprovado:</label>
                    <input type="file" class="form-control" name="img_si_sello" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción etiqueta reverso aprovado:</label>
                    <textarea name="desc_si_sello" id="desc_si" cols="140" rows="10" required></textarea>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img etiqueta reverso desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_sello" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción etiqueta reverso desaprovado:</label>
                    <textarea name="desc_no_sello" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
            </div>
            <div class="form-section col-lg-12">
                <div class="col-md-4">
                <label for="">Id sap laminado:</label>
                <input type="text" class="form-control" name="id_sap_pegotin" required>
              </div>
              <div class="col-md-4">
                <label for="">Img laminado aprovado:</label>
                <input type="file" class="form-control" name="img_si_pegotin" required>
              </div>
              <div class="col-md-12">
                <label for="">Descripción laminado aprovado:</label>
                <textarea name="desc_si_pegotin" id="desc_si" cols="140" rows="10" required></textarea>
              </div>
              <div class="col-md-4">
                <label for="">Img laminado desaprovado:</label>
                <input type="file" class="form-control" name="img_no_pegotin" required>
              </div>
              <div class="col-md-12">
                <label for="">Descripción laminado desaprovado:</label>
                <textarea name="desc_no_pegotin" id="desc_no" cols="140" rows="10" required></textarea>
              </div>
            </div>
            {{-- Liner --}}
                  <div class="form-section col-lg-12">
                <div class="col-md-4">
                    <label for="">Img mezcla aprovado:</label>
                    <input type="file" class="form-control" name="img_si_mezcla" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción mezcla aprovado:</label>
                    <textarea name="desc_si_mezcla" id="desc_si" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img mezcla desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_mezcla" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción mezcla desaprovado:</label>
                    <textarea name="desc_no_mezcla" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                </div>

                <div class="form-section col-lg-12">
                    <div class="col-md-4">
                        <label for="">Img Etiquetado de la bolsa aprovado:</label>
                        <input type="file" class="form-control" name="img_si_display" required>
                      </div>
                      <div class="col-md-12">
                        <label for="">Descripción Etiquetado de la bolsa aprovado:</label>
                        <textarea name="desc_si_display" id="desc_si" cols="140" rows="10" required></textarea>
                      </div>
                      <div class="col-md-4">
                        <label for="">Img Etiquetado de la bolsa desaprovado:</label>
                        <input type="file" class="form-control" name="img_no_display" required>
                      </div>
                      <div class="col-md-12">
                        <label for="">Descripción Etiquetado de la bolsa desaprovado:</label>
                        <textarea name="desc_no_display" id="desc_no" cols="140" rows="10" required></textarea>
                      </div>
                    </div>
                
                <div class="form-section col-lg-12">
                 <div class="col-md-4">
                    <label for="">Img caducidad en sachet aprovado:</label>
                    <input type="file" class="form-control" name="img_si_codi" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción caducidad en sachet aprovado:</label>
                    <textarea name="desc_si_codi" id="desc_si" cols="140" rows="10" required></textarea>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img caducidad en sachet desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_codi" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción caducidad en sachet desaprovado:</label>
                    <textarea name="desc_no_codi" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-12">
                    <label for="">Lote:</label>
                    <input class="form-control" name="lote_envase_c" id="desc_no" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Caducidad:</label>
                    <input class="form-control" name="cad_envase_c" id="desc_no" required>
                  </div>
                </div>

                <br>
                <div class="form-section col-lg-12">
                  <div class="col-md-4">
                    <label for="">Img lote y caducidad en bolsa aprovado:</label>
                    <input type="file" class="form-control" name="img_si_display_c" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción lote y caducidad en bolsa aprovado:</label>
                    <textarea name="desc_si_display_c" id="desc_si" cols="140" rows="10" required></textarea>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img lote y caducidad en bolsa desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_display_c" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción lote y caducidad en bolsa desaprovado:</label>
                    <textarea name="desc_no_display_c" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-12">
                    <label for="">Lote:</label>
                    <input class="form-control" name="lote_display_c" id="desc_no" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Caducidad:</label>
                    <input class="form-control" name="cad_display_c" id="desc_no" required>
                  </div>
                </div>
                <div class="form-section col-lg-12">
                <div class="col-md-4">
                    <label for="">Img de las condiciones del sachet aprovado:</label>
                    <input type="file" class="form-control" name="img_si_acondicion" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción de las condiciones del sachet aprovado:</label>
                    <textarea name="desc_si_acondicion" id="desc_si" cols="140" rows="10" required></textarea>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img de las condiciones del sachet desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_acondicion" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción de las condiciones del sachet desaprovado:</label>
                    <textarea name="desc_no_acondicion" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img de las condiciones del sachet desaprovado 2:</label>
                    <input type="file" class="form-control" name="img_aux_1" required>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img de las condiciones del sachet desaprovado extra:</label>
                    <input type="file" class="form-control" name="img_aux_2" required>
                  </div><br>
                </div>
                <div class="form-section col-lg-12">
                  <div class="col-md-4">
                    <label for="">Img Sello aprovado:</label>
                    <input type="file" class="form-control" name="img_si_sellado" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción sello aprovado:</label>
                    <textarea name="desc_si_sellado" id="desc_si" cols="140" rows="10" required></textarea>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img sello desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_sellado" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_sellado" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                </div>
                <div class="form-section col-lg-12">
                    <div class="col-md-4">
                        <label for="">Id sap corrugado:</label>
                        <input type="text" class="form-control" name="sap_id_corrugado" required>
                      </div>
                    <div class="col-md-4">
                        <label for="">Img corrugado aprovado:</label>
                        <input type="file" class="form-control" name="img_si_corrugado" required>
                      </div>
                      <div class="col-md-12">
                        <label for="">Descripción corrugado aprovado:</label>
                        <textarea name="desc_si_corrugado" id="desc_si" cols="140" rows="10" required></textarea>
                      </div>
                      <div class="col-md-4">
                        <label for="">Img corrugado desaprovado:</label>
                        <input type="file" class="form-control" name="img_no_corrugado" required>
                      </div>
                      <div class="col-md-12">
                        <label for="">Descripción corrugado desaprovado:</label>
                        <textarea name="desc_no_corrugado" id="desc_no" cols="140" rows="10" required></textarea>
                      </div>
             </div>
                <div class="form-navigation mt-3">
                   <button type="button" class="previous btn btn-primary float-left">&lt; Previous</button>
                   <button type="button" class="next btn btn-primary float-right">Next &gt;</button>
                   <button type="submit" class="btn btn-success float-right">Submit</button>
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
