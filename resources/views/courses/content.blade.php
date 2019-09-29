@extends('layouts.app')

@section('content')

      <div class="container">
            
            <section class="container card">
                  <div class="card-header"> <b> {{ __('Temario del curso') }}</b></div>
                  <nav class="col-12 col-md-3 col-xl-2 bd-sidebar">
                  <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                        Programación con php
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Leccion 1: instalación</a>
                        <a href="#" class="list-group-item list-group-item-action">Texto recomendado: Documentación</a>
                        <a href="#" class="list-group-item list-group-item-secondary list-group-item-action">Introducción</a>
                        </div>
                  </nav>
            
      </section>
    </div>

@endsection