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
            <input class="form-control mb-3" type="text" name="valor" value="" placeholder="Valor do pedido" autocomplete="off">
            <button class="btn btn-primary"  type="submit" name="button">Cadastrar</button>
          </form>
      </div>
    </div>
  </div>
</div>

@endsection
