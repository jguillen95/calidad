@extends('layouts.plantillabase')

@section('title','Reponsables')
@section('h-title','Documentos Dibar')
{{-- @section('card-title','Desviación de proceso') --}}

@section('content')

<form action="{{route('responsable.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
    @csrf
    <div class="col-md-6">
      <label for="responsable" class="form-label">Nombre</label>
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autofocus>
      @error('name')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
     @enderror
    </div>
    <div class="col-md-6">
      <label for="puesto" class="form-label">Usuario</label>
      <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="{{ __('Username') }}" required autofocus>


                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" required autofocus>
                
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
      </div>
      <div class="col-md-6">
        <label for="departamento" class="form-label">Departamento</label>
        <select id="usertype_id" aria-label="Default select example" class="form-select @error('usertype_id') is-invalid @enderror" name="usertype_id" required autofocus>
          <option value="">SELECCIONE</option>
          @foreach($usertype as $usert)
              <option value="{{ $usert->id }}" @if(old('usertype_id') == $usert->id) selected @endif>{{ $usert->type }}</option>
          @endforeach
      </select>
  
      @error('usertype_id')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Contraseña</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">
               
                
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label"> Confirmar Contraseña</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
      </div>
    <div class="col-md-6">
        <label for="firma" class="form-label">Ingresa las iniciales de tu nombre</label>
        <input id="firma" type="firma" placeholder="Iniciales de tu nombre y apellido" class="form-control @error('firma') is-invalid @enderror" name="firma" required autofocus>
               @error('firma')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
      </div>
      <div class="col-md-6">
        <label for="puesto" class="form-label">Ingresa tu puesto</label>
        <input id="puesto" type="text" placeholder="ingresa tu puesto" class="form-control @error('puesto') is-invalid @enderror" name="puesto" required autofocus>
               @error('puesto')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
      </div>
    
    <div class="col-12">
      <button type="submit" class="btn btn-info"  style="color:rgb(255, 255, 255); background-color:green; text-align:center; line-height:0px;" >Siguiente</button>
    </div>
  </form>
@endsection