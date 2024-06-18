@extends('layouts.plantillabase')

@section('title','Hoja de Seguridad')
@section('h-title','Documentos Dibar')

@section('content')
{{-- Indicaciones --}}

<form action="/formularios/public/ingredienteStore" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <h3 class="text-center pad-basic no-btm">Agregar Ingredientes del PT</h3>
    <table class="table table-hover"  id="tabla">
            <tr class="fila-fija">
                <td scope="col"><input required name="componente[]" placeholder="Sustancia Química o Componente"/></td>
                <td scope="col"><input required name="sinonimo[]" placeholder="Sinónimo"/></td>
                <td scope="col"><input required name="cas[]" placeholder="No. de CAS"/></td>
                <td scope="col"><input required name="formula[]" placeholder="Formula"/></td>
                <td class="eliminar"><input type="button"   value="Quitar Item"/></td>
            </tr>
    </table>

    <div class="btn-der">
        <input id="adicional" name="adicional" type="button" class="btn btn-success" value="+ Agregar otro Item"> </input>
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
    </script>
@endsection
