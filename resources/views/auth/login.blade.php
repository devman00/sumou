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
                        <div class="phone-login-form">
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

                                <button class="btn w-100" type="submit"> دخول </button>
                                <button class="btn w-100 bg-gray text-blue" type="button" id="loginNafath"> الدخول عن طريق نفاذ </button>
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
                        </div>

                        <div class="nafath-login-form" style="display: none">
                          {{-- Alert Message  --}}
                          <div class="msgFormRet" style="display: none">
                            <div class="alert"></div>
                          </div>

                          <div class="login-form d-flex flex-column flex-center">

                            <form action="{{ route('login') }}" method="post" class=" d-flex flex-column flex-center w-100">
                                @csrf

                                {{-- nationalId ---  --}}
                                <x-front.form.input name="n_id" class="ltr" placeholder="أدخل رقم الهوية الخاص بك" id="n_id" :value="old('n_id')" />
                                @error('n_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <button class="btn w-100" type="button" id="loginWithNafath"> دخول </button>
                                <button class="btn w-100 bg-gray text-blue" type="button" id="loginPhone"> الدخول عن طريق الهاتف </button>
                            </form>
                          </div>
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

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $("#loginNafath").click(function (event) {
        event.preventDefault();
        $(".phone-login-form ").hide();
        $(".nafath-login-form").show();
        $(".msgFormRet").hide();
        $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");

    });
    $("#loginPhone").click(function (event) {
        event.preventDefault();
        $(".phone-login-form ").show();
        $(".nafath-login-form").hide();
        $(".msgFormRet").hide();
        $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");

    });


    $("#loginWithNafath").click(function (event) {
        event.preventDefault();

        $(".msgFormRet").hide();
        if ($("#n_id").val() == "") {
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("الرجاء إدخال رقم الهوية الخاص بك");
            $(".msgFormRet").show();
        } else {
            $(".msgFormRet").hide();
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");

            $.ajax({
                method: "POST",
                url: "{{route('nidverification.send')}}",
                dataType: 'JSON',
                data: { "_token": "{{ csrf_token() }}", "n_id": $("#n_id").val() },
                beforeSend: function() { }
            }).done(function (ret) {

                if (ret.transId && ret.transId != '' && ret.random && ret.random != '') {
                    var _random = ret.random;
                    var _transId = ret.transId;
                    Swal.fire({
                        title: ret.random,
                        text: 'رجاءا إختيار الرقم '+ret.random+' في التطبيق نفاذ' ,
                        icon: 'info',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()

                            retRequest(0, _random, _transId)
                                .then(function(responseData) {

                                    if (responseData=='COMPLETED'){
                                        Swal.fire({
                                            title: 'شكرًا!',
                                            text: 'لقد اكتملت عملية التوثيق، شكراً لك.' ,
                                            icon: 'success',
                                            confirmButtonText: 'تمام',
                                            timer: 6000,
                                            timerProgressBar: true,
                                        })

                                        $.ajax({
                                            method: "POST",
                                            url: "{{route('nidverification.confirm')}}",
                                            dataType: 'text',
                                            data: { nationalId: $("#n_id").val(), random: _random, transId: _transId, "_token": "{{ csrf_token() }}"   },
                                        }).done(function (_ret) {
                                            if (_ret=='success') {
                                                $(".sectionAuthVerification").hide();
                                                $(".msgFormRet .alert").removeClass('alert-danger').removeClass('alert-success').removeClass('alert-info').addClass('alert-info').html('حسابك موثق، شكراً لك!');
                                                $(".msgFormRet").show();
                                            }
                                        }).fail(function(_ret) {
                                            $(".msgFormRet").hide();
                                        });

                                    }
                                    if (responseData=='REJECTED'){
                                        Swal.fire({
                                            title: 'خطأ!',
                                            text: 'تعذرت عملية التوثيق، الرجاء المحاولة من جديد و إختيار الرقم الصحيح في التطبيق نفاذ' ,
                                            icon: 'warning',
                                            confirmButtonText: 'تمام',
                                            timer: 6000,
                                            timerProgressBar: true,
                                        })
                                    }

                                })
                                .catch(function(error) {
                                    console.error('Error:', error);
                                    Swal.fire({
                                        title: 'خطأ!',
                                        text: 'تعذرت عملية تسجيل الدخول الرجاء المحاولة من جديد' ,
                                        icon: 'error',
                                        confirmButtonText: 'حسنا',
                                        timer: 6000,
                                        timerProgressBar: true,
                                    })
                                });

                        },
                    })

                } else {
                    let timerInterval
                    Swal.fire({
                        title: 'خطأ!',
                        text: 'تعذرت عملية التوثيق الرجاء إدخال رقم الهوية الصحيح والمحاولة من جديد' ,
                        icon: 'error',
                        confirmButtonText: 'تمام',
                        timer: 6000,
                        timerProgressBar: true,
                    })
                }
            }).fail(function(ret) {
                if (ret != true) {
                    $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-danger').addClass('alert-danger').html('تعذرت عملية التوثيق الرجاء المحاولة في وقت لاحق');
                    $(".msgFormRet").show();
                }
            });

        }
    });

    function retRequest(retryCount, _random='', _transId='') {

        var maxRetryCount = 30;
        return new Promise(function(resolve, reject) {
            $.ajax({
                method: "POST",
                url: "{{route('nidverification.status')}}",
                dataType: 'json',
                data: { nationalId: $("#n_id").val(), random: _random, transId: _transId, "_token": "{{ csrf_token() }}"   },
                beforeSend: function() { }
            }).done(function (ret2) {
                if (ret2.status && ret2.status == 'COMPLETED'){
                    resolve('COMPLETED');
                } else if (ret2.status && ret2.status =='REJECTED') {
                    resolve('REJECTED');
                } else {
                    if (retryCount < maxRetryCount) {
                        setTimeout(function() {
                            retRequest(retryCount + 1, _random, _transId)
                                .then(resolve)
                                .catch(reject);
                        }, 1000);
                    } else {
                        reject('error');
                    }
                }
            }).fail(function(ret2) {
                reject('err2');
            });
        });
    }

</script>
@endpush
