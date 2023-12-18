<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name', 'WMW') }}</title>
    

    
    {{-- RTL / LTR style  --}}
    @if (app()->getLocale() == 'ar')
      <link rel="stylesheet" href="{{ asset('admin/assets/css/rtl.css')}}">
      <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app-rtl.css') }}">
    @else
      <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app-dark.css')}}">
    @endif

    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo/favicon.png')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/shared/iconly.css')}}">
    
    {{------ icons  --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/extensions/@icon/dripicons/dripicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/pages/dripicons.css') }}">

    <!-- Line-awesome----- -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Fontawesome --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

    {{-- BoxIcons  --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    @yield('head')

    {{-- Custom style  --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/ad/ad.css')}}">

    
        
    
    {{-- @if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap-rtl.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap.min.css') }}">
    @endif --}}

    {{-- @stack('component-styles') --}}

    <!-- RTL Mode -->
   

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