@extends('master')

@section('conteudo')
@include('admin.nav')

<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
        <div class="card-body">
            <form class="" action="{{  route('admin.confirmarEdicao')  }}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="entidade" value="usuario">
              <div class="input-group mb-3">
                <input id="campo-1" class="form-control" type="text" name="name" value="{{ $item->name }}" autocomplete="off" placeholder="Digite seu nome" disabled>
                <button id="1" class="trava liberar btn btn-primary input-group-btn rounded-0 fa fa-unlock" type="button" name="button"></button>
              </div>
              <div class="input-group mb-3">
                <input id="campo-2" class="form-control" type="password" name="password" value="{{ $item->password }}" autocomplete="password" placeholder="Digite sua nova senha" disabled>
                <button id="2" class="trava liberar btn btn-primary input-group-btn rounded-0 fa fa-unlock" type="button" name="button"></button>
              </div>
              <div class="input-group mb-3">
                <input id="campo-3"  class="form-control" type="password" name="password_confirmation" value="{{ $item->password }}" autocomplete="password" placeholder="Confirme sua nova senha" disabled>
                <button id="3" class="trava liberar btn btn-primary input-group-btn rounded-0 fa fa-unlock" type="button" name="button"></button>
              </div>
              <button class="btn btn-primary" type="submit" name="button">Salvar</button>
            </form>
        </div>
    </div>
  </div>
</div>

@endsection
