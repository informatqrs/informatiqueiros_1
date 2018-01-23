@extends('master')

@section('conteudo')

<div class="row justify-content-center">

  <div class="card col-sm-8">
    <div class="card-body">
      <div>
        <form class="form-inline d-inline-flex" action="{{ route('login') }}" method="post">
          {{ csrf_field() }}
          <input class="form-control mr-1" type="username" name="email" value="" placeholder="Usuário" autocomplete="username">
          <input class="form-control mr-1" type="password" name="password" value="" placeholder="Senha" autocomplete="password">
          <button type="submit" name="button" class="btn btn-default mr-2">Enviar</button>
        </form>
        @if($errors->any())
          @foreach($errors as $err)

          <div class="alert alert-danger">
            {{ $err }}
          </div>

          @endforeach
        @endif
      </div>
    </div>
    @if(session('aviso') !== NULL)
        <div class="alert alert-warning">
          <h3>{{ session('aviso') }}</h3>
        </div>
    @endif
  </div>

</div>

@endsection
