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
                <td class="nomen justificado"><STRong>F-LDAC-009</STRong></td>
            </tr>
            <tr>
                <td class="justificado" colspan="2"><STROng>Liberación de Áreas de Envasado</STROng></td>
                <td class="justificado">Versión</td>
                <td class="justificado">1</td>
            </tr>
            <tr>
                <td class="justificado" rowspan="2" colspan="2">Sistema de Gestión de Calidad.</td>
                <td class="justificado">Fecha de emisión</td>
                <td class="justificado">05/05/2023</td>
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
 <p class="margen-top intro">
    <strong >Fecha:</strong> @foreach($envasado as $item) @php
    $originalDate = $item->fecha;
    $newDate = date("d/m/Y H:m:s", strtotime($originalDate));
    print $newDate;
@endphp @endforeach
    <strong class="md-5" >Línea:</strong> @foreach($envasado as $item) {{ $item->linea }} @endforeach
    <strong class="md-5" >Lote:</strong> @foreach($envasado as $item) {{ $item->lote }} @endforeach</p>   
 <p class="intro"><strong >OP:</strong>@foreach($envasado as $item) {{ $item->orden }} @endforeach
    <strong class="md-5">Producto:</strong>@foreach($envasado as $item) {{ $item->producto }} @endforeach</p>
 <p class="intro"><strong >Presentación:</strong> @foreach($envasado as $item) {{ $item->presentacion }} @endforeach
     <strong class="md-5" >Verificó:</strong> @foreach($envasado as $item) {{ $item->verifico }} @endforeach</p>
     <center><p class="quizz"><strong>Selecciona SI o NO. </strong>A cada una de las siguientes preguntas:</p></center>
     @foreach($envasado as $item)
<div class="quizz">
    <div class="pregunta" >
        <strong >1. </strong>¿Los parámetros de área se encuentran dentro de especificación y el sistema de aire
        funciona correctamente?
    </div>
    <div class="respuesta">
        @if($item->q1=="SI")
                {{-- <div class="resultado">SI</div> --}}
                <input type="radio" class="form-radio-input" id="q1" name="q1" value="SI" checked>SI
                <input type="radio" class="form-radio-input" id="q1" name="q1" value="NO" >NO
        @else
        <input type="radio" class="form-radio-input" id="q1" name="q1" value="SI">SI
                <input type="radio" class="form-radio-input" id="q1" name="q1" value="NO" checked>NO
        @endif
                
    </div>
</div>
<div class="quizz">
    <div class="pregunta" >
        <strong >2. </strong>¿Los equipos (tanques, balanzas, dosificadoras, bombas, etc.) A utilizar están
        identificados, en buen estado y funcionan correctamente?
    </div>
    <div class="respuesta">
        @if($item->q2=="SI")
                <input type="radio" class="form-radio-input" id="q2" name="q2" value="SI" checked>SI
                <input type="radio" class="form-radio-input" id="q2" name="q2" value="NO" >NO
        @else
        <input type="radio" class="form-radio-input" id="q2" name="q2" value="SI">SI
                <input type="radio" class="form-radio-input" id="q2" name="q2" value="NO" checked>NO
        @endif
                
    </div>
</div>
<div class="quizz">
    <div class="pregunta" >
        <strong >3. </strong>¿El área se encuentra sin golpes, rayones, manchones en techos paredes y pisos?
    </div>
    <div class="respuesta">
        @if($item->q3=="SI")
                <input type="radio" class="form-radio-input" id="q3" name="q3" value="SI" checked>SI
                <input type="radio" class="form-radio-input" id="q3" name="q3" value="NO" >NO
        @else
        <input type="radio" class="form-radio-input" id="q3" name="q3" value="SI">SI
                <input type="radio" class="form-radio-input" id="q3" name="q3" value="NO" checked>NO
        @endif
                
    </div>
</div>

<div class="quizz">
    <div class="pregunta" >
        <strong >4. </strong>¿El área se encuentra correctamente identificada, ordenada, limpia, despejada de
        productos y formatos anteriores?
    </div>
    <div class="respuesta">
        @if($item->q4=="SI")
                <input type="radio" class="form-radio-input" id="q4" name="q4" value="SI" checked>SI
                <input type="radio" class="form-radio-input" id="q4" name="q4" value="NO" >NO
        @else
        <input type="radio" class="form-radio-input" id="q4" name="q4" value="SI">SI
                <input type="radio" class="form-radio-input" id="q4" name="q4" value="NO" checked>NO
        @endif
                
    </div>
