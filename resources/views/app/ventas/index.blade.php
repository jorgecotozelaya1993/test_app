@extends('layouts.app')
@section('title','Ventas App')
@section('content')
<div class="container">
    @include('partials.alert')
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('ventas.store') }}" method="POST">
                        @include('app.ventas._form')
                        <button class="btn btn-outline-success btn-sm btn-block" type="submit">Enviar</button>
                        
                    </form>     
                </div>    
            </div>   
        </div>
        <div class="col-sm-12 col-md-8">
            <table class="table table-responsive-sm">
                <thead>
                    
                    <th>Cliente</th>
                    <th>Producto</th>
                    <th>Fecha venta</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </thead>    
                <tbody>

                    @forelse ($ventas as $venta)
                    <tr>
                        <td>{{ $venta->nombre_completo }}</td>
                        <td>{{ $venta->nombre }}</td>
                        <td>{{ $venta->fecha_venta }}</td>
                        <td>{{ $venta->cantidad }}</td>
                        
                        <td>
                            <div class="row">
                                <!--<a class="btn btn-outline-info btn-sm mr-2" href="{{ route('ventas.edit',$venta->id) }}">Editar</a>-->
                                <form action="{{ route('ventas.destroy',$venta->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button  class="btn btn-danger btn-sm" type="submit">Eliminar</button>
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