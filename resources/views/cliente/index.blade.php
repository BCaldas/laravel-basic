@extends('layouts.app')

@section('title', 'Lista de Clientes ')

@section('content')

    <h1>Clientes</h1>
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

