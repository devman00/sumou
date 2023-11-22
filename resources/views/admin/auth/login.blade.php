<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> تسجيل الدخول - {{ config('app.name', 'WMW') }}</title>
    {{-- <link rel="stylesheet" href="assets/css/main/app.css"> --}}
    {{-- <link rel="stylesheet" href="assets/css/pages/auth.css"> --}}
    <link rel="stylesheet" href="assets/css/style.css">

    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('admin/assets/css/rtl.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app-rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/pages/rtl/auth.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/pages/auth.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app-dark.css')}}">
    @endif
    
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">

    {{-- RTL / LTR style  --}}
   

</head>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                {{-- <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo"></a> --}}
                <a href="index.html"><img src="{{asset('admin/assets/images/logo/logo.png')}}" alt="Logo"></a>
            </div>
            <h1 class="auth-title pb-3 fs2_8 text-center"> الإدارة | <span> تسجيل الدخول </span> </h1>
            {{-- <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p> --}}

            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                
                @error('phone|password')
                   البيانات المدخلة غير صحيحة
                @enderror
                <div class="form-group position-relative has-icon-left mb-4">
                    <input name="phone" type="text" class="form-control form-control-xl" placeholder="إسم المستخدم">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input name="password" type="password" class="form-control form-control-xl" placeholder="كلمة المرور">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        تذكرني
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5"> دخول </button>
            </form>
            
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
</body>

</html>
