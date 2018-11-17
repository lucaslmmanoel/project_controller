@extends('layouts.layout')

@section('content')
    <div class="content">

        <div class="row text-center">
            <div class="col-lg-12">
                <div class="card text-center">
                    <div class="card-header">
                        <h5 class="card-title text-center">Lista de Cargos</h5>
                    </div>
                    <div align="center">
                        <a class="btn btn-round btn-outline-success"
                           href="{{ route('cargo.create') }}">
                            <span>Cadastre um Novo <i class="fa fa-plus"></i> </span>
                        </a>
                    </div>
                    <div class="card-body ">
                        {{-- Realizar um laço nos tipos de projetos e mostra-los aqui --}}
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td>Ações</td>
                                <td>Nome do Cargo</td>
                                <td>Descrição</td>
                                <td>Status</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cargos as $tp_projeto)
                                <tr>
                                    <td>
                                        <a class="btn btn-round btn-outline-warning"
                                           href="edit/{{ $tp_projeto['id_cargo'] }}">
                                            <span>Editar </span><i class="fa fa-pencil"></i>
                                        </a>
                                        <a class="btn btn-round btn-outline-danger"
                                           href="destroy/{{ $tp_projeto['id_cargo'] }}">
                                            <span>Inativar </span><i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    <td>{{$tp_projeto->nome}}</td>
                                    <td>{{$tp_projeto->desc}}</td>
                                    <td>{{$tp_projeto->status}}</td>
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
