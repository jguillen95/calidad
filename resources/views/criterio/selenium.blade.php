@extends('layouts.plantillabase')

@section('title','Capsulas Selenium')
@section('h-title','Documentos Dibar')


@section('content')
<div class="container-fluid  ">
        <div class="row justify-content-md-center">
          <div class="col-md-12 ">
              <div class="card px-5 py-3 shadow">
                 <h3 class="text-danger text-center mb-4">Selenium</h3>
                 <form class="row g-3" action="{{route('selenium.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Id Sap Etiqueta</label>
                    <input name="id_sap_display" type="text" class="form-control" >
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Imágen Etiqueta</label>
                    <input name="img_si_display" type="file" class="form-control" >
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Descripción Termoencogible</label>
                    <input type="text" name="desc_si_termo" class="form-control" id="inputAddress">
                  </div>
                  <div class="col-6">
                    <label for="inputAddress2" class="form-label">Imágen del Termoencogible</label>
                    <input type="file" name="img_si_termo" class="form-control" id="inputAddress2" >
                  </div>
                  <div class="col-6">
                    <label for="inputAddress2" class="form-label">Temperatura y velocidad de banda</label>
                    <input type="text" name="desc_no_termo" class="form-control" id="inputAddress2" >
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">Lote del envase</label>
                    <input type="text" name="lote_envase_c" class="form-control" id="inputCity">
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">Caducidad del envase</label>
                    <input type="text" name="cad_envase_c" class="form-control" id="inputCity">
                  </div>
                  <div class="col-12">
                    <label for="inputCity" class="form-label">Descripción del embalaje</label>
                    <textarea  name="desc_si_sellado" class="form-control" id="inputCity"></textarea>
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
