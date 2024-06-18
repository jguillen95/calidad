@extends('layouts.plantillabase')

@section('title','polvos Template')
@section('h-title','Documentos Dibar')


@section('content')
<div class="container-fluid  ">
        <div class="row justify-content-md-center">
          <div class="col-md-12 ">
              <div class="card px-5 py-3 shadow">
                 <h3 class="text-danger text-center mb-4">Polvos Template</h3>
                 <form class="row g-3" action="{{route('polvotemplate.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Id sap de la etiqueta</label>
                    <input name="sap_id_etiqueta" type="text" class="form-control" >
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Descripción de la etiqueta</label>
                    <input name="desc_si_etiqueta" type="text" class="form-control" >
                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Descripción de la mezcla</label>
                    <input type="text" name="desc_si_mezcla" class="form-control" id="inputAddress">
                  </div>
                  <div class="col-6">
                    <label for="inputCity" class="form-label">Descripción Lotificado del envase</label>
                    <textarea  name="desc_lotificado_si" class="form-control" id="inputCity"></textarea>
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
