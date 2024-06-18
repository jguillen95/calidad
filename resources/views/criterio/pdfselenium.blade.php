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
    <table class="correcciones mt font">
        <tbody>
            <tr>
                <th colspan="4">ENVASE-ID: E-E-13631</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/envase_si.jpg" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/envase_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Envase pastillero, de polietileno, blanco R-53 de 500 ml, limpio, sin fauna nociva, completo y en buen estado. </td>
                <td colspan="2">Envase pastillero de otro volumen, PET, sucio, diferente color, abollado, con fauna nociva y/o roto.</td>
            </tr>
            <tr>
                <th colspan="4">Tapa-ID: E-14839</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/selenium/tapa_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/tapa_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Tapa rosca polipropileno R-53, blanca, limpia, completa, cierre hermético, el inserto de la tapa sin zafarse, sin abolladuras, y en buen estado.</td>
                <td colspan="2">Tapa diferente a la requerida, diferente color, diferente tamaño, sucia, incompleta o en mal estado. </td>
            </tr>
            <tr>
                <th colspan="4">LINER-ID: E-16895</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/liner_si.jpg" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/liner_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Liner de inducción de alupapel, punzonado R-53, con un sellado hermético, sin fugas, limpio y completo.
                    <br><strong>Potencia de inductiva:</strong> No indica el equipo
                    <br><strong>Velocidad de banda:</strong> 37 Hz
                    <br><strong>Distancia del cabezal:</strong> 3mm
                    </td>
                <td colspan="2">Liner inductivo, diferente medida, para PET, sin un sellado correcto, con fugas, quemado, roto o incompleto.</td>
            </tr>
            @foreach ($empaque as $item)
            <tr>
                <th colspan="4">Etiqueta-ID: {{$item->id_sap_display}}</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/{{$item->img_si_display}}" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/etiqueta_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Etiqueta Nader capsulas selenio, completa, sin arrugas, sin burbujas, limpia, pegada correctamente, alineada y centrada. </td>
                <td colspan="2">Etiqueta de diferente producto, sucia, arrugada, con burbujas, rota, pegada incorrectamente, desalineada o no centrada.</td>
            </tr>
            @endforeach
            
             <tr>
                <th colspan="4">Capsulas-ID: E-8555</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/capsula_si.jpg" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/selenium/capsula_no.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Cápsula blanca/blanca, 0, limpia, completa, con doble cierre, en peso correcto.</td>
                <td colspan="2">Cápsula diferente a la requerida, diferente color, sin doble cierre, estriada, aplastada, manchada, sin pulir, sucia y/o en peso fuera de especificación.</td>
            </tr>
            <tr>
                <th colspan="4">DESECANTE-ID: E-4966</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="100" height="auto" src="img/criterio/template/selenium/desecante_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/desecante_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Desecamen tyvek 5gr, limpio, completo, 1 pieza por envase.</td>
                <td colspan="2">Desecante de diferente peso, sucio, roto, o más de 1 en cada envase.</td>
            </tr>
             <tr>
                <th colspan="4">MEZCLA</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/mezcla_si.jpg" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/mezcla_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Polvo fino, blanco-beige con presencia de partículas color verde, de brillo bajo y de olor neutro. Sin grumos, homogéneo y sin materia extraña.
                <br><strong>Densidad:</strong> 0.6161 g/ml
                <br><strong>pH:</strong>5.5
                <br><strong>Viscosidad:</strong> S/D
                   </td>
                <td colspan="2">Mezcla con grumos, o pastosa, diferente color, contaminada o con materia extraña y ajena a la mezcla.</td>
            </tr>
        </tbody>
    </table>
    <p><STROng>CODIFICADO</STROng></p>

    @foreach ($codificado as $item)
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
                <td colspan="2"><center><img width="100" height="auto" src="img/criterio/template/selenium/lote_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/lote_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Codificado en ubicación correcta (parte inferior del envase), centrado, visible, legible y alineado.</td>
                <td colspan="2">Codificado desalineado, no legible, en lugar diferente, en los bordes, desalineado y/o incorrecto.</td>
            </tr>
            <tr>
                <td colspan="4"><strong> Lote: {{$item->lote_envase_c}}</strong> <br><strong>Caducidad: {{$item->cad_envase_c}}</strong> </td>
               
            </tr>
            @endforeach
            @foreach ($polvos as $item)
                
            
            <tr>
                <th colspan="4">SELLO TERMOENCOGIBLE</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/{{$item->img_si_termo}}" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/termoencogible_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_termo}}, sin arrugas, abre fácil intacto, ajuste correcto desde la tapa hasta la base, bien colocado, sin quemar y limpio.
                <br>{{$item->desc_no_termo}}</td>
                <td colspan="2">Sello termoencogible de diferente medida, sin arrugas, abre fácil quemado, mal colocado, doblado, maltratado, sucio, incompleto, roto y/o sin cubrir etiqueta ni tapa.</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <p><STROng>ACONDICIONAMIENTO DE PT</STROng></p>

    @foreach ($sellado as $item)
    <table class="correcciones mt font">
            <tr>
                <th colspan="4"> Embalaje-ID: E-12481</th>
            </tr>
            <tbody>
            <tr>
                <td style="width:50%" colspan="1"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td style="width:50%" colspan="3"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td style="width:50%" colspan="1"><center><img width="220" height="auto" src="img/criterio/template/embalaje_si.jpg" alt=""></center></td>
                <td style="width:50%" colspan="3"><center><img width="220" height="auto" src="img/criterio/template/embalaje_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td style="width:50%" colspan="1">{{$item->desc_si_sellado}}</td>
                <td style="width:50%" colspan="3">PT empacado en corrugado de tamaño diferente, <br> mezcla de productos dentro de una sola caja, <br> sin identificación, lotes diferentes sin identificación, <br> producto fuera de especificación y/o <br> cantidad de piezas incorrecta.</td>
            </tr>
            @endforeach
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