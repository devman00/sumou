<!DOCTYPE html>
<html lang="en-US" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title> @yield('pagetitle') </title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/')}}/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/')}}/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/')}}/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/')}}/img/favicons/favicon.ico">  --}}
  {{-- <link rel="manifest" href="{{ asset('assets/')}}/img/favicons/manifest.json">  --}}
  <meta name="msapplication-TileImage" content="{{ asset('assets/')}}/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Favicon  -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/')}}/img/favicon.ico">

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="{{ asset('assets/')}}/css/theme-rtl.css" rel="stylesheet" />
  <link href="{{ asset('assets/')}}/css/style.css" rel="stylesheet" />
  <link href="{{ asset('assets/')}}/css/parts/homepage.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/')}}/css/parts/ad.css">
  <link rel="stylesheet" href="{{ asset('assets/')}}/css/parts/account.css">
  
  <!-- -------- OWL Carousel ------  -->
  <link rel="stylesheet" href="{{ asset('assets/')}}/css/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('assets/')}}/css/owl-carousel/owl.theme.default.min.css">
  <!-- <link rel="stylesheet" href="{{ asset('assets/')}}/css/owl-carousel/owl.theme.green.min.css"> -->

  <!-- bootstrap RTL  -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous"> -->

  <!-- Line-awesome----- -->
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

  <!-- Fontawesome --->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

  {{-- BoxIcons  --}}
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>


<body @if(Route::currentRouteName() == 'user.profile' OR Route::currentRouteName() == 'ads.create' OR Route::currentRouteName() == 'ads.index') class="accountPage" @endif>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main overflow-hidden" id="top">

    @includeIf('layouts.front.navbar')


    @yield('content')
    
    
    @includeIf('layouts.front.footer')


  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->

  @includeIf('layouts.front.foot')

  <a href="https://wa.me/00966539437574" style="background: #25D366; border-radius: 50%; font-size: 44px; position: fixed; bottom: 10px; right: 10px; width: 60px; height: 60px; z-index: 999; text-align: center;"><i class='bx bxl-whatsapp' style="color: #fff; line-height: 60px;"></i></a>
    
</body>

</html>