
<!-- NAV -------  -->
<nav class="bg-white navbar navbarHeadT navbar-expand-lg navbar-light fixed-top py-2" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3 mx-0" href="{{ route('home') }}">
            <img class="me-3 logo" src="{{ asset('assets/') }}/img/logo_blue.png" alt="" />
        </a>

        {{-- <a class="confirm-btn-mob nav-link py-1 btn px-3 gradientBlueViolet_90 text-white" href="#" style="font-size: 14px; display:none"> <i class="las la-check-circle"></i>
          اتمام المبايعة<br>عن طريق سمو
        </a> --}}

        <a class="confirm-btn-mob nav-link py-1 btn px-3 gradientBlueViolet_90 text-white" href="{{route('requests.type')}}" style="font-size: 14px; display:none"> <i class="las la-plus"></i>
          اتمام المبايعة عن طريق سمو
        </a>

        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menue  -->
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0 px-3 px-md-0 px-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">

                <li class="nav-item "> <a class="nav-link fw-medium active" aria-current="page" href="{{ route('home') }}">الرئيسية</a> </li>

                @if (auth()->check())
                  {{-- <li class="nav-item "><a class="nav-link" href="{{route('ads.create')}}"> إضافة لوحة </a></li> --}}
                  <li class="nav-item navItemMob"><a class="nav-link" href="{{route('user.profile')}}"> حسابي </a></li>
                @endif

                <li class="nav-item px-3 confirm-btn">
                  <a class="nav-link px-3 text-white" href="{{route('requests.type')}}"> <i class="las la-check-circle"></i>
                    اتمام المبايعة عن طريق سمو
                  </a>
                  {{-- <a class="nav-link px-3 text-white" href="{{route('ads.create')}}"> <i class="las la-plus"></i>
                   إضافة إعلان
                  </a> --}}
                </li>

                <li class="nav-item "><a class="nav-link" href="#">من نحن</a></li>
                <li class="nav-item "><a class="nav-link" href="#"> إتصل بنا </a></li>

                {{-- Logout --  --}}
                @if (auth()->check())
                  <form method="POST" class="navItemMob" action="{{ route('logout') }}">
                    @csrf
                    <x-front.link :href="route('logout')" class="mx-0" onclick="event.preventDefault(); this.closest('form').submit();">تسجيل الخروج </x-front.link>
                  </form>
                @endif

                @if (!auth()->check())
                <li class="nav-item navItemMob"><a class="nav-link" href="{{route('login')}}">  تسجيل الدخول </a></li>
                @endif

            </ul>
            <div class="ps-lg-5">
                <ul class="navbar-nav me-3 mb-2 mb-lg-0 navItemDesk">

                    @if (auth()->check())

                        <div class="dropdown">
                            <a class="btn btn-secondary__ text-black dropdown-toggle btn btn-outline-primary-dashed order-0" href="#" role="button"
                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name}}
                                <i class="bx bxs-user bx-tada fs-20px"></i>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li>
                                  <x-front.link :href="route('user.profile')" class="border border-white rounded">
                                    <i style="font-size: 20px;" class="bx bx-user px-1"></i>
                                    حسابي
                                  </x-front.link>
                                </li>

                                <li>
                                  <x-front.link :href="route('ads.create')" class="border border-white rounded">
                                    <i style="font-size: 20px;" class="las la-plus px-1"></i>
                                    إضافة لوحة
                                  </x-front.link>
                                </li>

                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                      @csrf
                                      <x-front.link :href="route('logout')"
                                          onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                          <i style="font-size: 20px;" class="bx bx-power-off px-1"></i>
                                          تسجيل الخروج
                                      </x-front.link>
                                  </form>
                                </li>
                            </ul>
                        </div>

                    @else

                        <a href="{{ route('login') }}">
                            <button class="btn btn-outline-primary-dashed order-0" type="submit"> <i
                                    class="las la-user-lock"></i> تسجيل الدخول </button>
                        </a>
                    @endif

                </ul>



                {{-- @if (Route::has('login'))

            <a href="{{route('login')}}">
              <button class="btn btn-outline-primary-dashed order-0" type="submit"> <i class="las la-user-lock"></i>  تسجيل الدخول </button>
            </a>

            @auth
              مرحبا بك <span> {{ auth()->user()->name }} </span>
            @endauth
          @endif --}}

                <!-- <img src="{{ asset('assets/') }}/img/2030.png" style="margin-right: 10px" alt="2030 رؤية" width="90"> -->
            </div>
        </div>
    </div>
</nav>


@if (auth()->check())
@if(Route::currentRouteName() == 'user.profile' OR Route::currentRouteName() == 'ads.create' OR Route::currentRouteName() == 'ads.index' OR Route::currentRouteName() == 'nidverification.show' OR Route::currentRouteName() == 'user.permit')
<!---->
<nav class="mobSidebar hoverable close">
    <div class="logo_items flex">
      <i class="bx bx-lock-alt" id="lock-icon" title=""></i>
      <i class="bx bx-x" id="mobSidebar-close"></i>
    </div>

    <div class="menu_container">
      <div class="menu_items">
        <ul class="menu_item">
          <div class="menu_title flex">
            <span class="title">لوحة التحكم</span>
            <span class="line"></span>
          </div>
          <li class="item">
            <a href="{{route('user.profile')}}" class="link flex">
              <i class="las la-user"></i>
              <span>حسابي</span>
            </a>
          </li>
          <li class="item">
            <a href="" class="link flex">
              <i class="las la-file-invoice"></i>
              <span>طلباتي</span>
            </a>
          </li>
          <li class="item">
            <a href="{{route('ads.create')}}" class="link flex">
              <i class="las la-folder-plus"></i>
              <span>إضافة لوحة</span>
            </a>
          </li>
          <li class="item">
            <a href="{{route('ads.index')}}" class="link flex">
              <i class="las la-stream"></i>
              <span>لوحاتي</span>
            </a>
          </li>
          {{-- <li class="item">
            <a href="{{route('user.permit')}}" class="link flex">
              <i class="las la-check-circle"></i>
              <span>توثيق الحساب</span>
            </a>
          </li> --}}
        </ul>

      </div>

      <div class="mobSidebar_profile flex">
        <span class="nav_image">
          <img src="{{ asset('assets/')}}/img/logo_blue.png" alt="" />
        </span>
        <div class="data_text">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" class="btn position-relative top-0 text-black p-0"
                    onclick="event.preventDefault();this.closest('form').submit();">
                    <i class="las la-sign-out-alt pe-2"></i>
                    تسجيل الخروج
                </a>
            </form>
        </div>
      </div>
    </div>
</nav>
<!---->
@endif
@endif
