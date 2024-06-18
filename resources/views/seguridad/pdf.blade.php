<style>
    table , td, th {
	border: 1px solid #595959;
	border-collapse: collapse;
    font-family: Arial, Helvetica, sans-serif;
}
@page{
        margin-top: 55px; /* create space for header */
        margin-bottom: 108.23px; /* create space for footer */
      }
td, th {
	padding: 3px;
	
}
.logo{
    padding: 3px;
	width:20%;
	height: 2%;
}
.titulo{
    padding: 3px;
	width:70%;
}

.departamento{
    padding: 3px;
	width:;
}
.codigo{
    padding: 3px;
	width:15%;
}
.nomen{
    padding: 3px;
	width:15%;
}
.pag{
    padding: 3px;
	width:15%;
    right: 0;
}
th {
	background: #f0e6cc;
}
.medida{
    width:700px;
    height: 20px;
    margin-top: -10px;
    position: fixed;
}
.justificado{
    text-align: center;
}
.justificadoIzq{
    text-align: left;
}
@media print {
  footer {page-break-after: always;}
}
body{
    margin-top: 0cm;
    margin-left: 0cm;
    margin-right: 0cm;
    margin-bottom: 0cm;
}

footer{
  height:90px;
  bottom:0;
  width:700px;
  position: fixed;
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
  color: #949191;
  page-break-after: auto;
  margin-top: 5px;
  margin-bottom: -90px;
}
.margen-top{
    margin-top: 20px;
}
p{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
}
.font-text{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
}

main {
        position: relative;
        top: 170px;
        left: 0cm;
        right: 0cm;
        bottom: 110px;
        height: 20cm;
        margin-bottom: 4cm;
      } 

.md-5{
    margin-left: 50px;
}
.md-3{
    margin-left: 20px;
}
.correcciones{
    width:700px;
    height: 10px;
}
.invoice-box{
    margin-bottom: 20%;
    position: fixed;
    
    
}
.pregunta{
    width: 80%;
    display: inline-block;
}
.respuesta{
    width: 15%;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    display: inline-block;
    text-align: right;
}
.quizz{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    margin-top: 10px;
}
.intro{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
}
.resultado{
    width: 25px;
    height: 25px;
    background-color: green;
    text-align: center;
    margin-left: 25px;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    color: white;
}

</style>
</head>

<body> 
    
<div class="invoice-box">
    <table class="medida">
        <tbody>
            <tr>
                <td class="logo" rowspan="5">
                <center><img src="{{ asset('dibar.png') }}" alt="Dibar" width="120" /></center>
                </td>
                <td class="titulo justificado" colspan="4"><strong>DIBAR NUTRICIONAL S DE RL DE CV</strong></td>
            </tr>
            <tr>
                <td class="departamento justificado" colspan="2">DEPARTAMENTO DE CONTROL Y ASEGURAMIENTO DE CALIDAD</td>
                <td class="codigo justificado">Código</td>
                <td class="nomen justificado"><STRong>F-LDAC-025</STRong></td>
            </tr>
            <tr>
                <td class="justificado" colspan="2"><STROng>Hoja de Seguridad</STROng></td>
                <td class="justificado">Versión</td>
                <td class="justificado">2.0</td>
            </tr>
            <tr>
                <td class="justificado" rowspan="2" colspan="2">Sistema de Gestión de Calidad.</td>
                <td class="justificado">Fecha de emisión</td>
                <td class="justificado">01/10/2021</td>
            </tr>
            <tr>
                <td class="justificado" colspan="2"><strong ></strong></td>
            </tr>
        </tbody>
    </table>
