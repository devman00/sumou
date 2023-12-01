@extends('layouts.front-layout')

@section('content')
    
    <section class="register-login-section bg-white ">
        <div class="container-fluid pt-5">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-lg-5 col-md-5 p-5  d-flex justify-content-center align-items-center flex-column"
                    style="">
                    <h2 class="text-black fw-bold">  تعيين كلمة المرور</h2>
                    <h4></h4>
                </div>
                <div class="col-12 col-md-7 col-lg-7 bg-white p-5 ">

                    <div class="container" style="  padding: 38px 75px;">
                       
                        {{-- Login ------  --}}
                        <div class="login-form d-flex flex-column flex-center">
                                    
                            <form action="{{ route('password.email') }}" method="post" class=" d-flex flex-column w-100">
                                @csrf

                                <label for="email" class="text-md-start">البريد الإلكتروني</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <button class="btn" type="submit"> إرسال رابط إعادة تعيين كلمة المرور </button>

                            </form>
                        </div>
                           
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
