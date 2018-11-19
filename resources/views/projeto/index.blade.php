@extends('layouts.layout')
@section('content')
    <div class="content">
        <div class="row text-center">
            <div class="col-lg-12">
                <div class="card text-center">
                    <div class="card-header">
                        <h5 class="card-title text-center">Lista de Projetos</h5>
                        <p>Confira aqui os Projetos</p>
                    </div>
                    <div align="center">
                        <a class="btn btn-round btn-outline-success"
                           href="{{ route('projeto.create') }}">
                            <span>Cadastre um Novo <i class="fa fa-plus"></i> </span>
                        </a>
                    </div>
                    <div class="card-body ">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td>Ações</td>
                                <td>Projeto</td>
                                <td>Cliente</td>
                                <td>Tipo de Projeto</td>
                                <td>Status</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projetos as $projeto)
                                <tr>
                                    <td>
                                        <a class="btn btn-round btn-outline-warning"
                                           href="edit/{{ $projeto['id_projeto'] }}">
                                            <span>Editar </span><i class="fa fa-pencil"></i>
                                        </a>
                                        <a class="btn btn-round btn-outline-danger"
                                           href="destroy/{{ $projeto['id_projeto'] }}">
                                            <span>Inativar </span><i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    <td>{{$projeto->nome}}</td>
                                    <td>{{$projeto->tx_nome_demandante}}</td>
                                    <td>{{$projeto->tx_nome}}</td>
                                    <td>{{$projeto->status}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
