@extends('layouts.front-layout')
@section('content')
    <!-- Account begin ============================-->
    <section class="dashboard d-flex flex-column justify-content-between ">
        <div class="row">
            <!-- Sidebar ----  -->
            @includeIf('layouts.front.partials.sidebar')
            
            <!-- ------ Content  -->
            <div class="col-md-10 col-lg-10 py-6 data px-0">
                <div class="container px-3 mx-2 vh-md-100 vh-lg-100">
                    <div class="bloc">
                        
                        {{-- Tabs Navigation ------ --}}
                        <ul class="nav nav-pills talabat-ul mb-3 nav-justified" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-warida-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-warida" type="button" role="tab"
                                    aria-controls="pills-warida" aria-selected="false">الطلبات
                                    الواردة</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="pills-morsala-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-morsala" type="button" role="tab"
                                    aria-controls="pills-morsala" aria-selected="true">الطلبات المرسلة
                                </button>
                            </li>
                        </ul>

                        {{-- Tabs Content -----  --}}
                        <div class="tab-content mt-3" id="pills-tabContent">
                            
                            {{-- Incoming Requests ---  --}}
                            <div class="tab-pane fade show active" id="pills-warida" role="tabpanel" aria-labelledby="pills-warida-tab">
                                <div class="talabat-form align-items-center bg-white" style=" display: flex;flex-wrap: wrap;">
                                   
                                    @forelse ($incoming_requests as $request)
                                    <div class="col p-3 {{$request->status}}">
                                        {{-- Date ---  --}}
                                        <p class="m-0 text- pt-2 ps-1 fs-14px text-decoration-underline" style=" color: #8d8162; "> <i class="las la-clock pe-1"></i> 
                                            {{ $request->created_at->diffForHumans()}}  <span class="me-1 float-end">  {!! ($request->status == 'accepted' && $request->request_type == 'confirm') ? '<span class="text-success border border-dashed border-success px-2 py-1"> طلب مؤكد </span> ' : __('requests.'.$request->status)!!}   </span>
                                        </p>
                                        <div class="row details d-flex flex-row justify-content-center align-items">
                                            <div class="talab-details-- col-8--">
                                                {{-- Alert if seller sent requests to himself => requests comming from the same user (User_N ID = Vendor N Id)  --}}
                                                <span class="text-danger fw-bold"> {{ $request->vendor_national_id == $request->user->national_id ?  'Vendor N_ID : '.$request->vendor_national_id : '' }} </span> 
                                               
                                                <a href="{{route('requests.show',$request->id)}}">
                                                    <div class="ad-lawha mt-3 ">
                                                        <x-front.ad.plate {{-- :ad="$ad->id" --}} :first_letter="$request->first_letter" :second_letter="$request->second_letter"
                                                            :third_letter="$request->third_letter" :first_number="$request->first_number" :second_number="$request->second_number" :third_number="$request->third_number"
                                                            :fourth_number="$request->fourth_number" />
                                                    </div>
                                                </a>
                                                <!-- ------- Accept/Refuse  -->
                                                <div class="talab-manage d-flex flex-row justify-content-center___ align-items-center m-auto mt-3">
                                                    <p class="from-info m-0 ">
                                                        <span class="fs-14px text-black"> من :  </span>
                                                        <img class=""
                                                            style=" width: 40px;border: 1px solid #ddd;border-radius: 2px; "
                                                            src="{{ asset('assets/') }}/img/icons/Property 1=Default.png"
                                                            alt="">
                                                         <p class="fw-bold  m-0" style="color: #3e3e3e!important; "> ( N_ID: {{$request->user->national_id}} ) {{ $request->user->name }}  </p>
                                                    </p>
                                                    {{-- <button class="accept btn-sm fs-12px fw-bold"> قبول  </button> --}}
                                                    @if($request->status == 'pending')
                                                    <div class="accept_request_form">
                                                        {{-- <button href="#" class="btn position-relative top-0">تسجيل الخروج</button> --}}
                                                        <form method="POST" action="{{ route('requests.update', $request->id) }}">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="confirm_request" value="accepted">
                                                            <input type="hidden" name="request_id" value="{{ $request->id }}">
                                                            <a href="{{ route('requests.update', $request->id) }}"
                                                                class="btn btn-sm accept fs-12px fw-bold"
                                                                onclick="event.preventDefault();this.closest('form').submit();">
                                                                قبول
                                                            </a>
                                                        </form>
                                                    </div>
                                                    <div class="accept_request_form">
                                                        <form method="POST" action="{{ route('requests.update', $request->id) }}">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="confirm_request" value="refused">
                                                            <input type="hidden" name="request_id" value="{{ $request->id }}">
                                                            <a href="{{ route('requests.update', $request->id) }}"
                                                                class="btn btn-sm reject fs-12px fw-bold"
                                                                onclick="event.preventDefault();this.closest('form').submit();">
                                                                رفض
                                                            </a>
                                                        </form>
                                                    </div>                                                        
                                                    
                                                    @else
                                                        @if ($request->status == 'accepted')
                                                            <b> <i class="las la-check fs-2em pe-2 text-success fw-bolder"></i> </b>
                                                        {{-- @elseif ($request->status == 'rejected')
                                                        @elseif ($request->status == 'canceled') --}}
                                                        @endif
                                                    {{-- <p class=""> {{ __('requests.'.$request->status) }}</p> --}}
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
                                    <div class="alert alert-warning"> لا توجد لديك طلبات واردة للمبايعة. </div>
                                    @endforelse
                                </div>
                            </div>

                            {{-- Created Requests --}}
                            <div class="tab-pane fade " id="pills-morsala" role="tabpanel"
                                aria-labelledby="pills-morsala-tab">
                                <div class="talabat-form align-items-center bg-white" style=" display: flex;flex-wrap: wrap;">
                                   
                                    @forelse ($created_requests as $request)
                                    <!-- ------- Item  --------  -->
                                    <div class="col p-3 {{$request->status}}">
                                        {{-- Date ---  --}}
                                        <p class="m-0 text- pt-2 ps-1 fs-14px text-decoration-underline" style=" color: #8d8162; "> <i class="las la-clock pe-1"></i> 
                                            {{ $request->created_at->diffForHumans()}}
                                            {{-- {{ $request->created_at->diffForHumans()}}  <span class="me-1 float-end">  {!! ($request->status == 'accepted' && $request->request_type == 'confirm') ? '<span class="text-success border border-dashed border-success px-2 py-1"> طلب مؤكد </span> ' : __('requests.'.$request->status)!!}   </span> --}}
                                        </p>

                                        <div class="row details d-flex flex-row justify-content-center align-items">
                                            <div class="talab-details-- col-8--">
                                                
                                                <a href="{{route('requests.show',$request->id)}}">

                                                    <div class="ad-lawha mt-3 ">
                                                        <x-front.ad.plate {{-- :ad="$ad->id" --}} :first_letter="$request->first_letter" :second_letter="$request->second_letter"
                                                            :third_letter="$request->third_letter" :first_number="$request->first_number" :second_number="$request->second_number" :third_number="$request->third_number"
                                                            :fourth_number="$request->fourth_number" />
                                                    </div>
                                                </a>
                                                <!-- ------- Accept/Refuse  -->
                                                {{-- <div class="talab-manage d-flex flex-row justify-content-center___ align-items-center m-auto mt-3">
                                                    <p class="from-info m-0 ">
                                                        <img class=""
                                                            style=" width: 40px;border: 1px solid #ddd;border-radius: 2px; "
                                                            src="{{ asset('assets/') }}/img/icons/Property 1=Default.png"
                                                            alt="">
                                                    <p class="fw-bold  m-0" style="color: #3e3e3e!important; "> فلان بن فلان </p>
                                                    </p>
                                                    <div class="accept_request_form">
                                                        <form method="POST" action="{{ route('requests.update', $request->id) }}">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="accept_request" value="accepted">
                                                            <input type="hidden" name="request_id" value="{{ $request->id }}">
                                                            <a href="{{ route('requests.update', $request->id) }}"
                                                                class="btn btn-sm accept fs-12px fw-bold"
                                                                onclick="event.preventDefault();this.closest('form').submit();">
                                                                قبول
                                                            </a>
                                                        </form>
                                                    </div>
                                                    <div class="accept_request_form">
                                                        <form method="POST" action="{{ route('requests.update', $request->id) }}">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="accept_request" value="refused">
                                                            <input type="hidden" name="request_id" value="{{ $request->id }}">
                                                            <a href="{{ route('requests.update', $request->id) }}"
                                                                class="btn btn-sm reject fs-12px fw-bold"
                                                                onclick="event.preventDefault();this.closest('form').submit();">
                                                                رفض
                                                            </a>
                                                        </form>
                                                    </div>
                                                </div> --}}

                                                <!-- By -----  -->
                                                <p class="m-0 text-black pt-2 ps-1"> <i class="las la-share pe-2"></i> مرسلة لصاحب الهوية : <b> {{$request->vendor_national_id}} </b>  </p>
                                                {{-- <p class="m-0 text-black pt-2 ps-1"> <i class="las la-clock pe-2"></i>  {{ $request->created_at->diffForHumans()}}  </p> --}}
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="alert alert-warning"> لا توجد لديك طلبات للمبايعة. </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bloc 2 ---  -->
                    <div class="bloc">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Account Close ============================-->
@endsection
