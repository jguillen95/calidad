@extends('layouts.plantillabase')

@section('title','Desviación:Modificación de Documentos')
@section('h-title','Documentos Dibar')

@section('content')
{{-- Indicaciones --}}

<form action="{{route('moddocumentos.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <h3 class="text-center pad-basic no-btm">Agregar Modificaciones a documentos</h3>
    <table class="table table-hover"  id="tabla">
            <tr class="fila-fija">
              <td scope="col"> 
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" id="area" name="codigo[]">
              </td>
                <td scope="col">
                  <label for="titulo" class="form-label">Título</label>
                  <input type="text" class="form-control" id="titulo" name="titulo[]">
                </td>
                <td scope="col">
                  <label for="responsable" class="form-label">Responsable</label>
                  <input type="text" class="form-control" id="responsable" name="responsable[]">
                </td>
                <td scope="col">
                  <label for="fecha" class="form-label">Fecha</label>
                  <input type="datetime-local" class="form-control" id="fecha" name="fecha[]">
                </td>
                  <td scope="col">
                    <label for="firma_mod" class="form-label">Firma</label>
                    <input type="text" class="form-control" id="firma_mod" name="firma_mod[]">
                  </td>
                <td class="eliminar"><input type="button"   value="Quitar Item"/></td>
            </tr>
    </table>

    <div class="btn-der">
        <input id="adicional" name="adicional" type="button" class="btn btn-success" value="+ Agregar otro Item"> </input>
        <button type="button" name="button" value="No Aplica" id="boton" onclick="sendData()">No Aplica</button>
        <input type="submit" name="insertar" value="Insertar Datos" class="btn btn-info"/>
    </div>
</form>
   
     

     <script>
			
        $(function(){
            // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
            $("#adicional").on('click', function(){
                $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
            });
         
            // Evento que selecciona la fila y la elimina 
            $(document).on("click",".eliminar",function(){
                var parent = $(this).parents().get(0);
                $(parent).remove();
            });
        });
        function sendData() {
        document.getElementById('area').value += document.getElementById('boton').innerHTML;
        document.getElementById('titulo').value += document.getElementById('boton').innerHTML;
        document.getElementById('responsable').value += document.getElementById('boton').innerHTML;
        document.getElementById('firma_mod').value += document.getElementById('boton').innerHTML;
        }
    </script>
@endsection
