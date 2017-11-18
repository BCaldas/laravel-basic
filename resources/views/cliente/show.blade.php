@extends('layouts.app')

@section('title',$cliente->nome)

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
    @if(file_exists("./img/clientes/" . md5($cliente->id) . ".jpg"))
        <div class='foto'>
            {{Html::image(asset("img/clientes/" . md5($cliente->id) . ".jpg"))}}
        </div>
    @endif
    <a href="{!! action('ClientesController@edit', ['cliente' => $cliente]); !!}" class="btn btn-primary">Editar</a>
    <a href="{!! action('ClientesController@index') !!}" class="btn btn-primary">Voltar</a>
    {{Form::open(['route'=>['clientes.destroy',$cliente->id],'method'=>'DELETE'])}}
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    {{Form::close()}}

@endsection