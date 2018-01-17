@extends('master')
@section('conteudo')
@include('nav')
<div class="row">
<ul class="list-group col-sm bg-dark">
  <a class="list-group-item list-group-item-action ml-2" href="#">Vestuário</a>
  <a class="list-group-item list-group-item-action ml-2" href="#">Eletrodomésticos</a>
  <a class="list-group-item list-group-item-action ml-2" href="#">Informática</a>
  <a class="list-group-item list-group-item-action ml-2" href="#">Ferramentas</a>
  <a class="list-group-item list-group-item-action ml-2" href="#">Miscelânia</a>
</ul>
</nav>
<div class="col-sm-8">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- ITENS -->
<div class="row mt-2">
  @for($i = 0; $i < 18; $i++)
    <div class="card col-4 p-1 m-0">
      <a><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      <div class="card-body">
        <h5>Produto {{$i}} </h5>
      </div>
    </div>

  @endfor
</div>

</div>
<div class="col-sm bg-success">

</div>
</div>

@endsection
