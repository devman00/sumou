@extends('layouts.front-layout')

@section('pagetitle')
منصة سمو | للوحات المميزة
@endsection


@section('content')

    <section class="py-0 welcome-section__ px-3 px-md-0 px-lg-0 pt-8 gradientBlueViolet_180" id="welcome">
        <div class="bg-holder d-none d-md-block welcome-bg__">
        </div>

        {{-- <div class="bg-holder d-block d-md-none"
            style="background-image:url({{ asset('assets/') }}/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;">
        </div> --}}
        <div class="container-fluid pt-5 bg-gray__ listing-page ">
            <!-- Submit Form -->
            <h3 class="text-center font-tajawal">  البحث عن اللوحات </h3>

            <div class="row align-items-center pb-3 pb-md-7 pb-lg-7 px-md-5 px-lg-5 justify-content-center search_form">
                <form method="post" action="{{route('ads.lists')}}" class="row g-3 form_ads_search">
                    @csrf
                    <div class="col-6">
                        <label> نوع اللوحة </label>
                        <select id="boardType" name="board_type" class="form-control">
                            <option value="" selected> - </option>
                            <option value="خصوصي" {{ request()->input('board_type') == 'خصوصي' ? 'selected' : '' }}  > خصوصي </option>
                            <option value="نقل" {{ request()->input('board_type') == 'نقل' ? 'selected' : '' }}  > نقل </option>
                        </select>
                    </div>

                    <div class="col-6">
                        <label> نوع الأرقام </label>
                        <select id="numbersType" name="numbers_type" class="form-control">
                            <option value="" selected> - </option>
                            <option data-value="1" value="1" {{ request()->input('numbers_type') == '1' ? 'selected' : '' }}> فردي </option>
                            <option data-value="2" value="2" {{ request()->input('numbers_type') == '2' ? 'selected' : '' }}> ثنائي </option>
                            <option data-value="3" value="3" {{ request()->input('numbers_type') == '3' ? 'selected' : '' }}> ثلاثي </option>
                            <option data-value="4" value="4" {{ request()->input('numbers_type') == '4' ? 'selected' : '' }}> رباعي </option>
                        </select>
                    </div>
                    
                    <!-- First Letter -------- -->
                    <div class="col-4"> 
                        <label> الحرف الأول </label>
                        <select id="firstLetter" name="first_letter" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_letters'] as $key => $value )
                                <option value="{{$value}}" {{ request()->input('first_letter') == $value ? 'selected' : '' }} > {{$value}} </option>
                            @endforeach 
                        </select>
                    </div>

                    <div class="col-4">
                        <label> الحرف الثاني </label>
                        <select id="secondLetter" name="second_letter" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_letters'] as $key => $value )
                                <option value="{{$value}}" {{ request()->input('second_letter') == $value ? 'selected' : '' }} > {{$value}} </option>
                            @endforeach 
                        </select>
                    </div>

                    <div class="col-4">
                        <label> الحرف الثالث </label>
                        <select id="thirdLetter" name="third_letter" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_letters'] as $key => $value )
                                <option value="{{$value}}" {{ request()->input('third_letter') == $value ? 'selected' : '' }} > {{$value}} </option>
                            @endforeach 
                        </select>
                    </div>

                    <!-- First Number -------- -->
                    <div class="col-3 cnt_firstNumber">
                        <label> الرقم الأول </label>
                        <select id="firstNumber" name="first_number" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_numbers'] as $key => $value )
                                <option class="font-tajawal" value="{{$value}}" {{ request()->input('first_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-3 cnt_secondNumber" style="{{ request()->input('numbers_type') == '1' ? 'display:none' : '' }}">
                        <label> الرقم الثاني </label>
                        <select id="secondNumber" name="second_number" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_numbers'] as $key => $value )
                                <option class="font-tajawal" value="{{$value}}" {{ request()->input('second_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-3 cnt_thirdNumber" style="{{ request()->input('numbers_type') == '1' ||  request()->input('numbers_type') == '2' ? 'display:none' : '' }}">
                        <label> الرقم الثالث </label>
                        <select id="thirdNumber" name="third_number" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_numbers'] as $key => $value )
                                <option class="font-tajawal" value="{{$value}}" {{ request()->input('third_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-3 cnt_fourthNumber" style="{{ request()->input('numbers_type') == '1' ||  request()->input('numbers_type') == '2' ||  request()->input('numbers_type') == '3' ? 'display:none' : '' }}">
                        <label> الرقم الرابع </label>
                        <select id="fourthNumber" name="fourth_number" class="form-control">
                            <option value="" selected> - </option>
                            @foreach (config('app')['arabic_numbers'] as $key => $value )
                                <option class="font-tajawal" value="{{$value}}" {{ request()->input('fourth_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Submit ----  -->
                    <div class="col-12 text-center mt-4 mt-md-6 mt-lg-6 ">
                        <button type="submit" class="btn btn-primary search-btn px-5 fw-bold"> <i
                                class="las la-search mx-2"></i> إبدأ البحث </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--start lawhat Listing -->
    <section class="homepage-lawhat py-0 my-5">
        <div class="container flex-column justify-content-center align-content-center ">
            
            <!-- Filter ------  -->
            <div class="dashboard-lawhat-menu mb-5 p-3">
                <div class="title col-2">
                    <i></i>
                    <p class="fw-bold text-black"> </p>
                </div>

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
                        :whatsapp="$ad->whatsapp"
                        :username="$ad->username"
                        :allow_contact=1
                        :allow_actions=0
                    />

                @endforeach
                
            </div>
            <!-- ---------------------------------- -->


            <button class="btn show-more align-self-center d-flex justify-content-center">عرض المزيد</button>

        </div>
    </section>
    <!-- end lawhat -->

@endsection