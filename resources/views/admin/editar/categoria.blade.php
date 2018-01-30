@extends('master')

@section('conteudo')
@include('admin.nav')

<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
          <form class="form" action="{{  route('admin.confirmarEdicao')  }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="entidade" value="categoria">
            <div class="input-group mb-3 rounded-right">
              <input id="campo-1" class="form-control" type="text" name="nome" value="{{ $item->nome }}" disabled>
              <button id="1" class="trava liberar btn btn-primary input-group-btn rounded-0 fa fa-unlock" type="button" name="button"></button>
            </div>
            <button class="btn btn-primary" type="submit" name="button">Salvar</button>
          </form>
      </div>
    </div>
  </div>
</div>

@endsection
