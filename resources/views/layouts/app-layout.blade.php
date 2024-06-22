<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <title>Laravel Tabler UI</title>

    <link rel="shortcut icon" href="{{ asset('static/logo-white.svg') }}" type="image/x-icon">
    <link href="{{ asset('dist/css/tabler.min.css?1692870487') }}" rel="stylesheet"/>

    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Datatable --}}
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

  </head>
  <body >

    {{-- Section Page --}}
    <div class="page hidden lg:block">
      @include("partials.header")
      @include('partials.navigation')
      <div class="page-wrapper">
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">

                {{-- Content --}}
                {{ $slot }}

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    


    {{-- Attention --}}
    <div class="lg:hidden flex justify-center items-center vh-100">
      <h1 class="font-semibold">Only Can Show At Desktop Mode</h1>
    </div>

    {{-- Script --}}
    <script src="{{ asset('dist/js/demo-theme.min.js?1692870487') }}"></script>
    <script src="{{ asset('dist/js/tabler.min.js?1692870487') }}" defer></script>

    @stack("scripts")
  </body>
</html>