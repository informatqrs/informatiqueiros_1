@extends('master')

@section('conteudo')
@include('admin.nav')

<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
        <div class="card-body">
            <form class="form" action="{{  route('admin.confirmarEdicao')  }}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="entidade" value="produto">
              <div class="input-group mb-3 rounded-right">
                  <input id="campo-1" class="form-control" type="text" name="nome" value="{{ $item->nome }}" disabled>
                  <button id="1" class="trava liberar btn btn-primary input-group-btn rounded-0 fa fa-unlock" type="button" name="button"></button>
              </div>
              <div class="input-group mb-3 rounded-right">
                <select id="campo-2" class="form-control" name="categoria" disabled>
                    @foreach( $categorias as $cat)
                      @if( $cat->nome == $item->categoria)
                          <option value="{{ $cat->nome }}" selected>{{ $cat->nome }}</option>
                      @else
                          <option value="{{ $cat->nome }}">{{ $cat->nome }}</option>
                      @endif
                    @endforeach
                </select>
                <button id="2" class="trava liberar btn btn-primary input-group-btn rounded-0 fa fa-unlock" type="button" name="button"></button>
              </div>
              <div class="input-group mb-3 rounded-right">
                  <input id="campo-3" class="form-control" type="text" name="valor" value="{{ $item->valor }}" disabled>
                  <button id="3" class="trava liberar btn btn-primary input-group-btn rounded-0 fa fa-unlock" type="button" name="button"></button>
              </div>
              <button class="btn btn-primary" type="submit" name="button">Salvar</button>
            </form>
        </div>
    </div>
  </div>
</div>

@endsection
