@extends('layouts.front-layout')

@section('content')
    <!-- Welcome boxes -------  -->
    <section class="affair mt-9 p-0 mt-7">
        <div class="affair-step">
            <div class="container d-flex   justify-content-center  align-items-center">
                <div class=" d-flex align-items-center gap-4 py-3 px-4 bg-white position-relative ">
                    <h4 class=" affair-step-title d-inline-block text-center fw-bold m-0 p-0">مبايعة اللوحات </h4>
                    <p class="m-0"> / </p>
                    <p class="  d-inline-block text-center affair-step-stage m-0"> مرحلة
                        <b class="fw-bolder ms-1 curStep" style="color: var(--dark-blue);"> 1 </b> <span class=""> /
                        </span> 4
                    </p>
                    <i width="36" height="36"></i>
                </div>
            </div>
        </div>

        <div class="affair-process">
            <div class="container d-flex justify-content-center  align-items-center bg-white">
                <div class="w-100 gap-3 py-5 px-3 bg-white flex-direction-column d-flex flex-column">
                    <!-- <hr> -->
                    <p class="text-right p-3 instruction-txt text-justify">اهلا بك في خدمة مبايعات اللوحات عبر منصة سمو
                        للوحات المميزه
                        هذه الخدمة تتيح للأفراد إمكانية إتمام مبايعة اللوحات عبر منصة سمو وذلك بعد اتفاق
                        المشتري
                        للوحة وحصول التراضي
                        بين البائع والمشتري على إتمام المبايعة بثمن محدد
                    </p>
                    <!-- <hr> -->
                    <p class="text-right mb-3 text-black fs-20px text-center py-5 border-top-gray"> مراحل الخدمة : </p>
                    <div class="affair-process-steps py-1 d-flex gap-4 flex-wrap mb-3">
                        <div class="affair-process-steps-step-blk">
                            
                            <div class="affair-process-steps-step d-inline border border-bg-gray p-4 py-5 mb-2 rounded position-relative w-100 w-lg-auto w-md-auto">
                                <p class="h5 fw-bold text-center pt-2">خطوة 1</p>
                                <p class="affair-process-steps-step-title m-0">التحقق من جميع المستندات للمركبات</p>
                                <span
                                    class="affair-process-steps-step-icon d-flex justify-content-center position-absolute rounded-circle  p-3">
                                    <img src="{{ asset('assets/') }}/img/services/1.png" width="80">
                                </span>
                            </div>
                            
                            <div class="affair-process-steps-step d-inline border border-bg-gray p-4 py-5 mb-2 rounded position-relative w-100 w-lg-auto w-md-auto">
                                <p class="h5 fw-bold text-center pt-2">خطوة 2</p>
                                <p class="affair-process-steps-step-title m-0">توثيق عقد مبايعة موثق بين الطرفين</p>
                                <span
                                    class=" affair-process-steps-step-icon d-flex justify-content-center position-absolute rounded-circle  p-3">
                                    <img src="{{ asset('assets/') }}/img/services/2.png" width="80">
                                    <!-- <i class="h1  p-3 m-0 text-center text-light-blue  las la-file-alt "></i> -->
                                </span>
                            </div>

                            <div class="affair-process-steps-step d-inline border border-bg-gray p-4 py-5 mb-2 rounded position-relative w-100 w-lg-auto w-md-auto">
                                <p class="h5 fw-bold text-center pt-2">خطوة 3</p>
                                <p class="affair-process-steps-step-title m-0">التأكد مين إيداع ثمن اللوحة لحساب المنصة</p>
                                <span
                                    class=" affair-process-steps-step-icon d-flex justify-content-center position-absolute rounded-circle  p-3">
                                    <img src="{{ asset('assets/') }}/img/services/3.png" width="80">
                                </span>
                            </div>

                            <div class="affair-process-steps-step d-inline border border-bg-gray p-4 py-5 mb-2 rounded position-relative w-100 w-lg-auto w-md-auto">
                                <p class="h5 fw-bold text-center pt-2">خطوة 4</p>
                                <p class="affair-process-steps-step-title m-0 px-5">نقل اللوحات </p>
                                <span
                                    class=" affair-process-steps-step-icon d-flex justify-content-center position-absolute rounded-circle  p-3">
                                    <!-- <i class="h1  p-3 m-0 text-center text-light-blue  las la-file-alt "></i> -->
                                    <img src="{{ asset('assets/') }}/img/services/4.png" width="80">
                                </span>
                            </div>

                            <div class="affair-process-steps-step d-inline border border-bg-gray p-4 py-5 mb-2 rounded position-relative w-100 w-lg-auto w-md-auto">
                                <p class="h5 fw-bold text-center pt-2">خطوة 5</p>
                                <p class="affair-process-steps-step-title m-0">إيداع ثمن المبايعة إلى حساب البائع</p>
                                <span
                                    class=" affair-process-steps-step-icon d-flex justify-content-center position-absolute rounded-circle  p-3">
                                    <img src="{{ asset('assets/') }}/img/services/5.png" width="80">
                                </span>
                            </div>
                        </div>
                    </div>
                    <p>
                        للمزيد من المعلومات عن
                        <a href="#" class=".text-primary">الشروط والأحكام</a>
                        .
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- <section> close ============================-->


    <!-- Vendor/Seller TABs start ============================-->
    <section class="frmStep01 affair-role m-0 p-6 bg-white mt-md-8__ mt-lg-8__ px-0 pt-0 mt-5">

        <!-- Tabs NAV -------  -->
        <nav class="d-flex bg-gray align-items-center justify-content-center bg-gray pb-3_ pt-5">
            <div class="nav nav-tabs mb-5 align-items-center justify-content-center" id="nav-tab" role="tablist">

                <button class="nav-link active p-2 px-4 p-lg-4 px-lg-8 p-md-4 px-md-8 mx-3" id="nav-seller-tab"
                    data-bs-toggle="tab" data-bs-target="#nav-vendor" type="button" role="tab"
                    aria-controls="nav-seller" aria-selected="false">
                    <span class="div-1">
                        <img width="70" class="d-block icn1 mb-1"
                            src="data:image/png;base64,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">
                        <span class="fs-16px fw-bold text-dark-blue"> بائع </span>
                    </span>
                    <img class="icn3" width="25"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABDklEQVR4nO2ZSwrCMBiE/2NoPZIex8cB9EZKRgr1LD6ShUsfC11V2lRFa0VQ6B87H2T1ZzGTSQudihBCCCHkBXPbE7hEjD0KXKpqGXvItWHTlbfATWoXi09NufG7JLJNJzG2L1i2RRtYtgV2kGvMtb5KxrhFEV9ftAM3LA49KQ/9/Utltm2Jdmbbljdi9+Xh9e6FAqr0/p0RBLZK1C2IRp6p+2SZyN+/tUIBjTaCXz+QNHKn2VdLI6ARZYCJKANMRBlgIsEkYvd+qLCYe2a67nitdlea+U41Hw5EO8aNqgu6rH70w6yOHEq8ikQb8SoqTJy91qoyOyuG6/4Gx7cl9mMyya1CDfK3AiGEENJQLmEleRN4Oi/hAAAAAElFTkSuQmCC">
                </button>

                <button class="nav-link  p-2 px-4 p-lg-4 px-lg-8 p-md-4 px-md-8 mx-3" id="nav-vendor-tab"
                    data-bs-toggle="tab" data-bs-target="#nav-seller" type="button" role="tab"
                    aria-controls="nav-vendor" aria-selected="true">
                    <span class="div-1">
                        <img width="70" class="d-block icn1 mb-1"
                            src="data:image/png;base64,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">
                        <span class="fs-16px fw-bold text-dark-blue"> مشتري </span>
                    </span>
                    <img class="icn2" width="25"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD40lEQVR4nO2ZX4hUdRTHr6uZ65wzt517zp3+bETlPxBBCl/CqIcogsj+DeY9564k4j9QkhCklw3EXoIwhAShl3ySxSKyooL+aEVhID70B7QIoofA/2aCRivn3jvj7OydcWfc5e6V+4XzMnPnt+dzz5/f73fWcQoVKlQolwKSb5F1NFdGcngcSOZO9WhOO5C0aHX6biqFvfhUgNzcEVl3C7BsAtYfgOQikPwDJN+DH25wnEdm5QKkXK5VgOS7dsVp3dF1g4FpDjLch6xfJs//An6wwvPWoBn4+gyw/pq0zc8dx5kxbUGA5YU6hOuuvq31e/usDgO+PDttQZD0vdjJYEW7Z4DD55KoHJhWIP0VGUTSEWA5X3/OUqmdc5WKlBv1Yr8hOYC0an6mIP0VGQTWUy0FfagdRGM9ksNjGgDrqf7K0F2ZgVgkEkc+THPkerLfAOvBZP39mYHU06kXiLrmDKy8O3kZZzME0XMxiAzmGgStUGMnDvYCE9eYfBR3MR3JECRcACQnO94PJlDwVuxl1nmZgZisPqxQkzQ71A1I9BvSkTSIjI8okyssQLiIyJQIi9Timyi1MGfmtApIP83aKezeJrxv5U212Y0rKOkFYD1txwYg/c0MWX4G1h/NkPULYP0YSN4FljeB5FUgWRvfycPl4K1ahHeG3o14g6xfA8uR1GNN52NQbbbdsycz7DYCQpJjdv0FkjeAdWOZ5fEyD93vOLWZ1wEZTcv/rppOtaolG9dE5gf3maEnC10KHjQDkoeRgieRwxBJtyLrTmTdiyTvW85G0Ws+SLaBtLEQkOxGkjVzOVhqszDnRkGYawCkf0QPkv6bpNZpZP3LUs7mVHZUj9NJdyHJy8D6fNmTZXD7S5y2pt3bzcF42CDbkGQPkHwWp6r+Pw6Q5FL0IkhenxyQ3tLoJLJ8hSRvWwq5JA90migODNTckiePWkSBdB+y/oSs/6Ws+wmQriv5L1YnBDJG96yeU0+tuSR3RMXL+hBS8BSyDqEXvAIsbwHrB0h61G52beAuJqm2w9KxOXXawaEnTycRP9YStSvR3+sKpAfZTa/M4RMRJOk+IDk+Diy+3++37ubM23xr2jqu1WMyGrIogCfr4/1NLnfcBKdSVjvRGybZ3RiVXoM6A6zvlPzwseYOhiR/W9tvXatUVR9YtgPJCWvNTpZyq3qvOZOkTXO0/rTPbfiNKW98AntHdipVhxZb2waS31tqanQcSBbp1L2G+2xOjKTfjI2SvFavo5yAXJN1RmjqTFZXUYvOG0hdpXh/OZoANFqwk08N9yHplmS3zzNIrJIfLIlO3PF/uAo5edJVFOrwiXnvohYAAAAASUVORK5CYII=">
                </button>

            </div>
        </nav>

        <div class="container nav__ d-flex__ justify-content-center__ gap-2 px-0">
            
            <!-- ----- Tab Container ---  -->
            <div class="tab-content px-2" id="nav-tabContent">

                <!-- المشتري ----  -->
                <div class="affair-requirements-condition affair-requirements-condition-seller row tab-pane fade d-inline-flex_2 rounded justify-content-center align-items-center p-4 gap-1 bg-white text-center px-0"
                    id="nav-seller" role="tabpanel">

                    <!-- Boxes ----- -->
                    <div class="affair-requirements-condition-blk">
                        <div class=" col-4 col-lg col-md affair-requirements-condition__ d-flex  flex-column justify-content-start align-items-center gap-1 text-center p-0 px-2 py-3 light-blue-bg boxes-instr__">
                            <div class="rounded-circle d-flex justify-content-center align-items-center mb-1"
                                style="width: 80px; height: 80px;">
                                <img width="120" height="120"
                                    src="{{ asset('assets/') }}/img/icons/conditions/1.svg" alt="car"
                                    class="text-center">
                            </div>
                            <p class="lead text-black m-0">أن تكون حالة المركبة سليمة وغير موقوفة، مفقودة، مطلوبة أو
                                محجوزة
                            </p>
                        </div>
                        <div class=" col-4 col-lg col-md affair-requirements-condition__ d-flex  flex-column justify-content-start align-items-center gap-1 text-center p-0 px-2 py-3 light-blue-bg boxes-instr__">
                            <div class="rounded-circle d-flex justify-content-center align-items-center mb-1"
                                style="width: 80px; height: 80px;">
                                <img width="120" height="120"
                                    src="{{ asset('assets/') }}/img/icons/conditions/2.svg" alt="car"
                                    class="text-center">
                            </div>
                            <p class="lead text-black m-0">سريان رخصة السير للمركبة</p>
                        </div>
                        <div class=" col-4 col-lg col-md affair-requirements-condition__ d-flex  flex-column justify-content-start align-items-center gap-1 text-center p-0 px-2 py-3 light-blue-bg boxes-instr__">
                            <div class="rounded-circle d-flex justify-content-center align-items-center mb-1"
                                style="width: 80px; height: 80px;">
                                <img width="120" height="120"
                                    src="{{ asset('assets/') }}/img/icons/conditions/3.svg" alt="car"
                                    class="text-center">

                            </div>
                            <p class="lead text-black m-0">عدم وجود مخالفات على المركبة</p>
                        </div>
                        <div class=" col-4 col-lg col-md affair-requirements-condition__ d-flex  flex-column justify-content-start align-items-center gap-1 text-center p-0 px-2 py-3 light-blue-bg boxes-instr__">
                            <div class="rounded-circle d-flex justify-content-center align-items-center mb-1"
                                style="width: 80px; height: 80px;">
                                <img width="120" height="120"
                                    src="{{ asset('assets/') }}/img/icons/conditions/4.svg" alt="car"
                                    class="text-center">
                            </div>
                            <p class="lead text-black m-0">يجب توفر فحص دوري للمركبة ساري المفعول</p>
                        </div>
                        <div class=" col-4 col-lg col-md affair-requirements-condition__ d-flex  flex-column justify-content-start align-items-center gap-1 text-center p-0 px-2 py-3 light-blue-bg boxes-instr__">
                            <div class="rounded-circle d-flex justify-content-center align-items-center mb-1"
                                style="width: 80px; height: 80px;">
                                <img width="120" height="120"
                                    src="{{ asset('assets/') }}/img/icons/conditions/5.svg" alt="car"
                                    class="text-center">

                            </div>
                            <p class="lead text-black m-0"> التأكد من وجود تأمين ساري </p>
                        </div>
                    </div>

                    <!-- Requests ---  -->
                    <div class="row justify-content-evenly-- align-items-center-- bg-white w-100 py-4 display-none--">
                       
                        @forelse ($requests as $request )
                        
                        <!-- ------- Item _______ --------  -->      
                        <div class="col p-3">
                            <p class="m-0 text- pt-2 ps-1 fs-14px text-decoration-underline" style=" color: #8d8162; "> <i class="las la-clock pe-1"></i> 
                                {{ $request->created_at->diffForHumans()}}
                            </p>

                            <div class="row details d-flex flex-row justify-content-center align-items">
                                <div class="talab-details-- col-8--">
                                    
                                    <a href="{{route('requests.show', ['request' => $request->id])}}">
                                        <div class="ad-lawha mt-3 ">
                                            <x-front.ad.plate 
                                            {{-- :ad="$ad->id" --}}
                                            :first_letter="$request->first_letter" 
                                            :second_letter="$request->second_letter" 
                                            :third_letter="$request->third_letter" 
                                            :first_number="$request->first_number" 
                                            :second_number="$request->second_number" 
                                            :third_number="$request->third_number" 
                                            :fourth_number="$request->fourth_number"
                                            />
                                        </div>
                                    </a>
                                     <!-- ------- Accept/Refuse  -->
                                    <div class="talab-manage d-flex flex-row justify-content-center___ align-items-center m-auto mt-3">
                                        <p class="from-info m-0 ">
                                            <img class="" style=" width: 40px;border: 1px solid #ddd;border-radius: 2px; "  src="{{ asset('assets/') }}/img/icons/Property 1=Default.png" alt="">
                                            <p class="fw-bold  m-0" style="color: #3e3e3e!important; ">  {{ $request->user->name }} </p>
                                        </p>
                                        {{-- <button class="accept btn-sm fs-12px fw-bold"> قبول  </button> --}}

                                        @if ($request->request_type == 'sell' && $request->status == 'pending' && $request->user_id != auth()->user()->id )
                                        {{-- ACCEPT ----  --}}
                                        <div class="accept_request_form">
                                            {{-- <button href="#" class="btn position-relative top-0">تسجيل الخروج</button> --}}
                                            <form method="POST" action="{{ route('requests.update', $request->id) }}">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="confirm_request" value="accepted">
                                                <input type="hidden" name="request_id" value="{{$request->id}}">
                                                <a href="{{ route('requests.update', $request->id) }}" class="btn btn-sm accept fs-12px fw-bold"
                                                    onclick="event.preventDefault();this.closest('form').submit();">
                                                    قبول
                                                </a>
                                            </form>
                                        </div>

                                        {{-- REFUSE ----  --}}
                                        <div class="accept_request_form">
                                            <form method="POST" action="{{ route('requests.update', $request->id) }}">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="confirm_request" value="refused">
                                                <input type="hidden" name="request_id" value="{{$request->id}}">
                                                <a href="{{ route('requests.update', $request->id) }}" class="btn btn-sm reject fs-12px fw-bold"
                                                    onclick="event.preventDefault();this.closest('form').submit();">
                                                    رفض
                                                </a>
                                            </form>
                                        </div>
                                        @endif

                                    </div>

                                    <!-- Date -----  -->
                                    {{-- <div class="row date align-self-end mb-1">
                                        <p class="m-0">بتاريخ : 00/00/0000</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="alert alert-warning"> لا توجد لديك طلبات للمبايعة </div>
                        @endforelse
                                              
                    </div>
                </div>

                <!-- البائع ----  -->
                <div class="affair-requirements-condition affair-requirements-condition-vendor row tab-pane fade show active d-inline-flex_2 rounded justify-content-center align-items-center p-4 gap-1 bg-white text-center px-0"
                    id="nav-vendor" role="tabpanel">
                    <div class="affair-requirements-condition-blk">
                        <div class=" col-4 col-lg col-md affair-requirements-condition__ d-flex  flex-column justify-content-start align-items-center gap-1 text-center p-0 px-2 py-3 light-blue-bg boxes-instr__">
                            <div class="rounded-circle d-flex justify-content-center align-items-center mb-1"
                                style="width: 80px; height: 80px;">
                                <img width="120" height="120"
                                    src="{{ asset('assets/') }}/img/icons/conditions/1.svg" alt="car"
                                    class="text-center">
                            </div>
                            <p class="lead text-black m-0">أن تكون حالة المركبة سليمة وغير موقوفة، مفقودة، مطلوبة أو
                                محجوزة
                            </p>
                        </div>

                        <div class=" col-4 col-lg col-md affair-requirements-condition__ d-flex  flex-column justify-content-start align-items-center gap-1 text-center p-0 px-2 py-3 light-blue-bg boxes-instr__">
                            <div class="rounded-circle d-flex justify-content-center align-items-center mb-1"
                                style="width: 80px; height: 80px;">
                                <img width="120" height="120"
                                    src="{{ asset('assets/') }}/img/icons/conditions/2.svg" alt="car"
                                    class="text-center">
                            </div>
                            <p class="lead text-black m-0">سريان رخصة السير للمركبة</p>
                        </div>

                        <div class=" col-4 col-lg col-md affair-requirements-condition__ d-flex  flex-column justify-content-start align-items-center gap-1 text-center p-0 px-2 py-3 light-blue-bg boxes-instr__">
                            <div class="rounded-circle d-flex justify-content-center align-items-center mb-1"
                                style="width: 80px; height: 80px;">
                                <img width="120" height="120"
                                    src="{{ asset('assets/') }}/img/icons/conditions/3.svg" alt="car"
                                    class="text-center">

                            </div>
                            <p class="lead text-black m-0">عدم وجود مخالفات على المركبة</p>
                        </div>

                        <div class=" col-4 col-lg col-md affair-requirements-condition__ d-flex  flex-column justify-content-start align-items-center gap-1 text-center p-0 px-2 py-3 light-blue-bg boxes-instr__">
                            <div class="rounded-circle d-flex justify-content-center align-items-center mb-1"
                                style="width: 80px; height: 80px;">
                                <img width="120" height="120"
                                    src="{{ asset('assets/') }}/img/icons/conditions/4.svg" alt="car"
                                    class="text-center">

                            </div>
                            <p class="lead text-black m-0">يجب توفر فحص دوري للمركبة ساري المفعول</p>
                        </div>

                        <div class=" col-4 col-lg col-md affair-requirements-condition__ d-flex  flex-column justify-content-start align-items-center gap-1 text-center p-0 px-2 py-3 light-blue-bg boxes-instr__">
                            <div class="rounded-circle d-flex justify-content-center align-items-center mb-1"
                                style="width: 80px; height: 80px;">
                                <img width="120" height="120"
                                    src="{{ asset('assets/') }}/img/icons/conditions/5.svg" alt="car"
                                    class="text-center">

                            </div>
                            <p class="lead text-black m-0"> دفع أجور منصة سمو و أجور نقل اللوحات (سوف يتم إضافتها إلى مبلغ
                                اللوحة ) . </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUBMIT Button (Next & Back Button)  -->
        <div class="next-button p-6" id="submitNextBtn">
            <div class="container__ d-flex justify-content-center gap-3 ">
                <a href="{{ route('requests.create') }}" class="btn  btn-primary d-flex justify-content-center align-items-center "> 
                    <i class="las la-arrow-right me-2 fs-20px"></i>   التالي 
                </a>
            </div>
        </div>

    </section>
    <!-- CLOSE Vendor/Seller TABs ============================-->
@endsection


@push('scripts')
    <script>
        const mouseWheel1 = document.querySelector('.affair-process-steps');
        mouseWheel1.addEventListener('wheel', function(e) {
            const race = 50;
            if (e.deltaY > 0)
                mouseWheel1.scrollLeft += race;
            else
                mouseWheel1.scrollLeft -= race;
            e.preventDefault();
        });

        const mouseWheel2 = document.querySelector('.affair-requirements-condition-seller');
        mouseWheel2.addEventListener('wheel', function(e) {
            const race = 50;
            if (e.deltaY > 0)
                mouseWheel2.scrollLeft += race;
            else
                mouseWheel2.scrollLeft -= race;
            e.preventDefault();
        });

        const mouseWheel3 = document.querySelector('.affair-requirements-condition-vendor');
        mouseWheel3.addEventListener('wheel', function(e) {
            const race = 50;
            if (e.deltaY > 0)
                mouseWheel3.scrollLeft += race;
            else
                mouseWheel3.scrollLeft -= race;
            e.preventDefault();
        });

        // ----------  Hide / SHOW submit Next button
        $('#nav-vendor-tab').click(function(){
            // console.log("CLICKEEEED");
            $('#submitNextBtn').hide();
        });

        $('#nav-seller-tab').click(function(){
            $('#submitNextBtn').show();
        });

    </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

@endpush
