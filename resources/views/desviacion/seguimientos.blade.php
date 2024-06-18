@extends('layouts.plantillabase')

@section('title','Desviación:Seguimientos')
@section('h-title','Documentos Dibar')

@section('content')
{{-- Indicaciones --}}

<form action="{{route('desviacion.segStore')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <h3 class="text-center pad-basic no-btm">Agregar Seguimiento</h3>
    <input hidden type="text" name="des_id" value="{{$ids}}">
    <table class="table table-hover"  id="tabla">
            <tr class="fila-fija">
              <td scope="col">
                <label for="descripcion_seg" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion_seg" name="descripcion_seg[]">
              </td>
                <td scope="col">
                  <label for="realizo_seg" class="form-label">Realizó</label>
                  <input type="text" class="form-control" id="realizo_seg" name="realizo_seg[]">
                </td>
                <td scope="col">
                  <label for="fecha_seg" class="form-label">fecha</label>
                  <input type="datetime-local" class="form-control" id="fecha_seg" name="fecha_seg[]" placeholder="fecha">
                </td>
                <td class="eliminar"><input type="button"   value="Quitar Item"/></td>
            </tr>
    </table>

    <div class="btn-der">
        <input id="adicional" name="adicional" type="button" class="btn btn-success" value="+ Agregar otro Item"> </input>
        <button type="button" name="button" value="No Aplica" id="boton" onclick="sendData()">No aplica</button>
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
        document.getElementById('descripcion_seg').value += document.getElementById('boton').innerHTML;
        document.getElementById('realizo_seg').value += document.getElementById('boton').innerHTML;
        }
    </script>
@endsection
