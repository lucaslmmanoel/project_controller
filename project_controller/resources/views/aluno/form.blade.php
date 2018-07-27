<!-- // Extendendo a Estrutura base do projeto -->
@extends ('../struct/base')
<!-- // Inicio do conteúdo -->
@section('conteudo')
    <!-- Navbar goes here -->
    @extends ('../struct/navbar')
    <!-- Page Layout here -->
<div class="row">
   <div class="col s3">
    <!-- Grey navigation panel -->
    <ul class="collection">
    <li class="collection-item avatar">
      <i class="material-icons circle red">event_available</i>
     <a class="col s2" href="#"> <p class="title">Entregas</p></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">event_available</i>
     <a class="col s2" href="#"> <p class="title">Entregas</p></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">event_available</i>
     <a class="col s2" href="#"> <p class="title">Entregas</p></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">event_available</i>
     <a class="col s2" href="#"> <p class="title">Entregas</p></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">event_available</i>
     <a class="col s2" href="#"> <p class="title">Entregas</p></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">markunread</i>
     <a class="col s2" href="#"> <p class="title">Mensagens</p></a>
    </li>
  </ul>
           
  </div>
  <div class="col s9">
    <!-- Teal page content  -->
    <div class="card orange darken-2 z-depth-4">
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
        <div class="input-field col s12 l6 m6">
        <i class="material-icons prefix">account_circle</i>
          <input name="tx_nome" class='white-text' value="{{$aluno->tx_nome}}" id="tx_nome" type="text" class="validate">
          <label class="white-text" for="first_name">Nome do Aluno</label>
        </div>
    <!-- // Sobre nome do aluno -->
        <div class="input-field col s12 l6 m6">
        <i class="material-icons prefix">account_circle</i>
          <input id="nome" type="text" class="validate white-text"  name="tx_sobrenome" value="{{$aluno->tx_sobrenome}}" >
          <label class="white-text" for="nome">Sobre Nome</label>
        </div>
    <!-- Curso -->
        <div class="input-field col s12 l6 m6">
        <i class="material-icons prefix">school</i>
          <input id="curso" type="text" class="validate white-text"  name="tx_curso" value="{{$aluno->tx_curso}}" >
          <label class="white-text" for="curso">Curso</label>
        </div>
       <!-- Semestre -->
        <div class="input-field col s12 l6 m6">
        <i class="material-icons prefix">trending_up</i>
          <input id="semestre" min='1' max='12' class='white-text'  type="number" name="nu_semestre" value="{{$aluno->nu_semestre}}" >
          <label class="white-text" for="semestre">Semestre</label>
        </div>
      </div>
      <div class="card-action right-align">
          <button class='btn black-text  amber darken-2 waves-effect waves-light' href=""> <i class="material-icons">keyboard_backspace</i> Voltar </button>
          <button class='btn black-text  lime accent-3 waves-effect waves-light' type="submit"> Enviar <i class="material-icons">send</i> </button>
        <!-- Enviando as entradas -->
      </div> 
    </form>
  </div>
</form>
</div>
</div>
</div>
<!-- // Final do conteúdo -->
@endsection