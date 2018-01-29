<nav class="navbar bg-dark text-white sticky-top mb-3 navbar-expand-sm ">
  <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="{{ route('admin') }}">Início</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('admin.logout') }}">Sair</a></li>
  </ul>
  <form class="form-inline d-inline-flex mx-auto" action="{{ route('admin.pesquisar') }}" method="post">
    {{ csrf_field() }}
    <input class="form-control mr-1" type="text" name="pesquisa" value="" autocomplete="off" placeholder="Digite o id da entidade:">
    <button type="submit" name="button" class="btn btn-success"><span class="fa fa-search"></span></button>
  </form>
</nav>
