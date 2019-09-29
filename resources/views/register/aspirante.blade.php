@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>

<br>

<div class="container">
<div class="row">
    <div class=""></div>
    <div class="col-sm-6 col-sm-offset-3">
    <form method="POST" action="{{ url('/registro') }}" >
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control"name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telefóno</label>
    <input type="text" class="form-control" name="telefono" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu telefóno">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
</div>
@endsection