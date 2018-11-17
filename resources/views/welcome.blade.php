@extends('layouts.layout')
@section('content')
    <div class="content">
        <div class="row text-center">
            <h1 class="text-center">Bem vindo ao Seu gerenciador de projetos {{ Auth::user()->name }}</h1>
            <div class="col-lg-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row text-center">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning text-center">
                                    <i class="nc-icon nc-money-coins text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">

                                    <p class="card-title">$ 1.210.730,345
                                    </p>
                                    <p class="card-category">
                                        Quantidade em ativos Hoje

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar-o"></i> 20/11/2018
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row text-center">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning text-center">
                                    <i class="nc-icon nc-money-coins text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">

                                    <p class="card-title">$ 9.450,000
                                    </p>
                                    <p class="card-category">
                                        Valor a receber Hoje

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar-o"></i> 20/11/2018
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row text-center">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning text-center">
                                    <i class="nc-icon nc-money-coins text-danger"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">

                                    <p class="card-title">$ 7.500,000
                                    </p>
                                    <p class="card-category">
                                        Contas a pagar Hoje

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar-o"></i> 20/11/2018
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-lg-12 ml-auto mr-auto">
                <div class="card text-center">
                    <div class="card-header ">
                        <h5 class="card-title text-center">Projetos</h5>
                        <p class="card-category">Confira aqui seus projetos</p>
                    </div>
                    <div class="card-body ">
                        {{--Realizar um laço nos projetos e mostra-los aqui--}}
                        <p>Nome do projeto aqui</p>

                    </div>
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <div class="card-footer ">
                                <div class="legend">
                                    <a href="#" class="btn btn-small btn-outline-warning"><i
                                            class="fa fa-circle text-warning"></i> Em andamento</a>
                                    <a href="#" class="btn btn-small btn-outline-success"><i
                                            class="fa fa-circle text-success"></i> A receber</a>
                                    <a href="#" class="btn btn-small btn-outline-info"><i
                                            class="fa fa-circle text-info"></i> A iniciar</a>
                                    <a href="#" class="btn btn-small btn-outline-default"><i
                                            class="fa fa-circle text-dark"></i> Finalizados</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-calendar"></i> <h5>Life is short, live Right!!!</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
