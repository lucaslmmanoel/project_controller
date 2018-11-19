@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="row text-center">
            <div class="container">
                <div class="row">
                    @if ($message = Session::get('success'))

                        <div class="alert alert-success alert-block">

                            <button type="button" class="close" data-dismiss="alert">×</button>

                            <strong>{{ $message }}</strong>

                        </div>

                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>EPA!</strong>Tem algo de errado1!!!<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="row justify-content-center">

                    <div class="profile-header-container">
                        <div class="profile-header-img">
                            <img class="rounded-circle" src="/storage/avatars/{{ $user->avatar }}"/>
                            <!-- badge -->
                            <div class="rank-label-container">
                                <span class="label label-default rank-label">{{$user->name}}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" class="" name="avatar" id="avatarFile"
                                   aria-describedby="fileHelp">

                            <small id="fileHelp" class="form-text text-muted">Insira uma imagem maior que 2MB
                            </small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
