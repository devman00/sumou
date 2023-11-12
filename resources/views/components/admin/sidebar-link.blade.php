@props([
  'targetBlank' => 0,
])

<li class="{{ $isChildren ? 'submenu-item' : ($hasDropdown == 'true' ? 'sidebar-item has-sub' : 'sidebar-item') }}  @if(Route::currentRouteName() == $activeLink) active @endif ">
    @if ($isChildren)
    <a href="{{ $link }}" {{ $targetBlank === 1 ? 'target="_blank"' : '' }} >
        <span>{{ $title }}</span>
    </a>
    @else
        @if ($activeLink == 'logout')
          <a href="{{ $link }}" class='sidebar-link' onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="{{ $icon }}"></i>
            <span>{{ $title }}</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        @else 
          <a href="{{ $link }}" class='sidebar-link' {{ $targetBlank === 1 ? 'target="_blank"' : '' }}>
            <i class="{{ $icon }}"></i>
            <span>{{ $title }}</span>
          </a>
        @endif
    
    @endif
   
    @if($hasDropdown)
    <ul class="submenu">
      {{ $slot }}
    </ul>
    @endif

</li>
