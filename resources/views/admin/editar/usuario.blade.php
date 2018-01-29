@extends('master')

@section('conteudo')
@include('admin.nav')

<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
        <div class="card-body">
            <form class="" action="index.html" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="entidade" value="usuario">
              <input class="form-control mb-3" type="text" name="name" value="{{ $item->name }}" autocomplete="off" placeholder="Digite seu nome" disabled>
              <input class="form-control mb-3" type="password" name="password" value="{{ $item->password }}" autocomplete="password" placeholder="Digite sua nova senha" disabled>
              <input class="form-control mb-3" type="password" name="password_confirmation" value="{{ $item->password }}" autocomplete="password" placeholder="Confirme sua nova senha" disabled>
              <button class="btn btn-primary" type="submit" name="button">Salvar</button>
            </form>
        </div>
    </div>
  </div>
</div>

@endsection
