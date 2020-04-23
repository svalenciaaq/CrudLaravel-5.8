@extends('layouts.app')

<!-- Title -->
@section('title' , 'index')

<!-- Nav-Title -->
@section('nav-title', 'Asesores')

@section('log')
<a class ="navbar-brand" href="{{route('logout')}}">Logout</a>
@endsection

<!-- Principal section -->
@section('content')
<a href="{{ url ('asesores/create')}}" class = "btn btn-success mt-4 ml-3 mb-3">Crear</a>

<!--  Table register -->
<table class = "table table-striped table-bordered table-hover bg-white "  style="height:20%;">
    <thead class ="thead-dark">
        <tr>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Telefono</th>
            <th>Fecha de nacimiento</th>
            <th>Genero</th>
            <th>Cliente</th>
            <th>Sede</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @if($asesores->count())  
        @foreach ($asesores as $asesor)
        <tr>
            <!-- Show info -->
        <td class = "align-middle">{{ $asesor->name}}</td>
            <td class = "align-middle">{{ $asesor->dni}}</td>
            <td class = "align-middle">{{ $asesor->tel}}</td>
            <td class = "align-middle">{{ $asesor->date}}</td>
            <td class = "align-middle">{{ $asesor->gen}}</td>
            <td class = "align-middle">{{ $asesor->client}}</td>
            <td class = "align-middle">{{ $asesor->sede}}</td>
            <td class = "align-middle">{{ $asesor->age}}</td>
            <td class = "aling-middle">
                <!-- Buttons Accions -->
                {!! link_to_route('asesores.edit', $title = 'Editar', $parameters = $asesor->id, $attributes = ['class'=>'btn btn-primary mb-2'] ) !!}
                {!! Form::open(['method' => 'DELETE','route' => ['asesores.destroy', $asesor->id],]) !!}
                {!! Form::button('Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger' , 'onClick' =>"return confirm('Estas seguro?');"]) !!} 
                {!! Form::close() !!}
                
            </td>
        </tr>
            
        @endforeach
        @else
        <tr>
            <td colspan="8">No hay registro !!</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection

<!-- Paginate -->
@section('paginate')
    {{ $asesores->links() }}
@endsection