</div>
<footer>
    <h5>La información contenida en este documento es confidencial y de uso exclusivo de <br>DIBAR NUTRICIONAL S DE RL DE CV</h5>
    </footer>
{{-- cuerpo de pdf --}}
<main>
    @foreach ($seguridad as $item)
    <table class="correcciones margen-top">
        <tbody class="font-text">
            <tr>
                <th scope="col" colspan="2">1. IDENTIFICACIÓN DE LA SUSTANCIA QUÍMICA O MEZCLA Y DEL FABRICANTE</td>
            </tr>
            
             
            <tr>
                <th class="justificadoIzq" scope="col">Nombre del producto:</td>
                <td class="justificadoIzq"><strong>{{$item->nombre}}</strong></td>
            </tr>
            <tr>
                <th class="justificadoIzq" scope="col">Marca</td>
                <td class="justificadoIzq">{{$item->marca}}</td>
            </tr>
            <tr>
                <th class="justificadoIzq" scope="col">No. De CAS (O CÓDIGO):</td>
                <td class="justificadoIzq">{{$item->codigo_p}}</td>
            </tr>
            <tr>
                <th class="justificadoIzq" scope="col">ID SAP</td>
                <td class="justificadoIzq">{{$item->id_sap}}</td>
            </tr>
            <tr>
                <th class="justificadoIzq" scope="col">Propósito:</td>
                <td class="justificadoIzq" >{{$item->proposito_p}}</td>
            </tr>
            <tr>
                <th class="justificadoIzq" scope="col">Usos pertinentes identificados de la sustancia o de la mezcla y usos desaconsejados:</td>
                <td class="justificadoIzq">{{$item->usos_p}}</td>
            </tr>
            <tr>
                <th class="justificadoIzq" scope="col">Nombre del proveedor:</td>
                <td class="justificadoIzq">DIBAR NUTRICIONAL S. DE R.L. DE C.V.</td>
            </tr>
            <tr>
                <th class="justificadoIzq" scope="col">Dirección.</td>
                <td class="justificadoIzq">Av. Tres Marías #455, int. 17, Col. Tres Marías, C.P.58254, Morelia, Michoacán, México.</td>
            </tr>
            <tr>
                <th class="justificadoIzq" scope="col">Nombre del distribuidor:</td>
                <td class="justificadoIzq">{{$item->nombre_distribuidor}}</td>
            </tr>
            <tr>
                <th class="justificadoIzq" scope="col">Dirección.</td>
                <td class="justificadoIzq">{{$item->direccion_p}}</td>
            </tr>
            
        </tbody>
    </table>
    @endforeach
    {{-- Termina primer Slot --}}
@foreach ($peligro as $item)

    <table class="correcciones margen-top">
        <tbody class="font-text">
            <tr>
                <th colspan="2">2. IDENTIFICACIÓN DE PELIGROS</td>
            </tr>
            <tr>
                <th class="justificadoIzq">Principales peligros:</td>
                <td class="justificadoIzq">{{$item->peligro}}</td>
            </tr>
            <tr>
                <th class="justificadoIzq">Salud:</td>
                <td class="justificadoIzq">{{$item->salud}}</td>
            </tr>
            <tr>
                <th class="justificadoIzq">Inflamabilidad:</td>
                <td class="justificadoIzq">{{$item->inflamabilidad}}</td>
            </tr>
            <tr>
                <th class="justificadoIzq">Reactividad:</td>
                <td class="justificadoIzq">{{$item->reactividad}}</td>
            </tr>
            <tr>
                <th class="justificadoIzq">Identificación para el etiquetado:</td>
                <td class="justificadoIzq">{{$item->id_etiqueta}}</td>
            </tr>
        </tbody>
    </table>
@endforeach
@foreach ($etiqueta as $item)

        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="3">ELEMENTOS DE LAS ETIQUETAS DEL GHS PICTOGRAMAS DE PELIGRO</th>
                </tr>
                <tr >
                    <td rowspan="3"><center><img width="90" height="auto" src="img/seguridad/{{ $item->img_etiqueta }}" alt=""></center></td>
                    <th class="justificadoIzq">Palabra advertencia:</th>
                    <td class="justificadoIzq">{{ $item->palabra }}</td>
                </tr>
                <tr>
                    <th class="justificadoIzq">Indicación de peligro:</th>
                    <td class="justificadoIzq">{{ $item->indicacion }}</td>
                </tr>
                <tr>
                    <th class="justificadoIzq">Categoría:</th>
                    <td class="justificadoIzq">{{ $item->categoria_p }}</td>
                </tr>
            </tbody>
        </table>
@endforeach
<div style="page-break-after:always;"></div>
        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="4">INDICACIONES DE PELIGROS DE GHS</th>
                </tr>
                <tr>
                    <th>Código</th>
                    <th>Indicación de peligro físico</th>
                    <th>Clase de peligro</th>
                    <th>Categoría de peligro</th>
                </tr>
                @foreach ($indicaciones as $item)
                <tr>
                    <td>{{ $item->codigo_indicacion }}</td>
                    <td>{{ $item->indicacion_peligro }}</td>
                    <td>{{ $item->clase_p }}</td>
                    <td>{{ $item->categoria_ghs }}</td>
                </tr>
                                    
                @endforeach
            </tbody>
        </table>
