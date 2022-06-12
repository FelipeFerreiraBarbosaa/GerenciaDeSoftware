@extends('master')

@section('breadcrumb', 'Pessoa / Criar')

@section('title', 'Pessoa - Criar')

@section('content')

<div class="col-md-12 text-right">
    <a class="btn btn-primary" href="{{ route('pessoa') }}"><i class="fas fa-undo-alt"></i> Voltar</a>
</div>
<div class="col-md-12">
    <form class="m-t" role="form" method="POST" action="{{ route('pessoa.store') }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('sobrenome') ? 'has-error' : ''}}">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" maxlength="11">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('dataNascimento') ? 'has-error' : ''}}">
                    <label for="dataNascimento">DataNascimento</label>
                    <input type="date" class="form-control" name="dataNascimento" placeholder="DataNascimento">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('Sexo') ? 'has-error' : ''}}">
                    <label for="Sexo">Sexo</label>
                    <input type="text" class="form-control" name="Sexo" placeholder="Sexo" maxlength="10">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('Idade') ? 'has-error' : ''}}">
                    <label for="Idade">Idade</label>
                    <input type="text" class="form-control" name="Idade" placeholder="Idade">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-success block m-b">Salvar</button>
            </div>
        </div>
    </form>
</div>
<br>
@endsection