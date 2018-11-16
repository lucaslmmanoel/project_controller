@extends('layouts.layout')

@section('content')
    <div class="content">

        <div class="row text-center">
            <div class="col-lg-12">
                <div class="card text-center">
                    <div class="card-header ">
                        <h5 class="card-title text-center">Lista de Tipos de Projetos</h5>
                    </div>
                    <div align="left">
                        <a class="fa fa-plus"
                           href="{{ route('create') }}">
                            <span>Novo</span>
                        </a>
                    </div>
                    <div class="card-body ">
                        {{-- Realizar um laço nos tipos de projetos e mostra-los aqui --}}
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>Ações</td>
                                    <td>Id</td>
                                    <td>Nome do Tipo de Projeto</td>
                                    <td>Descrição</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($tp_projetos as $tp_projeto)
                                <tr>
                                    <td>
                                        <a class="waves-effect waves-light"
                                            href="edit/{{ $tp_projeto['id_tipo_projeto'] }}">
                                            <i class="material-icons left">mode_edit</i>
                                        </a>
                                        <a href="destroy/{{ $tp_projeto['id_tipo_projeto'] }}">
                                            <i class="material-icons left red-text">delete</i>
                                        </a>
                                    </td>
                                    <td>{{$tp_projeto->id_tipo_projeto}}</td>
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
