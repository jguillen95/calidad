@extends('layouts.plantillabase')

@section('title','Viscosos')
@section('h-title','Documentos Dibar')

{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<div class="container-fluid  ">
        <div class="row justify-content-md-center">
          <div class="col-md-12 ">
              <div class="card px-5 py-3 shadow">
                 <h3 class="text-danger text-center mb-4">Viscosos</h3>
  
                          <div class="nav nav-fill my-3">
                            <label class="nav-link shadow-sm step0    border ml-2 ">Envase</label>
                            <label class="nav-link shadow-sm step1   border ml-2 " >Sello Inductivo</label>
                            <label class="nav-link shadow-sm step2    border ml-2 ">Pegotín</label>
                            <label class="nav-link shadow-sm step3   border ml-2 " >Display</label>
                            <label class="nav-link shadow-sm step4   border ml-2 " >Mezcla</label>
                            <label class="nav-link shadow-sm step5   border ml-2 " >Sellado de depresible</label>
                            <label class="nav-link shadow-sm step6   border ml-2 " >Acondicionamiento</label>
                            <label class="nav-link shadow-sm step7   border ml-2 " >Lote y caducidad en envase</label>
                            <label class="nav-link shadow-sm step8   border ml-2 " >Lote y caducidad en display</label>
                            <label class="nav-link shadow-sm step9  border ml-2 " >Acondicionamiento de corrugado</label>
                          </div>
            
                  <form action="{{route('viscoso.store')}}" method="POST" enctype="multipart/form-data" class="employee-form">
                   @csrf
                  <div class="form-section col-lg-12">
                    <div class="col-md-4">
                      <label for="">Id sap:</label>
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
                    <label for="">Id sap:</label>
                    <input type="text" class="form-control" name="id_sap_sello" required>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img Sello aprovado:</label>
                    <input type="file" class="form-control" name="img_si_sello" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción Sello aprovado:</label>
                    <textarea name="desc_si_sello" id="desc_si" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img sello desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_sello" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_sello" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                </div>
                <div class="form-section col-lg-12">
                    <div class="col-md-4">
                    <label for="">Id sap:</label>
                    <input type="text" class="form-control" name="id_sap_pegotin" required>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img pegotin aprovado:</label>
                    <input type="file" class="form-control" name="img_si_pegotin" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_pegotin" id="desc_si" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img envase desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_pegotin" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_pegotin" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                </div>
                <div class="form-section col-lg-12">
                    <div class="col-md-4">
                    <label for="">Id sap:</label>
                    <input type="text" class="form-control" name="id_sap_display" required>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img display aprovado:</label>
                    <input type="file" class="form-control" name="img_si_display" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_display" id="desc_si" cols="140" rows="10" required></textarea>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img display desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_display" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_display" id="desc_no" cols="140" rows="10" required></textarea>
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
                    <label for="">Img Sellado aprovado:</label>
                    <input type="file" class="form-control" name="img_si_sellado" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_sellado" id="desc_si" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img Sellado desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_sellado" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_sellado" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                </div>
                <div class="form-section col-lg-12">
                  <div class="col-md-4">
                    <label for="">Img Acondicionamiento aprovado:</label>
                    <input type="file" class="form-control" name="img_si_acondicion" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_acondicion" id="desc_si" cols="140" rows="10" required></textarea>
                  </div><br>
                  <div class="col-md-4">
                    <label for="">Img Acondicionamiento desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_acondicion" required>
                  </div><br>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_acondicion" id="desc_no" cols="140" rows="10" required></textarea>
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
                  <div class="col-md-4">
                    <label for="">Img Display-lote aprovado:</label>
                    <input type="file" class="form-control" name="img_si_display_c" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_display_c" id="desc_si" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img Display-lote desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_display_c" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_display_c" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-12">
                    <label for="">Lote en Display:</label>
                    <input type="text" name="lote_display_c" id="lote" class="form-control" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Caducidad en Display:</label>
                    <input type="text" name="cad_display_c" id="cad" class="form-control" required>
                  </div>
                </div>
                <div class="form-section col-lg-12">
                  <div class="col-md-4">
                    <label for="">Id sap Corrugado:</label>
                    <input type="text" class="form-control" name="sap_id_corrugado" required>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img Corrugado aprovado:</label>
                    <input type="file" class="form-control" name="img_si_corrugado" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción aprovado:</label>
                    <textarea name="desc_si_corrugado" id="desc_si" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img Corrugado desaprovado:</label>
                    <input type="file" class="form-control" name="img_no_corrugado" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">Descripción desaprovado:</label>
                    <textarea name="desc_no_corrugado" id="desc_no" cols="140" rows="10" required></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img Acomodo:</label>
                    <input type="file" class="form-control" name="img_si_acomodo" required>
                  </div>
                  <div class="col-md-4">
                    <label for="">Img Acomodo:</label>
                    <input type="file" class="form-control" name="img_no_acomodo" required>
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