@foreach ($efectos as $item)
        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="2">EFECTOS DE EXPOSICIÓN (EFECTOS DE LOS INGREDIENTES)</th>
                </tr>
                <tr>
                    <th>Inhalación</th>
                    <td>{{ $item->inhalacion }}</td>
                </tr>
                <tr>
                    <th>Contacto con los ojos</th>
                    <td>{{ $item->ojos_p }}</td>
                </tr>
                <tr>
                    <th>Contacto con la piel</th>
                    <td>{{ $item->piel_p }}</td>
                </tr>
                <tr>
                    <th>Incendio</th>
                    <td>{{ $item->incendio_p }}</td>
                </tr>
                <tr>
                    <th>Ingestión</th>
                    <td>{{ $item->ingestion_p }}</td>
                </tr>
            </tbody>
        </table>
@endforeach


        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="4">3. INFORMACIÓN DE LOS INGREDIENTES</th>
                </tr>
                <tr>
                    <th>Sustancia Química o componente</th>
                    <th>Sinónimo</th>
                    <th>No. de CAS</th>
                    <th>Fórmula</th>
                </tr>
                @foreach ($ingredientes as $item)
                <tr>
                    <td>{{ $item->componente }}</td>
                    <td>{{ $item->sinonimo }}</td>
                    <td>{{ $item->cas }}</td>
                    <td>{{ $item->formula }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="3">PRIMEROS AUXILIOS EN CASO DE INGESTA MAYOR U OTRO USO AL RECOMENDADO</th>
                </tr>
                <tr>
                    <th>VÍA</th>
                    <th>SINTOMAS Y EFECTOS (AGUDOS Y CRÓNICOS)</th>
                    <th>PRIMEROS AUXILIOS</th>
                </tr>
                @foreach ($auxilio as $item)
                
                <tr>
                    <td>{{ $item->tipo }}</td>
                    <td>{{ $item->sintoma }}</td>
                    <td>{{ $item->auxilio }}</td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
        @foreach ($medida as $item)
        
        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="6">5. MEDIDAS CONTRA INCENDIOS</th>
                </tr>
                <tr>
                    <th rowspan="2">Medios de extinción apropiados</th>
                    <th>Niebla de agua</th>
                    <th>Espuma</th>
                    <th>CO2</th>
                    <th>Polvo químico seco</th>
                    <th>Otros</th>
                </tr>
                <tr>
                    <td>{{ $item->niebla }}</td>
                    <td>{{ $item->espuma }}</td>
                    <td>{{ $item->co2 }}</td>
                    <td>{{ $item->polvo_quimico }}</td>
                    <td>{{ $item->otros }}</td>
                </tr>
                <tr>
                    <th colspan="6">PELIGROS ESPECÍFICOS DE LAS QUÍMICAS PELIGROSAS</th>
                </tr>
                <tr>
                    <td colspan="6">{{ $item->quimicas_peligrosas }}</td>
                </tr>
            </tbody>
        </table>
    
        @endforeach
        @foreach ($derrame as $item)
        
        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th>6. MEDIDAS EN CASO DE DERRAME O FUGA ACCIDENTAL</th>
                </tr>
                <tr>
                    <th>MEIDAS DE EMERGENCIA A TOMAR SI HAY DERRAME DE MATERIAL:</th>
                </tr>
                <tr>
                    <td>{{ $item->derrame_material }}</td>
                </tr>
                <tr>
                    <th>EQUIPO DE PROTECCIÓN PERSONAL PARA ATACAR LA EMERGENCIA:</th>
                </tr>
                <tr>
                    <td>{{ $item->equipo_proteccion }}</td>
                </tr>
                <tr>
                    <th>PRECAUCIONES A TOMAR PARA EVITAR DAÑOS AL AMBIENTE:</th>
                </tr>
                <tr>
                    <td>{{ $item->precausiones_ambiente }}</td>
                </tr>
                <tr>
                    <th>MÉTODOS Y MATERIAL DE CONTENCIÓN Y LIMPIEZA</th>
                </tr>
                <tr>
                    <td>{{ $item->material_limpieza }}</td>
                </tr>
                <tr>
                    <th>MÉTODO DE ELIMINACIÓN DE DESECHOS</th>
                </tr>
                <tr>
                    <td>{{ $item->desechos }}</td>
                </tr>
            </tbody>
        </table>
@endforeach

        @foreach ($almacen as $item)
        
        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="3">7. MANEJO Y ALMACENAMIENTO</th>
                </tr>
                <tr>
                    <th rowspan="3">Condiciones de almacenamiento seguro, incluida cualquier incompatibilidad.</th>
                    <th>Precacuiones generales:</th>
                    <td>{{ $item->precausiones_generales }}</td>
                </tr>
                <tr>
                    <th>Condiciones de almacenamiento:</th>
                    <td>{{ $item->condicion_alm }}</td>
                </tr>
                <tr>
                    <th>incompatibilidad:</th>
                    <td>{{ $item->incompatibilidad }}</td>
                </tr>
            </tbody>
        </table>
            
        @endforeach
        @foreach ($proteccion as $item)
        
        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="2">8. CONTROLES DE EXPOSICIÓN/PROTECCIÓN PERSONAL</th>
                </tr>
                <tr>
                    <th colspan="2">Parámetros de control:</th>
                </tr>
                <tr>
                    <td colspan="2">{{ $item->parametro_control }}</td>
                </tr>
                <tr>
                    <th colspan="2">Controles técnicos apropiados:</th>
                </tr>
                <tr>
                    <td colspan="2">{{ $item->control_tecnico }}</td>
                </tr>
                <tr>
                    <th colspan="2">Medidas de Protección individual:</th>
                </tr>
                <tr>
                    <td colspan="2">{{ $item->medidas }}</td>
                </tr>
                <tr>
                    <th>Protección de los ojos y cara:</th>
                    <td>{{ $item->prote_ojos }}</td>
                </tr>
                <tr>
                    <th>Protección de la piel:</th>
                    <td>{{ $item->prote_piel }}</td>
                </tr>
                <tr>
                    <th>Protección respiratoria:</th>
                    <td>{{ $item->prote_respiratoria }}</td>
                </tr>
                <tr>
                    <th>Peligros Térmicos</th>
                    <td>{{ $item->peligros_termicos }}</td>
                </tr>
            </tbody>
        </table>
            
        @endforeach
        @foreach ($propiedad as $item)
        
        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="2">9. INFORMACIÓN SOBRE LAS PROPIEDADES FÍSICAS Y QUÍMICAS DEL PRODUCTO</th>
                </tr>
                <tr>
                    <th>Apariencia (estado físico y color)</th>
                    <td>{{ $item->apariencia }}</td>
                </tr>
                <tr>
                    <th>Olor</th>
                    <td>{{ $item->olor }}</td>
                </tr>
                <tr>
                    <th>pH</th>
                    <td>{{ $item->ph }}</td>
                </tr>
                <tr>
                    <th>Punto de fusión/de congelación</th>
                    <td>{{ $item->punto_fusion }}</td>
                </tr>
                <tr>
                    <th>Temperatura de ebullición</th>
                    <td>{{ $item->temperatura }}</td>
                </tr>
                <tr>
                    <th>Velocidad de evaporación</th>
                    <td>{{ $item->velocidad }}</td>
                </tr>
                <tr>
                    <th>Inflamabilidad (sólido/gas)</th>
                    <td>{{ $item->inflamabilidad_info }}</td>
                </tr>
                <tr>
                    <th>Límite superior de inflamabilidad o explosividad</th>
                    <td>{{ $item->limite }}</td>
                </tr>
                <tr>
                    <th>Presión de vapor 25c</th>
                    <td>{{ $item->presion_vapor }}</td>
                </tr>
                <tr>
                    <th>Densidad de vapor</th>
                    <td>{{ $item->densidad_vapor }}</td>
                </tr>
                <tr>
                    <th>Densidad relativa</th>
                    <td>{{ $item->densidad_relativa }}</td>
                </tr>
                <tr>
                    <th>Solubilidad</th>
                    <td>{{ $item->solubilidad }}</td>
                </tr>
                <tr>
                    <th>Coeficiente de partición n-octano/agua</th>
                    <td>{{ $item->coeficiente }}</td>
                </tr>
                <tr>
                    <th>Temperatura de ignición espontanea</th>
                    <td>{{ $item->temperatura_esp }}</td>
                </tr>
                <tr>
                    <th>Temperatura de descomposición</th>
                    <td>{{ $item->temperatura_descom }}</td>
                </tr>
                <tr>
                    <th>Viscosidad 25c</th>
                    <td>{{ $item->viscosidad }}</td>
                </tr>
                <tr>
                    <th>Peso molecular</th>
                    <td>{{ $item->peso_mol }}</td>
                </tr>
                <tr>
                    <th>%Material no volatil</th>
                    <td>{{ $item->materia_volatil }}</td>
                </tr>
                <tr>
                    <th>Otros datos relevantes</th>
                    <td>{{ $item->datos_relevantes }}</td>
                </tr>
            </tbody>
        </table>
        @endforeach
        @foreach ($reactividad as $item)
       
        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="2">10. INFORMACIÓN SOBRE ESTABILIDAD Y REACTIVIDAD</th>
                </tr>
                <tr>
                    <th>Estabilidad química:</th>
                    <td>{{ $item->estabilidad_q }}</td>
                </tr>
                <tr>
                    <th>Toxicidad:</th>
                    <td>{{ $item->condiciones_e }}</td>
                </tr>
            </tbody>
        </table>
        @endforeach
        @foreach ($toxicologia as $item)
       
        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="2">11. INFORMACIÓN SOBRE TOXICOLOGÍA</th>
                </tr>
                <tr>
                    <th>Toxicidad:</th>
                    <td>{{ $item->toxicidad }}</td>
                </tr>
                <tr>
                    <th>Vías de entrada:</th>
                    <td>{{ $item->vias_entrada }}</td>
                </tr>
                <tr>
                    <th colspan="2">12. INFORMACIÓN SOBRE ECOTOXICOLÓGICA</th>
                </tr>
                <tr>
                    <th>Toxicidad:</th>
                    <td>{{ $item->degradacion }}</td>
                </tr>
                <tr>
                    <th colspan="2">13. INFORMACIÓN SOBRE LA ELIMINACIÓN DE LOS PRODUCTOS</th>
                </tr>
                <tr>
                    <th>Vías de entrada:</th>
                    <td>{{ $item->metodos_eliminacion }}</td>
                </tr>
            </tbody>
        </table>
        @endforeach
        @foreach ($transporte as $item)
            
        
        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="2">14. INFORMACIÓN SOBRE EL TRANSPORTE</th>
                </tr>
                <tr>
                    <th>Número UN:</th>
                    <td>{{ $item->un }}</td>
                </tr>
                <tr>
                    <th>Descripción del producto:</th>
                    <td>{{ $item->desc_producto }}</td>
                </tr>
                <tr>
                    <th>Clase:</th>
                    <td>{{ $item->clase }}</td>
                </tr>
                <tr>
                    <th>Grupo de embalaje:</th>
                    <td>{{ $item->grupo_embalaje }}</td>
                </tr>
                <tr>
                    <th>Peligros para el medio ambiente:</th>
                    <td>{{ $item->peligro_ambiente }}</td>
                </tr>
            </tbody>
        </table>
        @endforeach
        @foreach ($transito as $item)
        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="2">15. INFORMACIÓN REGULATORIA</th>
                </tr>
                <tr>
                    <th>Reglamento Nacional de transito:</th>
                    <td>{{ $item->regla_transito }}</td>
                </tr>
                <tr>
                    <th>Descripción del producto:</th>
                    <td>{{ $item->trans_internacional }}</td>
                </tr>
            </tbody>
        </table>
        @endforeach
        @foreach ($adicional as $item)
        <table class="correcciones margen-top">
            <tbody class="font-text">
                <tr>
                    <th colspan="2">16. INFORMACIÓN ADICIONAL</th>
                </tr>
                <tr>
                    <th>Abreviaturas:</th>
                    <td>{{ $item->abreviaturas }}</td>
                </tr>
                <tr>
                    <th>Aviso al lector:</th>
                    <td>{{ $item->aviso_lector }}</td>
                </tr>
            </tbody>
        </table>
        @endforeach
    <script type="text/php">
    if ( isset($pdf) ) {
        $pdf->page_script('
            $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "nomal");
            $pdf->text(460, 145, "Pág $PAGE_NUM de $PAGE_COUNT", $font, 12);
        ');
    }
    </script>
</main>
    
</body>


</html>