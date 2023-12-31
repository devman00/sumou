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
                <form method="post" action="{{ route('ads.lists') }}" class="row g-3">
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
                              <input class="form-check-input align-self-center filterHomeForm0" name="monocular-check" type="checkbox" id="monocular-check" {{ request()->input('monocular-check') ? 'checked' : '' }}>
                              <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="monocular-check">أحادي</label>
                          </div>
                          <div class="form-check form-check-inline col-3 mx-0">
                              <input class="form-check-input align-self-center filterHomeForm0" name="bilateral-check" type="checkbox" id="bilateral-check" {{ request()->input('bilateral-check') ? 'checked' : '' }}>
                              <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="bilateral-check">ثنائي</label>
                          </div>
                          <div class="form-check form-check-inline col-3 mx-0">
                              <input class="form-check-input align-self-center filterHomeForm0" name="tripartite-check" type="checkbox" id="tripartite-check" {{ request()->input('tripartite-check') ? 'checked' : '' }}>
                              <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="tripartite-check">ثلاثي</label>
                          </div>
                          <div class="form-check form-check-inline col-3 mx-0">
                              <input class="form-check-input align-self-center filterHomeForm0" name="quadrant-check" type="checkbox" id="quadrant-check" {{ request()->input('quadrant-check') ? 'checked' : '' }}>
                              <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="quadrant-check">رباعي</label>
                          </div>
                        </div>
                    </form>

                {{-- <div class="newer-older-filter d-flex justify-content-center align-items-center col-2">
                    <p class="selected">الأحدث</p>
                    <p class="">الأقدم</p>
                </div>  --}}

            </div>

            <div id="data-wrapper">
                @include('front.parts.data')
            </div>

            {{-- ----- Load more button  --}}
            <div class="align-self-center d-flex justify-content-center">
                <button class="btn btn-dark-blue fw-bold align-self-center d-flex-- justify-content-center load-more-data" id="loadMore">عرض المزيد</button>
            </div>


            <!-- Data Loader -->
            <div class="auto-load text-center" style="display: none;">
                <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="60" viewBox="0 0 100 100"
                    enable-background="new 0 0 0 0" xml:space="preserve">
                    <path fill="#000"
                        d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                        <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                            from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                    </path>
                </svg>
            </div>


        </div>
    </section>
    <!-- end lawhat -->

    {{-- Pagination ----  --}}
    {{-- {!! $ads->links() !!} --}}

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

@push('scripts')
    <script>
        var URL = "{{ route('home') }}";
        var page = 1;
        
        /*------------------------------------------
        Call on Click
        --------------------------------------------*/
        $(".load-more-data").click(function(){
            page++;
            infinteLoadMore(page);

            // scrollIntoView();
            var elem = document.getElementById("loadMore"); 

            $('html, body').animate({
                scrollTop: $(elem).offset().top
            }, 300)
        });

        /*------------------------------------------
        --------------------------------------------
        call infinteLoadMore()
        --------------------------------------------
        --------------------------------------------*/
        function infinteLoadMore(page) 
        {
            $.ajax({
                    url: URL + "?page=" + page,
                    datatype: "html",
                    type: "get",
                    beforeSend: function() {
                        $('.auto-load').show();
                    }
                })
                .done(function(response) {
                    if (response.html == '' || response.html == '<div class=\"homepage-lawhat-wrapper p-3 p-md-0 p-lg-0 mb-4\"></div>' || response.html == '<div class=\"homepage-lawhat-wrapper p-3 p-md-0 p-lg-0 mb-4\">\n<\/div>' || response.html == '<div class=\"homepage-lawhat-wrapper p-3 p-md-0 p-lg-0 mb-4\">\r\n</div>') {
                        $('.auto-load').html("لا يوجد المزيد من البيانات لعرضها :(");
                        $("#loadMore").hide();
                        return;
                    }

                    $('.auto-load').hide();
                    $("#data-wrapper").append(response.html);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }


    </script>
@endpush
