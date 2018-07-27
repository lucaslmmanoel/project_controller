<!-- // Página incial da aplicação -->
@extends ('struct/base')

@section('conteudo')
<div class="container-fluid">
      <div class="col s12 m6 l6">
              <img src="{{URL::to('images/bg_img.jpg') }}" heigth="100vh" alt="" class="responsive-img">
            </div>
  </div>
<!-- <img src="{{URL::to('images/bg_img.jpg') }}" alt="Picture" > -->

  
@endsection