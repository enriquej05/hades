@extends('layouts.app')

@section('content')

<!--Perfil de usuario-->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Mi perfil </h5>
        @foreach($currentUser as $user)

        <div class="card-body">
          <h5 class="card-title">Datos de @usuario</h5>
          <p class="card-text"></p>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre: </label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="{{$user['nombre'}}">
            </div>
            <label for="staticEmail" class="col-sm-2 col-form-label">Telefono: </label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="{{$user['telefono']}}">
            </div>
          </div>
  
          <a href="#" class="btn btn-primary">Actualizar mis datos</a>
        </div>
        @endforeach
        @foreach($currentEmpresa as $empresa)
        <div class="card-body">
        
          <h5 class="card-title">Datos de Empresa</h5>
          <p class="card-text"></p>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre de la empresa: </label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="bluesoft">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Sector Empresarial: </label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Comercio">
            </div>
          </div>

          <a href="#" class="btn btn-primary">Actualizar datos de mi empresa</a>
        </div>
        @endforeach


        <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card">
              <h5 class="card-header">Mi perfil </h5>
      </div>
    </div>
  </div>
</div>

@endsection 