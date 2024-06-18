@extends('layouts.plantillabase')

@section('title','Liquidos')
@section('h-title','Documentos Dibar')

{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<div class="container-fluid  ">
        <div class="row justify-content-md-center">
          <div class="col-md-12 ">
              <div class="card px-5 py-3 shadow">
                 <h3 class="text-danger text-center mb-4">Polvos</h3>
  
                          <div class="nav nav-fill my-3">
                            <label class="nav-link shadow-sm step0    border ml-2 ">BOLSA</label>
                            <label class="nav-link shadow-sm step1   border ml-2 " >CUCHARA</label>
                            <label class="nav-link shadow-sm step2    border ml-2 ">SEPARADOR</label>
                            <label class="nav-link shadow-sm step3   border ml-2 " >MEZCLA</label>
                            <label class="nav-link shadow-sm step4   border ml-2 " >LOTE Y CADUCIDAD</label>
                            <label class="nav-link shadow-sm step5   border ml-2 " >SELLADO</label>
                            <label class="nav-link shadow-sm step6   border ml-2 " >EMBALAJE</label>
                          </div>
            
                  <form action="{{route('polvo.store')}}" method="POST" enctype="multipart/form-data" class="employee-form">
                   @csrf
                  <div class="form-section col-lg-12">
                    <div class="col-md-4">
                      <label for="">Id sap bolsa:</label>
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
                    <label for="">Id sap cuchara:</label>
                    <input type="text" class="form-control" name="id_sap_tapa" required>
                  </div> <br>
                <div class="col-md-4">
                  <label for="">Img cuchara aprovado:</label>
                  <input type="file" class="form-control" name="img_si_tapa" required>
                </div><br>
                <div class="col-md-12">
                  <label for="">Descripción cuchara aprovado:</label>
                  <textarea name="desc_si_tapa" id="desc_si" cols="140" rows="10" required></textarea>
                </div><br>
                <div class="col-md-4">
                  <label for="">Img cuchara desaprovado:</label>
                  <input type="file" class="form-control" name="img_no_tapa" required>
                </div><br>
                <div class="col-md-12">
                  <label for="">Descripción cuchara desaprovado:</label>
                  <textarea name="desc_no_tapa" id="desc_no" cols="140" rows="10" required></textarea>
                </div>
            </div>
            <div class="form-section col-lg-12">
                <div class="col-md-4">
                <label for="">Id sap separador:</label>
                <input type="text" class="form-control" name="id_sap_sello" required>
              </div>
              <div class="col-md-4">
                <label for="">Img separador aprovado:</label>
                <input type="file" class="form-control" name="img_si_sello" required>
              </div>
              <div class="col-md-12">
                <label for="">Descripción separador aprovado:</label>
                <textarea name="desc_si_sello" id="desc_si" cols="140" rows="10" required></textarea>
              </div>
              <div class="col-md-4">
                <label for="">Img separador desaprovado:</label>
                <input type="file" class="form-control" name="img_no_sello" required>
              </div>
              <div class="col-md-12">
                <label for="">Descripción separador desaprovado:</label>
                <textarea name="desc_no_sello" id="desc_no" cols="140" rows="10" required></textarea>
              </div>
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
                    {{-- Aquí me quede --}}
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
                            <label for="">Id sap sellado:</label>
                            <input type="text" class="form-control" name="sap_id_sellado" required>
                          </div><br>
                        <div class="col-md-4">
                            <label for="">Img sellado aprovado:</label>
                            <input type="file" class="form-control" name="img_si_sellado" required>
                          </div>
                          <div class="col-md-12">
                            <label for="">Descripción sellado aprovado:</label>
                            <textarea name="desc_si_sellado" id="desc_si" cols="140" rows="10" required></textarea>
                          </div>
                          <div class="col-md-4">
                            <label for="">Img sellado desaprovado:</label>
                            <input type="file" class="form-control" name="img_no_sellado" required>
                          </div>
                          <div class="col-md-12">
                            <label for="">Descripción sellado desaprovado:</label>
                            <textarea name="desc_no_sellado" id="desc_no" cols="140" rows="10" required></textarea>
                          </div>
                </div>   
                <div class="form-section col-lg-12">
                    <div class="col-md-4">
                        <label for="">Id sap embalaje:</label>
                        <input type="text" class="form-control" name="sap_id_acondicion" required>
                      </div><br>
                    <div class="col-md-4">
                        <label for="">Img embalaje aprovado:</label>
                        <input type="file" class="form-control" name="img_si_acondicion" required>
                      </div>
                      <div class="col-md-12">
                        <label for="">Descripción embalaje aprovado:</label>
                        <textarea name="desc_si_acondicion" id="desc_si" cols="140" rows="10" required></textarea>
                      </div>
                      <div class="col-md-4">
                        <label for="">Img embalaje desaprovado:</label>
                        <input type="file" class="form-control" name="img_no_acondicion" required>
                      </div>
                      <div class="col-md-12">
                        <label for="">Descripción embalaje desaprovado:</label>
                        <textarea name="desc_no_acondicion" id="desc_no" cols="140" rows="10" required></textarea>
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
