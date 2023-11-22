@extends('layouts.front-layout')

@section('content')
    
    <section class="register-login-section bg-white ">
        <div class="container-fluid pt-5">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-lg-12 col-md-12 p-5 pb-2  d-flex justify-content-center align-items-center flex-column"
                    style="">
                    <h2 class="text-black fw-bold"> التحقق من رقم الجوال </h2>
                    <h4> تأكيد الحساب .</h4>
                    {{-- <p> أدخل رمز التحقق الذي وصلك في رقم جوالك </p> --}}
                </div>
                <div class="col-12 col-md-7 col-lg-7 bg-white p-5">
                    
                    <div class="alert alert-warning fs-14px py-2 px-lg-5  mx-lg-6 px-0 ps-2"> <i class="las la-check-circle pe-1 align-top fs-18px"></i>  أدخل رمز التحقق الذي وصلك في رقم جوالك  </div>

                    <div class="container" style="  padding: 38px 75px;">
                        {{-- <ul class="nav nav-pills login-register-ul mb-3 nav-justified" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="{{route('login')}}" class="nav-link active"> تسجيل الدخول </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="{{route('register')}}" class="nav-link "> إنشاء حساب </a>
                            </li>
                        </ul> --}}

                        {{-- Form ------  --}}
                        <div class="login-form d-flex flex-column flex-center">
                                    
                            <form action="{{ route('phoneverification.verify') }}" method="post" class=" d-flex flex-column flex-center w-100">
                                @csrf

                                 {{-- Phone ---  --}} 
                                 <input type="text" class="w-100" name="verification_code" value="{{ old('verification_code') }}" id="verification_code" placeholder=" كود التحقق xxxx " @error('verification_code') is-invalid @enderror" required autocomplete="verification_code" autofocus >
                                 @error('phone')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                               
                                <button class="btn" type="submit">  تحقق من رقم الموبايل </button>
                            </form>
                        </div>
                           
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection
