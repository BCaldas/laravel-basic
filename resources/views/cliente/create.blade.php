@extends('layouts.app')
@section('title','Adicionar Clientes')
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

    <h1>Adicionar Novo Cliente</h1>
    {{Form::open(['action' => 'ClientesController@store'])}}
    {{Form::label('nome', 'Nome')}}
    {{Form::text('nome', '',['class' => 'form-control', 'required', 'placeholder' => 'Nome'])}}
    {{Form::label('sobrenome', 'Sobrenome')}}
    {{Form::text('sobrenome', '',['class' => 'form-control', 'required', 'placeholder' => 'Sobrenome'])}}
    {{Form::label('email', 'Email')}}
    {{Form::email('email', '',['class' => 'form-control', 'required', 'placeholder' => 'Email'])}}
    {{Form::label('telefone', 'Telefone')}}
    {{Form::number('telefone', '',['class' => 'form-control', 'required', 'placeholder' => 'Telefone'])}}
    {{Form::label('endereco', 'Endereço')}}
    {{Form::text('endereco', '',['class' => 'form-control', 'placeholder' => 'Endereço'])}}<br>
    {{Form::submit('Cadastrar!', ['class' => 'btn btn-primary'])}}


    {{Form::close()}}

@endsection