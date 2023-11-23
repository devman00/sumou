@extends('layouts.front-layout')

@section('content')
   
<section class="ad-page mt-4">
    <div class="container">
        <!-- <div class="ad-title mb-5 ">
            <p class="d-flex  align-items-center gap-1"> رقم الإعلان  <span class="ad-id-title fw-bold"> 231011707 </span> </p>
        </div> -->

        <!-- ------ Law7a -----  -->
        <div class="ad-lawha mb-5 px-3">
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
        <!-- bloc 1 ---------  -->
        <div class="ad-card-details card-details p-4 p-lg-5 p-md-5">
            <div class="row"><div class="col-lg-12 col-md-12 col-12 text-center mb-3"><h5 class="mb-4">  <span> <i class="las la-user-alt fs-2em px-0"></i> {{ $ad->user->name }} </span></h5></div></div>
            <div class="row mb-4">
                <div class="col-lg-4 col-md-4 col-4"><i class="las la-map-marker"></i>  {{ $ad->user->city }} جدة </div>
                <div class="col-lg-4 col-md-4 col-4"><i class="las la-clock"></i> {{ $ad->created_at->diffForHumans() }} </div>
                <div class="col-lg-4 col-md-4 col-4"><i class="las la-hashtag"></i> 000{{ $ad->id }} </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-lg-7 col-md-7 col-7 ps-md-5 ps-lg-5"><h5> {{-- <i class="las la-dollar-sign"></i> السعر ر.س </h5></div>
                <div class="col-lg-5 col-md-5 col-5"><span class="accept btn-sm">3200 ريال</span></div>                        
            </div>
            <div class="row mb-3">
                <div class="col-lg-7 col-md-7 col-7 ps-md-5 ps-lg-5"><h5> {{--   <i class="las la-wrench"></i>--}} سريان الفحص الدوري </h5></div>
                <div class="col-lg-5 col-md-5 col-5"><span class=" {{  $ad->validity_of_periodic_examination == 'جديد' ? 'accept' : 'reject' }} btn-sm"> <i class="las la-{{ $ad->validity_of_periodic_examination == 'جديد' ? 'check' : 'times' }}"></i> {{ $ad->validity_of_periodic_examination }} </span></div>                        
            </div>
            <div class="row mb-3">
                <div class="col-lg-7 col-md-7 col-7 ps-md-5 ps-lg-5"><h5> {{-- <i class="las la-wrench"></i> --}}  سريان إستمارة السير </h5></div>
                <div class="col-lg-5 col-md-5 col-5"><span class=" {{  $ad->validity_of_driving_form == 'ساري' ? 'accept' : 'reject' }} btn-sm"> <i class="las la-{{ $ad->validity_of_driving_form == 'ساري' ? 'check' : 'times' }}"></i> {{ $ad->validity_of_driving_form }} </span></div>                        
            </div>
            <div class="row mb-3">
                <div class="col-lg-7 col-md-7 col-7 ps-md-5 ps-lg-5"><h5> {{--  <i class="las la-wrench"></i> --}} حالة تأمين المركبة </h5></div>
                <div class="col-lg-5 col-md-5 col-5"><span class=" {{  $ad->vehicle_insurance_status == 'جديد' ? 'accept' : 'reject' }} btn-sm"> <i class="las la-{{ $ad->vehicle_insurance_status == 'جديد' ? 'check' : 'times' }}"></i> {{ $ad->vehicle_insurance_status }} </span></div>                        
            </div>
            <div class="row mb-4">
                <div class="col-lg-7 col-md-7 col-7 ps-md-5 ps-lg-5"><h5> {{--  <i class="las la-wrench"></i> --}}  هل توجد مخالفات؟ </h5></div>
                <div class="col-lg-5 col-md-5 col-5"><span class="  {{  $ad->are_there_violations == 'لا' ? 'accept' : 'reject' }} btn-sm"> <i class="las la-{{ $ad->are_there_violations == 'لا' ? 'check' : 'times' }}"></i>  {{ $ad->are_there_violations }} </span></div>                        
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-lg-4 col-md-4 col-4 m-auto"><button type="button" class="btn btn-primary accept w-100" data-bs-toggle="modal" data-bs-target="#contactModal">تواصل</button></div>
            </div>                 
        </div>

        <!-- <Separator> ------------------------- -->
        <hr>
      
        
    </div>
</section>

{{-- ------- Contact Modal -------  --}}
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title h4" id="contactModalLabel"> تواصل مع البائع</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                @if ($ad->user->whatsapp != '' && $ad->user->whatsapp != 0)
                <div class="col-lg-6 col-md-6 col-6">
                    <a href="https://wa.me/00966{{$ad->user->whatsapp}}" target="_blank" class="whatsapp">
                        <i class=" lab la-whatsapp d-flex justify-content-center align-content-center flex-column text-center" style="font-size: 30px; color: green;"> <span class="fs-13px fw-bold"> الواتس اب </span></i>
                    </a>
                </div>
                @endif
                <div class="col-lg-6 col-md-6 col-6">
                    <a href="tel:00966{{$ad->phone}}" class="whatsapp text-dark-blue">
                        <i class=" las la-phone d-flex justify-content-center align-content-center flex-column text-center" style="font-size: 30px;"> <span class="fs-13px fw-bold ltr"> +966{{$ad->phone }} </span></i>
                    </a>
                </div>

                <div class="p-3 pb-0 mt-3">
                    <div class="alert alert-danger fs-13px"><b> <i class="las la-exclamation-circle fs-16px"></i> تنوية  </b>: منصة سمو غير مسؤولة عن أي حوالات أو عمليات بيع تتم خارج الموقع </div>
                </div>
            </div>
            

        </div>
      </div>
    </div>
</div>  

@endsection
