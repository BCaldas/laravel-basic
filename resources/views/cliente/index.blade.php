@extends('layouts.app')

@section('title', 'Lista de Clientes ')

@section('content')

    <h1>Clientes</h1>
    @if(Session::has('mensagem'))
        <div class="alert alert-success">{{Session::get('mensagem')}}</div>
    @endif
    <ul>
        @foreach($clientes as $cliente)
            <li>
                <a href="{!! url("/clientes/{$cliente->id}"); !!}">
                    {{$cliente->nome}}
                </a>
            </li>
        @endforeach

    </ul>

    <a href="http://catalogobruno.dev/clientes/create" class="btn btn-primary">Novo Cliente</a>


@endsection

