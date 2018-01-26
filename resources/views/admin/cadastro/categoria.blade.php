@extends('master')

@section('conteudo')
@include('admin.nav')

<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-header">
          <h3>Adicionar categoria</h3>
      </div>
      <div class="card-body">
          <form class="form" action="{{ route('admin.confirmarCadastro') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="entidade" value="categoria">
            <input class="form-control mb-3" type="text" name="nome" value="" placeholder="Digite o nome da categoria" autocomplete="off">
            <button class="btn btn-primary"  type="submit" name="button">Cadastrar</button>
          </form>
      </div>
    </div>
  </div>
</div>

@endsection
