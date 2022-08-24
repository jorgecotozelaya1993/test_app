@extends('layouts.app')


@section('content')    
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('productos.update',$producto) }}" method="POST">
                        @method('PUT')
                        @include('app.productos._form')

                        <button class="btn btn-info btn-sm btn-block" type="submit">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection