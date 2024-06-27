@extends('layouts.plantillabase')

@section('title','Limpieza y Sanitización Pre-Operacional')
@section('h-title','Documentos Dibar')

{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<div class="panel panel-success">
    <form action="/formularios/public/buscarSanitizacion" method="get" onsubmit="return showLoad()">
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
                <th>ID</th>
                <th>Fecha</th>
                <th>Producto anterior</th>
                <th>Producto entrada</th>
                <th>Acciones</th>
                

              </tr>
            </thead>
            <tbody>

            @foreach($buscar as $buscars)
                <tr>
                    <td>{{$buscars->id}}</td>
                    <td>{{$buscars->fecha}}</td>
                    <td>{{$buscars->p_anterior}}</td>
                    <td>{{$buscars->p_entrada}}</td>
                    <td>
                        @if (auth()->user()->usertype_id==1)
                        <button type="button" class="btn btn-info"><a style="color:white;" href="{{ route('sanitizacion.edit', $buscars->id)}}">Editar</a></button>
                        @endif
                        <button type="button" class="btn btn-danger"><a style="color:white;" href="{{ route('sanitizacion.show', $buscars->id)}}" Target="_blank">PDF</a></button>
                    </td>
                </tr>
            @endforeach

            </tbody>
                </table>
                <center>{{ $buscar->appends(Request::all())->links()}}</center>
            </div>

    </div>
    <div class="panel-footer">
        <a href="{{url('sanitizacion')}}" class="btn btn-warning">Restaurar busqueda</a>
    </div>
</div>
@endif


@endsection
