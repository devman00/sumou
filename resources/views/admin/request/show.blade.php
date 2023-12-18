@extends('layouts.master')

@section('title')
    تفاصيل المبايعة
@endsection

@section('content')
    {{-- page heading  --}}
    <x-admin.page-heading heading=" " />

    {{-- <div class="buttons">
        <a href="{{ route('admin.ads.create') }}" class="btn icon btn-secondary"><i class="bi bi-plus"></i></a>
    </div> --}}


    <div class="page-content">
        <section class="section">

            @php
                $vendor = App\Models\User::where('id',$adRequest->vendor_id)->pluck('name')->first();
            @endphp

            <div class="row bg-white mb-3">
                <h4 class="py-3 px-4 fw-normal">  مبايعة بين :   

                    <i class="fas fa-user-tie ms-3 "></i>   <b>  {{$adRequest->user->name}} </b>(بائع)  <span class="mx-3"> و </span>  <i class="fas fa-user-tag ms-3"></i> <b>  {{$vendor}} </b> <span class="fs-14px">(مشتري)</span>

                </h4>
            </div>

            <div class="row mb-3" id="table-hover-row">
                <div class="col-12 bg-white">
                                
                <!-- ------ Content  -->
                    <div class="container px-3 mx-2 vh-md-100 vh-lg-100">
                        <div class="row">

                            {{-- Plat Details  --}}
                            <div class="col-md-6 col-lg-6 border-end">
                                <h4 class="fw-bold p-3 px-3 px-lg-0 px-md-0 underline text-dark-blue"> تفاصيل اللوحة  </h4>    
                                
                                <div class="p-3">
                                    <div class="ad-lawha mt-3 mb-2">
                                        <x-front.ad.plate :first_letter="$adRequest->first_letter" :second_letter="$adRequest->second_letter"
                                            :third_letter="$adRequest->third_letter" :first_number="$adRequest->first_number" :second_number="$adRequest->second_number" :third_number="$adRequest->third_number"
                                            :fourth_number="$adRequest->fourth_number" />
                                    </div>
                                    <div class="text-black p-3 pb-1">
                                        <p> الرقم التسلسلي : <b> {{ is_null($adRequest->vendor_serial_number) ? 'غير متاح بعد' : $adRequest->vendor_serial_number}}  </b> </p>
                                        <p> حالة الطلب : <b>  {!! ($adRequest->status == 'accepted' && $adRequest->request_type == 'confirm') ? '<span class="text-success border border-dashed border-success px-2 py-1"> طلب مؤكد </span> ' : __('requests.'.$adRequest->status)!!} </b> </p>
                                    </div>
                                    
                                    <hr class="my-0 w-50">

                                    <div class="text-black p-3 pb-1">
                                        <p> ثمن اللوحة : <b> {{$adRequest->plate_price}} ريال </b> </p>
                                        <p> رسوم سمو <br> <small> (شامل 800 ريال الرسوم الحكومية للمركبتين) </small>   : <b> 1450ريال </b> </p>
                                    </div>

                                    <hr class="my-0 w-50">

                                    <div class="text-black p-3 pb-1">
                                        <p class="text-decoration-underline"> هذا الحساب خاص فقط بهذه العملية </p>
                                        <p class="mb-1"> إسم البنك : <b> {{$adRequest->bank_name }} </b> </p>
                                        <p>  الأيبان : <b> {{$adRequest->bank_iban }} </b> </p>
                                    </div>

                                    <hr class="w-50">

                                    <div class=""> <i class="far fa-clock"></i>  {{ $adRequest->created_at->diffForHumans() }} </div>
                                </div> 
                            </div>
                            
                            {{-- vertical separator  --}}
                            <div class="col-md-1 col-lg-1"></div>

                            {{-- Payments  --}}
                            <div class="col-md-5 col-lg-5">
                                <h4 class="fw-bold p-3 px-3 px-lg-0 px-md-0 underline text-dark-blue">  التحويلات المالية  </h4>     
                                
                                @if ($adRequest->status != 'paid')
                                    <p class=""> لم يتم التحويل بعد .</p>
                                    <i class="fas fa-ban text-danger" 
                                    style="
                                    font-size: 2em;
                                    border: 1px dashed #adadad;
                                    border-radius: 100%;
                                    padding: 5px;">
                                    </i>

                                @else
                                <p class=""><i class="far fa-check-circle text-success" style=" font-size: 3em; vertical-align: middle; padding: 0 5px; "></i>  تم إستلام المبلغ بنجاح  </p>

                                
                                @endif
                               
                            </div>

                            {{-- <div class="note"> 
                                <small class="fw-bold alert alert-warning py-2">  <i class="las la-exclamation pe-2"></i> عند إتمام عملية نقل الملكية سيقوم سمو بتحويل المبلغ إلى البائع </small>
                            </div> --}}
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
