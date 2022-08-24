@extends('layouts.app')
@section('title','Clientes App')
@section('content')
<div class="container">
        @include('partials.alert')
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Agregar cliente</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('clientes.store') }}" method="POST">
                            @include('app.clientes._form')
                            <button class="btn btn-outline-success btn-sm btn-block" type="submit">Enviar</button>
                            
                        </form>     
                    </div>    
                </div>   
            </div>
            <div class="col-sm-12 col-md-8">
                <table class="table table-responsive-sm">
                    <thead>
                        
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Nombre completo</th>
                        <th>DUI</th>
                        <th>Fecha nacimiento</th>
                        <th>Acciones</th>
                    </thead>    
                    <tbody>
                        @forelse ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->apellido }}</td>
                                <td>{{ $cliente->nombre_completo }}</td>
                                <td>{{ $cliente->dui }}</td>
                                <td>{{ $cliente->fecha_nacimiento }}</td>
                                <td>
                                    <div class="row">
                                        <a class="btn btn-outline-info  btn-sm mr-2" href="{{ route('clientes.edit',$cliente) }}">Editar</a>
                                        <form action="{{ route('clientes.destroy',$cliente) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
    
                        
    
                    </tbody>
                </table>    
            </div>    
        </div>    
    </div>
@endsection