@extends('layouts.front-layout')

@section('pagetitle')
منصة سمو | للوحات المميزة
@endsection

@section('content')
    
    <!-- Welcome Section --------- -->
    <section class="py-0 welcome-section px-3 px-md-0 px-lg-0 pt-7 gradientBlueViolet_180" id="welcome">

        <div class="bg-holder d-none d-md-block gradientBlueViolet_180">
        </div>

        <div class="bg-holder d-block d-md-none"> </div>

        <div class="container">

            <!-- Logo + Slogan  -->
            <div class="row align-items-center min-vh-md-75__ mt-7--">
                <div class="col-md-5 col-lg-5 pt-lg-6 text-sm-start text-center d-none d-md-flex d-lg-flex">
                    <img style="width: 100%;" src="{{ asset('assets/') }}/img/logo_white.png" alt="منصة سمو">
                </div>
                <div class="col-md-7 col-lg-7 pt-lg-6 text-sm-start text-center">
                    <!-- <h1 class="text-white font-tajawal ml12">منصة سمو للوحات المميزة</h1> -->

                    <h1 class="ml11__ text-white  font-tajawal fs-2 fs-md-7 mt-4 mt-md-0">
                        <span class="text-wrapper">
                            <span class="line line1"></span>
                            <span class="letters fs-0_7em d-none d-md-flex d-lg-flex">منصة سمو للوحات المميزة</span>
                            <span class="letters fs-0_7em d-md-none d-lg-none"> بحث عن لوحة معينة </span>

                        </span>
                    </h1>


                </div>

            </div>

            <!-- Submit Form -->
            <div class="row align-items-center pb-3 pb-md-7 pb-lg-7 justify-content-center search_form">
                <form method="post" action="{{route('ads.lists')}}" class="row g-3">
                    @csrf
                    <div class="col-6">
                        <label> نوع اللوحة </label>
                        <select id="boardType" name="board_type" class="form-control">
                            <option value="" selected> - </option>
                            <option value="خصوصي"> خصوصي </option>
                            <option value="نقل"> نقل </option>
                        </select>
                    </div>

                    <div class="col-6">
                        <label> نوع الأرقام </label>
                        <select id="numbersType" name="numbers_type" class="form-control">
                            <option value="" selected> - </option>
                            <option data-value="1" value="1"> فردي </option>
                            <option data-value="2" value="2"> ثنائي </option>
                            <option data-value="3" value="3"> ثلاثي </option>
                            <option data-value="4" value="4"> رباعي </option>
                        </select>
                    </div>

                    <!-- First Letter -------- -->
                    <div class="col-4">
                        <label> الحرف الأول </label>
                        <select id="firstLetter" name="first_letter" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_letters'] as $key => $value )
                                <option value="{{$value}}" {{ old('first_letter') == $value ? 'selected' : '' }} > {{$value}} </option>
                            @endforeach 
                        </select>
                    </div>

                    <div class="col-4">
                        <label> الحرف الثاني </label>
                        <select id="secondLetter" name="second_letter" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_letters'] as $key => $value )
                                <option value="{{$value}}" {{ old('second_letter') == $value ? 'selected' : '' }} > {{$value}} </option>
                            @endforeach 
                        </select>
                    </div>

                    <div class="col-4">
                        <label> الحرف الثالث </label>
                        <select id="thirdLetter" name="third_letter" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_letters'] as $key => $value )
                                <option value="{{$value}}" {{ old('third_letter') == $value ? 'selected' : '' }} > {{$value}} </option>
                            @endforeach 
                        </select>
                    </div>

                    <!-- First Number -------- -->
                    <div class="col-3 cnt_firstNumber">
                        <label> الرقم الأول </label>
                        <select id="firstNumber" name="first_number" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_numbers'] as $key => $value )
                                <option class="font-tajawal" value="{{$value}}" {{ old('first_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-3 cnt_secondNumber">
                        <label> الرقم الثاني </label>
                        <select id="secondNumber" name="second_number" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_numbers'] as $key => $value )
                                <option class="font-tajawal" value="{{$value}}" {{ old('second_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-3 cnt_thirdNumber">
                        <label> الرقم الثالث </label>
                        <select id="thirdNumber" name="third_number" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_numbers'] as $key => $value )
                                <option class="font-tajawal" value="{{$value}}" {{ old('third_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-3 cnt_fourthNumber">
                        <label> الرقم الرابع </label>
                        <select id="fourthNumber" name="fourth_number" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_numbers'] as $key => $value )
                                <option class="font-tajawal" value="{{$value}}" {{ old('fourth_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Submit ----  -->
                    <div class="col-12 text-center mt-4 mt-md-6 mt-lg-6 ">
                        <button type="submit" class="btn btn-primary search-btn px-5 fw-bold"> <i
                                class="las la-search mx-2"></i>
                            إبدأ البحث </button>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <!--start lawhat -->
    <section class="homepage-lawhat py-0 mt-5">
        <div class="container">

            <!-- Filter -----  -->
            <div class="dashboard-lawhat-menu mb-5 p-3">
                <div class="title col-2">
                    <i></i>
                    <p class="fw-bold text-black">اخر اللوحات</p>
                </div>

                <!------------->
                <!-- <div class="lawha-feature-category d-flex flex-row justify-content-evenly align-content-center col"> -->
                <form method="post" action="" class="formFilter0">
                  @csrf
                  <div class="row ps-3">
                    {{-- <p class="d-none d-md-flex d-lg-flex">فئة اللوحة</p> --}}
                    <div class="form-check form-check-inline col-3 mx-0">
                        <input class="form-check-input align-self-center filterHomeForm0" name="numbers_type-check" type="radio" id="monocular-check" value="1" {{ request()->input('numbers_type-check') && request()->input('numbers_type-check') == '1' ? 'checked' : '' }}>
                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="monocular-check">أحادي</label>
                    </div>
                    <div class="form-check form-check-inline col-3 mx-0">
                        <input class="form-check-input align-self-center filterHomeForm0" name="numbers_type-check" type="radio" id="bilateral-check" value="2" {{ request()->input('numbers_type-check') && request()->input('numbers_type-check') == '2' ? 'checked' : '' }}>
                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="bilateral-check">ثنائي</label>
                    </div>
                    <div class="form-check form-check-inline col-3 mx-0">
                        <input class="form-check-input align-self-center filterHomeForm0" name="numbers_type-check" type="radio" id="tripartite-check" value="3" {{ request()->input('numbers_type-check') && request()->input('numbers_type-check') == '3' ? 'checked' : '' }}>
                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="tripartite-check">ثلاثي</label>
                    </div>
                    <div class="form-check form-check-inline col-3 mx-0">
                        <input class="form-check-input align-self-center filterHomeForm0" name="numbers_type-check" type="radio" id="quadrant-check" value="4" {{ request()->input('numbers_type-check') && request()->input('numbers_type-check') == '4' ? 'checked' : '' }}>
                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="quadrant-check">رباعي</label>
                    </div>
                  </div>
                </form>

                {{-- <div class="newer-older-filter d-flex justify-content-center align-items-center col-2">
                    <p class="selected">الأحدث</p>
                    <p class="">الأقدم</p>
                </div>  --}}

            </div>

            <div class="homepage-lawhat-wrapper p-3 p-md-0 p-lg-0">

                @foreach ($ads as $ad)
                    <x-front.ad.default 
                    :ad="$ad->id"
                    :date="$ad->created_at->diffForHumans()"
                    :first_letter="$ad->first_letter" 
                    :second_letter="$ad->second_letter" 
                    :third_letter="$ad->third_letter" 
                    :first_number="$ad->first_number" 
                    :second_number="$ad->second_number" 
                    :third_number="$ad->third_number" 
                    :fourth_number="$ad->fourth_number" 
                    :price="$ad->price"
                    :phone="$ad->phone"
                    :allow_contact=1
                    :whatsapp="$ad->user->whatsapp"
                    :username="$ad->user->name"
                    :in_auction="$ad->in_auction"
                    />
                @endforeach

            </div>

        </div>
    </section>
    <!-- end lawhat -->

    <!-- Partners section  begin ============================-->
    <section class="bg-100 pb-0">

        <div class="container">

            <div class="title">
                <h4 class="fw-bold text-black text-center"> شركاء النجاح </h4>
            </div>

            <div class="row">

                <div class="partnersCarousel owl-carousel owl-theme">
                    <div> <img src="{{ asset('assets/') }}/img/partners/1.png" alt=""> </div>
                    <div> <img src="{{ asset('assets/') }}/img/partners/2.png" alt=""> </div>
                    <div> <img src="{{ asset('assets/') }}/img/partners/3.png" alt=""> </div>
                    <div> <img src="{{ asset('assets/') }}/img/partners/4.png" alt=""> </div>
                    <div> <img src="{{ asset('assets/') }}/img/partners/5.png" alt=""> </div>

                </div>

            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <partners> close ============================-->
        
@endsection
