@extends('layouts.plantillabase')

@section('title','BPMS')
@section('h-title','Documentos Dibar')

@section('content')
{{-- Indicaciones --}}

<form action="{{route('parametro.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <h3 class="text-center pad-basic no-btm">Agregar Items</h3>
    <table class="table table-hover"  id="tabla">
            <tr class="fila-fija">
              <td scope="col"> 
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="box" class="form-control" id="nombre" name="nombre[]" required>
                </td>
                <td scope="col">
                  <label for="cofia" class="form-label">Cofia</label>
                  <select type="text" class="form-select" id="cofia" name="cofia[]" required>
                    <option value="SI">Si</option>
                    <option value="NO">No</option>
                  </select>
                  
                {{-- </td>
                <td scope="col"> --}}
                  <label for="cubre" class="form-label">Cubre Bocas</label>
                  <select type="text" class="form-select" id="cubre" name="cubre[]" required>
                    <option value="SI">Si</option>
                    <option value="NO">No</option>
                  </select>
                {{-- </td>
                  <td scope="col"> --}}
                    <label for="uniforme" class="form-label">Uniforme</label>
                    <select type="text" class="form-select" id="uniforme" name="uniforme[]" required>
                      <option value="SI">Si</option>
                      <option value="NO">No</option>
                    </select>
                {{-- </td>
                <td> --}}
                    <label for="manos" class="form-label">Manos lavadas y santitizadas</label>
                    <select type="text" class="form-select" id="manos" name="manos[]" required>
                      <option value="SI">Si</option>
                      <option value="NO">No</option>
                    </select>
                  </td>
                    
                  <td scope="col">
                
                    <label for="unas" class="form-label">Uñas cortas</label>
                    <select type="text" class="form-select" id="unas" name="unas[]" required>
                      <option value="SI">Si</option>
                      <option value="NO">No</option>
                    </select>
                   {{-- </td>
                  <td scope="col"> --}}
                    <label for="heridas" class="form-label">Sin heridas</label>
                    <select type="text" class="form-select" id="heridas" name="heridas[]" required>
                      <option value="SI">Si</option>
                      <option value="NO">No</option>
                    </select>
                    <label for="maquillaje" class="form-label">Sin maquillaje / sin barba</label>
                    <select type="text" class="form-select" id="maquillaje" name="maquillaje[]" required>
                      <option value="SI">Si</option>
                      <option value="NO">No</option>
                    </select>
                  {{-- </td>
                  <td scope="col"> --}}
                    <label for="botas" class="form-label">Botas / Zapatones</label>
                    <select type="text" class="form-select" id="botas" name="botas[]" required>
                      <option value="SI">Si</option>
                      <option value="NO">No</option>
                    </select>
                  </td>
                  <td scope="col">
                    <label for="perfume" class="form-label">Sin perfume</label>
                    <select type="text" class="form-select" id="perfume" name="perfume[]" required>
                      <option value="SI">Si</option>
                      <option value="NO">No</option>
                    </select>
                  
                    <label for="enfermedad" class="form-label">Sin sintomas de enfermedad</label>
                    <select type="text" class="form-select" id="enfermedad" name="enfermedad[]" required>
                      <option value="SI">Si</option>
                      <option value="NO">No</option>
                    </select>
                    
                    <label for="articulos" class="form-label">Sin articulos personales</label>
                    <select type="text" class="form-select" id="articulos" name="articulos[]" required>
                      <option value="SI">Si</option>
                      <option value="NO">No</option>
                    </select>
                  
                    <label for="observaciones" class="form-label">Observaciones</label>
                    <input type="text" class="form-control" id="observaciones" name="observaciones[]">
                    
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
