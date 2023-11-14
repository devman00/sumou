@extends('layouts.master')

@section('title')
تعديل اللوحة
@endsection

@section('content')

    {{-- page heading  --}}
    <x-admin.page-heading heading=" تعديل اللوحة &nbsp;&nbsp; |  &nbsp;&nbsp; {{ $ad->first_letter.' '.$ad->second_letter.' '.$ad->third_letter.' / '.$ad->first_number.''.$ad->second_number.''.$ad->third_number.''.$ad->fourth_number }}"/>

    <div class="page-content">

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card p-3">
                        <div class="card-header"></div>
                        <div class="card-content">
                            <div class="card-body">

                                <div class="ad-lawha mb-5">
                                    <x-front.ad.plate 
                                        :first_letter="$ad->first_letter"
                                        :second_letter="$ad->second_letter"
                                        :third_letter="$ad->third_letter"
                                        :first_number="$ad->first_number"
                                        :second_number="$ad->second_number"
                                        :third_number="$ad->third_number"
                                        :fourth_number="$ad->fourth_number"
                                    />
                                </div>


                                <form action="{{ route('admin.ads.update', $ad->id) }}" method="post" class="form form_1" enctype="multipart/form-data">
                                    <div class="row">
                                        @csrf
                                        @method('PUT')

                                        {{----  Plate Type  --}}
                                        <div class="col-md-4 col-lg-4 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="plate_type" > نوع اللوحة </x-admin.form-label>
                                                    <x-admin.form-select id="" name="plate_type" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                            <option value="خصوصي" {{ old('plate_type ', $ad->plate_type) == "خصوصي"  ? 'selected' : '' }} >خصوصي </option>  
                                                            <option value="نقل" {{  old('plate_type ', $ad->plate_type) == "نقل" ? 'selected' : '' }} >نقل </option>  
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="plate_type"/>
                                            </x-admin.form-group>                                        
                                        </div>
    
                                        {{----  Price  --}}
                                        <div class="col-md-4 col-lg-4 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="price" > السعر </x-admin.form-label>
                                                <x-admin.form-input id="" name="price" placeholder="أضف السعر" value="{{ $ad->price }}" />
                                                <x-admin.form-error field="price"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{----  Phone  --}}
                                        <div class="col-md-4 col-lg-4 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="phone" > رقم التواصل </x-admin.form-label>
                                                <x-admin.form-input id="" name="phone" placeholder="أضف رقم التواصل" value="{{ $ad->phone }}" />
                                                <x-admin.form-error field="phone"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{---- First Letter  --}}
                                        <div class="col-md-4 col-lg-4 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="first_letter" > الحرف الأول </x-admin.form-label>
                                                    <x-admin.form-select id="" name="first_letter" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                        @foreach (config('app')['arabic_letters'] as $key => $value )
                                                            <option value="{{$value}}" {{ old('first_letter', $ad->first_letter) == $value ? 'selected' : '' }} > حرف {{$value}}</option>
                                                        @endforeach   
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="first_letter"/>
                                            </x-admin.form-group>                                        
                                        </div>
        
                                        {{---- Second Letter  --}}
                                        <div class="col-md-4 col-lg-4 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="second_letter" > الحرف الثاني </x-admin.form-label>
                                                    <x-admin.form-select id="" name="second_letter" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                        @foreach (config('app')['arabic_letters'] as $key => $value )
                                                            <option value="{{$value}}" {{ old('second_letter', $ad->second_letter) == $value ? 'selected' : '' }} > حرف {{$value}}</option>
                                                        @endforeach   
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="second_letter"/>
                                            </x-admin.form-group>                                        
                                        </div>

                                        {{---- Third Letter  --}}
                                        <div class="col-md-4 col-lg-4 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="third_letter" > الحرف الثالث </x-admin.form-label>
                                                    <x-admin.form-select id="" name="third_letter" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                        @foreach (config('app')['arabic_letters'] as $key => $value )
                                                            <option value="{{$value}}" {{ old('third_letter', $ad->third_letter) == $value ? 'selected' : '' }} > حرف {{$value}}</option>
                                                        @endforeach   
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="third_letter"/>
                                            </x-admin.form-group>                                        
                                        </div> 


                                        {{---- First Number  --}}
                                        <div class="col-md-3 col-lg-3 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="first_number" > الرقم الأول </x-admin.form-label>
                                                    <x-admin.form-select id="" name="first_number" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                        @foreach (config('app')['arabic_numbers'] as $key => $value )
                                                            <option value="{{$value}}" {{ old('first_number', $ad->first_number) == $value ? 'selected' : '' }} > حرف {{$value}}</option>
                                                        @endforeach   
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="first_number"/>
                                            </x-admin.form-group>                                        
                                        </div>

                                        {{---- Second Number  --}}
                                        <div class="col-md-3 col-lg-3 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="second_number" > الرقم الثاني </x-admin.form-label>
                                                    <x-admin.form-select id="" name="second_number" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                        @foreach (config('app')['arabic_numbers'] as $key => $value )
                                                            <option value="{{$value}}" {{ old('second_number', $ad->second_number) == $value ? 'selected' : '' }} > حرف {{$value}}</option>
                                                        @endforeach   
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="second_number"/>
                                            </x-admin.form-group>                                        
                                        </div>

                                        {{---- Third Number  --}}
                                        <div class="col-md-3 col-lg-3 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="third_number" > الرقم الثالث </x-admin.form-label>
                                                    <x-admin.form-select id="" name="third_number" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                        @foreach (config('app')['arabic_numbers'] as $key => $value )
                                                            <option value="{{$value}}" {{ old('third_number', $ad->third_number) == $value ? 'selected' : '' }} > حرف {{$value}}</option>
                                                        @endforeach   
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="plate_type"/>
                                            </x-admin.form-group>                                        
                                        </div>

                                        {{---- Fourth Number  --}}
                                        <div class="col-md-3 col-lg-3 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="fourth_number" > الرقم الرابع </x-admin.form-label>
                                                    <x-admin.form-select id="" name="fourth_number" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                        @foreach (config('app')['arabic_numbers'] as $key => $value )
                                                            <option value="{{$value}}" {{ old('fourth_number', $ad->fourth_number) == $value ? 'selected' : '' }} > حرف {{$value}}</option>
                                                        @endforeach   
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="fourth_number"/>
                                            </x-admin.form-group>                                        
                                        </div>


                                        {{----  validity_of_periodic_examination  --}}
                                        <div class="col-md-3 col-lg-3 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="validity_of_periodic_examination" > سريان الفحص الدوري  </x-admin.form-label>
                                                    <x-admin.form-select id="" name="validity_of_periodic_examination" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                            <option value="جديد" {{ old('validity_of_periodic_examination ', $ad->validity_of_periodic_examination) == "جديد"  ? 'selected' : '' }} >جديد </option>  
                                                            <option value="منتهي" {{  old('validity_of_periodic_examination ', $ad->validity_of_periodic_examination) == "منتهي" ? 'selected' : '' }} >منتهي </option>  
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="validity_of_periodic_examination"/>
                                            </x-admin.form-group>                                        
                                        </div>
                                        
                                        {{----  validity_of_driving_form  --}}
                                        <div class="col-md-3 col-lg-3 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="validity_of_driving_form" >  سريان استمارة السير </x-admin.form-label>
                                                    <x-admin.form-select id="" name="validity_of_driving_form" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                            <option value="ساري" {{ old('validity_of_driving_form ', $ad->validity_of_driving_form) == "ساري"  ? 'selected' : '' }} >ساري </option>  
                                                            <option value="غير ساري" {{  old('validity_of_driving_form ', $ad->validity_of_driving_form) == "غير ساري" ? 'selected' : '' }} >غير ساري </option>  
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="validity_of_driving_form"/>
                                            </x-admin.form-group>                                        
                                        </div>

                                        {{----  vehicle_insurance_status  --}}
                                        <div class="col-md-3 col-lg-3 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="vehicle_insurance_status" >  حالة تأمين المركبة </x-admin.form-label>
                                                    <x-admin.form-select id="" name="vehicle_insurance_status" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                            <option value="جديد" {{ old('vehicle_insurance_status ', $ad->vehicle_insurance_status) == "جديد"  ? 'selected' : '' }} >جديد </option>  
                                                            <option value="منتهي" {{  old('vehicle_insurance_status ', $ad->vehicle_insurance_status) == "منتهي" ? 'selected' : '' }} >منتهي </option>  
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="vehicle_insurance_status"/>
                                            </x-admin.form-group>                                        
                                        </div>

                                        {{----  are_there_violations  --}}
                                        <div class="col-md-3 col-lg-3 col mb-4">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="are_there_violations" >  هل توجد مخالفات؟ </x-admin.form-label>
                                                    <x-admin.form-select id="" name="are_there_violations" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                            <option value="نعم" {{ old('are_there_violations ', $ad->are_there_violations) == "نعم"  ? 'selected' : '' }} >نعم </option>  
                                                            <option value="لا" {{  old('are_there_violations ', $ad->are_there_violations) == "لا" ? 'selected' : '' }} >لا </option>  
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="are_there_violations"/>
                                            </x-admin.form-group>                                        
                                        </div>

                                        {{----  in_auction  --}}
                                        <div class="col-md-3 col-lg-3 col">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="in_auction" >  على السوم؟ </x-admin.form-label>
                                                    <x-admin.form-select id="" name="in_auction" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                            <option value="نعم" {{ old('in_auction ', $ad->in_auction) == "نعم"  ? 'selected' : '' }} >نعم </option>  
                                                            <option value="لا" {{  old('in_auction ', $ad->in_auction) == "لا" ? 'selected' : '' }} >لا </option>  
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="in_auction"/>
                                            </x-admin.form-group>                                        
                                        </div>
                                        
                                        {{----  User  --}}
                                        <div class="col-md-3 col-lg-3 col">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="user_id" >  صاحب اللوحة </x-admin.form-label>
                                                    <x-admin.form-select id="" name="user_id" isMultiple="false" >  
                                                        <option value="">إختر</option>
                                                        @foreach ( App\Models\User::latest()->get() as $user )
                                                        <option value="{{ $user->id }}" {{ old('user_id ', $ad->user_id) == $user->id  ? 'selected' : '' }} >{{ $user->name }}  </option>  
                                                        @endforeach
                                                    </x-admin.form-select> 
                                                <x-admin.form-error field="user_id"/>
                                            </x-admin.form-group>                                        
                                        </div>



                                        {{----  Status  --}}
                                        <div class="col-md-4 col-4 col">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="status" > الحالة </x-admin.form-label>
                                                <x-admin.form-select id="" name="status" isMultiple="false" >  
                                                    <option value=""> إختر </option>
                                                    <option value="{{config('app.ad_status.pending')}}" {{ ($ad->status == config('app')['ad_status']['pending'] ) ? 'selected' : '' }} >{{config('app')['ad_status']['pending']}}</option>
                                                    <option value="{{config('app.ad_status.published')}}" {{ ($ad->status == config('app')['ad_status']['published'] ) ? 'selected' : '' }} >{{config('app')['ad_status']['published']}}</option>
                                                    <option value="{{config('app.ad_status.canceled')}}" {{ ($ad->status == config('app')['ad_status']['canceled'] ) ? 'selected' : '' }} >{{config('app')['ad_status']['canceled']}}</option>
                                                    {{-- <option value="0" {{ ($ad->status != 1 ) ? 'selected' : '' }} >Disabled</option> --}}
                                                </x-admin.form-select> 
                                                <x-admin.form-error field="status"/>
                                            </x-admin.form-group>                                        
                                        </div>
                                        
                                        {{----  Submit  --}}
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1"> تحديث </button>
                                            <a href="{{ route('admin.ads.index')}}" class="btn btn-light-secondary me-1 mb-1"> إلغاء </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
   
@endsection

@section('foot')
<script src="{{ asset('admin/assets/extensions/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/tinymce.js') }}"></script>
@endsection