@extends('master')

@section('conteudo')
@include('admin.nav')

<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
          <form class="form" action="index.html" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="entidade" value="categoria">
            <input class="form-control mb-3" type="text" name="nome" value="{{ $item->nome }}" disabled>
            <button class="btn btn-primary" type="submit" name="button">Salvar</button>
          </form>
      </div>
    </div>
  </div>
</div>

@endsection
