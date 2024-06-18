@extends('layouts.plantillabase')

@section('title','BPMS')
@section('h-title','Documentos Dibar')

{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<div class="panel panel-success">
    <form action="/formularios/public/buscarBpm" method="get" onsubmit="return showLoad()">
    <div class="panel-body">
        <label class="label-control">Buscar documentos</label>
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
                <th>Fecha</th>
                <th>Turno</th>
                <th>Hora</th>
                <th>Acciones</th>
                

              </tr>
            </thead>
            <tbody>

            @foreach($buscar as $buscars)
                <tr>
                    <td>{{$buscars->fecha}}</td>
                    <td>{{$buscars->turno}}</td>
                    <td>{{$buscars->hora}}</td>
                    <td>
                        @if (is_null($buscars->vobo))
                        <button type="button" class="btn btn-success"><a style="color:white;" href="{{ route('bpm.autoriza', $buscars->id)}}" Target="_blank">Autorizar</a></button>
                        @endif
                        <button type="button" class="btn btn-info"><a style="color:white;" href="{{ route('bpm.edit', $buscars->id)}}" >Editar</a></button>
                        <button type="button" class="btn btn-danger"><a style="color:white;" href="{{ route('bpm.show', $buscars->id)}}" Target="_blank">PDF</a></button>
                    </td>
                </tr>
            @endforeach

            </tbody>
                </table>
                <center>{{ $buscar->appends(Request::all())->links()}}</center>
            </div>

    </div>
    <div class="panel-footer">
        <a href="{{url('bpm')}}" class="btn btn-warning">Restaurar busqueda</a>
    </div>
</div>
@endif


@endsection
