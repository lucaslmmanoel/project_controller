<!-- // Extendendo a Estrutura base do projeto -->
@extends ('../struct/base')
<!-- // Inicio do conteúdo -->
@section('conteudo')
<!-- Incluindo a NAvbar do projeto  -->
@extends ('struct/navbar')
<div class="row ">
<div class="col s12 m6 l6">
<div class="card cyan accent-4 z-depth-5">
        <div class="card-content white-text">
    <h5><span>Cadastro de Alunos</span></h5>
    <div class="card-title"></div>
    <form method="post" action="{{route('aluno.salvarAluno')}}">
      <div class="row">
      <!-- ID do aluno -->
      <input type="hidden" name="id_aluno" value="{{$aluno->id_aluno}}"> 
      <!-- Token do Aluno  -->
      <input  type="hidden" name="_token" value="{{csrf_token()}}">
      <!-- Nome do ALuno  -->
        <div class="input-field col s10 l6 m6">
        <i class="material-icons prefix">account_circle</i>
          <input placeholder="Digite o nome" name="tx_nome" class='white-text' value="{{$aluno->tx_nome}}" id="tx_nome" type="text" class="validate">
          <label class="white-text" for="first_name">Nome do Aluno</label>
        </div>
    <!-- // Sobre nome do aluno -->
        <div class="input-field col s10 l6 m6">
        <i class="material-icons prefix">account_circle</i>
          <input id="nome" type="text" class="validate white-text"  name="tx_sobrenome" value="{{$aluno->tx_sobrenome}}" placeholder="Digite o Sobrenome">
          <label class="white-text" for="nome">Sobre Nome</label>
        </div>
       <!-- Curso -->
        <div class="input-field col s10 l6 m6">
        <i class="material-icons prefix">school</i>
          <input id="curso" type="text" class="validate white-text"  name="tx_curso" value="{{$aluno->tx_curso}}" placeholder="curso">
          <label class="white-text" for="curso">Curso</label>
        </div>
       <!-- Semestre -->
        <div class="input-field col s10 l6 m6">
        <i class="material-icons prefix">trending_up</i>
          <input id="semestre" min='1' max='12' class='white-text'  type="number" name="nu_semestre" value="{{$aluno->nu_semestre}}" placeholder="Semestre">
          <label class="white-text" for="semestre">Semestre</label>
        </div>
      </div>
        <!-- Enviando as entradas -->
      <div class="card-action right-align">
          <button class='btn black-text  orange lighten-1' type="submit"> <i class="material-icons">keyboard_backspace</i> Voltar </button>
          <button class='btn black-text  green lighten-1' type="submit"> Enviar <i class="material-icons">send</i> </button>
      </div> 
    </form>
  </div>
</form>
</div>
<!-- // Final do conteúdo -->
@endsections