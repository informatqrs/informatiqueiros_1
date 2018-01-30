@extends('master')

@section('conteudo')
@include('admin.nav')
<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        Id: {{ $item->id }} <br>
        User_id: {{ $item->user_id }}<br>
        @foreach($produtos as $produto)
          #{{ $produto->id }} -> {{ $produto->nome }} : {{ $produto->valor }}<br>
        @endforeach
        Valor: {{ $item->valor }} <br>
      </div>
      <div class="card-footer">
          <a class="float-right ml-3" href="#"><span data-toggle="tooltip" title="Deletar" class="fa fa-trash" ></span></a><a class="float-right" href="{{ route('admin.editar',['entidade' => 'pedido', 'id' => $item->id ]) }}"><span data-toggle="tooltip" title="Editar" class="fa fa-pencil"></span></a>
      </div>
    </div>
  </div>
</div>



@endsection
