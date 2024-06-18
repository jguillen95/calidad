<style>
    table , td, th {
  border: 1px solid #595959;
  border-collapse: collapse;
    font-family: Arial, Helvetica, sans-serif;
  }
  @page{
        margin-top: 35px; /* create space for header */
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
  width:1030px;
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
height:50px;
bottom:0;
width:1100px;
position: fixed;
text-align: center;
font-family: Arial, Helvetica, sans-serif;
color: #949191;
page-break-after: auto;
margin-top: 5px;
margin-bottom: -90px;
}
/* .margen-top{
  margin-top: 210px;
} */
p{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 17px;
}
body{
    margin-top: 0cm;
    margin-left: 0cm;
    margin-right: 0cm;
    margin-bottom: 0cm;
}
main {
      position: relative;
      top: 140px;
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
  width:100%;
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
  margin-left: 200px;
  position: fixed;
  /* margin-top:2px; */
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
.mt{
  margin-top: 15px;
}
.font{
  font-size: 13px;
}
.ultimo{
  margin-top: -5px;
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
  .linea {
  border-top: 1px solid black;
  height: 2px;
  max-width: 200px;
  padding: 0;
  margin: 5px auto 0 auto;
}
.mg{
    margin-bottom: -10px;
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
                <td class="titulo justificado" colspan="3"><strong>DIBAR NUTRICIONAL S DE RL DE CV</strong></td>
            </tr>
            <tr>
                <td class="departamento justificado">DEPARTAMENTO DE CONTROL Y ASEGURAMIENTO DE CALIDAD</td>
                <td class="codigo justificado">Código</td>
                <td class="nomen justificado"><STRong>F-LDAC-014</STRong></td>
            </tr>
            <tr>
                <td class="justificado" rowspan="2"><STROng>Inspección, Verificación, Liberación de Limpieza y Desinfección de Equipos</STROng></td>
                <td class="justificado">Versión</td>
                <td class="justificado">3</td>
            </tr>
            <tr>
                <td class="justificado">Fecha de emisión</td>
                <td class="justificado">27/10/2023</td>
            </tr>
            <tr>
                <td class="justificado">Sistema de Gestión de Calidad.</td>
                <td colspan="2"></td>
            </tr>

            {{-- <tr>
                <td class="logo" rowspan="5">
                <center><img src="{{ asset('dibar.png') }}" alt="Dibar" width="120" /></center>
                </td>
                <td class="titulo justificado" colspan="4"><strong>DIBAR NUTRICIONAL S DE RL DE CV</strong></td>
            </tr> --}}
            {{-- <tr>
                <td class="departamento justificado" colspan="2">DEPARTAMENTO DE ASEGURAMIENTO DE CALIDAD</td>
                <td class="codigo justificado">Código</td>
                <td class="nomen justificado"><STRong>F-LDAC-014</STRong></td>
            </tr> --}}
            {{-- <tr>
                <td class="justificado" colspan="2"><STROng>Inspección de Mezclado</STROng></td>
                <td class="justificado">Versión</td>
                <td class="justificado">7</td>
            </tr> --}}
            {{-- <tr>
                <td class="justificado" rowspan="2" colspan="2">Sistema de Gestión de Calidad.</td>
                <td class="justificado">Fecha de emisión</td>
                <td class="justificado">04/03/2024</td>
            </tr> --}}
            {{-- <tr>
                <td class="justificado" colspan="2"><strong ></strong></td>
            </tr> --}}
        </tbody>
    </table>
  </div>
  <footer>
    <h5>La información contenida en este documento es confidencial y de uso exclusivo de <br>DIBAR NUTRICIONAL S DE RL DE CV</h5>
    </footer>
  {{-- cuerpo de pdf --}}
  <main>
    <table class="correcciones mt font">
        <tbody>
            @foreach ($sani as $item)
            <tr>
                <th colspan="6">LIMPIEZA Y SANITIZACIÓN PRE-OPERACIONAL</th>
            </tr>
            <tr>
                <th>Fecha:</th>
                <td>@php
                  $originalDate = $item->fecha;
                  $newDate = date("d/m/Y", strtotime($originalDate));
                  print $newDate;
@endphp	</td>
                <th>Hora Inicial:</th>
                <td>{{$item->h_inicio}}</td>
                <th>Hora Final:</th>
                <td>{{$item->h_final}}</td>
            </tr>
            <tr>
                <th>Producto<br>anterior:</th>
                <td>{{$item->p_anterior}}</td>
                <th colspan="2">Producto entrada:</th>
                <td colspan="2">{{$item->p_entrada}}</td>
            </tr>
            <tr>
                <th>Equipo:</th>
                <td colspan="5">{{$item->equipo}}</td>
            </tr>
            @endforeach
            <tr>
                <th>Actividades:</th>
                <th>Sustancia Limpiadora / Sanitizante:</th>
                <th>Concentración:</th>
                <th>Realizó:</th>
                <th>¿Cumple? <img src="{{ asset('check.png') }}" alt="Dibar" width="10"/>/x </th>
                <th>Verificó</th>
            </tr>
            @foreach ($desi as $item)
            <tr>
                <td>{{$item->actividad}}</td>
                <td>{{$item->sustancia}}</td>
                <td>{{$item->concentracion}}</td>
                <td>{{$item->realizo}}</td>
                @if($item->cumple=="SI")
                    <td><img src="{{ asset('check.png') }}" alt="Dibar" width="12" /></td>
                    @else
                <td><img src="{{ asset('x.png') }}" alt="Dibar" width="7"/></td>   
                    @endif
                <td>{{$item->verifico}}</td>
            </tr>
            @endforeach
            @foreach ($sani as $item)
            <tr>
                <td colspan="6"><STRONg>Observaciones:</STRONg> 
                  @php 
                  $imprimir= str_replace(".", " <br> ", $item->observaciones);
                  print $imprimir; 
               @endphp
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Termina segunda tabla --}}
    @foreach ($sani as $item)
   <div class="ultimo">
    
    <div class="firmas1">
      <center><div>
        <p class="font">
        <br>
      <strong>{{$item->firma_supervisor}}</strong>
        <br>{{$item->nombre_supervisor}}</p>
        <div class="linea mg"></div>
    <p class="font"> Nombre y firma
    <br>Supervisor de Producción/Lider de linea de Producción</p>
      </div></center>
    </div>

    <div class="firmas2">
    <center> <div>
        <p class="font">
        <br>
       <strong>{{$item->firma_calidad}}</strong>
        <br>{{$item->nombre_calidad}}</p>
        <div class="linea mg"></div>
        <p class="font">Nombre y firma
        <br>Inspector de control y Aseguramiento de Calidad</p>
        </div></center>
    </div>
    
  </div>
  @endforeach
    <script type="text/php">
    if ( isset($pdf) ) {
        $pdf->page_script('
            $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "nomal");
            $pdf->text(660, 108, "Pág $PAGE_NUM de $PAGE_COUNT", $font, 12);
        ');
    }
    </script>
  </main>
    
  </body>
  
  
  </html>