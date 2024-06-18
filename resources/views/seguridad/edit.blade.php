@extends('layouts.plantillabase')

@section('title','Seguridad')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<a href="{{route('seguridad.create')}}" class="btn btn-warning">Buscar Registros</a>
<form action="{{route('seguridad.update', $consulta->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    @method('PUT')
    <h3>Seguridad</h3>
    <div class="col-md-3">
      <label for="nombre" class="form-label">nombre</label>
      <input type="text" class="form-control" id="nombre" value="{{$consulta->nombre}}" name="nombre" required>
    </div>
    <div class="col-md-3">
        <label for="marca" class="form-label">marca</label>
        <input type="text" class="form-control" value="{{$consulta->marca}}" id="marca" name="marca" required>
      </div>
      <div class="col-md-3">
        <label for="id_sap" class="form-label">id_sap</label>
        <input type="text" class="form-control" value="{{$consulta->id_sap}}" id="id_sap" name="id_sap" required>
      </div>
    <div class="col-md-3">
      <label for="codigo_p" class="form-label">codigo_p</label>
      <input type="text" class="form-control" value="{{$consulta->codigo_p}}" id="codigo_p" name="codigo_p" required>
    </div>
    <div class="col-md-3">
        <label for="proposito_p" class="form-label">proposito_p</label>
        <input type="text" class="form-control" id="proposito_p" value="{{$consulta->proposito_p}}" name="proposito_p" required>
      </div>
    <div class="col-3">
      <label for="usos_p" class="form-label">usos_p</label>
      <input type="text" class="form-control" id="usos_p" value="{{$consulta->usos_p}}" name="usos_p" required>
    </div>
    <div class="col-3">
      <label for="nombre_distribuidor" class="form-label">nombre_distribuidor</label>
      <input type="text" class="form-control" id="nombre_distribuidor" value="{{$consulta->nombre_distribuidor}}" name="nombre_distribuidor" required>
    </div>
    <div class="col-md-3">
        <label for="direccion_p" class="form-label">direccion_p</label>
        <input type="text" class="form-control" value="{{$consulta->direccion_p}}" id="direccion_p" name="direccion_p" required>
    </div>
    {{-- Aqui acaba --}}
    <h3>Peligros</h3>
    @foreach ($consulta2 as $item)
    <div class="col-md-3">
        <label for="peligro" class="form-label">peligro</label>
        <input type="text" class="form-control" value="{{$item->peligro}}" id="peligro" name="peligro" required>
    </div>
    <div class="col-md-3">
        <label for="salud" class="form-label">salud</label>
        <input type="text" class="form-control" value="{{$item->salud}}" id="salud" name="salud" required>
    </div>
    <div class="col-md-3">
        <label for="inflamabilidad" class="form-label">inflamabilidad</label>
        <input type="text" class="form-control" value="{{$item->inflamabilidad}}" id="inflamabilidad" name="inflamabilidad" required>
    </div>
    <div class="col-md-3">
        <label for="reactividad" class="form-label">reactividad</label>
        <input type="text" class="form-control" value="{{$item->reactividad}}" id="reactividad" name="reactividad" required>
    </div>
    <div class="col-md-3">
        <label for="id_etiqueta" class="form-label">id_etiqueta</label>
        <input type="text" class="form-control" value="{{$item->id_etiqueta}}" id="id_etiqueta" name="id_etiqueta" required>
    </div>
    @endforeach
    <div class="col-lg-12">
        <h3>Etiqueta</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>palabra</th>
                    <th>indicación</th>
                    <th>categoría </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta3 as $item)
                    
                
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_etiqueta" value="{{$item->id}}"></td>
                    <td><input class="form-control" type="text" name="palabra" value="{{$item->palabra}}"></td>
                    <td><input type="text" class="form-control" name="indicacion" value="{{$item->indicacion}}"></td>
                    <td><input type="text" class="form-control" name="categoria_p" value="{{$item->categoria_p}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-lg-12">
        <h3>Efecto</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Inhalación</th>
                    <th>Ojos</th>
                    <th>Piel</th>
                    <th>Incendio</th>
                    <th>Ingestión</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta4 as $item)
                    
                
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_efecto" value="{{$item->id}}"></td>
                    <td><input type="text" class="form-control" name="inhalacion" value="{{$item->inhalacion}}"></td>
                    <td><input type="text" class="form-control" name="ojos_p" value="{{$item->ojos_p}}"></td>
                    <td><input type="text" class="form-control" name="piel_p" value="{{$item->piel_p}}"></td>
                    <td><input type="text" class="form-control" name="incendio_p" value="{{$item->incendio_p}}"></td>
                    <td><input type="text" class="form-control" name="ingestion_p" value="{{$item->ingestion_p}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-lg-12">
        <h3>Medida</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Niebla</th>
                    <th>Espuma</th>
                    <th>Co2</th>
                    <th>Polvos Quimicos</th>
                    <th>Otros</th>
                    <th>Químicas peligrosas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta5 as $item)
                    
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_medida" value="{{$item->id}}"></td>
                    <td><input type="text" class="form-control" name="niebla" value="{{$item->niebla}}"></td>
                    <td><input type="text" class="form-control" name="espuma" value="{{$item->espuma}}"></td>
                    <td><input type="text" class="form-control" name="co2" value="{{$item->co2}}"></td>
                    <td><input type="text" class="form-control" name="polvo_quimico" value="{{$item->polvo_quimico}}"></td>
                    <td><input type="text" class="form-control" name="otros" value="{{$item->otros}}"></td>
                    <td><input type="text" class="form-control" name="quimicas_peligrosas" value="{{$item->quimicas_peligrosas}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-lg-12">
        <h3>Derrame</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Derrame</th>
                    <th>Equipo</th>
                    <th>precauciones</th>
                    <th>MAterial Limpieza</th>
                    <th>desechos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta6 as $item)
                    
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_derrame" value="{{$item->id}}"></td>
                    <td><input type="text" class="form-control" name="derrame_material" value="{{$item->derrame_material}}"></td>
                    <td><input type="text" class="form-control" name="equipo_proteccion" value="{{$item->equipo_proteccion}}"></td>
                    <td><input type="text" class="form-control" name="precausiones_ambiente" value="{{$item->precausiones_ambiente}}"></td>
                    <td><input type="text" class="form-control" name="material_limpieza" value="{{$item->material_limpieza}}"></td>
                    <td><input type="text" class="form-control" name="desechos" value="{{$item->desechos}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-lg-12">
        <h3>Almacén</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Precauciones Generales</th>
                    <th>Condición de Almacén</th>
                    <th>Incompatibilidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta7 as $item)
                    
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_almacen" value="{{$item->id}}"></td>
                    <td><input type="text" class="form-control" name="precausiones_generales" value="{{$item->precausiones_generales}}"></td>
                    <td><input type="text" class="form-control" name="condicion_alm" value="{{$item->condicion_alm}}"></td>
                    <td><input type="text" class="form-control" name="incompatibilidad" value="{{$item->incompatibilidad}}"></td>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-lg-12">
        <h3>Protección</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Parametros</th>
                    <th>Control técnico</th>
                    <th>Medidas</th>
                    <th>Protección Ojos</th>
                    <th>Protección Piel</th>
                    <th>Protección Respiratoria</th>
                    <th>Peligros Térmicos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta8 as $item)
                    
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_proteccion" value="{{$item->id}}"></td>
                    <td><input type="text" class="form-control" name="parametro_control" value="{{$item->parametro_control}}"></td>
                    <td><input type="text" class="form-control" name="control_tecnico" value="{{$item->control_tecnico}}"></td>
                    <td><input type="text" class="form-control" name="medidas" value="{{$item->medidas}}"></td>
                    <td><input type="text" class="form-control" name="prote_ojos" value="{{$item->prote_ojos}}"></td>
                    <td><input type="text" class="form-control" name="prote_piel" value="{{$item->prote_piel}}"></td>
                    <td><input type="text" class="form-control" name="prote_respiratoria" value="{{$item->prote_respiratoria}}"></td>
                    <td><input type="text" class="form-control" name="peligros_termicos" value="{{$item->peligros_termicos}}"></td>
               @endforeach
            </tbody>
        </table>
    </div>
        
                @foreach ($consulta9 as $item)
    <h3>Propiedades</h3>
    <div class="col-md-3">
        <label for="apariencia" class="form-label">Apariencia</label>
        <input type="text" class="form-control" name="apariencia" value="{{$item->apariencia}}">
    </div>
    <div class="col-md-3">
        <label for="olor" class="form-label">olor</label>
        <input type="text" class="form-control" name="olor" value="{{$item->olor}}">
    </div>
    <div class="col-md-3">
        <label for="ph" class="form-label">ph</label>
        <input type="text" class="form-control" name="ph" value="{{$item->ph}}">
    </div>
    <div class="col-md-3">
        <label for="punto_fusion" class="form-label">punto_fusion</label>
        <input type="text" class="form-control" name="punto_fusion" value="{{$item->punto_fusion}}">
    </div>
    <div class="col-md-3">
        <label for="temperatura" class="form-label">temperatura</label>
        <input type="text" class="form-control" name="temperatura" value="{{$item->temperatura}}">
    </div>
    <div class="col-md-3">
        <label for="velocidad" class="form-label">velocidad</label>
        <input type="text" class="form-control" name="velocidad" value="{{$item->velocidad}}">
    </div>
    <div class="col-md-3">
        <label for="inflamabilidad_info" class="form-label">inflamabilidad</label>
       <input type="text" class="form-control" name="inflamabilidad_info" value="{{$item->inflamabilidad_info}}">
    </div>
    <div class="col-md-3">
        <label for="limite" class="form-label">limite</label>
        <input type="text" class="form-control" name="limite" value="{{$item->limite}}">
    </div>
    <div class="col-md-3">
        <label for="presion_vapor" class="form-label">presion_vapor</label>
        <input type="text" class="form-control" name="presion_vapor" value="{{$item->presion_vapor}}">
    </div>
    <div class="col-md-3">
        <label for="densidad_vapor" class="form-label">densidad_vapor</label>
        <input type="text" class="form-control" name="densidad_vapor" value="{{$item->densidad_vapor}}">
    </div>
    <div class="col-md-3">
        <label for="densidad_relativa" class="form-label">densidad_relativa</label>
        <input type="text" class="form-control" name="densidad_relativa" value="{{$item->densidad_relativa}}">
    </div>
    <div class="col-md-3">
        <label for="solubilidad" class="form-label">solubilidad</label>
        <input type="text" class="form-control" name="solubilidad" value="{{$item->solubilidad}}">
    </div>
    <div class="col-md-3">
        <label for="coeficiente" class="form-label">coeficiente</label>
        <input type="text" class="form-control" name="coeficiente" value="{{$item->coeficiente}}">
    </div>
    <div class="col-md-3">
        <label for="temperatura_esp" class="form-label">temperatura_esp</label>
        <input type="text" class="form-control" name="temperatura_esp" value="{{$item->temperatura_esp}}">
    </div>
    <div class="col-md-3">
        <label for="temperatura_descom" class="form-label">temperatura_descom</label>
        <input type="text" class="form-control" name="temperatura_descom" value="{{$item->temperatura_descom}}">
    </div>
    <div class="col-md-3">
        <label for="viscosidad" class="form-label">viscosidad</label>
        <input type="text" class="form-control" name="viscosidad" value="{{$item->viscosidad}}">
    </div>
    <div class="col-md-3">
        <label for="peso_mol" class="form-label">peso_mol</label>
        <input type="text" class="form-control" name="peso_mol" value="{{$item->peso_mol}}">
    </div>
    <div class="col-md-3">
        <label for="materia_volatil" class="form-label">materia_volatil</label>
        <input type="text" class="form-control" name="materia_volatil" value="{{$item->materia_volatil}}">
    </div>
    <div class="col-md-3">
        <label for="datos_relevantes" class="form-label">datos_relevantes</label>
        <input type="text" class="form-control" name="datos_relevantes" value="{{$item->datos_relevantes}}">
    </div>

    @endforeach
    @foreach ($consulta10 as $item)
    <h3>Reactividad</h3>
    <div class="col-md-6">
        <label for="estabilidad_q" class="form-label">estabilidad_q</label>
        <input type="text" class="form-control" name="estabilidad_q" value="{{$item->estabilidad_q}}">
    </div>
    <div class="col-md-6">
        <label for="condiciones_e" class="form-label">condiciones_e</label>
        <input type="text" class="form-control" name="condiciones_e" value="{{$item->condiciones_e}}">
    </div>
    @endforeach
    @foreach ($consulta11 as $item)
    <h3>Toxicología</h3>
    <div class="col-md-6">
        <label for="toxicidad" class="form-label">toxicidad</label>
        <input type="text" class="form-control" name="toxicidad" value="{{$item->toxicidad}}">
    </div>
    <div class="col-md-6">
        <label for="vias_entrada" class="form-label">vias_entrada</label>
        <input type="text" class="form-control" name="vias_entrada" value="{{$item->vias_entrada}}">
    </div>
    <div class="col-md-6">
        <label for="degradacion" class="form-label">degradacion</label>
        <input type="text" class="form-control" name="degradacion" value="{{$item->degradacion}}">
    </div>
    <div class="col-md-6">
        <label for="metodos_eliminacion" class="form-label">metodos_eliminacion</label>
        <input type="text" class="form-control" name="metodos_eliminacion" value="{{$item->metodos_eliminacion}}">
    </div>
    @endforeach
    @foreach ($consulta12 as $item)
    <h3>Transporte</h3>
    <div class="col-md-4">
        <label for="un" class="form-label">un</label>
        <input type="text" class="form-control" name="un" value="{{$item->un}}">
    </div>
    <div class="col-md-4">
        <label for="desc_producto" class="form-label">desc_producto</label>
        <input type="text" class="form-control" name="desc_producto" value="{{$item->desc_producto}}">
    </div>
    <div class="col-md-4">
        <label for="clase" class="form-label">clase</label>
        <input type="text" class="form-control" name="clase" value="{{$item->clase}}">
    </div>
    <div class="col-md-6">
        <label for="grupo_embalaje" class="form-label">grupo_embalaje</label>
        <input type="text" class="form-control" name="grupo_embalaje" value="{{$item->grupo_embalaje}}">
    </div>
    <div class="col-md-6">
        <label for="peligro_ambiente" class="form-label">peligro_ambiente</label>
        <input type="text" class="form-control" name="peligro_ambiente" value="{{$item->peligro_ambiente}}">
    </div>
    @endforeach

    @foreach ($consulta13 as $item)
    <h3>Transitos</h3>
    <div class="col-md-6">
        <label for="regla_transito" class="form-label">regla_transito</label>
        <input type="text" class="form-control" name="regla_transito" value="{{$item->regla_transito}}">
    </div>
    <div class="col-md-6">
        <label for="trans_internacional" class="form-label">trans_internacional</label>
        <input type="text" class="form-control" name="trans_internacional" value="{{$item->trans_internacional}}">
    </div>
    @endforeach
    @foreach ($consulta14 as $item)
    <h3>Adicional</h3>
    <div class="col-md-6">
        <label for="abreviaturas" class="form-label">abreviaturas</label>
        <input type="text" class="form-control" name="abreviaturas" value="{{$item->abreviaturas}}">
    </div>
    <div class="col-md-6">
        <label for="aviso_lector" class="form-label">aviso_lector</label>
        <input type="text" class="form-control" name="aviso_lector" value="{{$item->aviso_lector}}">
    </div>
    @endforeach

    <div class="col-lg-12">
        <h3>Indicación</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Código de Indicación</th>
                    <th>Indicación de peligro</th>
                    <th>Clase</th>
                    <th>Categoría ghs</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta15 as $item)
                    
                
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_indicacion[]" value="{{$item->id}}"></td>
                    <td><input class="form-control" type="text" name="codigo_indicacion[]" value="{{$item->codigo_indicacion}}"></td>
                    <td><input type="text" class="form-control" name="indicacion_peligro[]" value="{{$item->indicacion_peligro}}"></td>
                    <td><input type="text" class="form-control" name="clase_p[]" value="{{$item->clase_p}}"></td>
                    <td><input type="text" class="form-control" name="categoria_ghs[]" value="{{$item->categoria_ghs}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-lg-12">
        <h3>Ingredientes</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Componente</th>
                    <th>Sinonimo</th>
                    <th>CAS</th>
                    <th>Formula</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta16 as $item)
                    
                
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_ingredientes[]" value="{{$item->id}}"></td>
                    <td><input class="form-control" type="text" name="componente[]" value="{{$item->componente}}"></td>
                    <td><input type="text" class="form-control" name="sinonimo[]" value="{{$item->sinonimo}}"></td>
                    <td><input type="text" class="form-control" name="cas[]" value="{{$item->cas}}"></td>
                    <td><input type="text" class="form-control" name="formula[]" value="{{$item->formula}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-lg-12">
        <h3>Auxilios</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tipo</th>
                    <th>Sintoma</th>
                    <th>Auxilio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consulta17 as $item)
                    
                
                <tr>
                    <td>{{$item->id}}<input hidden type="text" name="id_auxilio[]" value="{{$item->id}}"></td>
                    <td>{{$item->tipo}}<input 
                       hidden class="form-control" type="text" name="tipo[]" value="{{$item->tipo}}"></td>
                    <td><input type="text" class="form-control" name="sintoma[]" value="{{$item->sintoma}}"></td>
                    <td><input type="text" class="form-control" name="auxilio[]" value="{{$item->auxilio}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Fin --}}
    <div class="col-12">
      <button type="submit" class="btn btn-info"  style="color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Siguiente</button>
    </div>
  </form>
@endsection