@extends('master')

@section('conteudo')

<div class="row justify-content-center">
  <div class="col-8">
    <div class="card">
      <div class="card-body">
        <form class="form" action="#" method="post">
            <input class="form-control mb-3" type="email" name="" value="" autocomplete="email" placeholder="Digite seu email">
            <input class="form-control mb-3" type="password" name="password" value="" autocomplete="password" placeholder="Digite sua senha">
            <input class="form-control mb-3" type="password" name="password_confirmation" value="" autocomplete="password" placeholder="Confirme sua senha">
            <button class="btn btn-primary" type="button" name="button">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
