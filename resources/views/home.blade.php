@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="alert alert-primary alert-dismissible fade show">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove"></i>
            </button>
            <span>
                Olá {{ Auth::user()->name }}, seja bem vindo ao seu gerenciador de projetos.
                É <i class="nc-icon nc-watch-time" style="font-size: 20px"></i> de ganhar o <i
                    class="nc-icon nc-world-2" style="font-size: 20px"></i>, vamos trabalhar!!!
            </span>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="places-buttons">
                            <div class="row">
                                <div class="col-md-6 ml-auto mr-auto text-center">
                                    <h4 class="card-title">
                                        Notifications Places
                                        <p class="category">Click to view notifications</p>
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 ml-auto mr-auto">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button class="btn btn-primary btn-block"
                                                    onclick="demo.showNotification('top','left')">Top Left
                                            </button>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-primary btn-block"
                                                    onclick="demo.showNotification('top','center')">Top Center
                                            </button>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-primary btn-block"
                                                    onclick="demo.showNotification('top','right')">Top Right
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 ml-auto mr-auto">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button class="btn btn-primary btn-block"
                                                    onclick="demo.showNotification('bottom','left')">Bottom Left
                                            </button>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-primary btn-block"
                                                    onclick="demo.showNotification('bottom','center')">Bottom Center
                                            </button>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-primary btn-block"
                                                    onclick="demo.showNotification('bottom','right')">Bottom Right
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
