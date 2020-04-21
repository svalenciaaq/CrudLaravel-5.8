@extends('layaouts.app')

<!-- Title -->
@section('title' , 'index')

<!-- Nav-Title -->
@section('nav-title', 'Asesores')

<!-- Principal section -->
@section('content')
<a href="{{ url ('asesores/create')}}" class = "btn btn-success mt-4 ml-3 mb-3">Crear</a>

<!--  Table register -->
<table class = "table table-striped table-bordered table-hover bg-white">
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
        <td class = "v-align-middle">{{ $asesor->name}}</td>
            <td class = "v-align-middle">{{ $asesor->dni}}</td>
            <td class = "v-align-middle">{{ $asesor->tel}}</td>
            <td class = "v-align-middle">{{ $asesor->date}}</td>
            <td class = "v-align-middle">{{ $asesor->gen}}</td>
            <td class = "v-align-middle">{{ $asesor->client}}</td>
            <td class = "v-align-middle">{{ $asesor->sede}}</td>
            <td class = "v-align-middle">{{ $asesor->age}}</td>
            <td class = "v-aling-middle">
                <!-- Buttons Accions -->
                {!! link_to_route('asesores.edit', $title = 'Editar', $parameters = $asesor->id, $attributes = ['class'=>'btn btn-primary'] ) !!}
                {!! Form::open(['method' => 'DELETE','route' => ['asesores.destroy', $asesor->id],'style'=>'display:inline']) !!}
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