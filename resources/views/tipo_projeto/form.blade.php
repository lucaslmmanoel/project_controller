@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="row text-center">
            <div class="col-lg-12">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row text-center">
                            <div class="col-12 col-md-4 col-lg-12">
                                <h5 class="text-center">Tipo de Projetos</h5>
                            </div>
                            <div align="center">
                                <form method="post" action=" {{ route('tipo_projeto.store')  }} ">
                                    {{ csrf_field() }}

                                    <div id="oculto">
                                        <input type="number" name="id_tipo_projeto" hidden>
                                    </div>

                                    <div class="col-lg-s12">
                                        <label for="tx_nome">Nome</label>
                                        <input type="text" name="nome" id="tx_nome" maxlength="30" required/>
                                    </div>
                                    <div class="col-lg-s12">
                                        <label for="tx_descricao">Descrição</label>
                                        <input type="text" name="desc" id="tx_descricao" maxlength="70" required/>
                                    </div>
                                    <br>
                                    {{-- Mostrar só para perfil adm (Roger)  --}}
                                    <div class="col-lg-s12">
                                        <label for="tp_status">Supervisor</label>
                                        <input type="radio" name="status" id="tp_status" value="A" />Ativo
                                        <input type="radio" name="status" id="tp_status" value="I" />Inativo
                                        <br>
                                    </div>
                                    <div class="card-footer ">
                                        <hr>
                                        <div class="col-lg-s12">
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
                    {{--<div class="card-footer ">--}}
                    {{--<hr>--}}
                    {{--<div class="stats">--}}
                    {{--<i class="fa fa-calendar-o"></i> 20/11/2018--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>

        </div>
    </div>

@endsection
