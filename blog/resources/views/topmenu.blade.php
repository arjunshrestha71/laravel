@foreach($cats as $item)
      <li class="nav-item">
        <a class="nav-link" href="/cats/{{ $item->id }}">{{ $item->name }}</a>
      </li>
@endforeach