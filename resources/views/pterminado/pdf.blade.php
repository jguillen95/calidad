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
                <td class="justificado" colspan="2">Especificaciones de producto terminado</td>
                <td class="justificado">Versión</td>
                <td class="justificado">5</td>
            </tr>
            <tr>
                <td class="justificado" rowspan="2" colspan="2">Sistema de Gestión de Calidad.</td>
                <td class="justificado">Fecha de emisión</td>
                <td class="justificado">24/11/2023</td>
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
    <table class="correcciones margen-top">
        <tbody class="font-text">
            @foreach ($pterminado as $item)
            <tr>
                <th colspan="7">INFORMACIÓN DEL PRODUCTO</th>
            </tr>
            <tr>
                <th>DESCRIPCIÓN</th>
                <td colspan="2">{{$item->descripcion}}</td>
                <th>ID</th>
                <td>{{$item->id_sap}}</td>
                <th>CÓDIGO DE LOTE</th>
                <td>{{$item->codigo}}</td>
            </tr>
            <tr>
                <th>CATEGORÍA</th>
                <td>{{$item->categoria}}</td>
                <th colspan="2">SUB-CATEGORÍA</th>
                <td>{{$item->sub_categoria}}</td>
                <th>MARCA</th>
                <td>{{$item->marca}}</td>
            </tr>
            <tr>
                <th colspan="2">PRODUCTO</th>
                <th colspan="2">PRODUCTO EN CAJA</th>
                <th colspan="3">CAJAS EN PALET</th>
            </tr>
            <tr>
                <td colspan="2">
                    <center><img width="120" height="auto" src="img/pt/{{ $item->img_envase }}" alt=""></center><br>
                    <center><img width="120" height="auto" src="img/pt/{{ $item->img_display }}" alt=""></center>
                </td>
                <td colspan="2">
                    <center><img width="120" height="auto" src="img/pt/{{ $item->img_caja }}" alt=""></center>
                </td>
                <td colspan="3">
                    <center><img width="120" height="auto" src="img/pt/{{ $item->img_palet }}" alt=""></center><br>
                    <center><img width="120" height="auto" src="img/pt/{{ $item->img_opc }}" alt=""></center>
                </td>
            </tr>
            @endforeach
            <tr>
                <th colspan="7">INFORMACIÓN DE LOGISTICA</th>
            </tr>
            <tr>
                <th colspan="7">PESOS Y DIMENSIONES</th>
                {{-- <th colspan="3" rowspan="2">CONTENIDO</th> --}}
            </tr>
            <tr>
                <th colspan="2">ATRIBUTOS</th>
                <th colspan="2">PRODUCTO</th>
                <th colspan="2">CAJA</th>
                <th>PALET</th>
            </tr>
            @foreach ($logistica as $item)
            <tr>
                <th colspan="2">{{ $item->tipo }}</th>
                <td colspan="2">{{ $item->producto }}</td>
                <td colspan="2">{{ $item->caja }}</td>
                <td>{{ $item->palet }}</td>
            </tr>
            @endforeach
            @foreach ($contenido as $item)
            <TR>
            <th colspan="7">CONTENIDO</th>
             </TR>
            <tr>
                <td colspan="5">CAJAS POR CAMA</td>
                <td colspan="2">{{ $item->cajas_cama }}</td>
            </tr>
            <tr>
                <td colspan="5">CAMAS POR PALET</td>
                <td colspan="2">{{ $item->camas_palet }}</td>
            </tr>
            <tr>
                <td colspan="5">CAJAS POR PALET</td>
                <td colspan="2">{{ $item->caja_palet }}</td>
            </tr>
            <tr>
                <td colspan="5">UNIDADES POR CAJA</td>
                <td colspan="2">{{ $item->unidad_caja }}</td>
            </tr>
            <tr>
                <td colspan="5">UNIDADES POR PALET</td>
                <td colspan="2">{{ $item->unidad_palet }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="7"><center>*Considerando el peso de la tarima</center></td>
            </tr>
        </tbody>
    </table>
            {{-- <div style="page-break-after:always;"></div> --}}
    <table class="correcciones margen-top">
        <tbody class="font-text">
            <tr>
                <th colspan="7">MATERIAL DE EMBALAJE</th>
            </tr>
            <tr>
                <th colspan="2">MATERIAL</th>
                <th colspan="2">CÓDIGO</th>
                <th colspan="3">DESCRIPCIÓN</th>
            </tr>
            @foreach ($embalaje as $item)
            <tr>
                <td colspan="2">{{ $item->material }}</td>
                <td colspan="2">{{ $item->codigo_emb }}</td>
                <td colspan="3">{{ $item->descripcion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <table class="correcciones margen-top">
        <tbody class="font-text">
            <tr>
                <th colspan="7">PRODUCTO A GRANEL</th>
            </tr>
            <tr>
                <th colspan="2">APARIENCIA</th>
                <th colspan="2">OLOR</th>
                <th colspan="3">COLOR</th>
            </tr>
            @foreach ($pterminado as $item)
            <tr>
             <td colspan="2">{{ $item->apariencia_granel }}</td>
             <td colspan="2">{{ $item->olor_granel }}</td>
             <td colspan="3">{{ $item->color_granel }}</td>
            </td>
            @endforeach
        </tbody>
    </table>
    @foreach ($pterminado as $item)
    <table class="correcciones margen-top">
        <tbody class="font-text">
            <tr>
                <th colspan="2">ALMACENAMIENTO, TRANSPORTE, LOTE Y FECHA DE CADUCIDAD</th>
            </tr>
            <tr>
                <th>ALMACENAMIENTO</th>
                <td>{{ $item->almacenamiento }}</td>
            </tr>
            <tr>
                <th>TRANSPORTE</th>
                <td>{{ $item->transporte }}</td>
            </tr>
            <tr>
                <th>LOTE Y FECHA DE CADUCIDAD</th>
                <td>{{ $item->lote_caducidad }}</td>
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