</div>
<div class="quizz">
    <div class="pregunta" >
        <strong >5. </strong>¿El personal involucrado está capacitado en el proceso a realizar y BPM ́s?
    </div>
    <div class="respuesta">
        @if($item->q5=="SI")
                <input type="radio" class="form-radio-input" id="q5" name="q5" value="SI" checked>SI
                <input type="radio" class="form-radio-input" id="q5" name="q5" value="NO" >NO
        @else
        <input type="radio" class="form-radio-input" id="q5" name="q5" value="SI">SI
                <input type="radio" class="form-radio-input" id="q5" name="q5" value="NO" checked>NO
        @endif
                
    </div>
</div>
<div class="quizz">
    <div class="pregunta" >
        <strong >6. </strong>¿Están documentadas la limpieza del área y de los equipos en cuestión en el registro
        de limpieza y desinfección?
    </div>
    <div class="respuesta">
        @if($item->q6=="SI")
                <input type="radio" class="form-radio-input" id="q6" name="q6" value="SI" checked>SI
                <input type="radio" class="form-radio-input" id="q6" name="q6" value="NO" >NO
        @else
        <input type="radio" class="form-radio-input" id="q6" name="q6" value="SI">SI
                <input type="radio" class="form-radio-input" id="q6" name="q6" value="NO" checked>NO
        @endif
                
    </div>
</div>
<div class="quizz">
    <div class="pregunta" >
        <strong >7. </strong>¿Los equipos identificados como limpios están en vigencia de limpieza?
    </div>
    <div class="respuesta">
        @if($item->q7=="SI")
                <input type="radio" class="form-radio-input" id="q7" name="q7" value="SI" checked>SI
                <input type="radio" class="form-radio-input" id="q7" name="q7" value="NO" >NO
        @else
        <input type="radio" class="form-radio-input" id="q7" name="q7" value="SI">SI
                <input type="radio" class="form-radio-input" id="q7" name="q7" value="NO" checked>NO
        @endif
                
    </div>
</div>
<div class="quizz">
    <div class="pregunta" >
        <strong >8. </strong>¿Los recipientes con sanitizante están correctamente identificados, corresponden al
        sanitizante en turno y tienen fecha de caducidad vigente?
    </div>
    <div class="respuesta">
        @if($item->q8=="SI")
                <input type="radio" class="form-radio-input" id="q8" name="q8" value="SI" checked>SI
                <input type="radio" class="form-radio-input" id="q8" name="q8" value="NO" >NO
        @else
        <input type="radio" class="form-radio-input" id="q8" name="q8" value="SI">SI
                <input type="radio" class="form-radio-input" id="q8" name="q8" value="NO" checked>NO
        @endif
                
    </div>
</div>
<div class="quizz">
    <div class="pregunta" >
        <strong >9. </strong>¿El uniforme del personal y equipo de seguridad se encuentra en buenas
        condiciones y se porta correctamente?
    </div>
    <div class="respuesta">
        @if($item->q9=="SI")
                <input type="radio" class="form-radio-input" id="q9" name="q9" value="SI" checked>SI
                <input type="radio" class="form-radio-input" id="q9" name="q9" value="NO" >NO
        @else
        <input type="radio" class="form-radio-input" id="q9" name="q9" value="SI">SI
                <input type="radio" class="form-radio-input" id="q9" name="q9" value="NO" checked>NO
        @endif
                
    </div>
</div>

<div class="quizz">
    <div class="pregunta" >
        <strong >10. </strong>¿Se encuentra disponible diagrama de proceso, ficha técnica del producto y orden
        de producción?
    </div>
    <div class="respuesta">
        @if($item->q10=="SI")
                <input type="radio" class="form-radio-input" id="q10" name="q10" value="SI" checked>SI
                <input type="radio" class="form-radio-input" id="q10" name="q10" value="NO" >NO
        @else
        <input type="radio" class="form-radio-input" id="q10" name="q10" value="SI">SI
                <input type="radio" class="form-radio-input" id="q10" name="q10" value="NO" checked>NO
        @endif
                
    </div>
</div>
<p class="quizz">
    <strong>Nota: </strong>en caso de que algún punto no se cumpla, realice las actividades necesarias hasta
            obtener el cumplimiento,<strong> anote qué fue lo corregido en las siguientes líneas.
</p>
<p class="quizz"> @php 
    $imprimir= str_replace(".", " <br> ", $item->nota);
    print $imprimir; 
    @endphp</p>
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