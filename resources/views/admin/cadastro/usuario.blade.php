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
            <input type="hidden" name="entidade" value="usuario">
            <label for="">Tipo: </label>
            <select class="form-control mb-3" name="tipo">
                <option value="0">Usuario</option>
                <option value="1">Admin</option>
            </select>
            <input class="form-control mb-3" type="text" name="name" value="" autocomplete="off" placeholder="Digite o nome do usuario">
            <input class="form-control mb-3" type="email" name="email" value="" autocomplete="email" placeholder="Digite o email do usuario">
            <input class="form-control mb-3" type="password" name="password" value="" autocomplete="password" placeholder="Digite a senha do usuario">
            <input class="form-control mb-3" type="password" name="password_confirmation" value="" autocomplete="password" placeholder="Confirme a senha do usuario">
            <button class="btn btn-primary"  type="submit" name="button">Cadastrar</button>
          </form>
      </div>
    </div>
  </div>
</div>

@endsection
