@extends('layouts.plantillabase')

@section('title','Tabletas')
@section('h-title','Documentos Dibar')

{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<div class="container-fluid  ">
        <div class="row justify-content-md-center">
          <div class="col-md-12 ">
              <div class="card px-5 py-3 shadow">
                 <h3 class="text-danger text-center mb-4">Tabletas</h3>
  
                          <div class="nav nav-fill my-3">
                            <label class="nav-link shadow-sm step0    border ml-2 ">Envase/Tapa</label>
                            <label class="nav-link shadow-sm step1   border ml-2 " >Liner</label>
                            <label class="nav-link shadow-sm step2    border ml-2 ">Etiqueta</label>
                            <label class="nav-link shadow-sm step3   border ml-2 " >Tssapón</label>
                            <label class="nav-link shadow-sm step4   border ml-2 " >Desecante</label>
                            <label class="nav-link shadow-sm step5   border ml-2 " >Termocogible</label>
                            <label class="nav-link shadow-sm step6   border ml-2 " >Mezcla</label>
                            <label class="nav-link shadow-sm step7   border ml-2 " >Tableteado</label>
                            <label class="nav-link shadow-sm step8   border ml-2 " >Display</label>
                            <label class="nav-link shadow-sm step9   border ml-2 " >Lote y caducidad en envase</label>
                            <label class="nav-link shadow-sm step10  border ml-2 " >Acondicionamiento de corrugado</label>
                          </div>
            
                  <form action="{{route('polvoadicional.store')}}" method="POST" enctype="multipart/form-data" class="employee-form">
                   @csrf
                  <div class="form-section col-lg-12">
                    <div class="col-md-4">
                      <label for="">Id sap Envase:</label>
                      <input type="text" class="form-control" name="id_sap_envase" required>
                    </div> <br>
                    <div class="col-md-4">
                      <label for="">Img envase aprovado:</label>
                      <input type="file" class="form-control" name="img_si_envase" required>
                    </div> <br>
                    <div class="col-md-12">
                      <label for="">Descripción aprovado:</label>
                      <textarea name="desc_si_envase" id="desc_si" cols="140" rows="10" required></textarea>
                    </div> <br>
                    <div class="col-md-4">
                      <label for="">Img envase desaprovado:</label>
                      <input type="file" class="form-control" name="img_no_envase" required>
                    </div> <br>
                    <div class="col-md-12">
                      <label for="">Descripción desaprovado:</label>
                      <textarea name="desc_no_envase" id="desc_no" cols="140" rows="10" required></textarea>
                    </div><br>
                    <div class="col-md-4">
                        <label for="">Id sap Tapa:</label>
                        <input type="text" class="form-control" name="id_sap_tapa" required>
                      </div> <br>
                    <div class="col-md-4">
                      <label for="">Img Tapa aprovado:</label>
                      <input type="file" class="form-control" name="img_si_tapa" required>
                    </div><br>
                    <div class="col-md-12">
                      <label for="">Descripción tapa aprovado:</label>
                      <textarea name="desc_si_tapa" id="desc_si" cols="140" rows="10" required></textarea>
                    </div><br>
                    <div class="col-md-4">
                      <label for="">Img tapa desaprovado:</label>
                      <input type="file" class="form-control" name="img_no_tapa" required>
                    </div><br>
                    <div class="col-md-12">
                      <label for="">Descripción tapa desaprovado:</label>
                      <textarea name="desc_no_tapa" id="desc_no" cols="140" rows="10" required></textarea>
                    </div>
                  </div>

                  <div class="form-section col-lg-12">
                    <div class="col-md-4">
                    <label for="">Id sap liner:</label>
                    <input type="text" class="form-control" name="id_sap_sello" required>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img liner aprovado:</label>
                    <input type="file" class="form-control" name="img_si_sello" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción liner aprovado:</label>
                    <textarea name="desc_si_sello" id="desc_si" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img liner desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_sello" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_sello" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                </div>
                <div class="form-section col-lg-12">
                    <div class="col-md-4">
                    <label for="">Id sap Etiqueta:</label>
                    <input type="text" class="form-control" name="id_sap_pegotin" required>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img etiqueta aprovado:</label>
                    <input type="file" class="form-control" name="img_si_pegotin" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_pegotin" id="desc_si" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img etiqueta desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_pegotin" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_pegotin" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                </div>
                <div class="form-section col-lg-12">
                    <div class="col-md-4">
                    <label for="">Id sap Tapón:</label>
                    <input type="text" class="form-control" name="id_sap_display" required>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img tapón aprovado:</label>
                    <input type="file" class="form-control" name="img_si_display" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_display" id="desc_si" cols="140" rows="10" required></textarea>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img tapón desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_display" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_display" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                </div>

                <br>
                <div class="form-section col-lg-12">
                    <div class="col-md-4">
                    <label for="">Id sap Desecante:</label>
                    <input type="text" class="form-control" name="sap_id_desecante" required>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img Desecante aprovado:</label>
                    <input type="file" class="form-control" name="img_si_desecante" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_desecante" id="desc_si" cols="140" rows="10" required></textarea>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img Desecante desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_desecante" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_desecante" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                </div>
                <div class="form-section col-lg-12">
                    <div class="col-md-4">
                    <label for="">Id sap TermoEncogible:</label>
                    <input type="text" class="form-control" name="sap_id_termo" required>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img TermoEncogible aprovado:</label>
                    <input type="file" class="form-control" name="img_si_termo" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_termo" id="desc_si" cols="140" rows="10" required></textarea>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img TermoEncogible desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_termo" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_termo" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                </div>
                <div class="form-section col-lg-12">
                  <div class="col-md-4">
                    <label for="">Img Mezcla aprovado:</label>
                    <input type="file" class="form-control" name="img_si_mezcla" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_mezcla" id="desc_si" cols="140" rows="10" required></textarea>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img Mezcla desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_mezcla" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_mezcla" id="desc_no" cols="140" rows="10" required></textarea>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Desnsidad:</label>
                    <input type="text" class="form-control" name="densidad" required>
                    </div><br>
                    <div class="col-md-4">
                        <label for="">pH:</label>
                        <input type="text" class="form-control" name="ph" required>
                    </div><br>
                    <div class="col-md-4">
                        <label for="">Viscosidad:</label>
                        <input type="text" class="form-control" name="viscosidad" required>
                    </div>
                </div>

                <div class="form-section col-lg-12">
                  <div class="col-md-4">
                    <label for="">Img Tableteado aprovado:</label>
                    <input type="file" class="form-control" name="img_si_sellado" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_sellado" id="desc_si" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img tableteado desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_sellado" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_sellado" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                </div>

                <div class="form-section col-lg-12">
                    <div class="col-md-4">
                        <label for="">Img Display aprovado:</label>
                        <input type="file" class="form-control" name="img_si_display_c" required>
                      </div>
                      <div class="col-md-12">
                        <label for="">Descripción aprovado:</label>
                        <textarea name="desc_si_display_c" id="desc_si" cols="140" rows="10" required></textarea>
                      </div>
                      <div class="col-md-4">
                        <label for="">Img Display desaprovado:</label>
                        <input type="file" class="form-control" name="img_no_display_c" required>
                      </div>
                      <div class="col-md-12">
                        <label for="">Descripción desaprovado:</label>
                        <textarea name="desc_no_display_c" id="desc_no" cols="140" rows="10" required></textarea>
                </div>
            </div>

                <div class="form-section col-lg-12">
                  <div class="col-md-4">
                    <label for="">Img Lote aprovado:</label>
                    <input type="file" class="form-control" name="img_si_codi" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_codi" id="desc_si" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img lote desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_codi" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_codi" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-12">
                    <label for="">Lote:</label>
                    <input type="text" class="form-control" name="lote_envase_c" id="lote" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Caducidad:</label>
                    <input type="text" class="form-control" name="cad_envase_c" id="cad" required>
                  </div>
                </div>
                
                </div>
                <div class="form-section col-lg-12">
                  <div class="col-md-4">
                    <label for="">Id sap Embalaje:</label>
                    <input type="text" class="form-control" name="sap_id_corrugado" required>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img Embalaje aprovado:</label>
                    <input type="file" class="form-control" name="img_si_corrugado" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_corrugado" id="desc_si" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img Embalaje desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_corrugado" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
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
