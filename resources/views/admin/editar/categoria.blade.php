@extends('master')

@section('conteudo')
@include('admin.nav')

<div class="row">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
          <form class="form" action="index.html" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="entidade" value="categoria">
            <input class="form-control mb-3" type="text" name="nome" value="" disabled><a class="btn btn-secondary"href="#"><span class=""></span></a>
            <button class="btn btn-primary" type="submit" name="button">Salvar</button>
          </form>
      </div>
    </div>
  </div>
</div>

@endsection
