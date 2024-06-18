@extends('layouts.plantillabase')

@section('title','Hoja de Seguridad')
@section('h-title','Documentos Dibar')

{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<!-- Button trigger modal -->
{{-- <form action="{{route('seguridad.create')}}">
  <input class="btn btn-primary" type="submit" value="Nuevo" />
</form> --}}
{{-- Codigo multistep --}}
<a href="{{route('seguridad.create')}}" class="btn btn-warning">Buscar Registros</a>
<div class="container-fluid  ">
        <div class="row justify-content-md-center">
          <div class="col-md-12 ">
              <div class="card px-5 py-3 shadow">
                 <h3 class="text-danger text-center mb-4">Hoja de Seguridad</h3>
  
                          <div class="nav nav-fill my-3">
                            <label class="nav-link shadow-sm step0    border ml-2 ">Seguridad</label>
                            <label class="nav-link shadow-sm step1   border ml-2 " >Peligros</label>
                            <label class="nav-link shadow-sm step2   border ml-2 " >Pictogramas</label>
                            {{-- <label class="nav-link shadow-sm step3    border ml-2 ">GHS</label> --}}
                            <label class="nav-link shadow-sm step3   border ml-2 " >Efectos de Expo</label>
                            {{-- <label class="nav-link shadow-sm step5   border ml-2 " >Ingredientes</label> --}}
                            {{-- <label class="nav-link shadow-sm step6   border ml-2 " >Auxilios</label> --}}
                            <label class="nav-link shadow-sm step4   border ml-2 " >Incendios</label>
                            <label class="nav-link shadow-sm step5   border ml-2 " >Derrame</label>
                            <label class="nav-link shadow-sm step6   border ml-2 " >Almacenamiento</label>
                            <label class="nav-link shadow-sm step7  border ml-2 " >Protección</label>
                            <label class="nav-link shadow-sm step8  border ml-2 " >Propiedad</label>
                            <label class="nav-link shadow-sm step9  border ml-2 " >Reactividad</label>
                            <label class="nav-link shadow-sm step10   border ml-2 " >Toxicología</label>
                            <label class="nav-link shadow-sm step11   border ml-2 " >Transporte</label>
                            <label class="nav-link shadow-sm step12  border ml-2 " >Transito</label>
                            <label class="nav-link shadow-sm step13  border ml-2 " >Adicional</label>
                          </div>
            
                  <form action="{{route('seguridad.store')}}" method="POST" enctype="multipart/form-data" class="employee-form">
                   @csrf
                   {{-- Seguridad --}}
                  <div class="form-section">
                      <label for="">Nombre del Producto:</label>
                      <input type="text" class="form-control mb-3 col-lg-4" name="nombre" required>
                      <label for="">Marca:</label>
                      <input type="text" class="form-control mb-3 col-lg-4" name="marca" required>
                      <label for="">Id Sap:</label>
                      <input type="text" class="form-control mb-3 col-lg-4" name="id_sap" required>
                      <label for="">No. de CAS:</label>
                      <input type="text" class="form-control mb-3 col-lg-3" name="codigo_p" required>
                      <label for="">Proposito:</label>
                      <input type="text" class="form-control mb-3 col-lg-3" name="proposito_p" required>
                      <label for="">Usos pertinentes identificados de la sustancia o de la mezcla y usos desaconsejados:</label>
                      <input type="text" class="form-control mb-3 col-lg-3" name="usos_p" required>
                      <label for="">Nombre Del Distribuidor:</label>
                      <input type="text" class="form-control mb-3 col-lg-3" name="nombre_distribuidor" required>
                      <label for="">Dirección:</label>
                      <input type="text" class="form-control mb-3 col-lg-3" name="direccion_p" required>
                  </div>
                  {{-- Peligros --}}
                  <div class="form-section">
                      <label for="">Principales Peligros:</label>
                      <input type="text" class="form-control mb-3" name="peligro" required>
                      <label for="">Salud:</label>
                      <input type="text" class="form-control mb-3" name="salud"  required>
                      <label for="">Inflamabilidad:</label>
                      <input type="text" class="form-control mb-3" name="inflamabilidad"  required>
                      <label for="">Reactividad:</label>
                      <input type="text" class="form-control mb-3" name="reactividad"  required>
                      <label for="">Identificación para el etiquetado:</label>
                      <input type="text" class="form-control mb-3" name="id_etiqueta"  required>
                  </div>
                  {{-- Etiqueta --}}
                  <div class="form-section">
                    <label for="">Pictograma:</label>
                    <input type="file" class="form-control mb-3" name="img_etiqueta" required>
                    <label for="">Palabra de Advertencia:</label>
                    <input type="text" class="form-control mb-3" name="palabra"  required>
                    <label for="">Indicación de peligro:</label>
                    <input type="text" class="form-control mb-3" name="indicacion"  required>
                    <label for="">Categoría:</label>
                    <input type="text" class="form-control mb-3" name="categoria_p"  required>
                  </div>
                  {{-- Indicaciones --}}
                  {{-- <div id="indicaciones" class="form-section">
                    <label for="">Código:</label>
                    <input type="text" class="form-control mb-3" name="codigo_indicacion" required>
                    <label for="">Indicación de Peligro físico:</label>
                    <input type="text" class="form-control mb-3" name="indicacion_peligro"  required>
                    <label for="">Clase de peligro:</label>
                    <input type="text" class="form-control mb-3" name="clase_p"  required>
                    <label for="">Categoría de peligro:</label>
                    <input type="text" class="form-control mb-3" name="categoria_ghs"  required>
                    <div class="boton form-group col-md-1">
                        <label class="sr-only" for="">Agregar otro ingrediente</label>
                        <button id="add-producto" class="btn btn-primary input-sm"><strong>+</strong></button>
                    </div>
                  </div> --}}
                  {{--  FIN Indicaciones --}}
                  {{-- Efecto --}}
                  <div class="form-section">
                    <label for="">Inhalación:</label>
                    <input type="text" class="form-control mb-3" name="pruebas" required>
                    <label for="">Contacto con los ojos:</label>
                    <input type="text" class="form-control mb-3" name="ojos_p"  required>
                    <label for="">Contacto con la piel:</label>
                    <input type="text" class="form-control mb-3" name="piel_p"  required>
                    <label for="">Incendio:</label>
                    <input type="text" class="form-control mb-3" name="incendio_p"  required>
                    <label for="">Ingestión:</label>
                    <input type="text" class="form-control mb-3" name="ingestion_p"  required>
                  </div>
                  {{-- <div class="form-section">
                    <label for="">Sustancia Química o Componente:</label>
                    <input type="text" class="form-control mb-3" name="componente" required>
                    <label for="">Sinónimo:</label>
                    <input type="text" class="form-control mb-3" name="sinonimo"  required>
                    <label for="">No. de CAS:</label>
                    <input type="text" class="form-control mb-3" name="cas"  required>
                    <label for="">Fórmula:</label>
                    <input type="text" class="form-control mb-3" name="formula"  required>
                  </div> --}}
                {{-- Empieza auxilio --}}
                  {{-- <div class="form-section">
                    <label for="">Tipo:</label>
                    <select class="form-select mb-3" name="tipo" required>
                        <option value="ORAL" selected>ORAL</option>
                        <option value="CUTÁNEA">CUTÁNEA</option>
                        <option value="INHALACIÓN">INHALACIÓN</option>
                        <option value="OCULAR">OCULAR</option>
                      </select>
                    <label for="">Síntomas y Efectos (Agudos y crónicos):</label>
                    <input type="text" class="form-control mb-3" name="sintoma"  required>
                    <label for="">Primeros auxilios:</label>
                    <input type="text" class="form-control mb-3" name="auxilio"  required>
                  </div> --}}
                  {{-- Termina Auxilio --}}
                  {{-- Medida --}}
                  <div class="form-section">
                    <label for="">Niebla de Agua:</label>
                    <input type="text" class="form-control mb-3" name="niebla" required>
                    <label for="">Espuma:</label>
                    <input type="text" class="form-control mb-3" name="espuma"  required>
                    <label for="">CO2:</label>
                    <input type="text" class="form-control mb-3" name="co2"  required>
                    <label for="">Polvo químico seco:</label>
                    <input type="text" class="form-control mb-3" name="polvo_quimico"  required>
                    <label for="">Otros:</label>
                    <input type="text" class="form-control mb-3" name="otros"  required>
                    <label for="">Peligros específicos de las químicas peligrosas:</label>
                    <input type="text" class="form-control mb-3" name="quimicas_peligrosas"  required>
                  </div>
                  {{-- Derrame --}}
                  <div class="form-section">
                    <label for="">Medidas de emergencia a tomar si hay derrame de material:</label>
                    <input type="text" class="form-control mb-3" name="derrame_material" required>
                    <label for="">Equipo de protección personal para atacar la emergencia:</label>
                    <input type="text" class="form-control mb-3" name="equipo_proteccion"  required>
                    <label for="">Precausiones a tomar para evitar daños al ambiente:</label>
                    <input type="text" class="form-control mb-3" name="precausiones_ambiente"  required>
                    <label for="">Métodos y material de contención y limpieza:</label>
                    <input type="text" class="form-control mb-3" name="material_limpieza"  required>
                    <label for="">Método de eliminación de desechos:</label>
                    <input type="text" class="form-control mb-3" name="desechos"  required>
                  </div>
                  {{-- Almacen --}}
                  <div class="form-section">
                    <label for="">Precausiones generales:</label>
                    <input type="text" class="form-control mb-3" name="precausiones_generales" required>
                    <label for="">Condiciones de almacenamiento:</label>
                    <input type="text" class="form-control mb-3" name="condicion_alm"  required>
                    <label for="">Incompatibilidades:</label>
                    <input type="text" class="form-control mb-3" name="incompatibilidad"  required>
                  </div>
                  {{-- Proteccion --}}
                  <div class="form-section">
                    <label for="">Parámetros de control:</label>
                    <input type="text" class="form-control mb-3" name="parametro_control" required>
                    <label for="">Contoles técnicos apropiados:</label>
                    <input type="text" class="form-control mb-3" name="control_tecnico"  required>
                    <label for="">Medidas de protección individual :</label>
                    <input type="text" class="form-control mb-3" name="medidas"  required>
                    <label for="">Protección de los ojos y la cara:</label>
                    <input type="text" class="form-control mb-3" name="prote_ojos" required>
                    <label for="">Protección de la piel:</label>
                    <input type="text" class="form-control mb-3" name="prote_piel"  required>
                    <label for="">Protección respiratoria:</label>
                    <input type="text" class="form-control mb-3" name="prote_respiratoria"  required>
                    <label for="">Peligros Térmicos:</label>
                    <input type="text" class="form-control mb-3" name="peligros_termicos"  required>
                  </div>
                  {{-- Propiedad --}}
                  <div class="form-section">
                    <label for="">Apariencia:</label>
                    <input type="text" class="form-control mb-3" name="apariencia" required>
                    <label for="">Olor:</label>
                    <input type="text" class="form-control mb-3" name="olor"  required>
                    <label for="">PH:</label>
                    <input type="text" class="form-control mb-3" name="ph"  required>
                    <label for="">Punto de fusión / Congelación:</label>
                    <input type="text" class="form-control mb-3" name="punto_fusion" required>
                    <label for="">Temperatura de Ebullición:</label>
                    <input type="text" class="form-control mb-3" name="temperatura"  required>
                    <label for="">Velocidad de evaporación:</label>
                    <input type="text" class="form-control mb-3" name="velocidad"  required>
                    <label for="">Inflamabilidad:</label>
                    <input type="text" class="form-control mb-3" name="inflamabilidad_info"  required>
                    <label for="">Limite superior de inflamabilidad:</label>
                    <input type="text" class="form-control mb-3" name="limite" required>
                    <label for="">Presión de vapor 25 grados:</label>
                    <input type="text" class="form-control mb-3" name="presion_vapor"  required>
                    <label for="">Densidad de vapor:</label>
                    <input type="text" class="form-control mb-3" name="densidad_vapor"  required>
                    <label for="">Densidad Relativa:</label>
                    <input type="text" class="form-control mb-3" name="densidad_relativa" required>
                    <label for="">Solubilidad:</label>
                    <input type="text" class="form-control mb-3" name="solubilidad"  required>
                    <label for="">Coeficiente de partición:</label>
                    <input type="text" class="form-control mb-3" name="coeficiente"  required>
                    <label for="">Temperatura de Ignición espontanea:</label>
                    <input type="text" class="form-control mb-3" name="temperatura_esp"  required>
                    <label for="">Temperatura de descomposición:</label>
                    <input type="text" class="form-control mb-3" name="temperatura_descom"  required>
                    <label for="">Viscosidad 25 grados:</label>
                    <input type="text" class="form-control mb-3" name="viscosidad"  required>
                    <label for="">Peso Molecular:</label>
                    <input type="text" class="form-control mb-3" name="peso_mol" required>
                    <label for="">% MAteria no volatil:</label>
                    <input type="text" class="form-control mb-3" name="materia_volatil"  required>
                    <label for="">Otros datos relevantes:</label>
                    <input type="text" class="form-control mb-3" name="datos_relevantes"  required>
                  </div>
                  {{-- Reactividad --}}
                  <div class="form-section">
                    <label for="">Estabilidad Química:</label>
                    <input type="text" class="form-control mb-3" name="estabilidad_q" required>
                    <label for="">Condiciones a Evitar:</label>
                    <input type="text" class="form-control mb-3" name="condiciones_e"  required>
                  </div>
                  {{-- Toxicologia --}}
                  <div class="form-section">
                    <label for="">Toxicidad:</label>
                    <input type="text" class="form-control mb-3" name="toxicidad" required>
                    <label for="">Vías de entrada:</label>
                    <input type="text" class="form-control mb-3" name="vias_entrada"  required>
                    <label for="">Degradación y persistencia:</label>
                    <input type="text" class="form-control mb-3" name="degradacion"  required>
                    <label for="">Métodos de eliminación:</label>
                    <input type="text" class="form-control mb-3" name="metodos_eliminacion"  required>
                  </div>
                  {{-- Transporte --}}
                  <div class="form-section">
                    <label for="">Número Un:</label>
                    <input type="text" class="form-control mb-3" name="un" required>
                    <label for="">Descripcion del producto:</label>
                    <input type="text" class="form-control mb-3" name="desc_producto"  required>
                    <label for="">Clase:</label>
                    <input type="text" class="form-control mb-3" name="clase"  required>
                    <label for="">Grupo de embalaje:</label>
                    <input type="text" class="form-control mb-3" name="grupo_embalaje"  required>
                    <label for="">Peligros para el medio ambiente:</label>
                    <input type="text" class="form-control mb-3" name="peligro_ambiente"  required>
                  </div>
                  {{-- Transito --}}
                  <div class="form-section">
                    <label for="">Reglamento nacional de transito:</label>
                    <input type="text" class="form-control mb-3" name="regla_transito" required>
                    <label for="">Transporte internacional de mercancías peligrosas por mar:</label>
                    <input type="text" class="form-control mb-3" name="trans_internacional"  required>
                  </div>
                  {{-- Adicional --}}
                  <div class="form-section">
                    <label for="">Abreviaturas:</label>
                    <input type="text" class="form-control mb-3" name="abreviaturas" required>
                    <label for="">Aviso al lector:</label>
                    <input type="text" class="form-control mb-3" name="aviso_lector"  required>
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
