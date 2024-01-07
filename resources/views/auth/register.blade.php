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

                        {{-- <div class="phone-register-form">
                          <div class="register-form">
                            <form method="POST" action="{{ route('register') }}" class="d-flex flex-column flex-center w-100">
                                @csrf

                                <input id="national_id" type="text" class="w-100 @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" placeholder="أدخل رقم الهوية الخاص بك" required autocomplete="national_id" autofocus>
                                @error('national_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="name" type="text" class="w-100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="الاسم الكامل" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="البريد الإلكتروني" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                 <x-front.form.phone name="phone" class="ltr" placeholder="5xxxxxxxx" id="phone" :value="old('phone')" />
                                 @error('phone')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror

                                <input id="password" type="password" class="w-100 @error('password') is-invalid @enderror" name="password" placeholder="كلمة المرور"" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password-confirm" type="password" class="w-100" name="password_confirmation" placeholder="تأكيد كلمة المرور" required autocomplete="new-password">

                                <button class="btn w-100" type="submit"> أنشئ الحساب </button>

                            </form>
                          </div>
                        </div> --}}

                        <div class="nafath-register-form">
                          <div class="register-form">
                            <form method="POST" action="{{ route('register') }}" class="d-flex flex-column flex-center w-100">
                                @csrf

                                {{-- national_id ---  --}}
                                {{-- <x-front.form.input name="national_id" class="ltr" placeholder="أدخل رقم الهوية الخاص بك" id="national_id" :value="old('national_id')" /> --}}
                                <input id="national_id" type="text" class="w-100 @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" placeholder="أدخل رقم الهوية الخاص بك" required autocomplete="national_id" >
                                @error('national_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="name" type="text" class="w-100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="الاسم الكامل" required autocomplete="name" >
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                {{-- Password ------  --}}
                                <input id="password" type="password" class="w-100 @error('password') is-invalid @enderror" name="password" placeholder="كلمة المرور" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <button class="btn w-100" type="button" id="registerWithNafath"> أنشئ الحساب عن طريق نفاذ </button>
                                {{-- <button class="btn w-100 bg-gray text-blue" type="button" id="registerPhone"> إنشاء حساب عن طريق الهاتف </button> --}}
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
    // $("#registerNafath").click(function (event) {
    //     event.preventDefault();
    //     $(".phone-register-form ").hide();
    //     $(".nafath-register-form").show();
    //     $(".msgFormRet").hide();
    //     $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");
    // });
    // $("#registerPhone").click(function (event) {
    //     event.preventDefault();
    //     $(".phone-register-form ").show();
    //     $(".nafath-register-form").hide();
    //     $(".msgFormRet").hide();
    //     $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");
    // });
    $("#registerWithNafath").click(function (event) {
        event.preventDefault();
        $(".msgFormRet").hide();
        if ($("#national_id").val() == "") {
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("الرجاء إدخال رقم الهوية الخاص بك");
            $(".msgFormRet").show();
        } else if ($("#name").val() == "") {
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("الرجاء إدخال الاسم الكامل الخاص بك");
            $(".msgFormRet").show();
        } else if ($("#password").val() == "") {
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("الرجاء إدخال كلمة المرور الخاص بك");
            $(".msgFormRet").show();
        } else {
            $(".msgFormRet").hide();
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");

            $.ajax({
                method: "POST",
                url: "{{route('nidverification.sendregister')}}",
                dataType: 'JSON',
                data: { "_token": "{{ csrf_token() }}", "national_id": $("#national_id").val() },
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
                                            text: 'لقد اكتملت عملية إنشاء الحساب، شكراً لك.' ,
                                            icon: 'success',
                                            confirmButtonText: 'تمام',
                                            timer: 6000,
                                            timerProgressBar: true,
                                        })

                                        $.ajax({
                                            method: "POST",
                                            url: "{{route('nidverification.register')}}",
                                            dataType: 'text',
                                            data: { national_id: $("#national_id").val(), name: $("#name").val(), password: $("#password").val(), "_token": "{{ csrf_token() }}"   },
                                        }).done(function (_ret) {
                                            if (_ret=='success') {
                                                window.location = "/";
                                            }
                                        }).fail(function(_ret) {
                                            $(".msgFormRet").hide();
                                        });

                                    }
                                    if (responseData=='REJECTED'){
                                        Swal.fire({
                                            title: 'خطأ!',
                                            text: 'تعذرت عملية إنشاء الحساب، الرجاء المحاولة من جديد و إختيار الرقم الصحيح في التطبيق نفاذ' ,
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
                                        text: 'تعذرت عملية إنشاء الحساب، الرجاء المحاولة من جديد' ,
                                        icon: 'error',
                                        confirmButtonText: 'حسنا',
                                        timer: 6000,
                                        timerProgressBar: true,
                                    })
                                });

                        },
                    })

                } else {
                    var msgtext = '';
                    if (ret.status && ret.status == 'false' && ret.message && ret.message == 'existing'){
                        msgtext = 'رقم الهوية مستخدم مسبقا';
                    } else {
                        msgtext = 'تعذرت عملية إنشاء الحساب، الرجاء إدخال رقم الهوية الصحيح والمحاولة من جديد';
                    }
                    let timerInterval
                    Swal.fire({
                        title: 'خطأ!',
                        text: msgtext,
                        icon: 'error',
                        confirmButtonText: 'تمام',
                        timer: 6000,
                        timerProgressBar: true,
                    })
                }
            }).fail(function(ret) {
                if (ret != true) {
                    $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-danger').addClass('alert-danger').html('تعذرت عملية إنشاء الحساب، الرجاء المحاولة في وقت لاحق');
                    $(".msgFormRet").show();
                }
            });
        }
    });

    function retRequest(retryCount, _random='', _transId='') {

        var maxRetryCount = 40;
        return new Promise(function(resolve, reject) {
            $.ajax({
                method: "POST",
                url: "{{route('nidverification.status')}}",
                dataType: 'json',
                data: { national_id: $("#national_id").val(), random: _random, transId: _transId, "_token": "{{ csrf_token() }}"   },
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
