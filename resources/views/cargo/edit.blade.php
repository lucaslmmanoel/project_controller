@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="row text-center">
            <div class="col-lg-8 offset-2">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="col-lg-12">
                            <h5 class="text-center">Cargos</h5>
                            <p>Edite aqui os Cargos</p>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body center">
                        <div class="row text-center">
                            <div class="content">
                                <form method="post" action=" {{ route('cargo.store')  }} ">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div id="oculto">
                                            <input type="number" name="id_cargo"
                                                   value="{{ $cargo->id_cargo }}" hidden>
                                        </div>

                                        <div class="col-lg-10 offset-1">
                                            <label for="tx_nome">Nome <span class="obrigatorio">*</span> </label>
                                            <input type="text" class="form-control" name="nome" id="tx_nome"
                                                   maxlength="30" value="{{ $cargo->nome }}" required/>
                                        </div>
                                        <div class="col-lg-10 offset-1">
                                            <label for="tx_descricao">Descrição</label>
                                            <input type="text" class="form-control" name="desc" id="tx_descricao"
                                                   maxlength="70" value="{{ $cargo->desc }}"/>
                                        </div>
                                        <br>
                                        @can('Admin')
                                            <div class="col-lg-10 offset-1">
                                                <label for="tp_status">Status <span class="obrigatorio">*</span> </label>
                                                <input type="radio" name="status" class="form-control" id="tp_status"
                                                       value="A" @php echo $checked = ($cargo->status == 'A') ? 'checked' : '' @endphp/>Ativo
                                                <input type="radio" name="status" class="form-control" id="tp_status"
                                                       value="I" @php echo $checked = ($cargo->status == 'I') ? 'checked' : '' @endphp/>Inativo
                                                <br>
                                            </div>
                                        @endcan
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-success">
                                                <span class="fa fa-paper-plane"> </span>
                                                Salvar
                                            </button>
                                            <a href="{{ route('cargo.index') }}" class="btn btn-danger">
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
