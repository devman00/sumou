<!-- NAV -------  -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white py-2" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3" href="{{ route('home') }}">
            <img class="me-3 logo" src="{{ asset('assets/') }}/img/logo_blue.png" alt="" />
        </a>

        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menue  -->
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0 px-3 px-md-0 px-lg-0"
            id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
                <li class="nav-item "> <a class="nav-link fw-medium active" aria-current="page" href="{{ route('home') }}">الرئيسية</a> </li>

                <li class="nav-item px-3 confirm-btn">
                    <a class="nav-link px-3 text-white" href="confirm.html"> <i class="las la-check-circle"></i>
                        اتمام المبايعة عن طريق سمو
                    </a>
                </li>

                <li class="nav-item "><a class="nav-link" href="about.html">من نحن</a></li>
                <li class="nav-item "><a class="nav-link" href="contact.html"> إتصل بنا </a></li>

            </ul>
            <div class="ps-lg-5">
                <ul class="navbar-nav me-3 mb-2 mb-lg-0">

                    @if (auth()->check())
                        
                        <div class="dropdown">
                            <a class="btn btn-secondary__ text-black dropdown-toggle btn btn-outline-primary-dashed order-0" href="#" role="button"
                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name}}
                                <i class="bx bxs-user bx-tada fs-20px"></i>
                            </a>


                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                
                                <li>
                                  {{-- <a class="dropdown-item" href="#">حسابي</a> --}}
                                  <x-front.link :href="route('user.profile')" class="border border-white rounded">
                                    <i style="font-size: 20px;" class="bx bx-user px-1"></i>
                                    حسابي
                                  </x-front.link>
                                </li>
                                
                                {{-- Logout ---- --}}
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
                        {{-- <x-front.link :href="route('register')" class="border border-white">
                    <i style="font-size: 20px;" class="bx bx-user-plus px-1"></i> حساب جديد
                </x-front.link>

                <x-front.link :href="route('login')">
                  <i style="font-size: 20px;" class="bx bx-door-open px-1"> تسجيل الدخول  </i> 
                </x-front.link> --}}

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
