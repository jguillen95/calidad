<style>
    table , td, th {
	border: 1px solid #595959;
	border-collapse: collapse;
    font-family: Arial, Helvetica, sans-serif;
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
    position: fixed;
}
.justificado{
    text-align: center;
}
@media print {
  footer {page-break-after: always;}
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
  margin-top: 10px;
}
/* .margen-top{
    margin-top: 210px;
} */
p{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
}
main {
        position: relative;
        top: 170px;
        left: 0cm;
        right: 0cm;
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
                <td class="nomen justificado"><STRong>F-LDAC-058</STRong></td>
            </tr>
            <tr>
                <td class="justificado" colspan="2"><STROng>Desviación de Proceso</STROng></td>
                <td class="justificado">Versión</td>
                <td class="justificado">1</td>
            </tr>
            <tr>
                <td class="justificado" rowspan="2" colspan="2">Sistema de Gestión de Calidad.</td>
                <td class="justificado">Fecha de emisión</td>
                <td class="justificado">05/04/2021</td>
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
 <p class="margen-top"><strong >Número:</strong> @foreach($almacena as $item) {{ $item->idComp }} @endforeach<strong class="md-5" >Área responsable de la desviación:</strong> @foreach($almacena as $item) {{ $item->area_des }} @endforeach</p>  
 <p ><strong >Producto:</strong>@foreach($almacena as $item) {{ $item->prodcuto_des }} @endforeach </p>
 <p><strong >Presentación:</strong> @foreach($almacena as $item) {{ $item->presentacion_des }} @endforeach <strong class="md-3" >LOTE:</strong> @foreach($almacena as $item) {{ $item->lote_des }} @endforeach <strong class="md-3" >Cantidad:</strong> @foreach($almacena as $item) {{ $item->cantidad_des }} @endforeach</p>
 <p><strong >Descripción de la desviación:</strong>@foreach($almacena as $item) {{ $item->descripcion_des }} @endforeach</p>
 <p><strong >Desviación con repecto a:</strong>@foreach($almacena as $item) {{ $item->desviacion_des }} @endforeach</p>
 <p><strong >Investigación preliminar:</strong>@foreach($almacena as $item) {{ $item->investigacion_des }} @endforeach</p>
 <p class="titulooos"><strong>Correcciones:</strong></p>
 <table class="correcciones">
	<tbody>

		<tr>
			<th scope="col">Actividad</th>
			<th scope="col">Responsable</th>
			<th scope="col">Fecha</th>
			<th scope="col">Firma</th>
		</tr>
		@foreach($almacenados as $item)
   <tr class="items">
        
            
            <td>
                {{ $item->actividad }}
            </td>
            <td>
                {{ $item->responsable}}
            </td>
            <td>
                @php
                  $originalDate = $item->fecha_corre;
                  $newDate = date("d/m/Y H:m:s", strtotime($originalDate));
                  print $newDate;
                  @endphp
            </td>
            </td>
            <td>
                {{ $item->firma_corre}}
            </td>
    </tr>
    @endforeach
		
	</tbody>
</table>
<p class="titulooos"><strong>Acciones Correctivas:</strong></p>
<table class="correcciones">
   <tbody>

       <tr>
           <th scope="col">Actividad</th>
           <th scope="col">Responsable</th>
           <th scope="col">Fecha</th>
           <th scope="col">Firma</th>
       </tr>
       @foreach($almacenadosC as $item)
    <tr class="items">
        
            
            <td>
                {{ $item->actividad }}
            </td>
            <td>
                {{ $item->responsable}}
            </td>
            <td>
                @php
                  $originalDate = $item->fecha_corre;
                  $newDate = date("d/m/Y H:m:s", strtotime($originalDate));
                  print $newDate;
                  @endphp
            </td>
            <td>
                {{ $item->firma_corre}}
            </td>
    </tr>
    @endforeach
       
   </tbody>
</table>

 {{-- div final --}}




<p class="titulooos" ><strong>Documentos a Modificar:</strong></p>
<table class="correcciones">
   <tbody>

       <tr>
           <th scope="col">Código</th>
           <th scope="col">Título</th>
           <th scope="col">Responsable</th>
           <th scope="col">Fecha</th>
           <th scope="col">Firma</th>
       </tr>
    @foreach($almacenDocs as $item)
    <tr class="items">
        
            
            <td>
                {{ $item->codigo }}
            </td>
            <td>
                {{ $item->titulo}}
            </td>
            <td>
                {{ $item->responsable }}
            </td>
            <td>
                @php
                  $originalDate = $item->fecha;
                  $newDate = date("d/m/Y H:m:s", strtotime($originalDate));
                  print $newDate;
                  @endphp
            </td>
            <td>
                {{ $item->firma_mod }}
            </td>
       
    </tr>
    @endforeach
  
   </tbody>
</table>
<div style="page-break-after:always;"></div>
    <p><strong >Anexos Requeridos:</strong></p>
    <center><p>@foreach($almacena as $item) <img width="150" height="auto" src="img/post/{{ $item->anexos_des }}" alt="">@endforeach</p></center>
    <center><p><strong >Elaborado por:</strong> <br>
        @foreach($almacena as $item) {{ $item->firma }} 
        <br>{{ $item->vobo_des }}
        @endforeach
    </p></center>
    <center><p><strong >VOBO:</strong> <br>
    </p></center>
    <center><p><strong >Calidad:</strong> @foreach($almacena as $item) {{ $item->responsableC }}@endforeach <strong class="md-3">Producción</strong> @foreach($almacena as $item) {{ $item->responsableP }} @endforeach</p></center>
<p><strong>Seguimientos:</strong></p>
@foreach ($almacenSeguimientos as $item)<p>{{$item->descripcion_seg}}
<br><strong>Realizado por:</strong>{{$item->realizo_seg}}<strong class="md-3">Fecha:</strong>
                @php
                  $originalDate = $item->fecha_seg;
                  $newDate = date("d/m/Y H:m:s", strtotime($originalDate));
                  print $newDate;
                  @endphp
</p>@endforeach
<center><p class="titulooos"><strong>Revisión de Cierre de la Desviación:</strong></p></center>
<table class="correcciones">
   <tbody>

       <tr>
           <th scope="col">Departamento</th>
           <th scope="col">Firma</th>
           <th scope="col">Fecha</th>
           <th scope="col">Estatus

           </th>
       </tr>
       @foreach ($almacena as $item)
           
       <tr>
           <td>{{$item->dptoCierre_des}}</td>
           <td>{{$item->firma_cierre}}</td>
           <td>
            @php
                  $originalDate = $item->fechaCierre_des;
                  $newDate = date("d/m/Y H:m:s", strtotime($originalDate));
                  print $newDate;
            @endphp
           </td>
           <td>@if ($item->Estatus==1)
               Abierto
           @elseif($item->Estatus==2)
               Pendiente
            @else
               Cerrado
           @endif
            </td>
       </tr>
       @endforeach
   </tbody>
</table>


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
