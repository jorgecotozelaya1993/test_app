@extends('layouts.app')
@section('title','Productos App')
@section('content')
<div class="container">
    @include('partials.alert')
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Agregar producto</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('productos.store') }}" method="POST">
                        @include('app.productos._form')
                        <button class="btn btn-outline-success btn-sm btn-block" type="submit">Enviar</button>
                        
                    </form>     
                </div>    
            </div>   
        </div>
        <div class="col-sm-12 col-md-8">
            <table class="table table-responsive-sm">
                <thead>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </thead>    
                <tbody>

                    @forelse ($productos as $producto)
                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->stock }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>
                                <div class="row">
                                    <a class="btn btn-outline-info btn-sm mr-2" href="{{ route('productos.edit',$producto) }}">Editar</a>
                                    <form action="{{ route('productos.delete',$producto) }}" method="POST">
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