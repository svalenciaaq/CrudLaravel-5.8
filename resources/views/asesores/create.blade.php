@extends('layouts.app')


@section('title', 'Registro de asesores')

@section('nav-title' , 'Registro de asesores')

@section('log')
<a class ="navbar-brand" href="{{route('logout')}}">Logout</a>
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

@endsection

@section('content') 

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class="row">
    <div class="col-sm-4 offset-md-4">      
   {!! Form::open(['route' => 'asesores.store' , 'method' => 'POST', 'class' =>'panel' , 'id'=> 'form-asesor'])!!}
   
   <!-- Name -->
    <div class="form-group">
      <div class="row">
        <div class ="col"> 
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control ' , 'placeholder' => 'Nombre' ]) !!}
        </div>
      </div>
    </div>
    

   <!--  Dni -->
   <div class="form-group">
    <div class="row">
      <div class ="col"> 
        {!! Form::label('dni', 'Cedula') !!}
        {!! Form::text('dni', null, ['class' => 'form-control' , 'placeholder' => 'Cedula']) !!} 
     </div>
    </div>
  </div>
    
   <!--  Tel -->
   <div class="form-group">
   <div class="row">
    <div class ="col"> 
   {!! Form::label('tel', 'Telefono') !!}
   {!! Form::text('tel', null, ['class' => 'form-control' , 'placeholder' => 'Telefono' ]) !!}
     </div>
    </div>
  </div>
   
   <!--  Date -->
   <div class="form-group">
   <div class="row">
    <div class ="col"> 
   {!! Form::label('date', 'Fecha de nacimiento') !!}
   {!! Form::date('date', null, ['class' => 'form-control' , 'placeholder' => 'Fecha de nacimiento']) !!}
     </div>
    </div>
  </div>
  <!-- Gen -->
  <div class="form-group">
  <div class="row">
    <div class ="col">   
   {!! Form::label('gen', 'Genero') !!}
   {!! Form::select('gen', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino' , 'Otro' => 'Otro'], null, ['class'=> 'form-control','placeholder' => 'Escoja un genero'] , ) !!}
    </div>
  </div>
</div>
     
   <!--  Client -->
   <div class="form-group">
   <div class="row">
    <div class ="col">  
   {!! Form::label('client', 'Cliente') !!}
   {!! Form::text('client', null, ['class' => 'form-control' , 'placeholder' => 'Cliente']) !!}
     </div>
    </div>
  </div>

    <!-- Sede --> 
    <div class="form-group">
    <div class="row">
     <div class ="col">    
   {!! Form::label('sede', 'Sede') !!}
   {!! Form::select('sede', ['Ruta N' => 'Ruta N', 'Puerto seco' => 'Puerto seco' , 'Buro' => 'Buro'], null, ['class'=> 'form-control mb-3','placeholder' => 'Escoja una sede' ,'id'=> 'select'] , ) !!}
     </div>
    </div>
  </div>
   <!-- Button -->
   <div class="row">
    <div class="col text-center">
        {!! Form::submit('Enviar', ['class' => 'btn btn-success btn-sm mb-4 center ' , 'id' => 'btn-send']) !!}
        {!! Form::close() !!}
        <a href="{{ route('asesores.index') }}" class="btn btn-success btn-sm mb-4 center" >Atrás</a>
    </div>
  </div>
     </div>
  </div>

  
@endsection