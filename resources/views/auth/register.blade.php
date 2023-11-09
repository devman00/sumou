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

            
                        {{-- Register ---  --}}
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
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="البريد الإلكتروني" required autocomplete="email">
                                @error('email')
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

                                <button class="btn" type="submit"> أنشئ الحساب </button>

                            </form>
                        </div>

                           
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection
