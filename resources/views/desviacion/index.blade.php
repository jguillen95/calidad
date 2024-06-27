@extends('layouts.plantillabase')

@section('title','Hoja de Seguridad')
@section('h-title','Documentos Dibar')

{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<div class="panel panel-success">
    <form action="/formularios/public/buscarDesviacion" method="get" onsubmit="return showLoad()">
    <div class="panel-body">
        <label class="label-control">Ingresa el nombre del producto</label>
        <input type="text" name="buscar" class="form-control" placeholder="Ingresar nombre del producto" required="required">
        <br>

</div>
<div class="panel-footer">
    <button type="submit" class="btn btn-success">buscar</button>
</div>
</form>
</div>

<!-- check if $buscar variable is set, display buscar result -->
@if (isset($buscar))
<div class="panel panel-success">
    <div class="panel-heading">Resultado de la busqueda</div>
    <div class="panel-body">

        <div class='table-responsive'>
          <table class='table table-bordered table-hover'>
            <thead>
              <tr>
                <th>ID de desviación</th>
                <th>Producto Desviación</th>
                <th>Lote afectado</th>
                <th>Desviacion</th>
                <th>Acciones</th>
                

              </tr>
            </thead>
            <tbody>

            @foreach($buscar as $buscars)
                <tr>
                    <td>{{$buscars->idComp}}</td>
                    <td>{{$buscars->prodcuto_des}}</td>
                    <td>{{$buscars->lote_des}}</td>
                    <td>{{$buscars->desviacion_des}}</td>
                    <td>
                        @if ($buscars->sem == 1)
                        <button type="button" class="btn btn-info"><a style="color:white;" href="{{ route('desviacion.correcciones', $buscars->id)}}">Correcciones/Acciones</a></button>   
                        @elseif($buscars->sem == 2)
                        <button type="button" class="btn btn-info"><a style="color:white;" href="{{ route('desviacion.documentos', $buscars->id)}}" >Documentos</a></button>
                        @elseif($buscars->sem == 3)
                        <button type="button" class="btn btn-info"><a style="color:white;" href="{{ route('desviacion.vobo', $buscars->id)}}" >Vobo</a></button>
                        @elseif($buscars->sem == 4)
                        <button type="button" class="btn btn-info"><a style="color:white;" href="{{ route('desviacion.seg', $buscars->id)}}" >Seguimientos</a></button>
                        @elseif($buscars->sem == 5)
                        <button type="button" class="btn btn-info"><a style="color:white;" href="{{ route('desviacion.cierre', $buscars->id)}}" >Cierre</a></button>
                        @endif
                        @if (auth()->user()->usertype_id==1)
                        <button type="button" class="btn btn-warning"><a style="color:white;" href="{{ route('desviacion.edit', $buscars->id)}}" >Editar</a></button>
                        @endif
                        <button type="button" class="btn btn-danger"><a style="color:white;" href="{{ route('desviacion.show', $buscars->id)}}" Target="_blank">PDF</a></button>
                    </td>
                </tr>
            @endforeach

            </tbody>
                </table>
                <center>{{ $buscar->appends(Request::all())->links()}}</center>
            </div>

    </div>
    <div class="panel-footer">
        <a href="{{url('desviacion')}}" class="btn btn-warning">Restaurar busqueda</a>
    </div>
</div>
@endif


@endsection
