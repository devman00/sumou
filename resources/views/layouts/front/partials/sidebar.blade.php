<div class="col-md-2 col-lg-2 deskSidebar sidebar bg-white px-0">
    <div class="position-lg-fixed bg-white col-md-2 py-5 min-vh-lg-100 sidebar_icns">
        <div class="py-3 mb-5 dashboard-sidebare-title text-center">
            <h3>لوحة التحكم</h3>
        </div>
        <ul class=" nav nav-tabs d-flex flex-column justify-content-start align-items-start w-100" id="myTab"
            role="tablist">

            <li class="nav-item" role="presentation">
                <a href="{{route('user.profile')}}">

                    <button class="nav-link @if(Route::currentRouteName() == 'user.profile') active @endif" id="profile-details-tab">
                        <i class="las la-cog pe-2"></i>
                        إعدادات الحساب
                    </button>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('ads.create')}}">
                    <button class="nav-link @if(Route::currentRouteName() == 'ads.create') active @endif"" type="button">
                        <i class="las la-plus pe-2"></i>
                        إضافة لوحة
                    </button>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('ads.index')}}">
                    <button class="nav-link @if(Route::currentRouteName() == 'ads.index') active @endif"" type="button">
                        <i class="las la-copy pe-2"></i>
                        لوحاتي
                    </button>
                </a>
            </li>

            <li class="nav-item" role="presentation">
                <a href="{{route('requests.index')}}">
                    <button class="nav-link" id="talabat-tab">
                        <i class="las la-exchange-alt pe-2"></i>
                        طلبات المبايعة
                    </button>
                </a>
            </li>

            {{-- <li class="nav-item" role="presentation">
                <a href="{{route('user.permit')}}">
                    <button class="nav-link @if(Route::currentRouteName() == 'user.permit') active @endif" >
                        <i class="las la-check-circle pe-2"></i>
                        توثيق الحساب
                    </button>
                </a>
            </li> --}}

        </ul>

        {{-- Logout ---- --}}
        <div class="logout__ position-relative ps-5">
            {{-- <button href="#" class="btn position-relative top-0">تسجيل الخروج</button> --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" class="btn position-relative text-black p-0"
                    onclick="event.preventDefault();this.closest('form').submit();">
                    <i class="las la-sign-out-alt pe-2"></i>
                    تسجيل الخروج
                </a>
            </form>
        </div>
    </div>

</div>
