@extends('layouts.plantillabase')

@section('title','Capsulas Selenium')
@section('h-title','Documentos Dibar')


@section('content')
<div class="container-fluid  ">
        <div class="row justify-content-md-center">
          <div class="col-md-12 ">
              <div class="card px-5 py-3 shadow">
                 <h3 class="text-danger text-center mb-4">Biovita</h3>
                 <form class="row g-3" action="{{route('biovita.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Descripción de envase</label>
                    <input name="desc_si_envase" type="text" class="form-control" >
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Descripción de la tapa</label>
                    <input name="desc_si_tapa" type="text" class="form-control" >
                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Descripción del liner</label>
                    <input type="text" name="desc_si_liner" class="form-control" id="inputAddress">
                  </div>
                  <div class="col-2">
                    <label for="inputAddress" class="form-label">Id de Etiqueta</label>
                    <input type="text" name="sap_id_etiqueta" class="form-control" id="inputAddress">
                  </div>
                  <div class="col-2">
                    <label for="inputAddress2" class="form-label">Imágen de la etiqueta</label>
                    <input type="file" name="img_si_etiqueta" class="form-control" id="inputAddress2" >
                  </div>
                  <div class="col-2">
                    <label for="inputAddress2" class="form-label">Imagen rechazada de la etiqueta</label>
                    <input type="file" name="img_no_etiqueta" class="form-control" id="inputAddress2" >
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">Descripción de la etiqueta aprovada</label>
                    <input type="text" name="desc_si_etiqueta" class="form-control" id="inputCity">
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">Descripción de la etiqueta rechazada</label>
                    <input type="text" name="desc_no_etiqueta" class="form-control" id="inputCity">
                  </div>
                  <div class="col-6">
                    <label for="inputCity" class="form-label">Descripción de la capsula</label>
                    <textarea  name="desc_si_capsula" class="form-control" id="inputCity"></textarea>
                  </div>
                  <div class="col-6">
                    <label for="inputCity" class="form-label">Descripción del desecante</label>
                    <textarea  name="desc_si_desecante" class="form-control" id="inputCity"></textarea>
                  </div>
                  <div class="col-6">
                    <label for="inputCity" class="form-label">Descripción de la mezcla</label>
                    <textarea  name="desc_si_mezcla" class="form-control" id="inputCity"></textarea>
                  </div>
                  <div class="col-6">
                    <label for="inputCity" class="form-label">Densidad de mezcla</label>
                    <textarea  name="densidad_mezcla" class="form-control" id="inputCity"></textarea>
                  </div>
                  <div class="col-6">
                    <label for="inputCity" class="form-label">ph de mezcla</label>
                    <textarea  name="ph_mezcla" class="form-control" id="inputCity"></textarea>
                  </div>
                  <div class="col-6">
                    <label for="inputCity" class="form-label">Descripción Lotificado del envase</label>
                    <textarea  name="desc_envase_si" class="form-control" id="inputCity"></textarea>
                  </div>
                  <div class="col-6">
                    <label for="inputCity" class="form-label">lote</label>
                    <textarea  name="lote_envase" class="form-control" id="inputCity"></textarea>
                  </div>
                  <div class="col-6">
                    <label for="inputCity" class="form-label">caducidad</label>
                    <textarea  name="cad_envase" class="form-control" id="inputCity"></textarea>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">enviar</button>
                  </div>
                </form>
  
              </div>
          </div>
        </div>
</div>
  
{{-- Cierre código multistep --}}
@endsection
