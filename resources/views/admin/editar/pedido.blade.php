@extends('master')

@section('conteudo')
@include('admin.nav')

<div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
        <div class="card-body">
          <form class="form" action="index.html" method="post">
            { csrf_field() }}
            <input type="hidden" name="entidade" value="pedido">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
          </form>
        </div>
    </div>
  </div>
</div>


@endsection
