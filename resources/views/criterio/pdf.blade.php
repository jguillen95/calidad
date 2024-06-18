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
    @foreach ($empaque as $item)
    <table class="correcciones mt font">
        <tbody>
            <tr>
                <th colspan="4">ENVASE Y TAPA-ID: {{$item->id_sap_envase}}</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td><center><img width="120" height="auto" src="img/criterio/{{$item->img_si_envase}}" alt=""></center></td>
                <td><center><img width="120" height="auto" src="img/criterio/{{$item->img_si_tapa}}" alt=""></center></td>
                <td><center><img width="120" height="auto" src="img/criterio/{{$item->img_no_envase}}" alt=""></center></td>
                <td><center><img width="120" height="auto" src="img/criterio/{{$item->img_no_tapa}}" alt=""></center></td>
            </tr>
            <tr>
                <td>{{$item->desc_si_envase}}</td>
                <td>{{$item->desc_si_tapa}}</td>
                <td>{{$item->desc_no_envase}}</td>
                <td>{{$item->desc_no_envase}}</td>
            </tr>
            <tr>
                <th colspan="4">SELLO INDUCTIVO-ID: {{$item->id_sap_sello}}</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_si_sello}}" alt=""></center></td>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_no_sello}}" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_sello}}</td>
                <td colspan="2">{{$item->desc_no_sello}}</td>
            </tr>
            <tr>
                <th colspan="4">PEGOTÍN-ID: {{$item->id_sap_pegotin}}</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_si_pegotin}}" alt=""></center></td>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_no_pegotin}}" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_pegotin}}</td>
                <td colspan="2">{{$item->desc_no_pegotin}}</td>
            </tr>
            <tr>
                <th colspan="4">DISPLAY-ID: {{$item->id_sap_display}}</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_si_display}}" alt=""></center></td>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_no_display}}" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_display}}</td>
                <td colspan="2">{{$item->desc_no_display}}</td>
            </tr>
        </tbody>
    </table>
    @endforeach
    @foreach ($mezcla as $item)
    <p><strong>PRODUCTO A GRANEL</strong></p>
    <table class="correcciones mt font">
        <tbody>
            <tr>
                <th colspan="4">MEZCLA</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_si_mezcla}}" alt=""></center></td>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_no_mezcla}}" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_mezcla}}</td>
                <td colspan="2">{{$item->desc_no_mezcla}}</td>
            </tr>
            <tr>
                <td colspan="4"><strong>Densidad:</strong> {{$item->densidad}}
                                <br><strong>pH:</strong> {{$item->ph}}
                                <br><strong>Viscosidad:</strong> {{$item->viscosidad}}
                </td>
            </tr>
        </tbody>
    </table>
    @endforeach
    @foreach ($sellado as $item)
    <p><strong>RECEPCIÓN DE ENVASADO</strong></p>
    <table class="correcciones mt font">
        <tbody>
            <tr>
                <th colspan="4">SELLADO DE DEPRESIBLE</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_si_sellado}}" alt=""></center></td>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_no_sellado}}" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_sellado}}</td>
                <td colspan="2">{{$item->desc_no_sellado}}</td>
            </tr>
        </tbody>
    </table>
    @endforeach
    @foreach ($sellado as $item)
    <p><strong>ACONDICIONAMIENTO EN DISPLAY</strong></p>
    <table class="correcciones mt font">
        <tbody>
            <tr>
                <th colspan="4">ACONDICIONAMIENTO</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_si_acondicion}}" alt=""></center></td>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_no_acondicion}}" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_acondicion}}</td>
                <td colspan="2">{{$item->desc_no_acondicion}}</td>
            </tr>
        </tbody>
    </table>
    @endforeach
    @foreach ($codificado as $item)
    <p><strong>CODIFICADO</strong></p>
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
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_si_codi}}" alt=""></center></td>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_no_codi}}" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_codi}}</td>
                <td colspan="2">{{$item->desc_no_codi}}</td>
            </tr>
            <tr>
                <td colspan="4"><strong>LOTE:</strong> {{$item->lote_envase_c}}
                                <br><strong>CADUCIDAD:</strong> {{$item->cad_envase_c}}
                </td>
            </tr>
            <tr>
                <th colspan="4">LOTE Y CADUCIDAD EN DISPLAY</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_si_display_c}}" alt=""></center></td>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_no_display_c}}" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_display_c}}</td>
                <td colspan="2">{{$item->desc_no_display_c}}</td>
            </tr>
            <tr>
                <td colspan="4"><strong>LOTE:</strong> {{$item->lote_display_c}}
                                <br><strong>CADUCIDAD:</strong> {{$item->cad_display_c}}
                </td>
            </tr>
        </tbody>
    </table>
    @endforeach
    @foreach ($corrugado as $item)
    <p><strong>EMBALAJE</strong></p>
    <table class="correcciones mt font">
        <tbody>
            <tr>
                <th colspan="4">ACONDICIONAMIENTO EN CORRUGADO-ID:{{$item->sap_id_corrugado}}</th>
            </tr>
            <tr>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/paloma.png" alt=""></center></td>
                <td colspan="2"><center><img width="30" height="auto" src="img/criterio/tache.png" alt=""></center></td>
            </tr>
            <tr>
                <td ><center><img width="120" height="auto" src="img/criterio/{{$item->img_si_acomodo}}" alt=""></center></td>
                <td ><center><img width="120" height="auto" src="img/criterio/{{$item->img_si_corrugado}}" alt=""></center></td>
                <td colspan="2"><center><img width="120" height="auto" src="img/criterio/{{$item->img_no_corrugado}}" alt=""></center></td>
            </tr>
            <tr>
                <td colspan="2">{{$item->desc_si_corrugado}}</td>
                <td colspan="2">{{$item->desc_no_corrugado}}</td>
            </tr>
        </tbody>
    </table>
    @endforeach
    <p><strong>ESPECIFICACIONES DE PESO EN CORRUGADO DE PT:</strong></p>
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