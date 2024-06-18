@extends('layouts.plantillabase')

@section('title','Desviación:Correcciones-Acciones')
@section('h-title','Documentos Dibar')

@section('content')
{{-- Indicaciones --}}
<form action="{{route('correccion.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <h3 class="text-center pad-basic no-btm">Agregar Acciones y Correcciones</h3>

    <table class="table table-hover"  id="tabla">
            <tr class="fila-fija">
              <td scope="col"> <label for="tipo" class="form-label">Tipo</label>
                <select type="text" class="form-select" id="tipo" name="tipo[]">
                    <option value="N/A">No Aplica</option>
                    <option value="Corrección">Corrección</option>
                    <option value="Acción">Acción</option>
                </select>
              </td>
                <td scope="col"><label for="actividad" class="form-label">Actividad</label>
                  <input type="text" class="form-control" id="actividad" placeholder="Ingrese Actividad" name="actividad[]"></td>
                <td scope="col"><label for="responsable" class="form-label">Responsable</label>
                  <input type="text" class="form-control" id="responsable" name="responsable[]"></td>
                <td scope="col"><label for="fecha" class="form-label">Fecha</label>
                  <input type="datetime-local" class="form-control" id="fecha_corre" name="fecha_corre[]"></td>
                  <td scope="col">
                    <label for="Firma" class="form-label">Firma</label>
                    <input type="text" class="form-control" id="firma_corre" name="firma_corre[]">
                  </td>
                <td class="eliminar"><input type="button"   value="Quitar Item"/></td>
            </tr>
    </table>

    <div class="btn-der">
        <input id="adicional" name="adicional" type="button" class="btn btn-success" value="+ Agregar otro Item"> </input>
        <input type="submit" name="insertar" value="Insertar Datos" class="btn btn-info"/>
        <button type="button" name="button" value="No Aplica" id="boton" onclick="sendData()">No aplica</button>
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
        document.getElementById('actividad').value += document.getElementById('boton').innerHTML;
        document.getElementById('firma_corre').value += document.getElementById('boton').innerHTML;
        document.getElementById('responsable').value += document.getElementById('boton').innerHTML;
        }
    </script>
@endsection
