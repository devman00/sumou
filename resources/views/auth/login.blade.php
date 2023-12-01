@extends('layouts.front-layout')

@section('content')
    
    <section class="register-login-section bg-white ">
        <div class="container-fluid pt-5">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-lg-5 col-md-5 p-5  d-flex justify-content-center align-items-center flex-column"
                    style="">
                    <h2 class="text-black fw-bold"> مرحبا بعودتك مجددا !
                    </h2>
                    <h4> سجل دخولك .</h4>
                </div>
                <div class="col-12 col-md-7 col-lg-7 bg-white p-5 ">

                    <div class="container" style="  padding: 38px 75px;">
                        <ul class="nav nav-pills login-register-ul mb-3 nav-justified" id="pills-tab" role="tablist">

                            <li class="nav-item" role="presentation">
                                {{-- <button class="nav-link active" id="pills-login-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login"
                                    aria-selected="false">تسجيل الدخول
                                </button> --}}

                                <a href="{{route('login')}}" class="nav-link active"> تسجيل الدخول </a>

                            </li>
                            <li class="nav-item" role="presentation">
                                {{-- <button class="nav-link " id="pills-register-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-register" type="button" role="tab"
                                    aria-controls="pills-register" aria-selected="true">إنشاء حساب
                                </button> --}}
                                <a href="{{route('register')}}" class="nav-link "> إنشاء حساب </a>
                            </li>


                        </ul>

                        {{-- Login ------  --}}
                        <div class="login-form d-flex flex-column flex-center">
                                    
                            <form action="{{ route('login') }}" method="post" class=" d-flex flex-column flex-center w-100">
                                @csrf

                                {{-- Email ---  --}} 
                                {{-- <input class="w-100" id="email" type="email"  placeholder="الإيميل" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}

                                 {{-- Phone ---  --}} 
                                 {{-- <input class="w-100" id="phone" type="phone"  placeholder="رقم الجوال" @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus > --}}
                                 <x-front.form.phone name="phone" class="ltr" placeholder="5xxxxxxxx" id="phone" :value="old('phone')" />
                                 @error('phone')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                                
                                {{-- Password ---  --}} 
                                <input class="w-100" id="password" type="password"  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="كلمة المرور" >
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <button class="btn" type="submit"> دخول </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        هل نسيت كلمة المرور؟
                                    </a>
                                @endif
                                {{-- Remember  --}}
                                {{-- <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}

                            </form>
                        </div>

                            {{-- Register ---  --}}
                            {{-- <div class="register-form">
                                <form action="" class="d-flex flex-column flex-center w-100">
                                    <input type="text" placeholder="الاسم الكامل" name="register-fullname"
                                        id="" class="w-100">
                                    <input type="text" placeholder="رقم الهاتف" name="register-phone" id=""
                                        class="w-100">
                                    <input type="tel" placeholder="كلمة المرور" name="register-password"
                                        id="" class="">
                                    <input type="password" placeholder="تأكيد كلمة المرور"
                                        name="register-password-confirm" id="" class="">
                                    <button class="btn" type="submit">متابعة</button>

                                </form>
                            </div> --}}

                           
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection
