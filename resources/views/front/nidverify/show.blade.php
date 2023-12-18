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
                               
                                <button class="btn" type="submit">  تحقق </button>
                            </form>
                        </div>
                           
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    

<script>
    var error = "";



    $("#settingsAccountVerification").click(function () {	
        $(".msgFormRet").hide();
        if ($("#n_id").val() == "") {
            $(".msgFormRet").show();
        } else {
            $(".msgFormRet").hide();
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");

            $.ajax({
                method: "POST",
                url: {{route('nidverification.send')}}",
                dataType: 'json',
                data: { n_id: $("#n_id").val() },
                beforeSend: function() {
                }
            }).done(function (ret) {

                if (ret.status && ret.status != null) {
                    //console.log(ret.message);
                    if (ret.status == '400-N100') {
                        Swal.fire({
                            title: language == 'en' ? 'Error!' : 'خطأ!',
                            text: language == 'en' ? 'There is an active request, please complete the request in Nafath app' : 'هناك طلب نشط، المرجو إكمال الطلب في تطبيق نفاذ' ,
                            icon: 'error', 
                            confirmButtonText: language == 'en' ? 'OK' : 'تمام',
                            timer: 6000,
                            timerProgressBar: true,
                        })
                    } else {
                        let timerInterval
                        Swal.fire({
                            title: language == 'en' ? 'Error!' : 'خطأ!',
                            text: language == 'en' ? 'Authentication failed. Please enter the correct ID number and try again' : 'تعذرت عملية التوثيق الرجاء إدخال رقم الهوية الصحيح والمحاولة من جديد' ,
                            icon: 'error', 
                            confirmButtonText: language == 'en' ? 'OK' : 'تمام',
                            timer: 6000,
                            timerProgressBar: true,
                        })
                    }  
                } else {
                    if (ret.transId && ret.transId != '' && ret.random && ret.random != '') {
                        Swal.fire({
                            title: ret.random,
                            text: language == 'en' ? 'Please choose number '+ret.random+' in the Nafath app' : 'المرجو إختيار الرقم '+ret.random+' في التطبيق نفاذ' ,
                            icon: 'info', 
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            didOpen: () => {
                                Swal.showLoading()

                                retRequest(0)
                                    .then(function(responseData) {

                                        if (responseData=='COMPLETED'){
                                            Swal.fire({
                                                title: language == 'en' ? 'Thanks!' : 'شكرًا!',
                                                text: language == 'en' ? 'The verification process is complete, thank you.' : 'لقد اكتملت عملية التوثيق، شكراً لك.' ,
                                                icon: 'success', 
                                                confirmButtonText: language == 'en' ? 'OK' : 'حسنا',
                                                timer: 6000,
                                                timerProgressBar: true,
                                            })

                                            $.ajax({
                                                method: "POST",
                                                url: ajaxurl + "users/", // تأكيد
                                                dataType: 'text',
                                                data: { userid: $("#current_user_id").val(), identity: $("#identity").val()   },
                                            }).done(function (_ret) {
                                                if (_ret=='success') {
                                                    $(".sectionAuthVerification").hide();
                                                    $(".msgFormRet .alert").removeClass('alert-danger').removeClass('alert-success').removeClass('alert-info').addClass('alert-info').html(language == 'en' ? 'Your account is verified, thank you!' : 'حسابك موثق، شكراً لك!');
                                                    $(".msgFormRet").show();
                                                }
                                            }).fail(function(_ret) {
                                                $(".msgFormRet").hide();
                                            });
                                            
                                        }
                                        if (responseData=='REJECTED'){
                                            Swal.fire({
                                                title: language == 'en' ? 'Error!' : 'خطأ!',
                                                text: language == 'en' ? 'Authentication failed, Please try again and choose the correct number in the Nafath app' : 'تعذرت عملية التوثيق، الرجاء المحاولة من جديد و إختيار الرقم الصحيح في التطبيق نفاذ' ,
                                                icon: 'warning', 
                                                confirmButtonText: language == 'en' ? 'OK' : 'حسنا',
                                                timer: 6000,
                                                timerProgressBar: true,
                                            })
                                        }
                                        
                                    })
                                    .catch(function(error) {
                                        console.error('Error:', error);
                                        console.log("103");
                                        Swal.fire({
                                            title: language == 'en' ? 'Error!' : 'خطأ!',
                                            text: language == 'en' ? 'Authentication failed. Please try again' : 'تعذرت عملية التوثيق الرجاء المحاولة من جديد' ,
                                            icon: 'error', 
                                            confirmButtonText: language == 'en' ? 'OK' : 'حسنا',
                                            timer: 6000,
                                            timerProgressBar: true,
                                        })
                                    });

                            },
                        })

                    }
                }
            }).fail(function(ret) {
                if (ret != true) {
                    $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-danger').addClass('alert-danger').html(language == 'en' ? 'Authentication failed. Please try again later' : 'تعذرت عملية التوثيق الرجاء المحاولة في وقت لاحق');
                    $(".msgFormRet").show();
                }
            });
        }

    });

    function retRequest(retryCount) {

        var maxRetryCount = 30;
        return new Promise(function(resolve, reject) {
            $.ajax({
                method: "GET",
                url: ajaxurl + "users/check/",
                dataType: 'text',
                beforeSend: function() {
                }
            }).done(function (ret2) {
                if (ret2=='COMPLETED'){
                    resolve('COMPLETED');
                } else if (ret2=='REJECTED') {    
                    resolve('REJECTED');
                } else {
                    if (retryCount < maxRetryCount) {
                        setTimeout(function() {
                            retRequest(retryCount + 1)
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