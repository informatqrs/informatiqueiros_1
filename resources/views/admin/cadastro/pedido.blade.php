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
          <form class="form" action="index.html" method="post">
            <label for="">Usuário requerente do pedido:</label><select class="" name="">
              @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
              @endforeach
            </select>
            <label for="">Itens: </label><button class="btn btn-success fd-add" type="button" name="button">Novo item</button><button class="btn btn-danger fd-rm" type="button" name="button">Remover item</button><br>
            <div class="FD">
              <input class="form-control mb-3" type="text" name="itens[]" value="" placeholder="Item">
            </div>
            <input class="form-control mb-3" type="text" name="valor" value="" placeholder="Valor do pedido" autocomplete="off">
            <button class="btn btn-primary"  type="submit" name="button">Cadastrar</button>
          </form>
      </div>
    </div>
  </div>
</div>

@endsection
