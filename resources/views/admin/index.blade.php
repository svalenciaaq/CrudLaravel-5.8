@extends('layouts.app')

<!-- Title -->
@section('title' , 'Admin')

<!-- Nav-Title -->
@section('nav-title', 'Panel de administracion')


@section('content')
    <!-- Section: Features v.2 -->
<section class="my-5 bg-white borderer">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Konecta</h2>
    <!-- Section description -->
    <p class="lead grey-text text-center w-responsive mx-auto mb-5">
        Este panel de administracion permite el control total de la aplicacion desde todos los recursos que tienen que 
       ver con los usuarios, como tambien el manejo de clientes
    </p>
  
    <!-- Grid row -->
    <div class="row">
  
      <!-- Grid column -->
      <div class="col-md-4 mb-md-3 mb-5">
  
        <!-- Grid row -->
        <div class="row">
  
          <!-- Grid column -->
          <div class="col-lg-2 col-md-3 col-2 ">
            <i class="fas fa-bullhorn blue-text fa-2x"></i>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col col-md-offset-5 ">
            <h4 class="font-weight-bold">Usuarios</h4>
            <p class="grey-text">Este apartado permite el contro total de los usuarios desde crear nuevos usuarios, editarlos y eliminarlos, como tambien la posibilidad de visualizar cada uno de los usuarios</p>
            <a   href="{{ route('users.index') }}" class="btn btn-primary btn-sm">panel</a>
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row -->
  
      </div>
      <!-- Grid column -->
  
      <!-- Grid column -->
      <div class="col-md-4 mb-md- mb-5">
  
        <!-- Grid row -->
        <div class="row">
    
          <!-- Grid column -->
          <div class="col-lg-10 col-md-9 col-10 mx-auto">
            <h4 class="font-weight-bold">Clientes</h4>
            <p class="grey-text">Este apartado permite el control total de los clientes , tales como crear nuevos clientes, editarlos  y eliminar estos clientes, y visualizar cada uno de los clientes que se hallan creado</p>
            <a   href="{{ route('clientes.index') }}"class="btn btn-primary btn-sm">
                Panel
            </a>
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row -->

        
  
      </div>
      <!-- Grid column -->
  

      <div class="col-md-4 mb-md- mb-5">
  
        <!-- Grid row -->
        <div class="row">
    
          <!-- Grid column -->
          <div class="col-lg-10 col-md-9 col-10 mx-auto">
            <h4 class="font-weight-bold">Proximamente</h4>
            <p class="grey-text">
                Apartado para funciones que se añadiran en un futuro, tales como un dashboard de visualizacion de datos y estadisticas
            </p>
        <a  class="btn btn-primary btn-sm" >
                Panel
            </a>
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row -->

        
  
      </div>

  
  </section>
  <!-- Section: Features v.2 -->
@endsection