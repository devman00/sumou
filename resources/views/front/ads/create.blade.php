@extends('layouts.front-layout')

@section('content')
    <!-- Add Form start ============================-->
    <!-- ============================================-->
    <section class=" affair dashboard d-flex flex-column justify-content-between">
        <div class="container px-0 row">
            
            <!-- Sidebar ----  -->
            @includeIf('layouts.front.partials.sidebar')

            <div class="affair-step col-md-10 col-lg-10 mt-md-5 mt-lg-5">
                <div class="container d-flex position-relative justify-content-center  align-items-center">
                    <div class=" d-flex align-items-center justify-content-start gap-3 py-2 px-4 bg-white position-relative ">
                        <i class="las la-plus fw-bold" style="font-size: 30px;"></i>
                        <h4 class=" affair-step-title d-inline-block text-center fw-bold m-0 p-1">إضافة لوحة </h4>
                    </div>
                </div>

                <div class="padding py-4 bg-white"></div>

                <div class="bg-white w-100">
                    
                    <div class="ad-lawha mt-3 px-3 m-auto w-lg-50 w-md-50 py-5">
                        {{-- <div class="lawha">
                            <div class="ksa-board"><img width="18" height="18" src="{{asset('assets')}}/img/icons/ksa.png"
                                    class="chakra-image css-y45xgh">
                                <p style="font-size: 6px!important;margin-bottom: 5px!important;">السعودية</p>
                                <p style="font-size: 12px!important;">k</p>
                                <p style="font-size: 12px!important;">s</p>
                                <p style="font-size: 12px!important;margin-bottom: 8px!important;">a</p>
                                <div
                                    style="    width: 10px!important;
                                      height: 10px!important;
                                      border-radius: 50%!important;
                                      background-color: black !important;
                                      margin: 2px auto auto!important;">
                                </div>
                            </div>
                            <div class="informations">
                                <div class="letters">
                                    <div class="arabic-version">
                                        <p class="first">هـ</p>
                                        <p class="second"> د </p>
                                        <p class="third"> م</p>
                                    </div>
                                    <div class="english-version">
                                        <p class="first">h</p>
                                        <p class="second"> d </p>
                                        <p class="third"> m</p>
                                    </div>
                                </div>

                            </div>

                            <div class="serial-number ltr d-block">
                                <div class="numbers">
                                    <div class="arabic">
                                        <p class="first">١</p>
                                        <p class="second">٢ </p>
                                        <p class="third">٣</p>
                                        <p class="fourth">٤</p>
                                    </div>
                                    <div class="english">
                                        <p class="first">1</p>
                                        <p class="second">2 </p>
                                        <p class="third"> 3</p>
                                        <p class="fourth"> 4</p>
                                    </div>
                                </div>
                            </div>

                        </div> --}}

                        <x-front.ad.plate 
                        first_letter="ه"
                        second_letter="م"
                        third_letter="د"
                        first_number="١"
                        second_number="١"
                        third_number="١"
                        fourth_number="١"
                        />
                    </div>
                </div>

                <!-- Start Form -------  -->
                <form action="{{route('ads.store')}}" method="post" id="form-submit" class=" fill-details bg-white px-4 px-lg-8 ">
                    @csrf

                    {{-- Plate Type -----  --}}
                    <div class=" col d-flex justify-self-start flex-row flex-wrap align-items-start py-3 ">
                        <div class="no-gap  row with-border d-flex justify-content-center align-items-start flex-row position-relative gap-4 "
                            style=" width: 320px;">
                            <p class=" font-tajawal fw-500 col mb-2"
                                style=" font-weight: 500;color:#000023;border-left:#cac7c7 1px solid; margin-bottom: 20px;">
                                نوع اللوحة
                            </p>

                            <div class="col mb-4 ">
                                <div class="row type-lawha  d-flex flex-row flex-nowrap  zindex-tooltip position-relative">
                                    <div class=" form-check w-50" style="margin-left: 20px;">
                                        <input class="form-check-input" value="خصوصي" name="plate_type" type="radio" id="plate-private" {{ old('plate_type') == "خصوصي" ? 'checked' : '' }} >
                                        <label class="form-check-label text-black fw-bold font-tajawal" for="plate-private">خصوصي</label>
                                    </div>
                                    <div class="form-check w-50">
                                        <input class="form-check-input" value="نقل" name="plate_type" type="radio" id="plate-public" {{ old('plate_type') == "نقل" ? 'checked' : '' }} >
                                        <label class="form-check-label text-black fw-bold font-tajawal" for="plate-public">نقل</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <x-front.form.error field="plate_type" />
                    </div>

                    {{-- Letters ------  --}}
                    <div class="col  d-flex controls d-flex align-items-center justify-content-start py-4 position-relative">
                        <div class="row  with-border w-50 textfields py-1 d-flex flex-column align-items-center justify-content-center gap-3  ">
                            
                            {{-- First Letter --}}
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center m-0">
                                <label class="font-tajawal align-self-center"> الحرف الأول</label>
                                    <select id="first_letter" name="first_letter" class="form-select">
                                    {{-- <option value="أ" {{ old('first_letter') == "أ" ? 'selected' : '' }} > حرف أ </option>
                                    <option value="ب" {{ old('first_letter') == "ب" ? 'selected' : '' }} > حرف ب </option>
                                    <option value="ح" {{ old('first_letter') == "ح" ? 'selected' : '' }} > حرف ح </option>
                                    <option value="د" {{ old('first_letter') == "د" ? 'selected' : '' }} > حرف د </option>
                                    <option value="ر" {{ old('first_letter') == "ر" ? 'selected' : '' }} > حرف ر </option>
                                    <option value="س" {{ old('first_letter') == "س" ? 'selected' : '' }} > حرف س </option>
                                    <option value="ص" {{ old('first_letter') == "ص" ? 'selected' : '' }} > حرف ص </option>
                                    <option value="ط" {{ old('first_letter') == "ط" ? 'selected' : '' }} > حرف ط </option>
                                    <option value="ع" {{ old('first_letter') == "ع" ? 'selected' : '' }} > حرف ع </option>
                                    <option value="ق" {{ old('first_letter') == "ق" ? 'selected' : '' }} > حرف ق </option>
                                    <option value="ك" {{ old('first_letter') == "ك" ? 'selected' : '' }} > حرف ك </option>
                                    <option value="ل" {{ old('first_letter') == "ل" ? 'selected' : '' }} > حرف ل </option>
                                    <option value="م" {{ old('first_letter') == "م" ? 'selected' : '' }} > حرف م </option>
                                    <option value="ن" {{ old('first_letter') == "ن" ? 'selected' : '' }} > حرف ن </option>
                                    <option value="ه" {{ old('first_letter') == "ه" ? 'selected' : '' }} > حرف ه </option>
                                    <option value="و" {{ old('first_letter') == "و" ? 'selected' : '' }} > حرف و </option>
                                    <option value="ي" {{ old('first_letter') == "ي" ? 'selected' : '' }} > حرف ي </option> --}}
                                    
                                    @foreach (config('app')['arabic_letters'] as $key => $value )
                                        <option value="{{$value}}" {{ old('first_letter') == $value ? 'selected' : '' }} > حرف {{$value}}</option>
                                    @endforeach                                
                                
                                </select>
                                <x-front.form.error field="first_letter" />
                            </div>

                            {{-- second_letter --}}
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center m-0">
                                <label class="font-tajawal align-self-center"> الحرف الثاني</label>
                                <select id="second_letter" name="second_letter" class="form-select">
                                    @foreach (config('app')['arabic_letters'] as $key => $value )
                                        <option value="{{$value}}" {{ old('second_letter') == $value ? 'selected' : '' }} > حرف {{$value}}</option>
                                    @endforeach                                
                                </select>
                                <x-front.form.error field="second_letter" />
                            </div>

                            {{-- third_letter --}}
                            <div class="  textfield-input mb-2 d-flex justify-content-start align-items-center m-0">
                                <label class=" font-tajawal align-self-center"> الحرف الثالث</label>
                                <select id="third_letter" name="third_letter" class="form-select">
                                    @foreach (config('app')['arabic_letters'] as $key => $value )
                                        <option value="{{$value}}" {{ old('third_letter') == $value ? 'selected' : '' }} > حرف {{$value}}</option>
                                    @endforeach                                
                                </select>
                                <x-front.form.error field="third_letter" />
                            </div>
                        </div>
                        <!-- <hr style=" transform:rotate(180deg);" class=" "> -->
                    </div>

                    {{-- Numbers :  ٠ ، ١ ، ٢ ، ٣ ،  ٤ ،   ٥ ، ٦ ،  ٧،  ٨  ،  ٩  --}}
                    <div  class="col  d-flex controls d-flex align-items-center justify-content-start py-4 position-relative ">
                        <div class="row w-50 with-border textfields py-1 d-flex flex-column align-items-center justify-content-center gap-3  ">
                            
                            {{-- first_number --}}
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center">
                                <label class="font-tajawal align-self-center"> الرقم الأول</label>
                                <select id="first_number" name="first_number"  class="form-select">
                                    {{-- <option class="font-tajawal" value="١" {{ old('first_number') == '١' ? 'selected' : '' }} > ١</option>
                                    <option class="font-tajawal" value="٢" {{ old('first_number') == "٢" ? 'selected' : '' }} > ٢</option>
                                    <option class="font-tajawal" value="٣" {{ old('first_number') == "٣" ? 'selected' : '' }} > ٣</option>
                                    <option class="font-tajawal" value="٤" {{ old('first_number') == "٤" ? 'selected' : '' }} > ٤</option>
                                    <option class="font-tajawal" value="٥" {{ old('first_number') == "٥" ? 'selected' : '' }} > ٥</option>
                                    <option class="font-tajawal" value="٦" {{ old('first_number') == "٦" ? 'selected' : '' }} > ٦</option>
                                    <option class="font-tajawal" value="٧" {{ old('first_number') == "٧" ? 'selected' : '' }} > ٧</option>
                                    <option class="font-tajawal" value="٨" {{ old('first_number') == "٨" ? 'selected' : '' }} > ٨</option>
                                    <option class="font-tajawal" value="٩" {{ old('first_number') == "٩" ? 'selected' : '' }} > ٩</option> 
                                 --}}

                                    @foreach (config('app')['arabic_numbers'] as $key => $value )
                                        <option class="font-tajawal" value="{{$value}}" {{ old('first_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                                    @endforeach
                                </select>

                                

                                <x-front.form.error field="first_number" />
                            </div>

                            {{-- second_number --}}
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center">
                                <label class="font-tajawal align-self-center"> الرقم الثاني</label>
                                <select id="second_number" name="second_number" class="form-select">
                                    @foreach (config('app')['arabic_numbers'] as $key => $value )
                                        <option class="font-tajawal" value="{{$value}}" {{ old('first_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                                    @endforeach                                
                                </select>
                                <x-front.form.error field="second_number" />
                            </div>

                            {{-- third_number --}}
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center">
                                <label class="font-tajawal align-self-center"> الرقم الثالث</label>
                                <select id="third_number" name="third_number" class="form-select">
                                    @foreach (config('app')['arabic_numbers'] as $key => $value )
                                        <option class="font-tajawal" value="{{$value}}" {{ old('first_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                                    @endforeach                                    
                                </select>
                                <x-front.form.error field="third_number" />
                            </div>

                            {{-- fourth_number --}}
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center">
                                <label class="font-tajawal  align-self-center"> الرقم الرابع</label>
                                <select id="fourth_number" name="fourth_number" class="form-select">
                                    @foreach (config('app')['arabic_numbers'] as $key => $value )
                                        <option class="font-tajawal" value="{{$value}}" {{ old('first_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                                    @endforeach
                                </select>
                                <x-front.form.error field="fourth_number" />
                            </div>
                        </div>
                        <!-- <hr style=" transform:rotate(180deg);" class=" "> -->
                    </div>

                    {{-- Verifications & papers Status  --}}
                    <div class="checkboxes font-tajawal" style="margin-top:30px">
                        
                        {{-- validity_of_periodic_examination --}}
                        <div class="add-lawha-radio-container col d-flex justify-self-start flex-row flex-wrap align-items-start  ">
                            <div class="row add-lawha-radio no-gap  d-flex justify-content-center align-items-start flex-row position-relative gap-4 mb-3 "
                                style="width: 390px !important; ">
                                <p class=" font-tajawal fw-500 col mb-2" style=" font-weight: 500;color:#000023;">
                                    سريان الفحص الدوري
                                </p>

                                <div class="col mb-3 ">
                                    <div class="row d-flex flex-row flex-nowrap  zindex-tooltip position-relative">
                                        <div class=" form-check w-50">
                                            <input class="form-check-input" name="validity_of_periodic_examination" value="جديد" type="radio" id="validity_of_periodic_examination_new"  {{ old('validity_of_periodic_examination') == "جديد" ? 'checked' : '' }}>
                                            <label class="form-check-label text-black fw-bold font-tajawal"  for="validity_of_periodic_examination_new"> جديد </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="validity_of_periodic_examination" value="منتهي" type="radio" id="validity_of_periodic_examination_expired" {{ old('validity_of_periodic_examination') == "منتهي" ? 'checked' : '' }} >
                                            <label class="form-check-label text-black fw-bold font-tajawal" for="validity_of_periodic_examination_expired">منتهي</label>
                                        </div>
                                    </div>
                                </div>
                                <x-front.form.error field="validity_of_periodic_examination" />
                            </div>
                        </div>

                        {{-- validity_of_driving_form --}}
                         <div class="add-lawha-radio-container col d-flex justify-self-start flex-row flex-wrap align-items-start  ">
                            <div class="row add-lawha-radio no-gap  d-flex justify-content-center align-items-start flex-row position-relative gap-4 mb-3 "
                                style="width: 390px !important; ">
                                <p class=" font-tajawal fw-500 col mb-2" style=" font-weight: 500;color:#000023;">
                                    سريان استمارة السير
                                </p>

                                <div class="col mb-3 ">
                                    <div class="row d-flex flex-row flex-nowrap  zindex-tooltip position-relative">
                                        <div class=" form-check w-50">
                                            <input class="form-check-input" name="validity_of_driving_form" value="ساري" type="radio" id="validity_of_driving_form_new" {{ old('validity_of_driving_form') == "ساري" ? 'checked' : '' }} >
                                            <label class="form-check-label text-black fw-bold font-tajawal"  for="validity_of_driving_form_new">ساري</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="validity_of_driving_form" value="غير ساري" type="radio" id="validity_of_driving_form_expired" {{ old('validity_of_driving_form') == "غير ساري" ? 'checked' : '' }} >
                                            <label class="form-check-label text-black fw-bold font-tajawal" for="validity_of_driving_form_expired">غير ساري </label>
                                        </div>
                                    </div>
                                </div>
                                <x-front.form.error field="validity_of_driving_form" />
                            </div>
                        </div>

                        {{-- vehicle_insurance_status --}}
                        <div class="add-lawha-radio-container col d-flex justify-self-start flex-row flex-wrap align-items-start  ">
                            <div class="row add-lawha-radio  d-flex justify-content-center align-items-start flex-row position-relative gap-4 "
                                style="width: 390px !important; ">
                                <p class=" font-tajawal fw-500 col mb-2" style=" font-weight: 500;color:#000023;">
                                    حالة تأمين المركبة
                                </p>

                                <div class="col mb-3 ">
                                    <div class="row d-flex flex-row flex-nowrap  zindex-tooltip position-relative">
                                        <div class=" form-check w-50">
                                            <input class="form-check-input" name="vehicle_insurance_status" value="جديد" type="radio" id="vehicle_insurance_status_new" {{ old('vehicle_insurance_status') == "جديد" ? 'checked' : '' }} >
                                            <label class="form-check-label text-black fw-bold font-tajawal" for="vehicle_insurance_status_new">جديد</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="vehicle_insurance_status" value="منتهي" type="radio" id="vehicle_insurance_status_expired" {{ old('vehicle_insurance_status') == "منتهي" ? 'checked' : '' }} >
                                            <label class="form-check-label text-black fw-bold font-tajawal" for="vehicle_insurance_status_expired">منتهي</label>
                                        </div>
                                    </div>
                                </div>
                                <x-front.form.error field="vehicle_insurance_status" />
                            </div>
                        </div>

                        {{-- are_there_violations --}}
                        <div class="add-lawha-radio-container  col d-flex justify-self-start flex-row flex-wrap align-items-start  ">
                            <div class="row add-lawha-radio  d-flex justify-content-center align-items-start flex-row position-relative gap-4 "  style="width: 390px !important; ">
                                <p class=" font-tajawal fw-500 col mb-2" style=" font-weight: 500;color:#000023;">
                                    هل توجد مخالفات؟
                                </p>

                                <div class="col mb-3 ">
                                    <div class="row d-flex flex-row flex-nowrap  zindex-tooltip position-relative">
                                        <div class=" form-check w-50">
                                            <input class="form-check-input" name="are_there_violations" value="نعم" type="radio"  id="are_there_violations_yes"  {{ old('are_there_violations') == "نعم" ? 'checked' : '' }} >
                                            <label class="form-check-label text-black fw-bold font-tajawal"  for="are_there_violations_yes">نعم</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="are_there_violations" value="لا" type="radio"  id="are_there_violations_no"  {{ old('are_there_violations') == "لا" ? 'checked' : '' }} >
                                            <label class="form-check-label text-black fw-bold font-tajawal" for="are_there_violations_no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <x-front.form.error field="are_there_violations" />
                            </div>
                        </div>
                    </div>

                    {{-- Contact _ Price _ Auction  --}}
                    <div class="d-flex controls d-flex flex-row align-items-center justify-content-start py-2 gap-1">
                        
                        {{-- Contact  --}}
                        <div class="col textfields py-1 d-flex flex-column align-items-start justify-content-start gap-3 px-0 ">
                            <div class="textfield-input    m-0 d-flex justify-content-center align-items-center">
                                <label style="width: auto;" class="font-tajawal align-self-center" for="phone">
                                    رقم التواصل</label>
                                <input type="text" class="font-tajawal bg-transparent text-right custom_input ltr" name="phone" value="{{old('phone')}}" id="phone" placeholder="يبدأ ب 05" >
                            </div>
                            <x-front.form.error field="phone" /> 
                        </div>

                        {{-- Price  --}}
                        <div class="col textfields py-1 d-flex flex-column align-items-start justify-content-start gap-3  px-0 "  style="border-left:#cac7c7 1px solid ; padding-left: 5px;">
                            <div class="textfield-input   m-0 d-flex justify-content-center align-items-center">
                                <label style="width: auto;" class="font-tajawal align-self-center" for="price"> السعر </label>
                                <input type="text" class="font-tajawal bg-transparent text-right custom_input" name="price"  value="{{old('price')}}" id="price"  placeholder="100 ريال " >
                            </div>
                            <x-front.form.error field="price" /> 
                        </div>

                        {{-- In Auction?  --}}
                        <div class="   col d-flex justify-self-start flex-row flex-wrap align-items-start  ">
                            <div class="col">
                                <div class="row sawm-check d-flex flex-row flex-nowrap justify-content-center zindex-tooltip position-relative" style="width: 159px;margin-right: 10px;">
                                    <div class=" form-check d-flex -start justify-content-between px-3 " style="width: 108px;">
                                        <input class="form-check-input align-self-center" value="نعم" name="in_auction" type="checkbox" id="in_auction" {{ old('in_auction') == 'نعم' ? 'checked' : '' }} >
                                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="in_auction">على السوم</label>
                                    </div>
                                    <x-front.form.error field="in_auction" /> 
                                </div>
                            </div>
                        </div>

                    </div>
            

                     <!-- --------- Submit  -->
                    <div class="next-button  py-4 bg-white">
                        <div class="container-- d-flex justify-content-center gap-3 align-items-center ">
                            <button form="form-submit" type="submit" class="btn d-flex justify-content-between gap-2 px-5 align-items-center  btn-primary blue-btn ">
                                <i class="las la-plus" style="font-size: 20px;"></i> أضف اللوحة
                            </button>
                        </div>
                    </div>

                </form>
            
            </div>
            <div class="padding py-5 bg-white"></div>

        </div>
        </div>

    </section>
    <!-- Add Form close ============================-->
@endsection
