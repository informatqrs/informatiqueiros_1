@extends('master')

@section('conteudo')
@include('admin.nav')

<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-header">
          <h3>Adicionar pedido</h3>
      </div>
      <div class="card-body">
          <form class="form" action="{{ route('admin.confirmarCadastro') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="entidade" value="pedido">
            <label for="">Usuário requerente do pedido:</label><select class="form-control" name="user_id">
              @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
              @endforeach
            </select><br>
            <label for="">Itens:</label><br><button class="btn btn-success fd-adicionar mb-3" type="button" name="button">Novo item</button><button class="btn btn-danger fd-remover ml-3 mb-3" type="button" name="button">Remover item</button><br>
            <hr>
            <div class="fd">
              <input class="form-control mb-3" type="text" name="itens[]" value="" placeholder="Digite o id do produto:">
            </div>
            <hr>
            <button class="btn btn-primary"  type="submit" name="button">Cadastrar</button>
          </form>
      </div>
    </div>
  </div>
</div>

@endsection
