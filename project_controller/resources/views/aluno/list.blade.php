<!-- // Extendendo a Estrutura base do projeto -->
@extends ('struct.base')
<!-- // Extendendo a navbar -->
@section('conteudo')
  <div class="row">
    <div class="col s12 m8 s8">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
        <span>Listagem de Alunos</span>
        <div class="card-title"></div>
        <h5>  
        <a href="{{route('aluno.form')}}">Adicionar Aluno <i class="small material-icons">add_box</i> </a>
        </h5>
        <table id="tabela" align="center" border="line">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Curso</th>
            <th>Semestre</th>
            <th colspan=2>Ações</th>
        </tr>
        @foreach($alunos as $aluno)
            <tr>
                <td>{{$aluno->id_aluno}}</td>
                <td>{{$aluno->tx_nome}}</td>
                <td>{{$aluno->tx_sobrenome}}</td>
                <td>{{$aluno->tx_curso}}</td>
                <td>{{$aluno->nu_semestre}}</td>
                <td> <a class="btn red"  href="{{route('aluno.deletar', $aluno->id_aluno )}}">
                    <i class="small material-icons">delete
                    </i>
                </a></td>
                <td> <a class="btn blue"  href="{{route('aluno.form', $aluno->id_aluno )}}"> 
                    <i class="small material-icons">mode_edit
                    </i>
                </a></td>
            </tr>
        @endforeach
    </table>
        </div>
        <div class="fixed-action-btn">
        <a href="{{route('aluno.form')}}" class="btn-floating btn-large blue darken-4"><i class="small material-icons">add_box</i></a>
    </div>
    </div>
      </div>
    </div>
  </div>
@endsection