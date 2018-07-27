<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project Controller</title>
        <link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">  
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="{{URL::asset('assets/js/materialize.min.js')}}"  ></script>
    <script src="{{URL::asset('assets/js/jquery-3.3.1.min.js')}}"  ></script>
    </head>
    <body>
    <div class="container-fluid">
    <!-- Escrevendo on template da aplicação -->
    @yield('conteudo')
    </div>
    <script>
    $(document).ready(function(){
    $('.slider').slider();
    })
    </script>
    </body>
</html>