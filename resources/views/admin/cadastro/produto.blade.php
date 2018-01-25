@extends('master')

@section('conteudo')
@include('admin.nav')

<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-header">
          <h3>Adicionar produto</h3>
      </div>
      <div class="card-body">
          <form class="form" action="index.html" method="post">
            <input class="form-control mb-3" type="text" name="nome" value="" placeholder="Digite o nome da categoria" autocomplete="off">
            <select class="form-control mb-3" name="categoria">
              @foreach($categorias as $cat)
                <option value="{{ $cat->nome }}">{{ $cat->nome }}</option>
              @endforeach
            </select>
            <input class="form-control mb-3" type="text" name="" value="">
            <button class="btn btn-primary"  type="submit" name="button">Cadastrar</button>
          </form>
      </div>
    </div>
  </div>
</div>

@endsection
