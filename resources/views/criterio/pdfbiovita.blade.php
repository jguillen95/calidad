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
    @foreach($biovita as $item)
    <table class="correcciones mt font">
        <tbody>
            <tr>
                <th colspan="4">ENVASE-ID: E-5260</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/template/biovita/envase_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/envase_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_envase}}</td>
                <td colspan="2">Envase pastillero de otro volumen, PET, sucio, diferente color, abollado, con fauna nociva y/o roto.</td>
            </tr>
            <tr>
                <th colspan="4">Tapa-ID: E-16575</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/biovita/tapa_Si.png" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/tapa_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_tapa}}</td>
                <td colspan="2">Tapa diferente a la requerida, diferente color, diferente tamaño, sucia, incompleta o en mal estado. </td>
            </tr>
            <tr>
                <th colspan="4">LINER-ID: E-16442</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/biovita/liner_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/liner_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_liner}}</td>
                <td colspan="2">Liner inductivo, diferente medida, para PET, sin un sellado correcto, con fugas, quemado, roto o incompleto.</td>
            </tr>
            <tr>
                <th colspan="4">Etiqueta-ID: {{$item->id_sap_etiqueta}}</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="200" height="auto" src="img/criterio/{{$item->img_si_etiqueta}}" alt=""></center></td>
                <td colspan="2"><center><img width="200" height="auto" src="img/criterio/{{$item->img_no_etiqueta}}" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_etiqueta}}</td>
                <td colspan="2">{{$item->desc_no_etiqueta}}</td>
            </tr>
            <tr>
                <th colspan="4">Capsulas-ID: E-6898</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/capsula_si.jpg" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/biovita/capsula_no.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_capsula}}</td>
                <td colspan="2">Cápsula diferente a la requerida, diferente color, sin doble cierre, estriada, aplastada, manchada, sin pulir, sucia y/o en peso fuera de especificación.</td>
            </tr>
            <tr>
                <th colspan="4">DESECANTE-ID: E-2812</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/biovita/desecante_si.png" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/desecante_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_desecante}}</td>
                <td colspan="2">Desecante de diferente peso, sucio, roto, o más de 1 en cada envase.</td>
            </tr>
            <tr>
                <th colspan="4">SELLO TERMOENCOGIBLE-ID: E-7197</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/termoencogible_si.jpg" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/termoencogible_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Sello termoencogible 86X105 mm, sin arrugas, abre fácil intacto, ajuste correcto desde la tapa hasta la base, bien colocado, sin quemar y limpio.
                    <br><strong>Temperatura de túnel:</strong> 90°C ± 2°C
                    <br><strong>Velocidad de banda:</strong> 35 Hz
                    <br><strong>Tiempo de permanencia:</strong> 18.0 s
                </td>
                <td colspan="2">Sello termoencogible de diferente medida, sin arrugas, abre fácil quemado, mal colocado, doblado, maltratado, sucio, incompleto, roto y/o sin cubrir etiqueta ni tapa.</td>
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
                <td colspan="2">{{$item->desc_si_mezcla}}
                    <br><strong>Densidad:</strong>{{$item->densidad_mezcla}}
                    <br><strong>pH:</strong>{{$item->ph_mezcla}}
                </td>
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
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/lote_si.jpg" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/lote_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_envase_si}}</td>
                <td colspan="2">Codificado desalineado, no legible, en lugar diferente, en los bordes, desalineado y/o incorrecto.</td>
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
                <th colspan="4"> CORRUGADO-ID: E-13091
                    <BR>SEPARADOR-ID: E-13080</BR>
                </th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td  colspan="2"><center><img width="220" height="auto" src="img/criterio/template/embalaje_si.jpg" alt=""></center></td>
                <td colspan="2"><center><img width="220" height="auto" src="img/criterio/template/embalaje_no.jpg" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">Empacado el PT en corrugado grande (39x28x41cm), 4 camas cada cama con 35pz, dando un total de 140 piezas por corrugado. Contando con un separador de 27x38 por cama.
                    Empacado de un solo producto por caja, cada corrugado identificado con nombre del producto, lote y caducidad y especificando piezas por corrugado. 
                    </td>
                <td colspan="2">PT empacado en corrugado de tamaño diferente, mezcla de productos dentro de una sola caja, sin identificación, lotes diferentes sin identificación, producto fuera de especificación y/o cantidad de piezas incorrecta.</td>
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