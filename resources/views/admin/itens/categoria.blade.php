@extends('master')

@section('conteudo')
@include('admin.nav')
<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        Id: {{ $item->id }} <br>
        Nome: {{ $item->nome }} <br>
      </div>
      <div class="card-footer">
        <a class="float-right ml-3" data-toggle="tooltip" title="Deletar" href="#"><span class="fa fa-trash" ></span></a><a data-toggle="tooltip" title="Editar" class="float-right" href="{{ route('admin.editar',['entidade' => 'categoria', 'id' => $item->id ]) }}"><span class="fa fa-pencil"></span></a>
      </div>
    </div>
  </div>
</div>



@endsection
