@extends('master')

@section('breadcrumb', 'Pessoa')

@section('title', 'Pessoa')

@section('content')
<div class="row">
    <div class="col-md-12 text-right"><a class="btn btn-primary" href="{{ route('pessoa.create') }}"><i class="fas fa-plus"></i> Cadastrar Pessoa</a></div>
    <br>
    <br>
    <div class="col-md-12">
        <div class="table-responsive no-padding">
            <div class="dataTables_wrapper no-footer">
                <table id="user_table" class="table table-hover table-bordered table-datatable table-striped" role="grid">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Email</th>
                            <th>Data de Nascimento</th>
                            <th>Sexo</th>
                            <th>Idade</th>
                            <th>Data de Criação</th>
                            <th>Ações</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        @each('pessoa.pessoa', $pessoa, 'pessoa')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection