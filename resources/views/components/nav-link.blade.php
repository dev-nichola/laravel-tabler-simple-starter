@props(["href" => ""])

<li class="nav-item">
    <a class="nav-link" href="{{ $href }}" wire:navigate >
       {{ $slot }}
    </a>
  </li>