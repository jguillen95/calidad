@extends('layouts.plantillabase')

@section('title','Liquidos')
@section('h-title','Documentos Dibar')

{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<div class="container-fluid  ">
        <div class="row justify-content-md-center">
          <div class="col-md-12 ">
              <div class="card px-5 py-3 shadow">
                 <h3 class="text-danger text-center mb-4">Liquidos</h3>
  
                          <div class="nav nav-fill my-3">
                            <label class="nav-link shadow-sm step0    border ml-2 ">ENVASE</label>
                            <label class="nav-link shadow-sm step1   border ml-2 " >ETIQUETA</label>
                            <label class="nav-link shadow-sm step2    border ml-2 ">GOTERO</label>
                            <label class="nav-link shadow-sm step3   border ml-2 " >SELLO TERMO</label>
                            <label class="nav-link shadow-sm step4   border ml-2 " >DISPLAY</label>
                            <label class="nav-link shadow-sm step5   border ml-2 " >PEGOTÍN</label>
                            <label class="nav-link shadow-sm step6   border ml-2 " >MEZCLA</label>
                            <label class="nav-link shadow-sm step7   border ml-2 " >LOTE Y CADUCIDAD ENVASE</label>
                            <label class="nav-link shadow-sm step8   border ml-2 " >LOTE Y CADUCIDAD DISPLAY</label>
                            <label class="nav-link shadow-sm step9   border ml-2 " >CORRUGADO</label>
                          </div>
            
                  <form action="{{route('liquido.store')}}" method="POST" enctype="multipart/form-data" class="employee-form">
                   @csrf
                  <div class="form-section col-lg-12">
                    <div class="col-md-4">
                      <label for="">Id sap envase:</label>
                      <input type="text" class="form-control" name="id_sap_envase" required>
                    </div> <br>
                    <div class="col-md-4">
                      <label for="">Img envase aprovado:</label>
                      <input type="file" class="form-control" name="img_si_envase" required>
                    </div> <br>
                    <div class="col-md-12">
                      <label for="">Descripción de envase aprovado:</label>
                      <textarea name="desc_si_envase" id="desc_si" cols="140" rows="10" required></textarea>
                    </div> <br>
                    <div class="col-md-4">
                      <label for="">Img envase desaprovado:</label>
                      <input type="file" class="form-control" name="img_no_envase" required>
                    </div> <br>
                    <div class="col-md-12">
                      <label for="">Descripción de envase desaprovado:</label>
                      <textarea name="desc_no_envase" id="desc_no" cols="140" rows="10" required></textarea>
                    </div><br>
                   </div>
              <div class="form-section col-lg-12">
                   <div class="col-md-4">
                    <label for="">Id sap etiqueta:</label>
                    <input type="text" class="form-control" name="sap_id_etiqueta" required>
                  </div> <br>
                <div class="col-md-4">
                  <label for="">Img etiqueta aprovado:</label>
                  <input type="file" class="form-control" name="img_si_etiqueta" required>
                </div><br>
                <div class="col-md-12">
                  <label for="">Descripción etiqueta aprovado:</label>
                  <textarea name="desc_si_etiqueta" id="desc_si" cols="140" rows="10" required></textarea>
                </div><br>
                <div class="col-md-4">
                  <label for="">Img etiqueta desaprovado:</label>
                  <input type="file" class="form-control" name="img_no_etiqueta" required>
                </div><br>
                <div class="col-md-12">
                  <label for="">Descripción etiqueta desaprovado:</label>
                  <textarea name="desc_no_etiqueta" id="desc_no" cols="140" rows="10" required></textarea>
                </div><br>
                <div class="col-md-4">
                    <label for="">Img etiqueta en gotero aprovado:</label>
                    <input type="file" class="form-control" name="img_si_etiqueta_1" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción etiqueta en gotero aprovado:</label>
                    <textarea name="desc_si_etiqueta_1" id="desc_si" cols="140" rows="10" required></textarea>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img etiqueta en gotero desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_etiqueta_1" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción etiqueta en gotero desaprovado:</label>
                    <textarea name="desc_no_etiqueta_1" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
            </div>
            <div class="form-section col-lg-12">
                <div class="col-md-4">
                <label for="">Id sap gotero:</label>
                <input type="text" class="form-control" name="sap_id_gotero" required>
              </div>
              <div class="col-md-4">
                <label for="">Img gotero aprovado:</label>
                <input type="file" class="form-control" name="img_si_gotero" required>
              </div>
              <div class="col-md-12">
                <label for="">Descripción gotero aprovado:</label>
                <textarea name="desc_si_gotero" id="desc_si" cols="140" rows="10" required></textarea>
              </div>
              <div class="col-md-4">
                <label for="">Img gotero desaprovado:</label>
                <input type="file" class="form-control" name="img_no_gotero" required>
              </div>
              <div class="col-md-12">
                <label for="">Descripción gotero desaprovado:</label>
                <textarea name="desc_no_gotero" id="desc_no" cols="140" rows="10" required></textarea>
              </div><br>
              <div class="col-md-4">
                <label for="">Img dedal aprovado:</label>
                <input type="file" class="form-control" name="img_si_dedal" required>
              </div>
              <div class="col-md-12">
                <label for="">Descripción dedal aprovado:</label>
                <textarea name="desc_si_dedal" id="desc_si" cols="140" rows="10" required></textarea>
              </div>
              <div class="col-md-4">
                <label for="">Img dedal desaprovado:</label>
                <input type="file" class="form-control" name="img_no_dedal" required>
              </div>
              <div class="col-md-12">
                <label for="">Descripción dedal desaprovado:</label>
                <textarea name="desc_no_dedal" id="desc_no" cols="140" rows="10" required></textarea>
              </div>
            </div>
            {{-- Liner --}}

            <div class="form-section col-lg-12">
                <div class="col-md-4">
                  <label for="">Id sap termoencogible:</label>
                  <input type="text" class="form-control" name="sap_id_termo" required>
                </div><br>
                <div class="col-md-4">
                  <label for="">Img termoencogible aprovado:</label>
                  <input type="file" class="form-control" name="img_si_termo" required>
                </div> <br>
                <div class="col-md-12">
                  <label for="">Descripción de termoencogible aprovado:</label>
                  <textarea name="desc_si_termo" id="desc_si" cols="140" rows="10" required></textarea>
                </div> <br>
                <div class="col-md-4">
                  <label for="">Img termoencogible desaprovado:</label>
                  <input type="file" class="form-control" name="img_no_termo" required>
                </div> <br>
                <div class="col-md-12">
                  <label for="">Descripción de termoencogible desaprovado:</label>
                  <textarea name="desc_no_termo" id="desc_no" cols="140" rows="10" required></textarea>
                </div><br>
               </div>

               <div class="form-section col-lg-12">
                <div class="col-md-4">
                  <label for="">Id sap display:</label>
                  <input type="text" class="form-control" name="id_sap_display" required>
                </div><br>
                <div class="col-md-4">
                  <label for="">Img display aprovado:</label>
                  <input type="file" class="form-control" name="img_si_display" required>
                </div> <br>
                <div class="col-md-12">
                  <label for="">Descripción de display aprovado:</label>
                  <textarea name="desc_si_display" id="desc_si" cols="140" rows="10" required></textarea>
                </div> <br>
                <div class="col-md-4">
                  <label for="">Img display desaprovado:</label>
                  <input type="file" class="form-control" name="img_no_display" required>
                </div> <br>
                <div class="col-md-12">
                  <label for="">Descripción de display desaprovado:</label>
                  <textarea name="desc_no_display" id="desc_no" cols="140" rows="10" required></textarea>
                </div><br>
               </div>

               <div class="form-section col-lg-12">
                <div class="col-md-4">
                  <label for="">Id sap pegotín:</label>
                  <input type="text" class="form-control" name="id_sap_pegotin" required>
                </div><br>
                <div class="col-md-4">
                  <label for="">Img pegotín aprovado:</label>
                  <input type="file" class="form-control" name="img_si_pegotin" required>
                </div> <br>
                <div class="col-md-12">
                  <label for="">Descripción de pegotín aprovado:</label>
                  <textarea name="desc_si_pegotin" id="desc_si" cols="140" rows="10" required></textarea>
                </div> <br>
                <div class="col-md-4">
                  <label for="">Img pegotín desaprovado:</label>
                  <input type="file" class="form-control" name="img_no_pegotin" required>
                </div> <br>
                <div class="col-md-12">
                  <label for="">Descripción de pegotín desaprovado:</label>
                  <textarea name="desc_no_pegotin" id="desc_no" cols="140" rows="10" required></textarea>
                </div><br>
               </div>

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
                        <label for="">Img lote y caducidad en envase aprovado:</label>
                        <input type="file" class="form-control" name="img_si_codi" required>
                      </div>
                      <div class="col-md-12">
                        <label for="">Descripción lote y caducidad en envase aprovado:</label>
                        <textarea name="desc_si_codi" id="desc_si" cols="140" rows="10" required></textarea>
                      </div>
                      <div class="col-md-4">
                        <label for="">Img lote y caducidad en envase desaprovado:</label>
                        <input type="file" class="form-control" name="img_no_codi" required>
                      </div>
                      <div class="col-md-12">
                        <label for="">Descripción lote y caducidad en envase desaprovado:</label>
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
                
                    <div class="form-section col-lg-12">
                        <div class="col-md-4">
                            <label for="">Img lote y caducidad en display aprovado:</label>
                            <input type="file" class="form-control" name="img_si_display_c" required>
                          </div>
                          <div class="col-md-12">
                            <label for="">Descripción lote y caducidad en display aprovado:</label>
                            <textarea name="desc_si_display_c" id="desc_si" cols="140" rows="10" required></textarea>
                          </div>
                          <div class="col-md-4">
                            <label for="">Img lote y caducidad en display desaprovado:</label>
                            <input type="file" class="form-control" name="img_no_display_c" required>
                          </div>
                          <div class="col-md-12">
                            <label for="">Descripción lote y caducidad en display desaprovado:</label>
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
                        <label for="">Id sap corrugado:</label>
                        <input type="text" class="form-control" name="sap_id_corrugado" required>
                      </div><br>
                      <div class="col-md-4">
                        <label for="">Id sap separador:</label>
                        <input type="text" class="form-control" name="sap_id_separador" required>
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
