@extends('master')

@section('conteudo')
@include('admin.nav')
<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        Id: {{ $item->id }} <br>
        Nome: {{ $item->nome }} <br>
        Categoria: {{ $item->categoria }} <br>
        Preço: {{ $item->valor }} <br>
      </div>
      <div class="card-footer">
          <a class="float-right ml-3" href="#"><span data-toggle="tooltip" title="Deletar" class="fa fa-trash" ></span></a><a class="float-right" href="{{ route('admin.editar',['entidade' => 'produto', 'id' => $item->id ]) }}"><span data-toggle="tooltip" title="Editar" class="fa fa-pencil"></span></a>
      </div>
    </div>
  </div>
</div>



@endsection
