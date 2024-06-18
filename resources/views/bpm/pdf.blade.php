<style>
    table , td, th {
  border: 1px solid #595959;
  border-collapse: collapse;
    font-family: Arial, Helvetica, sans-serif;
  }
  @page{
        margin-top: 35px; /* create space for header */
        margin-bottom: 208.52px; /* create space for footer */
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
margin-bottom: -170px;
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
  /* width: 250px; */
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
                <td class="nomen justificado"><STRong>BT-LDAC-037</STRong></td>
            </tr>
            <tr>
                <td class="justificado" rowspan="2"><STROng>Inspección, Verificación de BPM's para el ingreso a Áreas Productivas</STROng></td>
                <td class="justificado">Versión</td>
                <td class="justificado">2</td>
            </tr>
            <tr>
                <td class="justificado">Fecha de emisión</td>
                <td class="justificado">04/03/2024</td>
            </tr>
            <tr>
                <td class="justificado">Sistema de Gestión de Calidad.</td>
                <td colspan="2"></td>
            </tr>
        </tbody>
    </table>
  </div>
  <footer>
    <h5>La información contenida en este documento es confidencial y de uso exclusivo de <br>DIBAR NUTRICIONAL S DE RL DE CV</h5>
    </footer>
  {{-- cuerpo de pdf --}}
  <main>
    {{-- Inicia segunda tabla --}}
    @foreach ($bpms as $item)
    <table class="correcciones mt font">
        <tbody>
            <tr>
                <th class="izquierda">Fecha:</th>
                <td>@php
                  $originalDate = $item->fecha;
                  $newDate = date("d/m/Y", strtotime($originalDate));
                  print $newDate;
                  @endphp</td>
                <th class="izquierda">Turno</th>
                <td>{{$item->turno}}</td>
                <th class="izquierda">Hora:</th>
                <td>{{$item->hora}}</td>
                <th class="izquierda">Ubicación:</th>
                <td>{{$item->ubicacion}}</td>
            </tr>
        </tbody>
    </table>
    @endforeach
    {{-- Termina segunda tabla --}}
    <table class="correcciones mt font">
        <tbody>
            <tr>
                <th>Nombre</th>
                <th>Confia</th>
                <th>Cubre bocas</th>
                <th>Uniforme</th>
                <th>Manos lavadas y sanitizadas</th>
                <th>Uñas cortas</th>
                <th>Sin Heridas</th>
                <th>Sin maquillaje/sin barba</th>
                <th>Botas/Zapatones</th>
                <th>Sin perfume</th>
                <th>Sin sintomas de enfermedad</th>
                <th>Sin articulos personales</th>
                <th>Observaciones</th>
            </tr>
            @foreach ($parametros as $item)
            <tr>
                <td>{{$item->nombre}}</td>
                @if($item->cofia=="SI")
                <td><img src="{{ asset('check.png') }}" alt="Dibar" width="15" /></td>
                 @else
                <td><img src="{{ asset('x.png') }}" alt="Dibar" width="10"/></td>   
                 @endif
                {{-- <td>{{$item->cofia}}</td> --}}
                @if($item->cubre=="SI")
                <td><img src="{{ asset('check.png') }}" alt="Dibar" width="15" /></td>
                 @else
                <td><img src="{{ asset('x.png') }}" alt="Dibar" width="10"/></td>   
                 @endif
                {{-- <td>{{$item->cubre}}</td> --}}
                @if($item->uniforme=="SI")
                <td><img src="{{ asset('check.png') }}" alt="Dibar" width="15" /></td>
                 @else
                <td><img src="{{ asset('x.png') }}" alt="Dibar" width="10"/></td>   
                 @endif
                {{-- <td>{{$item->uniforme}}</td> --}}
                @if($item->manos=="SI")
                <td><img src="{{ asset('check.png') }}" alt="Dibar" width="15" /></td>
                 @else
                <td><img src="{{ asset('x.png') }}" alt="Dibar" width="10"/></td>   
                 @endif
                {{-- <td>{{$item->manos}}</td> --}}
                @if($item->unas=="SI")
                <td><img src="{{ asset('check.png') }}" alt="Dibar" width="15" /></td>
                 @else
                <td><img src="{{ asset('x.png') }}" alt="Dibar" width="10"/></td>   
                 @endif
                {{-- <td>{{$item->unas}}</td> --}}
                @if($item->heridas=="SI")
                <td><img src="{{ asset('check.png') }}" alt="Dibar" width="15" /></td>
                 @else
                <td><img src="{{ asset('x.png') }}" alt="Dibar" width="10"/></td>   
                 @endif
                {{-- <td>{{$item->heridas}}</td> --}}
                @if($item->maquillaje=="SI")
                <td><img src="{{ asset('check.png') }}" alt="Dibar" width="15" /></td>
                 @else
                <td><img src="{{ asset('x.png') }}" alt="Dibar" width="10"/></td>   
                 @endif
                {{-- <td>{{$item->maquillaje}}</td> --}}
                @if($item->botas=="SI")
                <td><img src="{{ asset('check.png') }}" alt="Dibar" width="15" /></td>
                 @else
                <td><img src="{{ asset('x.png') }}" alt="Dibar" width="10"/></td>   
                 @endif
                {{-- <td>{{$item->botas}}</td> --}}
                @if($item->perfume=="SI")
                <td><img src="{{ asset('check.png') }}" alt="Dibar" width="15" /></td>
                 @else
                <td><img src="{{ asset('x.png') }}" alt="Dibar" width="10"/></td>   
                 @endif
                {{-- <td>{{$item->perfume}}</td> --}}
                @if($item->enfermedad=="SI")
                <td><img src="{{ asset('check.png') }}" alt="Dibar" width="15" /></td>
                 @else
                <td><img src="{{ asset('x.png') }}" alt="Dibar" width="10"/></td>   
                 @endif
                {{-- <td>{{$item->enfermedad}}</td> --}}
                @if($item->articulos=="SI")
                <td><img src="{{ asset('check.png') }}" alt="Dibar" width="15" /></td>
                 @else
                <td><img src="{{ asset('x.png') }}" alt="Dibar" width="10"/></td>   
                 @endif
                {{-- <td>{{$item->articulos}}</td> --}}
                
                <td>{{$item->observaciones}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($bpms as $item)
   <div class="ultimo">
    
    <div class="firmas1">
      <center><div>
        <p class="font">Realizó
        <br>
      <br><strong>{{$item->realizo}}</strong></p>
        <div class="linea mg"></div>
    <p class="font">Inspector de control y <br> Aseguramiento de Calidad</p>
      </div></center>
    </div>

    <div class="firmas2">
    <center> <div>
        <p class="font">Vo. Bo.
            <br>
        <br>
       <strong>{{$item->vobo}}</strong>
        <div class="linea mg"></div>
        <p class="font">Supervisor/Coordinador de control y <br>Aseguramiento de Calidad</p>
        </div></center>
    </div>
    
  </div>
  @endforeach
    <script type="text/php">
    if ( isset($pdf) ) {
        $pdf->page_script('
            $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "nomal");
            $pdf->text(660, 109, "Pág $PAGE_NUM de $PAGE_COUNT", $font, 12);
        ');
    }
    </script>
  </main>
    
  </body>
  
  
  </html>