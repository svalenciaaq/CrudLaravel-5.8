@extends('layouts.app')

<!-- Title -->
@section('title' , 'Home')

<!-- Nav-Title -->
@section('nav-title', 'Konecta-Crud')


@section('content')
    
   <!-- Section: Features v.2 -->
   <section class="my-5 bg-white borderer">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Konecta</h2>
    <!-- Section description -->
    <p class="lead grey-text text-center w-responsive mx-auto mb-5">
        Aplicacion con autentificacion por roles, donde existen dos roles, uno admin y uno vendedor.<br>
        El rol admin nos permite realizar crud de usuarios y ademas crud de clientes, el rol vendedor <br>
        nos permite solo crear crud de clientes, la aplicacion esta realizada 100% en laravel, utilizando <br>
        varias de sus utilidades ya sea su modulo de autentificacion, sus middleware, sus plantillas blade <br>
        para darle vista, donde ademas se utiliza jquery para la validacion en el front, y Request para <br>
        validaciones en el back end.
    </p>
  
      </div>
    </section>
  
@endsection