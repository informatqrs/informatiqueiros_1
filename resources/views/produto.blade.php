<ul>
  @foreach($produtos as $p)
    <li>{{ $p->nome }}</li>
  @endforeach
</ul>
