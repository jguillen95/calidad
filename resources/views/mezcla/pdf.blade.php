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
.izquierda{
  text-align: left;
  width: 250px;
}
.firmas1{
  width: 40%;
  display: inline-block;
  left: 20px;
  position: fixed;
  /* margin-top:2px; */
}
.firmas2{
  width: 40%;
  display: inline-block;
  left: 390px;
  position: fixed;
  /* margin-top:2px; */
}
.ultimo{
  margin-top: 50px;
}
.mt{
  margin-top: 15px;
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
              <td class="nomen justificado"><STRong>F-LDAC-010</STRong></td>
          </tr>
          <tr>
              <td class="justificado" colspan="2"><STROng>Inspección de Mezclado</STROng></td>
              <td class="justificado">Versión</td>
              <td class="justificado">6</td>
          </tr>
          <tr>
              <td class="justificado" rowspan="2" colspan="2">Sistema de Gestión de Calidad.</td>
              <td class="justificado">Fecha de emisión</td>
              <td class="justificado">21/11/2023</td>
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
  @foreach ($mezcla as $item)
  <table class="correcciones mt font">
    <tbody>
      <tr>
        <th>Producto:</th>
        <td colspan="3">{{$item->producto}}</td>
        <th>Fecha:</th>
        <td>
          @php
            $originalDate = $item->q1;
            $newDate = date("d/m/Y", strtotime($originalDate));
            print $newDate;
            @endphp
        </td>
      </tr>
      <tr>
        <th>Lote:</th>
        <td>{{$item->lote}}</td>
        <th>Caducidad:</th>
        <td>{{$item->q3}}</td>
        <th>O.P.</th>
        <td>{{$item->q4}}</td>
      </tr>
    </tbody>
  </table>
  @endforeach
  {{-- inicia segunda tabla --}}
  <table class="correcciones mt font">
    <tbody>
      @foreach ($mezclaItem as $key => $item)
      {{$keys=$key+1}}
      <tr>
        <th colspan="2">Inspección de mezclado</th>
      </tr>
      <tr>
        <th class="izquierda">Número de Mezcla</th>
        <td>{{$keys}}</td>
      </tr>
      <tr>
        <th class="izquierda">Hora inicial del Mezclado</th>
        <td>{{$item->i_mezcla}}</td>
      </tr>
      <tr>
        <th class="izquierda">Hora final del Mezclado</th>
        <td>{{$item->f_mezcla}}</td>
      </tr>
      <tr>
        <th class="izquierda">Tiempo total del Mezclado (min)</th>
        <td>{{$item->tiempo}}</td>
      </tr>
      <tr>
        <th class="izquierda">MP cernidas</th>
        <td>{{$item->apariencia}}</td>
      </tr>
      <tr>
        <th class="izquierda">Realizó</th>
        <td>{{$item->firma_realizo}}</td>
      </tr>
      <tr>
        <th class="izquierda">Verificó</th>
        <td>{{$item->firma_verifico}}</td>
      </tr>
      <tr>
        <th class="izquierda" colspan="2">Pruebas Sensoriales</th>
      </tr>
      <tr>
        <th class="izquierda">Color</th>
        <td>{{$item->color}}</td>
      </tr>
      <tr>
        <th class="izquierda">Olor</th>
        <td>{{$item->olor}}</td>
      </tr>
      <tr>
        <th class="izquierda">Sabor</th>
        <td>{{$item->sabor}}</td>
      </tr>
      <tr>
        <<th class="izquierda">Granulometría/Textura</th>
        <td>{{$item->granulometria}}</td>
      </tr>
      <tr>
        <th class="izquierda">Consistencia</th>
        <td>{{$item->consistencia}}</td>
      </tr>
      <tr>
        <th class="izquierda">Solubilidad</th>
        <td>{{$item->solubilidad}}</td>
      </tr>
      <tr>
        <th class="izquierda">pH</th>
        <td>{{$item->ph}}</td>
      </tr>
      <tr>
        <th class="izquierda">Peso teórico</th>
        <td>{{$item->peso_teorico}}</td>
      </tr>
      <tr>
        <th class="izquierda">Peso real</th>
        <td>{{$item->peso_real}}</td>
      </tr>
      <tr>
        <th class="izquierda">Resultado (<img src="{{ asset('check.png') }}" alt="Dibar" width="10" />)/ No cumple (X)</th>
        @if($item->cumple=="SI")
        <td><img src="{{ asset('check.png') }}" alt="Dibar" width="15" /></td>
        @else
      <td><img src="{{ asset('x.png') }}" alt="Dibar" width="7"/></td>   
        @endif
      </tr>
      @endforeach
      @foreach ($mezcla as $item)
      <tr>
        <td colspan="2"><strong>Observaciones:</strong>
        @php 
          $imprimir= str_replace(".", " <br> ", $item->observaciones);
          print $imprimir; 
       @endphp</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{-- Termina segunda tabla --}}
  @foreach ($mezcla as $item)
 <div class="ultimo">
  
  <div class="firmas1">
    <center><p class="font">Revisó
      <br>
    <strong>{{$item->reviso}}</strong>
      <br>Supervisor/Lider de linea
    </p></center>
  </div>
  <div class="firmas2">
  <center> <p class="font">Autorizó
      <br>
     <strong>{{$item->autorizo}}</strong>
      <br>Inspector/Supervisor Calidad
      </p></center>
  </div>
  
</div>
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