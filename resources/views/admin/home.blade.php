@extends('master')

@section('conteudo')
@include('admin.nav')
<div class="row justify-content-center">
  <div class="col-sm-8">
      <ul class="list-group">
      <li id="li" class="list-group-item"><div class="row"><a href="#" id="admin" class="flex col-sm-11 list-group-item-action h-100" data-toggle="collapse" data-target="#admins"><span id="icon-admin" class="fa fa-angle-double-down"></span> Admins</a><a class="col" href="{{ route('admin.cadastrar',['entidade' => 'usuario']) }}"><span class="fa fa-plus text-success " style="font-size:20px;"></span></a></div></li>
        @if(isset($admins) && !$admins->isEmpty())
        <div id="admins" class="collapse">
          <ul class="list-group">
            @foreach($admins as $admin)
                <li class="list-group-item bg-dark rounded-0"><a href="{{ route('admin.verItem',['entidade' => 'usuario', 'id' => $admin->id]) }}">#{{ $admin->id }} > {{ $admin->name }}</a></li>
            @endforeach
          </ul>
        </div>
        @else
        <div id="admins" class="collapse bg-dark">
          <ul class="list-group">
            <li class="list-group-item bg-dark rounded-0 text-white"><p class="m-0 p-0">Lista Vazia</p></li>
          </ul>
        </div>
        @endif
        <li class="list-group-item"><div class="row"><a href="#" id="usuario" class="flex col-sm-11 list-group-item-action h-100" data-toggle="collapse" data-target="#usuarios"><span id="icon-usuario" class="fa fa-angle-double-down"></span> Usuarios</a><a class="col" href="{{ route('admin.cadastrar',['entidade' => 'usuario']) }}"><span class="fa fa-plus text-success " style="font-size:20px;"></span></a></div></li>
        @if(isset($usuarios) && !$usuarios->isEmpty())
        <div id="usuarios" class="collapse bg-dark">
          <ul class="list-group">
            @foreach($usuarios as $usuario)
              <li class="list-group-item bg-dark rounded-0"><a href="{{ route('admin.verItem',['entidade' => 'usuario', 'id' => $usuario->id]) }}">#{{ $usuario->id }} > {{ $usuario->name }}</a></li>
            @endforeach
          </ul>
        </div>
        @else
        <div id="usuarios" class="collapse bg-dark">
          <ul class="list-group">
            <li class="list-group-item bg-dark rounded-0 text-white"><p class="m-0 p-0">Lista Vazia</p></li>
          </ul>
        </div>
        @endif
        <li class="list-group-item"><div class="row"><a href="#" id="produto" class="flex col-sm-11 list-group-item-action h-100" data-toggle="collapse" data-target="#produtos"><span id="icon-produto" class="fa fa-angle-double-down"></span> Produtos</a><a class="col" href="{{ route('admin.cadastrar',['entidade' => 'produto']) }}"><span class="fa fa-plus text-success " style="font-size:20px;"></span></a></div></li>
          @if(isset($produtos) && !$produtos->isEmpty())
          <div id="produtos" class="collapse bg-dark">
            <ul class="list-group">
              @foreach($produtos as $produto)
                <li class="list-group-item bg-dark rounded-0"><a href="{{ route('admin.verItem',['entidade' => 'produto', 'id' => $produto->id]) }}">#{{ $produto->id }} > {{ $produto->nome }}</a></li>
              @endforeach
            </ul>
          </div>
          @else
          <div id="produtos" class="collapse bg-dark">
            <ul class="list-group">
              <li class="list-group-item bg-dark rounded-0 text-white"><p class="m-0 p-0">Lista Vazia</p></li>
            </ul>
          </div>
          @endif
          <li class="list-group-item"><div class="row"><a href="#" id="categoria" class="flex col-sm-11 list-group-item-action h-100" data-toggle="collapse" data-target="#categorias"><span id="icon-categoria" class="fa fa-angle-double-down"></span> Categorias</a><a class="col" href="{{ route('admin.cadastrar',['entidade' => 'categoria']) }}"><span class="fa fa-plus text-success " style="font-size:20px;"></span></a></div></li>
          @if(isset($categorias) && !$categorias->isEmpty())
          <div id="categorias" class="collapse bg-dark">
            <ul class="list-group">
              @foreach($categorias as $categoria)
                <li class="list-group-item bg-dark rounded-0"><a href="{{ route('admin.verItem',['entidade' => 'categoria', 'id' => $categoria->id]) }}">#{{ $categoria->id }} > {{ $categoria->nome }}</a></li>
              @endforeach
            </ul>
          </div>
          @else
          <div id="categorias" class="collapse bg-dark">
            <ul class="list-group">
              <li class="list-group-item bg-dark rounded-0 text-white"><p class="m-0 p-0">Lista Vazia</p></li>
            </ul>
          </div>
          @endif
          <li class="list-group-item"><div class="row"><a href="#" id="pedido" class="flex col-sm-11 list-group-item-action h-100" data-toggle="collapse" data-target="#pedidos"><span id="icon-pedido" class="fa fa-angle-double-down"></span> Pedidos</a><a class="col" href="{{ route('admin.cadastrar',['entidade' => 'pedido']) }}"><span class="fa fa-plus text-success " style="font-size:20px;"></span></a></div></li>
          @if(isset($pedidos) && !$pedidos->isEmpty())
          <div id="pedidos" class="collapse bg-dark">
            <ul class="list-group">
              @foreach($pedidos as $pedido)
                <li class="list-group-item bg-dark rounded-0"><a href="{{ route('admin.verItem',['entidade' => 'pedido', 'id' => $pedido->id]) }}">#{{ $pedido->id }} > {{ $pedido->nome }}</a></li>
              @endforeach
            </ul>
          </div>
          @else
          <div id="pedidos" class="collapse bg-dark">
            <ul class="list-group">
              <li class="list-group-item bg-dark rounded-0 text-white"><p class="m-0 p-0">Lista Vazia</p></li>
            </ul>
          </div>
          @endif
      </ul>
  </div>
</div>
@endsection
