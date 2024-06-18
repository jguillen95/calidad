@extends('layouts.plantillabase')

@section('title','PT:logistica')
@section('h-title','Documentos Dibar')

@section('content')
{{-- Indicaciones --}}

<form action="{{route('logistica.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <h3 class="text-center pad-basic no-btm">Agregar Pesos y dimenisiones</h3>
    <table class="table table-hover"  id="tabla">
            <tr class="fila-fija">
              <td scope="col">
                <label for="tipo" class="form-label">Atributo</label>
                  <select type="text" class="form-select" id="tipo" name="tipo[]">
                    <option value="AMPLIO">AMPLIO</option>
                    <option value="PROFUNDO">PROFUNDO</option>
                    <option value="ALTO">ALTO</option>
                    <option value="PESO NETO">PESO NETO</option>
                    <option value="PESO BRUTO">PESO BRUTO</option>
                    <option value="VOLUMEN">VOLUMEN</option>
                </select>
              </td>
                <td scope="col">
                  <label for="producto" class="form-label">Producto</label>
                  <input type="text" class="form-control" id="producto" name="producto[]" required>
                </td>
                <td scope="col">
                  <label for="caja" class="form-label">Caja</label>
                  <input type="text" class="form-control" id="caja" name="caja[]" required>
                  </td>
                <td scope="col">
                  <label for="palet" class="form-label">Palet</label>
                  <input type="text" class="form-control" id="palet" name="palet[]" required>
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
