@extends('layouts.layout')

@section('content')
    <div class="content">

        <div class="row text-center">
            <div class="col-lg-12">
                <div class="card text-center">
                    <div class="card-header">
                        <h5 class="card-title text-center">Lista de Demandantes</h5>
                        <p>Confira aqui os demandantes dos projetos da organização!!!</p>
                    </div>
                    <div align="center">
                        <a class="btn btn-round btn-outline-success"
                           href="{{ route('demandantes.create') }}">
                            <span>Cadastre um Novo <i class="fa fa-plus"></i> </span>
                        </a>
                    </div>
                    <div class="card-body ">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td>Ações</td>
                                <td>Nome do Demandante</td>
                                @can('Admin')
                                    <td>Status</td>
                                @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($demandantes as $demandante)
                                <tr>
                                    <td>
                                        <a class="btn btn-round btn-outline-warning"
                                           href="edit/{{ $demandante['id_demandante'] }}">
                                            <span>Editar </span><i class="fa fa-pencil"></i>
                                        </a>
                                        <a class="btn btn-round btn-outline-danger"
                                           href="destroy/{{ $demandante['id_demandante'] }}">
                                            <span>Inativar </span><i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    <td>{{$demandante->nome}}</td>
                                    @can('Admin')
                                        <td>{{$demandante->status}}</td>
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
