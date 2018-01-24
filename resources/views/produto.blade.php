@extends('master')

@section('conteudo')
@include('nav')

<div class="row justify-content=center">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-header">
        @if(isset($produto))
          @foreach($produto as $p)
            #{{ $p->id }} -> {{ $p->nome }}
          @endforeach
        @else

          Não há produto

        @endif
      </div>
    </div>
  </div>
</div>

@endsection
