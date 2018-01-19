@extends('master')

@section('conteudo')
@include('admin.nav')
<div class="row justify-content-center">
  <div class="col-sm-8">
      <ul class="list-group">
      <li class="list-group-item"><div class="row"><a href="#" class="col-sm-11 list-group-item-action h-100" data-toggle="collapse" data-target="#admins">Admins</a><a class="col" href="#"><span class="fa fa-plus text-success " style="font-size:20px;"></span></a></div></li>
        @if(isset($admins) && !$admins->isEmpty())
        <div id="admins" class="collapse">
          <ul class="list-group">
            @foreach($admins as $admin)
                <li class="list-group-item bg-dark rounded-0"><a href="#">#{{ $admin->id }} > {{ $admin->name }}</a><a class="float-right ml-3" href="#"><span class="fa fa-trash" ></span></a><a class="float-right" href="#"><span class="fa fa-pencil"></span></a></li>
            @endforeach
          </ul>
        </div>
        @endif
        <li class="list-group-item"><div class="row"><a href="#" class="col-sm-11 list-group-item-action h-100" data-toggle="collapse" data-target="#usuarios">Usuarios</a><a class="col" href="#"><span class="fa fa-plus text-success " style="font-size:20px;"></span></a></div></li>
        <li class="list-group-item"><div class="row"><a href="#" class="col-sm-11 list-group-item-action h-100" data-toggle="collapse" data-target="#produtos">Produtos</a><a class="col" href="#"><span class="fa fa-plus text-success " style="font-size:20px;"></span></a></div></li>
          @if(isset($produtos) && !$produtos->isEmpty())
          <div id="produtos" class="collapse bg-dark">
            <ul class="list-group">
              @foreach($produtos as $prod)
                <li class="list-group-item bg-dark rounded-0"><a href="#">#{{ $prod->id }} > {{ $prod->nome }}</a><a class="float-right ml-3" href="#"><span class="fa fa-trash" ></span></a><a class="float-right" href="#"><span class="fa fa-pencil"></span></a></li>
              @endforeach
            </ul>
          </div>
          @endif
      </ul>
  </div>
</div>
@endsection
