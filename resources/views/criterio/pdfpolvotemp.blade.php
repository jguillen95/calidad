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
.ta-r{
    text-align: right;
}
.mt{
    margin-top: 20px;
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
                <td class="nomen justificado"><STRong>F-LDAC-055</STRong></td>
            </tr>
            <tr>
                <td class="justificado" colspan="2"><STROng>Criterios de Aceptación y/o Rechazo</STROng></td>
                <td class="justificado">Versión</td>
                <td class="justificado">1</td>
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
    @foreach ($criterio as $item)
        <p class="ta-r"><strong>{{$item->producto}}</strong> <br> <Strong>ID PT: {{$item->id_sap_pt}}</Strong></p>
        <p><STROng>MATERIAL DE EMPAQUE</STROng></p>
    @endforeach
    @foreach($polvos as $item)
    <table class="correcciones mt font">
        <tbody>
            <tr>
                <th colspan="4">ENVASE-ID: E-6735</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="100" height="auto" src="img/criterio/template/mar/envase_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/envase_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Envase cilíndrico de 1000 ml,  R-89, blanco, completo, sin abolladuras, limpio. </td>
                <td colspan="2">.Envase de diferente volumen, abollado, sucio, diferente color y/o presencia de fauna nociva.</td>
            </tr>
            <tr>
                <th colspan="4">Tapa-ID: E-7567</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/mar/tapa_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="150" height="auto" src="img/criterio/template/mar/tapa_no.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Tapa plana, R-89, blanca, en buen estado, colocada de manera adecuada, limpia y sin abolladuras.</td>
                <td colspan="2">Tapa de diferente tamaño, sucia, diferente color, mal colocada y/o en mal estado.</td>
            </tr>
            <tr>
                <th colspan="4">CUCHARA-ID: E-3014</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="150" height="auto" src="img/criterio/template/mar/cuchara_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/mar/cuchara_no.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Cuchara dosificadora de 30 ml, natural, completa, limpia, sin doblar y seca.</td>
                <td colspan="2">Cuchara dosificadora, sucia, diferente volumen y/o rota.</td>
            </tr>
            <tr>
                <th colspan="4">Etiqueta-ID: {{$item->id_sap_etiqueta}}</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/template/mar/etiqueta_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/template/mar/etiqueta_no.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_etiqueta}}</td>
                <td colspan="2">Etiqueta de diferente producto, desalineada, incompleta, rota, con burbujas, sin centrar y/o en mal estado.</td>
            </tr>
            <tr>
                <th colspan="4">LINER-ID: E-9403</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/mar/liner_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/mar/liner_no.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Foil (liner inductivo) de aluminio, multiperforado con cartón, R-89, limpio y completo. Sellado correctamente al envase, sin quemarse, sin fugas y hermético.</td>
                <td colspan="2">Liner inductivo, roto, quemado, sucio, incompleto, con fugas.</td>
            </tr>
            <tr>
                <th colspan="4">SELLO TERMOENCOGIBLE-ID: E-7197</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/template/mar/termoencogible_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/template/mar/termoencogible_no.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Sello termoencogible 154X195 CRS PV, cilíndrico, R-89, limpio, completo y en buen estado, ajuste al envase liso y el abre fácil intacto.</td>
                <td colspan="2">Sello termoencogible de diferente tamaño, arrugado, sucio, incompleto, ajuste al envase flojo, agarre desde la parte superior hasta la inferior, abre fácil roto, y/o en mal estado.</td>
            </tr>
             <tr>
                <th colspan="4">MEZCLA</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/mar/mezcla_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/mar/mezcla_no.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_mezcla}}</td>
                <td colspan="2">Mezcla con grumos, o pastosa, diferente color, contaminada o con materia extraña y ajena a la mezcla.</td>
            </tr>
        </tbody>
    </table>
    <p><STROng>CODIFICADO</STROng></p>
    <table class="correcciones mt font">
        <tbody>
            <tr>
                <th colspan="4">LOTE Y CADUCIDAD EN ENVASE</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/template/mar/lotificado_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/lote_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_lotificado_si}}</td>
                <td colspan="2">Producto sin lotificar, sin centrar, borroso, en los bordes.</td>
            </tr>
            <tr>
                <td colspan="4"><strong> Lote: {{$item->lote_envase}}</strong> <br><strong>Caducidad: {{$item->cad_envase}}</strong> </td>
               
            </tr>                
            
            
            @endforeach
        </tbody>
    </table>
    
    <p><STROng>ACONDICIONAMIENTO DE PT</STROng></p>

    <table class="correcciones mt font">
        <tbody>
            <tr>
                <th colspan="4"> EMBALAJE-ID: E-12480</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td  colspan="2"><center><img width="150" height="auto" src="img/criterio/template/mar/acomodo_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="180" height="auto" src="img/criterio/template/mar/acomodo_no.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Corrugados grandes (40x30x43), dos camas de 12 piezas cada una, dando un total de 24 piezas por corrugado.
                    <br>Envases de un solo producto, identificados con la información mínima para su trazabilidad, dentro de especificaciones.
                    </td>
                <td colspan="2">Corrugados en malas condiciones, sin identificar, con producto mezclado, producto fuera de especificación y/o corrugado de diferente tamaño.</td>
            </tr>
        </tbody>
    </table>

    <p><strong>ESPECIFICACIONES DE PESOS DE PT:</strong></p>
    @foreach ($criterio as $item)
    <p>{{$item->pesos}}</p>
    <p>{{$item->notas}}</p>
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