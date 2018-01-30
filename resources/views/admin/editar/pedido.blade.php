@extends('master')

@section('conteudo')
@include('admin.nav')

<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
        <div class="card-body">
          <form class="form" action="{{  route('admin.confirmarEdicao')  }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="entidade" value="pedido">
            <label for="">Usuário requerente do pedido:</label><br>
            <div class="input-group mb-3">
              <select id="campo-1" class="form-control" name="user_id" disabled>
                @foreach($usuarios as $usuario)
                  <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                @endforeach
              </select><button id="1" class="trava liberar fa fa-unlock btn btn-primary input-group-btn rounded-0" type="button" name="button"></button>
            </div>
            <hr>
              @for($i = 2; $i < count($produtos)+2; $i ++)
              <div class="input-group mb-3">
                  <input id="campo-{{$i}}" class="form-control" type="text" name="" value="{{$produtos[$i-2]->id}}" placeholder="Digite o id do produto: " disabled><button id="{{$i}}" class="trava liberar fa fa-unlock btn btn-primary input-group-btn rounded-0"  type="button" name="button"></button>
              </div>
              @endfor
            <hr>
            <button class="btn btn-primary"  type="submit" name="button">Confirmar</button>
          </form>
        </div>
    </div>
  </div>
</div>


@endsection
