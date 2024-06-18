@extends('layouts.plantillabase')

@section('title','Limpieza y sanitización pre-operacional')
@section('h-title','Documentos Dibar')

@section('content')
{{-- Indicaciones --}}

<form action="{{route('desinfeccion.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <h3 class="text-center pad-basic no-btm">Agregar Items</h3>
    <table class="table table-hover"  id="tabla">
            <tr class="fila-fija">
              <td scope="col"> 
                  <label for="actividad" class="form-label">Actividad</label>
                  <select type="text" class="form-select" id="actividad" name="actividad[]" required>
                    <option value="Limpieza del área cercana">Limpieza del área cercana</option>
                    <option value="Limpieza del área de trabajo">Limpieza del área de trabajo</option>
                    <option value="Limpieza del equipo">Limpieza del equipo</option>
                    <option value="Sanitización del equipo">Sanitización del equipo</option>
                    <option value="Sanitización de Utensilios">Sanitización de Utensilios</option>
                  </select>
                </td>
                <td scope="col"> 
                  <label for="sustancia" class="form-label">Sustancia limpiadora / sanitizante</label>
                  <input type="text" class="form-control" id="sustancia" name="sustancia[]" required>
                  
                </td>
                <td scope="col"> 
                  <label for="concentracion" class="form-label">Concentración</label>
                  <input type="text" class="form-control" id="concentracion" name="concentracion[]" required>
                </td>
                  <td scope="col"> 
                    <label for="realizo" class="form-label">Realizó</label>
                    <input type="text" class="form-control" id="realizo" name="realizo[]" required>
                    </td>
                    <td scope="col">
                    <label for="cumple" class="form-label">¿Cumple?</label>
                    <select type="text" class="form-select" id="cumple" name="cumple[]" required>
                        <option value="SI">Cumple</option>
                        <option value="NO">No cumple</option>
                    </select>
                 </td>
                  <td scope="col"> 
                    <label for="verifico" class="form-label">Verificó</label>
                    <input type="text" class="form-control" id="verifico" name="verifico[]" required>
                  </td>
                <td class="eliminar"><input type="button"   value="-"/></td>
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
