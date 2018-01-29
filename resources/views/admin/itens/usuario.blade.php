@extends('master')

@section('conteudo')
@include('admin.nav')
<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
          Id: {{ $item->id }} <br>
          Nome: {{ $item->name }}<br>
          Email: {{ $item->email }}<br>
          @if($item->tipo == 1)
          Tipo: Administrador<br>
          @else
          Tipo: Usuário<br>
          @endif
      </div>
      <div class="card-footer">
        <a data-toggle="tooltip" title="Deletar" class="float-right ml-3" href="#"><span class="fa fa-trash" ></span></a><a data-toggle="tooltip" title="Editar" class="float-right" href="{{ route('admin.editar',['entidade' => 'usuario', 'id' => $item->id ]) }}"><span class="fa fa-pencil"></span></a>
      </div>
    </div>
  </div>
</div>



@endsection
