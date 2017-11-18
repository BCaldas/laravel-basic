@extends('layouts.app')
@section('title',$cliente->nome)
@section('content')
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Editar Cliente: {{$cliente->nome}}</h1>

    {{Form::open(['route'=>['clientes.update',$cliente->id],'enctype'=>'multipart/form-data','method'=>'PUT'])}}
    {{Form::label('nome', 'Nome')}}
    {{Form::text('nome', $cliente->nome,['class' => 'form-control', 'required', 'placeholder' => 'Nome'])}}
    {{Form::label('sobrenome', 'Sobrenome')}}
    {{Form::text('sobrenome', $cliente->sobrenome,['class' => 'form-control', 'required', 'placeholder' => 'Sobrenome'])}}
    {{Form::label('email', 'Email')}}
    {{Form::email('email', $cliente->email,['class' => 'form-control', 'required', 'placeholder' => 'Email'])}}
    {{Form::label('telefone', 'Telefone')}}
    {{Form::number('telefone', $cliente->telefone,['class' => 'form-control', 'required', 'placeholder' => 'Telefone'])}}
    {{Form::label('endereco', 'Endereço')}}
    {{Form::text('endereco', $cliente->endereco,['class' => 'form-control', 'placeholder' => 'Endereço'])}}
    {{Form::label('foto', 'Foto')}}
    {{Form::file('foto',['class'=>'form-control','id'=>'foto'])}}<br>
    {{Form::submit('Atualizar', ['class' => 'btn btn-primary'])}}


    {{Form::close()}}

@endsection