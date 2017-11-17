@extends('layouts.app')

@section('title',$cliente->titulo)

@section('content')

    <h1>Cliente: {{$cliente->nome}}</h1>
    <ul>
        <li>Nome: {{$cliente->nome}}</li>
        <li>Sobrenome: {{$cliente->sobrenome}}</li>
        <li>Email: {{$cliente->email}}</li>
        <li>Telefone: {{$cliente->telefone}}</li>
        <li>Endereco: {{$cliente->endereco}}</li>
        <li>Adicionado em: {{$cliente->created_at}}</li>
    </ul>

    <a href="javascript:history.go(-1)">Voltar</a>

@endsection