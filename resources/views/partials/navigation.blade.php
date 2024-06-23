<header class="navbar-expand-md">
    <div>
      <div class="navbar">
        <div class="container-xl">
          <ul class="navbar-nav">
            <x-nav-link href="{{ route('dashboard') }}">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                </svg>
              </span>
              {{ __("Home") }}
            </x-nav-link>

            <x-nav-link href="{{ route('users') }}">     
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                </svg>                
              </span>
              {{ __("Users") }}
            </x-nav-link>

            <x-nav-dropdown title="Navigation Child">
              <x-dropdown-item href="#" target="_blank" rel="noopener">Child 1</x-dropdown-item>
              <x-dropdown-item href="#">Child 2</x-dropdown-item>
              <x-dropdown-item href="#" target="_blank" rel="noopener">Child 3</x-dropdown-item>
          </x-nav-dropdown>
          
          </ul>
        </div>
      </div>
    </div>
  </header>
