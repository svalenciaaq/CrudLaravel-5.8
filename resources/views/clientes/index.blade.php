@extends('layouts.app')

<!-- Title -->
@section('title' , 'index')

<!-- Nav-Title -->
@section('nav-title', 'Clientes')

@section('log')
<a class ="navbar-brand" href="{{route('logout')}}">Logout</a>
@endsection

<!-- Principal section -->
@section('content')
<a href="{{ url ('clientes/create')}}" class = "btn btn-success mt-4 ml-3 mb-3">Crear</a>

<!--  Table register -->
<table class = "table table-striped table-bordered table-hover bg-white "  style="height:20%;">
    <thead class ="thead-dark">
        <tr>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Email</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @if($clientes->count())  
        @foreach ($clientes as $cliente)
        <tr>
            <!-- Show info -->
        <td class = "align-middle">{{ $cliente->name}}</td>
            <td class = "align-middle">{{ $cliente->dni}}</td>
            <td class = "align-middle">{{ $cliente->email}}</td>
            <td class = "align-middle">{{ $cliente->addres}}</td>
        
            <td class = "aling-middle">
                <!-- Buttons Accions -->
                {!! link_to_route('clientes.edit', $title = 'Editar', $parameters = $cliente->id, $attributes = ['class'=>'btn btn-primary mb-2'] ) !!}
                {!! Form::open(['method' => 'DELETE','route' => ['clientes.destroy', $cliente->id],]) !!}
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
    {{ $clientes->links() }}
@endsection