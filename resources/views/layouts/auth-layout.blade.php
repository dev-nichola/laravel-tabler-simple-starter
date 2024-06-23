<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign up - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    
    {{-- Style --}}
    <link href="{{ asset('dist/css/tabler.min.css?1692870487') }}" rel="stylesheet"/>
  </head>

  <body  class="d-flex flex-column">
    @include('sweetalert::alert')
      <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark">
            <img src="{{ asset('static/logo.svg') }}" width="110" height="32" alt="Tabler" class="navbar-brand-image">
          </a>
        </div>

        <div>
            {{ $slot }}
        </div>
    
    <script src="{{ asset('dist/js/demo-theme.min.js?1692870487') }}"></script>
    <script src="{{ asset('dist/js/tabler.min.js?1692870487') }}" defer></script>
  </body>
</html>