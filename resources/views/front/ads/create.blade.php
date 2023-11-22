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

                <!-- Start Form -------  -->
                <form action="{{route('ads.store')}}" method="post" id="form-submit" class=" fill-details bg-white px-3 px-lg-8 ">
                    @csrf

                    {{-- Plate Type -----  --}}
                    <div class=" col d-flex justify-self-start flex-row flex-wrap align-items-start py-3 ">
                        <div class="no-gap  row d-flex justify-content-center align-items-start flex-row position-relative gap-4 "
                            style=" width: 320px;">
                            <p class=" font-tajawal fw-500 col mb-2"
                                style=" font-weight: 500;color:#000023;border-left:#cac7c7 1px solid; margin-bottom: 20px;">
                                نوع اللوحة
                            </p>

                            <div class="col ">
                                <div class="switch-field type-lawha">
                                    <div class=" form-check" >
                                        <input class="form-check-input" value="خصوصي" name="plate_type" type="radio" id="plate-private" {{ old('plate_type') == "خصوصي" ? 'checked' : '' }} >
                                        <label class="form-check-label fw-bold font-tajawal" for="plate-private">خصوصي</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="نقل" name="plate_type" type="radio" id="plate-public" {{ old('plate_type') == "نقل" ? 'checked' : '' }} >
                                        <label class="form-check-label fw-bold font-tajawal" for="plate-public">نقل</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <x-front.form.error field="plate_type" />
                    </div>

                    {{-- numbersType ------  --}}
                    <div class="col  d-flex controls d-flex align-items-center justify-content-start py-4 position-relative">
                        <div class="row w-50 textfields py-1 d-flex flex-column align-items-center justify-content-center gap-3  ">
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center m-0">
                                <label class="font-tajawal align-self-center"> نوع الأرقام </label>
                                <select id="numbersType" name="numbers_type" class="form-select" style="min-width: 100px;">
                                    <option value="" selected> الكل </option>
                                    <option data-value="1" value="فردي"> فردي </option>
                                    <option data-value="2" value="ثنائي"> ثنائي </option>
                                    <option data-value="3" value="ثلاثي"> ثلاثي </option>
                                    <option data-value="4" value="رباعي"> رباعي </option>                                
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white w-100">
                        <div class="ad-lawha mt-3 m-auto w-lg-50 w-md-50 py-3 pb-1">
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

                    {{-- Letters ------  --}}
                    <div class="col  d-flex controls d-flex align-items-center justify-content-start position-relative">
                        <div class="row  w-50 textfields py-1 d-flex flex-column align-items-center justify-content-center gap-3  ">
                            
                            {{-- Letter --}}
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center m-0">
                                <label class="font-tajawal align-self-center"> الأحرف &nbsp; </label>
                                <select id="first_letter" name="first_letter" class="form-select">
                                    @foreach (config('app')['arabic_letters'] as $key => $value )
                                        <option value="{{$value}}" {{ old('first_letter') == $value ? 'selected' : '' }} > {{$value}}</option>
                                    @endforeach                                
                                </select>
                                <x-front.form.error field="first_letter" />

                                <select id="second_letter" name="second_letter" class="form-select">
                                    @foreach (config('app')['arabic_letters'] as $key => $value )
                                        <option value="{{$value}}" {{ old('second_letter') == $value ? 'selected' : '' }} > {{$value}}</option>
                                    @endforeach                                
                                </select>
                                <x-front.form.error field="second_letter" />

                                <select id="third_letter" name="third_letter" class="form-select">
                                    @foreach (config('app')['arabic_letters'] as $key => $value )
                                        <option value="{{$value}}" {{ old('third_letter') == $value ? 'selected' : '' }} > {{$value}}</option>
                                    @endforeach                                
                                </select>
                                <x-front.form.error field="third_letter" />
                            </div>
                        </div>
                    </div>

                    {{-- Numbers :  ٠ ، ١ ، ٢ ، ٣ ،  ٤ ،   ٥ ، ٦ ،  ٧،  ٨  ،  ٩  --}}
                    <div  class="col  d-flex controls d-flex align-items-center justify-content-start pb-4 position-relative ">
                        <div class="row w-50 with-border textfields py-1 d-flex flex-column align-items-center justify-content-center gap-3  ">
                            
                            {{-- number --}}
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center">
                                <label class="font-tajawal align-self-center"> الأرقام &nbsp; </label>
                                <select id="first_number" name="first_number"  class="form-select cnt_firstNumber">
                                    @foreach (config('app')['arabic_numbers'] as $key => $value )
                                        <option class="font-tajawal" value="{{$value}}" {{ old('first_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                                    @endforeach
                                </select>                               
                                <x-front.form.error field="first_number" />
                            
                                <select id="second_number" name="second_number" class="form-select cnt_secondNumber">
                                    @foreach (config('app')['arabic_numbers'] as $key => $value )
                                        <option class="font-tajawal" value="{{$value}}" {{ old('first_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                                    @endforeach                                
                                </select>
                                <x-front.form.error field="second_number" />
                            
                                <select id="third_number" name="third_number" class="form-select cnt_thirdNumber">
                                    @foreach (config('app')['arabic_numbers'] as $key => $value )
                                        <option class="font-tajawal" value="{{$value}}" {{ old('first_number') == $value ? 'selected' : '' }} > {{$value}}</option>
                                    @endforeach                                    
                                </select>
                                <x-front.form.error field="third_number" />
                            
                                <select id="fourth_number" name="fourth_number" class="form-select cnt_fourthNumber">
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
                                    <div class="switch-field">
                                        <div class=" form-check">
                                            <input class="form-check-input" name="validity_of_periodic_examination" value="جديد" type="radio" id="validity_of_periodic_examination_new"  {{ old('validity_of_periodic_examination') == "جديد" ? 'checked' : '' }}>
                                            <label class="form-check-label fw-bold font-tajawal"  for="validity_of_periodic_examination_new"> جديد </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="validity_of_periodic_examination" value="منتهي" type="radio" id="validity_of_periodic_examination_expired" {{ old('validity_of_periodic_examination') == "منتهي" ? 'checked' : '' }} >
                                            <label class="form-check-label fw-bold font-tajawal" for="validity_of_periodic_examination_expired">منتهي</label>
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
                                    <div class="switch-field">
                                        <div class=" form-check">
                                            <input class="form-check-input" name="validity_of_driving_form" value="ساري" type="radio" id="validity_of_driving_form_new" {{ old('validity_of_driving_form') == "ساري" ? 'checked' : '' }} >
                                            <label class="form-check-label fw-bold font-tajawal"  for="validity_of_driving_form_new">ساري</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="validity_of_driving_form" value="غير ساري" type="radio" id="validity_of_driving_form_expired" {{ old('validity_of_driving_form') == "غير ساري" ? 'checked' : '' }} >
                                            <label class="form-check-label fw-bold font-tajawal" for="validity_of_driving_form_expired">غير ساري </label>
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
                                    <div class="switch-field">
                                        <div class=" form-check">
                                            <input class="form-check-input" name="vehicle_insurance_status" value="جديد" type="radio" id="vehicle_insurance_status_new" {{ old('vehicle_insurance_status') == "جديد" ? 'checked' : '' }} >
                                            <label class="form-check-label fw-bold font-tajawal" for="vehicle_insurance_status_new">جديد</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="vehicle_insurance_status" value="منتهي" type="radio" id="vehicle_insurance_status_expired" {{ old('vehicle_insurance_status') == "منتهي" ? 'checked' : '' }} >
                                            <label class="form-check-label fw-bold font-tajawal" for="vehicle_insurance_status_expired">منتهي</label>
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
                                    <div class="switch-field">
                                        <div class=" form-check">
                                            <input class="form-check-input" name="are_there_violations" value="نعم" type="radio"  id="are_there_violations_yes"  {{ old('are_there_violations') == "نعم" ? 'checked' : '' }} >
                                            <label class="form-check-label fw-bold font-tajawal"  for="are_there_violations_yes">نعم</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="are_there_violations" value="لا" type="radio"  id="are_there_violations_no"  {{ old('are_there_violations') == "لا" ? 'checked' : '' }} >
                                            <label class="form-check-label fw-bold font-tajawal" for="are_there_violations_no">لا</label>
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
