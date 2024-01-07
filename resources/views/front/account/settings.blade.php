@extends('layouts.front-layout')

@section('content')
    <!-- Account begin ============================-->
    <section class="dashboard d-flex flex-column justify-content-between ">

        <div class="row">

            <!-- Sidebar ----  -->
            @includeIf('layouts.front.partials.sidebar')


            <!-- ------ Content  -->
            <div class="col-md-10 col-lg-10 py-6 data px-0">
                <div class="container px-3 mx-2">

                    <!-- Bloc 1 : Current User Info (Disabled) ---  -->
                    <div class="bloc mb-0">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="profile-details" role="tabpanel"
                                aria-labelledby="profile-details-tab">

                                <!-- Personal info ---  -->
                                <h4 class="fw-bold p-3 px-3 px-lg-0 px-md-0 underline" style="color:var(--dark-blue);">
                                    البيانات الشخصية</h4>
                                <div class="bloc p-4 bg-white mb-0">
                                    <div class="profile-details-textfields">
                                        <div class="area d-flex justify-content-start align-items-center flex-wrap">
                                            <div class="input-textfield d-flex flex-column">
                                                <label for="fullname">الإسم الكامل</label>
                                                <input value="{{ $user->name }}" type="text" id="fullname" disabled>
                                            </div>
                                            <div class="input-textfield d-flex flex-column">
                                                <label for="fullname"> رقم الهوية </label>
                                                <input value="{{ $user->national_id }}" type="text" id="national_id" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bank info ---  -->
                                <!-- <div class="bloc">
                                        <h3 class="mb-5 fw-bolder text-center" style="color:var(--dark-blue);">المعلومات
                                            البنكية</h3>
                                        <div class="bank-info-edit row d-flex justify-content-center align-items-center"
                                            style=" flex-direction: row; align-items: flex-start!important; ">
                                            <div class="profile-pic mb-2 w-50" style="  padding: 10px;">
                                                <img src="assets/img/illustrations/bank_card.png" alt="" style="">
                                            </div>
                                            <div class="profile-details-textfields w-50">
                                                <div
                                                    class="area d-flex justify-content-start align-items-center flex-wrap flex-column">
                                                    <div class="input-textfield d-flex flex-column w-100">
                                                        <label for="bankName">الإسم الكامل</label>
                                                        <select id="bankName" name="board_type" class="form-select">
                                                            <option selected=""> بنك الراجحي</option>
                                                            <option value="خصوصي"> بنك الراجحي </option>
                                                            <option value="نقل"> بنك الراجحي </option>
                                                        </select>


                                                    </div>
                                                    <div class="input-textfield d-flex flex-column w-100">
                                                        <label for="iban">رقم الايبان </label>
                                                        <input type="text" id="iban" placeholder="4451165651651651"
                                                            name="">


                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div> -->


                                <!-- <div class="tab-pane fade  active" id="talabat" role="tabpanel"
                                        aria-labelledby="talabat-tab">
                                        <div class="bloc">
                                            <h3>المعلومات ddالشخصية</h3>
                                        </div>
                                    </div> -->

                            </div>
                        </div>
                    </div>

                    <!-- Bloc phone ---  -->
                    <div class="bloc mb-0">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="profile-phone" role="tabpanel" aria-labelledby="profile-details-tab">
                                <h4 class="fw-bold p-3 px-3 px-lg-0 px-md-0 underline" style="color:var(--dark-blue);">رقم الهاتف</h4>
                                <div class="bloc p-4 bg-white pb-5 mb-0">
                                    <div class="profile-details-textfields">
                                        <div class="row">
                                            <div class="col-12 px-0 pe-2 msgFormRet" style="display: none">
                                                <div class="alert"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9 px-0 pe-2">
                                                <x-front.form.group class="mb-3">
                                                    <x-front.form.phone name="phone" class="ltr" placeholder="5xxxxxxxx" id="phone" :value="$user->phone" />
                                                    <x-front.form.error field="phone" />
                                                </x-front.form.group>
                                                <input type="hidden" name="profile_phone_org" id="profile_phone_org" value="{{ $user->phone }}">
                                                <input type="hidden" name="profile_user_id" id="profile_user_id" value="{{ $user->id }}">
                                                @if (is_null($user->phone_verified_at))
                                                <div class="cntVerificationCode" style="display: none">
                                                    <div class="alert alert-warning fs-14px py-2 px-0 text-center"> <i class="las la-check-circle pe-1 align-top fs-18px"></i>  أدخل رمز التحقق الذي وصلك في رقم جوالك  </div>
                                                    <input type="text" class="px-1" name="verification_code" value="" id="verification_code" placeholder=" كود التحقق xxxx "  >
                                                    <button class="btn btn-primary btn-sm px-4 rounded-0" type="button" id="checkCode">  تحقق من رقم الموبايل </button>
                                                </div>
                                                @endif
                                            </div>
                                            @if (is_null($user->phone_verified_at))
                                                <div class="col-3 px-0 pe-2"><button type="button" id="phoneValidate" class="btn btn-primary btn-sm px-4 py-2 rounded-0 mb-3 w-100"> تحقق من الهاتف </button></div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger py-2">{{ $error }}</div>
                        @endforeach
                    @endif --}}

                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}

                    <!-- Bloc 2 ---  -->
                    <div class="bloc">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="profile-details" role="tabpanel"
                                aria-labelledby="profile-details-tab">

                                <!-- Personal info ---  -->
                                <h4 class="fw-bold p-3 px-3 px-lg-0 px-md-0 underline" style="color:var(--dark-blue);">
                                    بيانات أخرى</h4>
                                <div class="bloc p-4 bg-white pb-5 mb-0">
                                    <div class="profile-details-textfields">

                                        <div class="row">

                                            {{-- Update --- --}}
                                            <div class="col-6 px-0 pe-2">
                                                <form action="{{ route('user.profile.update', $user) }}" method="post">
                                                    @csrf
                                                    @method('PUT')

                                                    <x-front.form.group class="mb-3">
                                                        <x-front.form.label for="whatsapp"> رقم الواتساب </x-front.form.label> {{-- @if (empty($user->whatsapp))  {{$user->phone}} @else {{$user->whatsapp}} @endif --}}
                                                        <x-front.form.phone name="whatsapp" class="ltr" placeholder="5xxxxxxxx" id="whatsapp" :value="empty($user->whatsapp)
                                                            ? ''
                                                            : $user->whatsapp" />

                                                        {{-- <x-front.form.input name="whatsapp" class="ltr"
                                                            placeholder="+00123456789" id="whatsapp" :value="empty($user->whatsapp)
                                                                ? $user->phone
                                                                : $user->whatsapp" /> --}}
                                                        <x-front.form.error field="whatsapp" />
                                                    </x-front.form.group>

                                                    <x-front.form.group class="mb-3">
                                                        <x-front.form.label for="email"> الإيميل </x-front.form.label>
                                                        <x-front.form.input name="email" class="ltr"
                                                            placeholder="البؤيد الإلكتروني" id="email" :value="$user->email" />
                                                        <x-front.form.error field="email" />
                                                    </x-front.form.group>

                                                    <button type="submit" class="btn btn-primary btn-sm px-4 py-2 rounded-0 mb-3"> حفظ </button>
                                                </form>
                                            </div>

                                            {{-- Update password ---  --}}
                                            <div class="col-6 px-0 pe-3">
                                                <form action="{{ route('user.password.update', $user) }}" method="post">
                                                    @csrf
                                                    @method('PUT')

                                                    <x-front.form.group class="mb-3">
                                                        <x-front.form.label for="password"> كلمة المرور
                                                        </x-front.form.label>
                                                        <x-front.form.password name="password" placeholder="*******"
                                                            id="password" value="" />
                                                        <x-front.form.error field="password" />
                                                    </x-front.form.group>

                                                    <x-front.form.group class="mb-3">
                                                        <x-front.form.label for="re_password"> إعادة كلمة المرور
                                                        </x-front.form.label>
                                                        <x-front.form.password name="re_password" placeholder="*******"
                                                            id="re_password" value="" />
                                                        {{-- <x-front.form.error field="re_password"/> --}}
                                                    </x-front.form.group>

                                                    {{-- <label for="password">كلمة المرور </label>
                                                        <input type="password" name="password" placeholder="********" id="password">
                                                         --}}
                                                    {{--
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror --}}

                                                    {{-- @error('password')
                                                            <div class="text-danger d-block mt-2 text-small">{{ $message }}</div>
                                                            <div class="alert alert-danger py-2">{{ $message }}</div>
                                                        @enderror --}}


                                                    {{--
                                                    <div class="input-textfield ">
                                                        <label for="re_password"> إعادة كلمة المرور </label>
                                                        <input type="password" name="re_password" id="re_password" placeholder="********"  >
                                                    </div> --}}



                                                    <button type="submit" class="btn btn-primary px-3 fs-14px"> حفظ كلمة المرور</button>
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <!-- Bank info ---  -->
                                <!-- <div class="bloc">
                                        <h3 class="mb-5 fw-bolder text-center" style="color:var(--dark-blue);">المعلومات
                                            البنكية</h3>
                                        <div class="bank-info-edit row d-flex justify-content-center align-items-center"
                                            style=" flex-direction: row; align-items: flex-start!important; ">
                                            <div class="profile-pic mb-2 w-50" style="  padding: 10px;">
                                                <img src="assets/img/illustrations/bank_card.png" alt="" style="">
                                            </div>
                                            <div class="profile-details-textfields w-50">
                                                <div
                                                    class="area d-flex justify-content-start align-items-center flex-wrap flex-column">
                                                    <div class="input-textfield d-flex flex-column w-100">
                                                        <label for="bankName">الإسم الكامل</label>
                                                        <select id="bankName" name="board_type" class="form-select">
                                                            <option selected=""> بنك الراجحي</option>
                                                            <option value="خصوصي"> بنك الراجحي </option>
                                                            <option value="نقل"> بنك الراجحي </option>
                                                        </select>


                                                    </div>
                                                    <div class="input-textfield d-flex flex-column w-100">
                                                        <label for="iban">رقم الايبان </label>
                                                        <input type="text" id="iban" placeholder="4451165651651651"
                                                            name="">


                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div> -->


                                <!-- <div class="tab-pane fade  active" id="talabat" role="tabpanel"
                                        aria-labelledby="talabat-tab">
                                        <div class="bloc">
                                            <h3>المعلومات ddالشخصية</h3>
                                        </div>
                                    </div> -->

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- Account Close ============================-->
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $("#phoneValidate").click(function (event) {
        event.preventDefault();
        $(".msgFormRet").hide();
        $(".cntVerificationCode").hide();
        if ($("#phone").val() == "") {
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("الرجاء إدخال رقم الهاتف الخاص بك");
            $(".msgFormRet").show();
        } else {
            $(".msgFormRet").hide();
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");
            $.ajax({
                method: "POST",
                url: "{{route('phoneverification.verification')}}",
                dataType: 'JSON',
                data: { "_token": "{{ csrf_token() }}", "phone": $("#phone").val() },
            }).done(function (ret) {
                if (ret.status && ret.status=='true'){
                    console.log('success');
                    $(".cntVerificationCode").show();
                    $("#phoneValidate").hide();
                } else {
                    if (ret.status && ret.status=='false'){
                        console.log('error');
                        Swal.fire({
                            title: ret.title,
                            text: ret.message,
                            icon: ret.class,
                            confirmButtonText: 'تمام',
                            timer: 6000,
                            timerProgressBar: true,
                        })
                    }
                    $(".cntVerificationCode").hide();
                    $("#phoneValidate").show();
                }
            }).fail(function(ret) {
                console.log('err...');
                if (ret != true) {
                    $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-danger').addClass('alert-danger').html('تعذرت عملية التحقق الرجاء المحاولة في وقت لاحق');
                    $(".msgFormRet").show();
                }
            });
        }
    });

    $("#checkCode").click(function (event) {
        event.preventDefault();
        $(".msgFormRet").hide();
        if ($("#phone").val() == "") {
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("الرجاء إدخال رقم الهاتف الخاص بك");
            $(".msgFormRet").show();
        } else if ($("#verification_code").val() == "") {
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("الرجاء إدخال كود التحقق");
            $(".msgFormRet").show();
        } else {
            $(".msgFormRet").hide();
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");
            $.ajax({
                method: "POST",
                url: "{{route('phoneverification.check')}}",
                dataType: 'JSON',
                data: { "_token": "{{ csrf_token() }}", "verification_code": $("#verification_code").val(), "phone": $("#phone").val() },
            }).done(function (ret) {
                if (ret.status){
                    Swal.fire({
                        title: ret.title,
                        text: ret.message,
                        icon: ret.class,
                        confirmButtonText: 'تمام',
                        timer: 6000,
                        timerProgressBar: true,
                    })
                }
                if (ret.status && ret.status == 'true'){
                    $(".cntVerificationCode").hide();
                    $("#phoneValidate").hide();
                }
            }).fail(function(ret) {
                console.log('err..');
                if (ret != true) {
                    $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-danger').addClass('alert-danger').html('تعذرت عملية التحقق الرجاء المحاولة في وقت لاحق');
                    $(".msgFormRet").show();
                }
            });
        }


    });

</script>
@endpush
