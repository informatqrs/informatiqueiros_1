<ul>
  @foreach($produtos as $produto)
  <li> {{ $produto->name }} </li>
  @endforeach
</ul>
