<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <title>Laravel Tabler UI</title>

    @vite(['resources/css/app.css', 'resources/css/app.js'])

    <link rel="shortcut icon" href="{{ asset('static/logo-white.svg') }}" type="image/x-icon">
    <link href="{{ asset('dist/css/tabler.min.css?1692870487') }}" rel="stylesheet"/>

    {{-- Datatable --}}
    <link href="{{ asset('dist/lib/datatable/bootstrap-datatable.css') }}" rel="stylesheet">
    <script src="{{asset('dist/lib/datatable/jquery.js')}}"></script>
    <script src="{{ asset('dist/lib/datatable/jquery-datatable.js') }}"></script>
    <script src="{{ asset('dist/lib/datatable/bootstrap-datatable.js') }}"></script>

  </head>
  <body >
   

    {{-- Section Page --}}
    <div class="page d-none d-lg-block">
      @include("partials.header")
      @include('partials.navigation')
      <div class="page-wrapper">
        <div class="page-header d-print-none">
          <div class="container-xl">
            @include('sweetalert::alert')
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
    <div class="d-flex d-lg-none justify-content-center align-items-center vh-100">
      <h1 class="fw-semibold">Only Can Show At Desktop Mode</h1>
  </div>

    {{-- Script --}}
    <script src="{{ asset('dist/js/demo-theme.min.js?1692870487') }}"></script>
    <script src="{{ asset('dist/js/tabler.min.js?1692870487') }}" defer></script>

    @stack("scripts")
  </body>
</html>