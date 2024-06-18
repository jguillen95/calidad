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
    margin-bottom: 30px;
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
.font-titulo{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 700;
}
</style>
</head>

<body> 
    
<div class="invoice-box">
    <table class="medida">
        <tbody >
            <tr>
                <td class="logo" rowspan="5">
                <center><img src="{{ asset('dibar.png') }}" alt="Dibar" width="120" /></center>
                </td>
                <td class="titulo justificado" colspan="4"><strong>DIBAR NUTRICIONAL S DE RL DE CV</strong></td>
            </tr>
            <tr>
                <td class="departamento justificado" colspan="2">DEPARTAMENTO DE CONTROL Y ASEGURAMIENTO DE CALIDAD</td>
                <td class="codigo justificado">Código</td>
                <td class="nomen justificado"><STRong>F-LDAC-015</STRong></td>
            </tr>
            <tr>
                <td class="justificado" colspan="2"><STROng>Ficha Técnica de Producto Terminado</STROng></td>
                <td class="justificado">Versión</td>
                <td class="justificado">3</td>
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
    <center><h3 class="font-titulo">FICHA TÉCNICA DE PRODUCTO TERMINADO</h3></center>
   
 {{-- Aqui termina --}}
 
 {{-- aqui empieza --}}
 <table class="correcciones font">
	<tbody>
        @foreach($fichas as $item)
		<tr>
			<th>Nombre del producto:</th>
			<td colspan="4">{{ $item->producto}}</td>
		</tr>
		<tr>
			<th>Lote:</th>
			<td colspan="2">{{ $item->lote}}</td>
			<th>Fecha de caducidad:</th>
			<td>{{ $item->fecha}} (meses)</td>
		</tr>
		<tr>
			<th>Contenido Neto:</th>
			<td colspan="2">{{ $item->contenido}}</td>
			<th>ID:</th>
			<td>{{ $item->id_sap}}</td>
		</tr>
		<tr>
			<th>Descripción <br>del producto:</th>
			<td colspan="4">{{ $item->descripcion}}</td>
		</tr>
		<tr>
			<th>Características <br>
                organolépticas:</th>
			<td colspan="4">{{ $item->caracteristicas}}</td>
		</tr>
		<tr>
			<th>Tamaño de porción:</th>
			<td colspan="4">{{ $item->porcion}}</td>
		</tr>
        @endforeach
        
        <tr>
        <th colspan="5">Ingredientes:</th>
        </tr>
        @foreach ($suplemento as $item)
		<tr>
		 <td colspan="5">{{ $item->ingrediente}}</td> 
            
			
		</tr>
        @endforeach
      {{-- @dd(  $check) --}}
      @foreach ($fichas as $item)
      
        <tr>
            <th colspan="5">Información nutricional:</th>
        </tr>
            
        @if($item->ingredientes==1)
            <tr>
                <td colspan="2"><strong>Tamaño de proción:</strong></td>
                <td colspan="3">{{ $item->porcion}}</td>
            </tr>
            <tr>
                <td colspan="2"><Strong>Porciones por envase:</Strong></td>
                <td colspan="3">{{ $item->contenido}}</td>
            </tr>
            <tr>
                <td colspan="3"><strong>Contenido</strong></td>
                <td><strong>Por porción</strong></td>
                <td><strong>Por 100g</strong></td>
            </tr>
            @else
            <tr>
                <td colspan="5"><strong>NO APLICA</strong></td>
            </tr>
            @endif
            @endforeach
            
            @foreach ($informacion as $item)
            <tr>
                <td colspan="3">{{ $item->contenido}}</td>
                <td>{{ $item->porcion}}</td>
                <td>{{ $item->porcion_g}}</td>
            </tr>
            @endforeach
            
            
        
            @foreach ($fichas as $item)
            <tr>
                <th>Presentación</th>
                <td colspan="4"><img width="120" height="auto" src="img/fichas/{{ $item->presentacion_img }}" alt=""></td>
            </tr>
            <tr>
                <th>Modo de uso:</th>
                <td colspan="4">{{ $item->uso}}</td>
            </tr>
            <tr>
                <th>Almacenamiento:</th>
                <td colspan="4">{{ $item->almacen}}</td>
            </tr>
            <tr>
                <th>Advertencias:</th>
                <td colspan="4">{{ $item->advertencias}}</td>
            </tr>
            </tbody>
            </table>
            <center><p class="margen-top"><strong>Elaboró</strong> <br>
                {{ $item->elaboro }} <br>
            <strong>Control y Aseguramiento de Calidad <br>
            Dibar Nutricional S de RL de CV</strong></p></center>
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
