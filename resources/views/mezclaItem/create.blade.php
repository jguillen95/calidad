@extends('layouts.plantillabase')

@section('title','Mezcla')
@section('h-title','Documentos Dibar')

@section('content')
{{-- Indicaciones --}}

<form action="{{route('mezclaItem.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <h3 class="text-center pad-basic no-btm">Agregar Items</h3>
    <table class="table table-hover"  id="tabla">
            <tr class="fila-fija">
              <td scope="col"> 
                  <label for="i_mezcla" class="form-label">Inicio de Mezcla (Hora)</label>
                  <input type="time" class="form-control" id="i_mezcla" name="i_mezcla[]" required>
                {{-- </td>
                <td scope="col"> --}}
                  <label for="f_mezcla" class="form-label">Fin de Mezcla (Hora)</label>
                  <input type="time" class="form-control" id="f_mezcla" name="f_mezcla[]" required>
                  
                {{-- </td>
                <td scope="col"> --}}
                  <label for="tiempo" class="form-label">tiempo (minutos)</label>
                  <input type="text" class="form-control" id="tiempo" name="tiempo[]" required>
                {{-- </td>
                  <td scope="col"> --}}
                    <label for="apariencia" class="form-label">MP cernidas</label>
                    <input type="text" class="form-control" id="apariencia" name="apariencia[]" required>

                    <label for="firma_realizo" class="form-label">Realizo la carga (Firma)</label>
                    <input type="text" class="form-control" id="firma_realizo" name="firma_realizo[]" required>
                  {{-- </td>
                  <td scope="col"> --}}
                    <label for="firma_verifico" class="form-label">verifico (Firma)</label>
                    <input type="text" class="form-control" id="firma_verifico" name="firma_verifico[]" required>
                   {{-- </td>
                  <td scope="col"> --}}
                    <label for="color" class="form-label">color</label>
                    <input type="text" class="form-control" id="color" name="color[]" required>
                    <label for="olor" class="form-label">olor</label>
                    <input type="text" class="form-control" id="olor" name="olor[]" required>
                  </td>
                  <td scope="col">
                    <label for="sabor" class="form-label">Sabor</label>
                    <input type="text" class="form-control" id="sabor" name="sabor[]" required>

                    <label for="granulometria" class="form-label">Granulometría</label>
                    <input type="text" class="form-control" id="granulometria" name="granulometria[]" required>
                  
                    <label for="olor" class="form-label">Consistencia</label>
                    <input type="text" class="form-control" id="consistencia" name="consistencia[]" required>
                    
                    <label for="solubilidad" class="form-label">Solubilidad</label>
                    <input type="text" class="form-control" id="solubilidad" name="solubilidad[]" required>
                  
                    <label for="ph" class="form-label">PH</label>
                    <input type="text" class="form-control" id="ph" name="ph[]" required>

                    <label for="peso_teorico" class="form-label">Peso Teórico</label>
                    <input type="text" class="form-control" id="peso_teorico" name="peso_teorico[]" required>

                    <label for="peso_real" class="form-label">Peso Real</label>
                    <input type="text" class="form-control" id="peso_real" name="peso_real[]" required>
                    <label for="cumple" class="form-label">¿Cumple?</label>
                  <select type="text" class="form-select" id="tipo" name="cumple[]">
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                    {{-- </td>
                  <td scope="col"> --}}
                    
                  {{-- </td>
                  <td scope="col"> --}}
                    
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
