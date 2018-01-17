@extends('master')

@section('conteudo')

<div class="row justify-content-center">

  <div class="card col-sm-8">
    <div class="card-body">
      <div>
        <form class="form-inline d-inline-flex" action="{{ route('login') }}" method="post">
          {{ csrf_field() }}
          <input class="form-control mr-1" type="username" name="username" value="" placeholder="Usuário" autocomplete="username">
          <input class="form-control mr-1" type="password" name="password" value="" placeholder="Senha" autocomplete="password">
          <button type="submit" name="button" class="btn btn-default mr-2">Enviar</button>
        </form>
      </div>
    </div>
  </div>

</div>

@endsection
