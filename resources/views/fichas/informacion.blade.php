@extends('layouts.plantillabase')

@section('title','Ficha Técnica: Tabla Nutrimental')
@section('h-title','Documentos Dibar')

@section('content')
{{-- Indicaciones --}}

<form action="{{route('informacion.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <h3 class="text-center pad-basic no-btm">Agregar datos de tabla nutrimental</h3>
    <table class="table table-hover"  id="tabla">
            <tr class="fila-fija">
              <td scope="col">
                <label for="contenido" class="form-label">contenido:</label>
                <input type="text" class="form-control" id="contenido" name="contenido[]">
              </td>
              <td scope="col">
                <label for="porcion" class="form-label">por porción:</label>
                <input type="text" class="form-control" id="porcion" name="porcion[]">
              </td>
              <td scope="col">
                <label for="porcion_g" class="form-label">por 100G:</label>
                <input type="text" class="form-control" id="porcion_g" name="porcion_g[]">
              </td>
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
