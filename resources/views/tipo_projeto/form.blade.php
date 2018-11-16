@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="row text-center">
            <div class="col-lg-8 offset-2">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="col-lg-12">
                            <h5 class="text-center">Tipo de Projetos</h5>
                            <p>Cadastre aqui os tipos de projeto que Trabalha</p>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body center">
                        <div class="row text-center">
                            <div class="content">
                                <form method="post" action=" {{ route('tipo_projeto.store')  }} ">
                                    <div class="row">
                                        {{ csrf_field() }}

                                        <div id="oculto">
                                            <input type="number" name="id_tipo_projeto" hidden>
                                        </div>

                                        <div class="col-lg-10 offset-1">
                                            <label for="tx_nome">Nome <span class="obrigatorio">*</span></label>
                                            <input type="text" class="form-control" name="nome" id="tx_nome"
                                                   maxlength="30" required/>
                                        </div>
                                        <div class="col-lg-10 offset-1">
                                            <label class="form-label" for="tx_descricao">Descrição</label>
                                            <input type="text" class="form-control" name="desc" id="tx_descricao"
                                                   maxlength="70" required/>
                                        </div>
                                        <div class="col-lg-10 offset-1">
                                            <label for="tp_status">Status <span class="obrigatorio">*</span></label>
                                            <input type="radio" class="form-control" name="status" id="tp_status"
                                                   value="A"/> <span class="text-success"> Ativo </span>
                                            <input type="radio" class="form-control" name="status" id="tp_status"
                                                   value="I"/> <span class="text-warning"> Inativo </span>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-success">
                                                <span class="fa fa-paper-plane"> </span>
                                                Salvar
                                            </button>
                                            <a href="{{ route('tipo_projeto.index') }}" class="btn btn-danger">
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
