@extends('layouts.layout')

@section('content')
    <div class="content">

        <div class="row text-center">
            <div class="col-lg-12">
                <div class="card text-center">
                    <div class="card-header">
                        <h5 class="card-title text-center">Lista de Tipos de Projetos</h5>
                        <p>Confira aqui os tipos de projeto de sua organização!!!</p>
                    </div>
                    <div align="center">
                        <a class="btn btn-round btn-outline-success"
                           href="{{ route('create') }}">
                            <span>Cadastre um Novo <i class="fa fa-plus"></i> </span>
                        </a>
                    </div>
                    <div class="card-body ">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td>Ações</td>
                                <td>Nome do Tipo de Projeto</td>
                                <td>Descrição</td>
                                @can('Admin')
                                    <td>Status</td>
                                @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tp_projetos as $tp_projeto)
                                <tr>
                                    <td>
                                        <a class="btn btn-round btn-outline-warning"
                                           href="edit/{{ $tp_projeto['id_tipo_projeto'] }}">
                                            <span>Editar </span><i class="fa fa-pencil"></i>
                                        </a>
                                        <a class="btn btn-round btn-outline-danger"
                                           href="destroy/{{ $tp_projeto['id_tipo_projeto'] }}">
                                            <span>Inativar </span><i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    <td>{{$tp_projeto->nome}}</td>
                                    <td>{{$tp_projeto->desc}}</td>
                                    @can('Admin')
                                        <td>{{$tp_projeto->status}}</td>
                                    @endcan
                                    <td>
                                    </td>
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
