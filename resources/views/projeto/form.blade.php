@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="row text-center">
            <div class="col-lg-8 offset-lg-2">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="col-lg-12">
                            <h5 class="text-center">Projetos</h5>
                            <p>Cadastre aqui seu Projeto</p>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body center">
                        <div class="row text-center">
                            <div class="content">
                                <form method="post" action=" {{ route('projeto.store')  }} ">
                                    <div class="row text text-center">
                                        {{ csrf_field() }}

                                        <div id="oculto">
                                            <input type="number" name="id_projeto" hidden>
                                        </div>
                                        <div class="col-lg-10 offset-lg-1">
                                            <label for="tx_nome">Nome<span class="obrigatorio">*</span></label>
                                            <input type="text" class="form-control" name="nome" id="tx_nome"
                                                   maxlength="30" required
                                                   placeholder="Informe um nome ou apelido ao seu projeto"/>
                                        </div>
                                        <div class="col-lg-10 offset-lg-1">
                                            <label for="dat_inicio">Data de início<span class="obrigatorio">*</span></label>
                                            <input type="date" class="form-control" name="dt_inicio" id="dat_inicio" required />
                                        </div>
                                        <div class="col-lg-10 offset-lg-1">
                                            <label for="dat_fim">Data Fim<span class="obrigatorio">*</span></label>
                                            <input type="date" class="form-control" name="dt_fim" id="dat_fim" required />
                                        </div>
                                        <div class="col-lg-10 offset-lg-1">
                                            <label for="nu_money">Valor<span class="obrigatorio">*</span></label>
                                            <input type="text" class="form-control" name="valor" id="nu_money"
                                                   maxlength="10" required />
                                        </div>
                                        <br>
                                        <div class="col-lg-10 offset-lg-1">
                                            <label for="projeto">Tipo de Projeto<span class="obrigatorio">*</span></label>
                                            <select name="id_tipo_projeto" id="projeto">
                                                <option disabled selected >Selecione</option>
                                                @foreach($tipo as $tp_projeto):
                                                    <option value="{{ $tp_projeto['id_tipo_projeto'] }}">{{ $tp_projeto['nome'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <div class="col-lg-10 offset-lg-1">
                                            <label for="demandante">Demandante<span class="obrigatorio">*</span></label>
                                            <select name="id_demandante" id="demandante">
                                                <option disabled selected >Selecione</option>
                                                @foreach($demandantes as $demandante):
                                                    <option value="{{ $demandante['id_demandante'] }}">{{ $demandante['nome'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="col-lg-10 offset-lg-1">
                                            <label for="tp_status">Status</label>
                                            <input type="radio" class="form-control" name="status" id="tp_status"
                                                   value="A"/> <span class="text-success"> Ativo </span>
                                            <input type="radio" class="form-control" name="status" id="tp_status"
                                                   value="I"/> <span class="text-warning"> Inativo </span>
                                            <input type="radio" class="form-control" name="status" id="tp_status"
                                                   value="C"/> <span class="text-warning"> Concluído </span>
                                            <input type="radio" class="form-control" name="status" id="tp_status"
                                                   value="P"/> <span class="text-warning"> Pendente </span>
                                            <br>
                                        </div>
                                        <div class="col-lg-12 offset-lg-3">
                                            <button type="submit" class="btn btn-success">
                                                <span class="fa fa-paper-plane"> </span>
                                                Salvar
                                            </button>
                                            <a href="{{ route('projeto.index') }}" class="btn btn-danger">
                                                <span class="fa fa-reply"></span>
                                                Voltar
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
