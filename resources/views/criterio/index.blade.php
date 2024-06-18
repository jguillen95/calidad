@extends('layouts.plantillabase')

@section('title','Criterios')
@section('h-title','Documentos Dibar')

{{-- @section('card-title','Desviación de proceso') --}}

@section('content')
<div class="panel panel-success">
    <form action="/formularios/public/buscarCriterio" method="get" onsubmit="return showLoad()">
    <div class="panel-body">
        <label class="label-control">Busca tu formato</label>
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
                <th>Producto</th>
                <th>ID PT</th>
                <th>Acciones</th>
                

              </tr>
            </thead>
            <tbody>

            @foreach($buscar as $buscars)
                <tr>
                    <td>{{$buscars->id}}</td>
                    <td>{{$buscars->producto}}</td>
                    <td>{{$buscars->id_sap_pt}}</td>
                    <td>
                        @if($buscars->tipo=='VISCOSO-1')
                        <button type="button" class="btn btn-danger"><a style="color:white;" href="{{ route('criterio.show', $buscars->id)}}" Target="_blank">PDF</a></button>
                        @elseif($buscars->tipo=='TABLETAS')
                        <button type="button" class="btn btn-danger"><a style="color:white;" href="{{ route('polvoadicional.show', $buscars->id)}}" Target="_blank">PDF</a></button>
                        @elseif($buscars->tipo=='CAPSULAS')
                        <button type="button" class="btn btn-danger"><a style="color:white;" href="{{ route('capsulas.show', $buscars->id)}}" Target="_blank">PDF</a></button>
                        @elseif($buscars->tipo=='SACHET')
                        <button type="button" class="btn btn-danger"><a style="color:white;" href="{{ route('sachet.show', $buscars->id)}}" Target="_blank">PDF</a></button>
                        @elseif($buscars->tipo=='LIQUIDO')
                        <button type="button" class="btn btn-danger"><a style="color:white;" href="{{ route('liquido.show', $buscars->id)}}" Target="_blank">PDF</a></button>
                        @elseif($buscars->tipo=='POLVOS')
                        <button type="button" class="btn btn-danger"><a style="color:white;" href="{{ route('polvo.show', $buscars->id)}}" Target="_blank">PDF</a></button>
                        @elseif($buscars->tipo=='2')
                        <button type="button" class="btn btn-warning"><a style="color:white;" href="{{ route('selenium.edit', $buscars->id)}}">Editar</a></button>
                        <button type="button" class="btn btn-danger"><a style="color:white;" href="{{ route('selenium.show', $buscars->id)}}" Target="_blank">PDF</a></button>
                        @elseif($buscars->tipo=='3')
                        <button type="button" class="btn btn-warning"><a style="color:white;" href="{{ route('biovita.edit', $buscars->id)}}">Editar</a></button>
                        <button type="button" class="btn btn-danger"><a style="color:white;" href="{{ route('biovita.show', $buscars->id)}}" Target="_blank">PDF</a></button>
                        @elseif($buscars->tipo=='4')
                        <button type="button" class="btn btn-warning"><a style="color:white;" href="{{ route('polvotemplate.edit', $buscars->id)}}">Editar</a></button>
                        <button type="button" class="btn btn-danger"><a style="color:white;" href="{{ route('polvotemplate.show', $buscars->id)}}" Target="_blank">PDF</a></button>
                        @endif
                        
                    </td>
                </tr>
            @endforeach

            </tbody>
                </table>
                <center>{{ $buscar->appends(Request::all())->links()}}</center>
            </div>

    </div>
    <div class="panel-footer">
        <a href="{{url('criterio')}}" class="btn btn-warning">Restaurar busqueda</a>
    </div>
</div>
@endif


@endsection
