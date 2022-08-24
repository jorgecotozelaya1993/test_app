@extends('layouts.app')


@section('content')    
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('clientes.update',$cliente) }}" method="POST">
                        @method('PUT')
                        @include('app.clientes._form')

                        <button class="btn btn-outline-secondary btn-sm btn-block" type="submit">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection