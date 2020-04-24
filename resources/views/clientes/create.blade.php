@extends('layouts.app')


@section('title', 'Registro de asesores')

@section('nav-title' , 'Registro de asesores')

@section('log')
@can('clientes.create')
<li class="nav-item">
    <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
</li>
@endcan
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
   {!! Form::open(['route' => 'clientes.store' , 'method' => 'POST', 'class' =>'panel' , 'id'=> 'form-client'])!!}
   
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
   {!! Form::label('email', 'Email') !!}
   {!! Form::email('email', null, ['class' => 'form-control' , 'placeholder' => 'Email' ]) !!}
     </div>
    </div>
  </div>
  
  



   <!--  Date -->
   <div class="form-group">
   <div class="row">
    <div class ="col"> 
   {!! Form::label('addres', 'Direcion') !!}
   {!! Form::text('addres', null, ['class' => 'form-control' , 'placeholder' => 'Direccion']) !!}
     </div>
    </div>
  </div>
  
   <!-- Button -->
   <div class="row">
    <div class="col text-center">
        {!! Form::submit('Enviar', ['class' => 'btn btn-success btn-sm mb-4 center ' , 'id' => 'btn-send']) !!}
        {!! Form::close() !!}
        <a href="{{ route('clientes.index') }}" class="btn btn-success btn-sm mb-4 center" >Atrás</a>
    </div>
  </div>
     </div>
  </div>

  
@endsection


@section('validate')
{!! Html::script('assets/js/validate.js') !!}
@endsection