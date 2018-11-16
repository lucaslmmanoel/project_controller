@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="row text-center">
            <div class="col-lg-8 offset-2">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="col-lg-12">
                            <h5 class="text-center">Demandantes</h5>
                            <p>Cadastre aqui os Demandantes</p>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body center">
                        <div class="row text-center">
                            <div class="content">
                                <form method="post" action=" {{ route('demandantes.store')  }} ">
                                    <div class="row">
                                        {{ csrf_field() }}

                                        <div id="oculto">
                                            <input type="number" name="id_demandante" value="{{ $demandante->id_demandante }}" hidden>
                                        </div>

                                        <div class="col-lg-10 offset-lg-4">
                                            <label for="tx_nome">Nome <span class="obrigatorio">*</span></label>
                                            <input type="text" class="form-control" name="nome" id="tx_nome"
                                                   maxlength="30" value="{{ $demandante->nome }}" required/>
                                        </div>
                                        {{-- Mostrar só para perfil adm (Roger) --}}
                                        <div class="col-lg-10 offset-lg-4">
                                            <label for="tp_status">Status <span class="obrigatorio">*</span> </label>
                                            <input type="radio" name="status" class="form-control" id="tp_status"
                                                   value="A" @php echo $checked = ($demandante->status == 'A') ? 'checked' : '' @endphp/>Ativo
                                            <input type="radio" name="status" class="form-control" id="tp_status"
                                                   value="I" @php echo $checked = ($demandante->status == 'I') ? 'checked' : '' @endphp/>Inativo
                                            <br>
                                        </div>
                                        <div class="col-lg-12 offset-lg-3">
                                            <button type="submit" class="btn btn-success">
                                                <span class="fa fa-paper-plane"> </span>
                                                Salvar
                                            </button>
                                            <a href="{{ route('demandantes.index') }}" class="btn btn-danger">
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
