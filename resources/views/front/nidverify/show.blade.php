@extends('layouts.front-layout')

@section('content')

    <section class="register-login-section bg-white ">
        <div class="container-fluid pt-5">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-lg-12 col-md-12 p-5 pb-2  d-flex justify-content-center align-items-center flex-column"
                    style="">
                    <h2 class="text-black fw-bold"> التحقق من هوية المستخدم </h2>
                    <h4> تأكيد رقم الهوية .</h4>
                    {{-- <p> أدخل رمز التحقق الذي وصلك في رقم جوالك </p> --}}
                </div>
                <div class="col-12 col-md-7 col-lg-7 bg-white p-5">

                    {{-- <div class="alert alert-warning fs-14px py-2 px-lg-5  mx-lg-6 px-0 ps-2"> <i class="las la-check-circle pe-1 align-top fs-18px"></i>  أدخل رمز التحقق الذي وصلك في رقم جوالك  </div> --}}

                    <div class="container" style="  padding: 38px 75px;">
                        {{-- <ul class="nav nav-pills login-register-ul mb-3 nav-justified" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="{{route('login')}}" class="nav-link active"> تسجيل الدخول </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="{{route('register')}}" class="nav-link "> إنشاء حساب </a>
                            </li>
                        </ul> --}}


                        {{-- Alert Message  --}}
                        <div class="msgFormRet" style="display: none">
                            <div class="alert">

                            </div>
                        </div>

                        {{-- Form ------  --}}
                        <div class="login-form d-flex flex-column flex-center sectionAuthVerification">

                            <form action="{{ route('nidverification.send') }}" method="post" class=" d-flex flex-column flex-center w-100">
                                @csrf

                                 {{-- Phone ---  --}}
                                 <input type="text" class="w-100" name="n_id" value="{{ old('n_id') }}" id="n_id" placeholder="أدخل رقم الهوية الخاص بك" @error('n_id') is-invalid @enderror" required autocomplete="n_id" autofocus id="n_id" >
                                 @error('phone')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror

                                <button id="settingsAccountVerification" class="btn" type="button">  تحقق </button>
                            </form>
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
    var error = "";

    $("#settingsAccountVerification").click(function (event) {
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
                beforeSend: function() {
                }
            }).done(function (ret) {

                if (ret.transId && ret.transId != '' && ret.random && ret.random != '') {
                    var _random = ret.random;
                    var _transId = ret.transId;
                    Swal.fire({
                        title: ret.random,
                        text: 'المرجو إختيار الرقم '+ret.random+' في التطبيق نفاذ' ,
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
                                        text: 'تعذرت عملية التوثيق الرجاء المحاولة من جديد' ,
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
                url: "{{route('nidverification.callback1')}}",
                dataType: 'text',
                data: { nationalId: $("#n_id").val(), random: _random, transId: _transId, "_token": "{{ csrf_token() }}"   },
                beforeSend: function() {
                }
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
                console.log("fail ret : " + ret2);
                reject('err2');
            });

        });
    }

    </script>

@endpush
