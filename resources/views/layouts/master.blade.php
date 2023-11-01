<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name', 'WMW') }}</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo/favicon.png')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/shared/iconly.css')}}">
    
    {{------ icons  --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/extensions/@icon/dripicons/dripicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/pages/dripicons.css') }}">

    @yield('head')

    {{-- Custom style  --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">


  </head>
  <body>
    <div id="app">

      {{-- sidebar --}}
      @include('layouts.admin.sidebar')

      <div id="main">
        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>
            
        @yield('content')
        
      {{-- Footer --}}
      @include('layouts.admin.footer')
        
      </div>
    </div>
    <script src="{{ asset('admin/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/assets/extensions/jquery/jquery.min.js') }}"></script>
    @yield('foot')
    <script src="{{ asset('admin/assets/js/script.js') }}"></script>
  </body>
</html>