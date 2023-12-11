@extends('layouts.front-layout')
@section('content')
    <!-- Account begin ============================-->
    <section class="dashboard d-flex flex-column justify-content-between ">
        <div class="row">
            <!-- Sidebar ----  -->
            @includeIf('layouts.front.partials.sidebar')
            
            <!-- ------ Content  -->
            <div class="col-md-10 col-lg-10 py-3 my-6 border-start border-success border-2">
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
                            </div> 
                        </div>
                        
                        {{-- vertical separator  --}}
                        <div class="col-md-1 col-lg-1"></div>

                        {{-- Payments  --}}
                        <div class="col-md-5 col-lg-5">
                            <h4 class="fw-bold p-3 px-3 px-lg-0 px-md-0 underline text-dark-blue">  التحويلات المالية  </h4>                      
                        </div>

                        <div class="note"> 
                            <small class="fw-bold alert alert-warning py-2">  <i class="las la-exclamation pe-2"></i> عند إتمام عملية نقل الملكية سيقوم سمو بتحويل المبلغ إلى البائع </small>
                        </div>
                    </div>
                    
                    {{-- Confirm request  --}}
                    @if ($adRequest->request_type == 'sell' && $adRequest->status == 'accepted')
                        {{-- Confirmation ---  --}}
                        <a href="{{route('requests.confirm',['id' => $adRequest->id ])}}" class="btn btn-primary mt-4"> تأكيد المبايعة </a>
                    @endif

                    {{-- ACCEPT / REJECT request  --}}
                    @if ($adRequest->request_type == 'sell' && $adRequest->status == 'pending')
                    <div class="talab-manage d-flex flex-row align-items-center m-auto mt-4">
                        
                        {{-- ACCEPT ----  --}}
                        <div class="accept_request_form">
                            {{-- <button href="#" class="btn position-relative top-0">تسجيل الخروج</button> --}}
                            <form method="POST" action="{{ route('requests.update', $adRequest->id) }}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="confirm_request" value="accepted">
                                <input type="hidden" name="request_id" value="{{$adRequest->id}}">
                                <a href="{{ route('requests.update', $adRequest->id) }}" class="btn btn-sm accept fs-12px fw-bold"
                                    onclick="event.preventDefault();this.closest('form').submit();">
                                    قبول
                                </a>
                            </form>
                        </div>

                        {{-- REFUSE ----  --}}
                        <div class="accept_request_form">
                            <form method="POST" action="{{ route('requests.update', $adRequest->id) }}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="confirm_request" value="refused">
                                <input type="hidden" name="request_id" value="{{$adRequest->id}}">
                                <a href="{{ route('requests.update', $adRequest->id) }}" class="btn btn-sm reject fs-12px fw-bold"
                                    onclick="event.preventDefault();this.closest('form').submit();">
                                    رفض
                                </a>
                            </form>
                        </div>
                    </div>
                    @endif

                </div>
            </div>

        </div>
    </section>
    <!-- Account Close ============================-->
@endsection
