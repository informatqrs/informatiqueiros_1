@extends('master')

@section('conteudo')
@include('admin.nav')

<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
        <div class="card-body">
            <form class="" action="index.html" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="entidade" value="produto">
              <input class="form-control mb-3" type="text" name="nome" value="{{ $item->nome }}" disabled>
              <select class="form-control mb-3" name="categoria" disabled>
                  @foreach( $categorias as $cat)
                    @if( $cat->nome == $item->categoria)
                        <option value="{{ $cat->nome }}" selected>{{ $cat->nome }}</option>
                    @else
                        <option value="{{ $cat->nome }}">{{ $cat->nome }}</option>
                    @endif
                  @endforeach
              </select>
              <input class="form-control mb-3" type="text" name="valor" value="{{ $item->valor }}" disabled>
              <button class="btn btn-primary" type="submit" name="button">Salvar</button>
            </form>
        </div>
    </div>
  </div>
</div>

@endsection
