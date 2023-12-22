@extends('layouts.front-layout')

@section('content')

    <section class="register-login-section bg-white ">
        <div class="container-fluid pt-5">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-lg-5 col-md-5 p-5  d-flex justify-content-center align-items-center flex-column"
                    style="">
                    <h2 class="text-black fw-bold">مرحبا بك في منصة سمو!
                    </h2>
                    <h3> انشئ حسابك الآن.</h3>
                </div>
                <div class="col-12 col-md-7 col-lg-7 bg-white p-5 ">

                    <div class="container" style="  padding: 38px 75px;">
                        <ul class="nav nav-pills login-register-ul mb-3 nav-justified" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="{{route('login')}}" class="nav-link "> تسجيل الدخول </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="{{route('register')}}" class="nav-link active"> إنشاء حساب </a>
                            </li>
                        </ul>

                        {{-- Alert Message  --}}
                        <div class="msgFormRet" style="display: none">
                            <div class="alert"></div>
                        </div>

                        {{-- Register ---  --}}

                        <div class="phone-register-form">
                          <div class="register-form">
                            <form method="POST" action="{{ route('register') }}" class="d-flex flex-column flex-center w-100">
                                @csrf

                                {{-- Full Name ------  --}}
                                <input id="name" type="text" class="w-100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="الاسم الكامل" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                {{-- Email ------  --}}
                                {{-- <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="البريد الإلكتروني" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}

                                 {{-- Phone ------  --}}
                                 {{-- <input id="phone" type="phone" class=" @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder=" رقم الجوال" required autocomplete="phone"> --}}
                                 <x-front.form.phone name="phone" class="ltr" placeholder="5xxxxxxxx" id="phone" :value="old('phone')" />
                                 @error('phone')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror


                                {{-- Password ------  --}}
                                <input id="password" type="password" class="w-100 @error('password') is-invalid @enderror" name="password" placeholder="كلمة المرور"" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                {{-- Confirm Password ------  --}}
                                <input id="password-confirm" type="password" class="w-100" name="password_confirmation" placeholder="تأكيد كلمة المرور" required autocomplete="new-password">

                                <button class="btn w-100" type="submit"> أنشئ الحساب </button>
                                <button class="btn w-100 bg-gray text-blue" type="button" id="registerNafath"> إنشاء حساب عن طريق نفاذ </button>

                            </form>
                          </div>
                        </div>

                        <div class="nafath-register-form" style="display: none">
                          <div class="register-form">
                            <form method="POST" action="{{ route('register') }}" class="d-flex flex-column flex-center w-100">
                                @csrf

                                {{-- nationalId ---  --}}
                                <x-front.form.input name="n_id" class="ltr" placeholder="أدخل رقم الهوية الخاص بك" id="n_id" :value="old('n_id')" />
                                @error('n_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <button class="btn w-100" type="button" id="registerWithNafath"> أنشئ الحساب </button>
                                <button class="btn w-100 bg-gray text-blue" type="button" id="registerPhone"> إنشاء حساب عن طريق الهاتف </button>

                            </form>
                          </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $("#registerNafath").click(function (event) {
        event.preventDefault();
        $(".phone-register-form ").hide();
        $(".nafath-register-form").show();
        $(".msgFormRet").hide();
        $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");

    });
    $("#registerPhone").click(function (event) {
        event.preventDefault();
        $(".phone-register-form ").show();
        $(".nafath-register-form").hide();
        $(".msgFormRet").hide();
        $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");

    });

    $("#registerWithNafath").click(function (event) {
        event.preventDefault();

        $(".msgFormRet").hide();
        if ($("#n_id").val() == "") {
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("الرجاء إدخال رقم الهوية الخاص بك");
            $(".msgFormRet").show();
        } else {
            $(".msgFormRet").hide();
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");

        }

    });

</script>
@endpush
