@props([
    'first_letter',
    'second_letter',
    'third_letter',
    'first_number',
    'second_number',
    'third_number',
    'fourth_number',
    'price',
    'phone',
    'date',
    'allow_contact' => 0,
    'allow_actions' => 0,
    'whatsapp',
    'username',
    'ad',
    'in_auction' => 'no',
])   

                <!-- Item 1 -----  -->
                <div class="homepage-lawha">
                    <div class="share-btn p-3 pb-0"> <i class="fas fa-share-alt"></i> 
                        <span class="published-date float-end fs-15px"> {{ $date }} <i class="las la-history"></i> </span> 
                    </div>

                    <a href="{{route('ads.show', $ad)}}" class="card-link">
                        <div class="ad-lawha mt-3 px-3 ">

                            <div class="lawha">
                                <div class="ksa-board"><img width="18" height="18" src="{{ asset('assets/') }}/img/icons/ksa.png" class="chakra-image css-y45xgh">
                                    <p style="font-size: 6px!important;margin-bottom: 5px!important;">السعودية</p>
                                    <p style="font-size: 12px!important;">k</p>
                                    <p style="font-size: 12px!important;">s</p>
                                    <p style="font-size: 12px!important;margin-bottom: 8px!important;">a</p>
                                    <div style=" width: 10px!important;
                                                height: 10px!important;
                                                border-radius: 50%!important;
                                                background-color: black !important;
                                                margin: 2px auto auto!important;">
                                    </div>
                                </div>
                                <div class="informations">
                                    <div class="letters">
                                        <div class="arabic-version">
                                            <p class="first"> {{ $first_letter }} </p>
                                            <p class="second"> {{ $second_letter }} </p>
                                            <p class="third"> {{ $third_letter }} </p>
                                        </div>
                                        <div class="english-version">
                                            <p class="first">{{ config('app')['english_letters'][$first_letter] }}</p>
                                            <p class="second"> {{ config('app')['english_letters'][$second_letter] }} </p>
                                            <p class="third"> {{ config('app')['english_letters'][$third_letter] }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="serial-number ltr d-block">
                                    <div class="numbers">
                                        <div class="arabic">
                                            <p class="first"> {{ $first_number }} </p>
                                            <p class="second"> {{ $second_number }} </p>
                                            <p class="third"> {{ $third_number }} </p>
                                            <p class="fourth"> {{ $fourth_number }} </p>
                                        </div>
                                        <div class="english">
                                            <p class="first">@php echo str_replace(array('١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'), array('1', '2', '3', '4', '5', '6', '7', '8', '9'), $first_number) @endphp </p>
                                            <p class="second">@php echo str_replace(array('١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'), array('1', '2', '3', '4', '5', '6', '7', '8', '9'), $second_number) @endphp </p>
                                            <p class="third"> @php echo str_replace(array('١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'), array('1', '2', '3', '4', '5', '6', '7', '8', '9'), $third_number) @endphp</p>
                                            <p class="fourth"> @php echo str_replace(array('١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'), array('1', '2', '3', '4', '5', '6', '7', '8', '9'), $fourth_number) @endphp</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </a>

                    <div class="price d-flex justify-content-center align-items-center gap-1">

                        <i class="las la-tags"></i>

                        <p class="m-0 fw-bold text-center text-black-- text-dark-gray"> 
                            @if ($in_auction == 'نعم')
                                <span class="card-price px-0">على السوم</span>
                            @else
                                <span class="card-price px-0">{{ $price }}.00</span> ريال
                            @endif
                        </p>
                    </div>


                    {{-- Contact ---- --}}
                    @if ($allow_contact === 1)
                        <div class="infos d-flex justify-content-between align-items-center px-3">
                            <div class=" number d-flex justify-content-center align-content-center flex-column">
                                <p class="m-0 text-black">رقم التواصل</p>
                                <p class="m-0 text-dark-blue ltr"> +966{{ $phone }} </p>
                            </div>

                            @if ($whatsapp != '' && $whatsapp != 0)
                            <a href="https://wa.me/+966{{ $whatsapp }}" target="_blank" class="whatsapp">
                                <i class=" lab la-whatsapp d-flex justify-content-center align-content-center flex-column text-center"
                                    style="font-size: 30px; color: green;"> <span class="fs-13px fw-bold"> الواتس اب </span>
                                </i>
                            </a>
                            @endif

                            <div class=" d-flex publisher justify-content-center align-content-center flex-column">
                                <div class="name  d-flex justify-content-start flex-row align-content-center">
                                    <i class="las  d-flex justify-content-center align-items-center la-user"
                                        style="    font-size: 19px !important;"></i>
                                    <p class="m-0 " style="    font-size: 14px !important;"> {{ $username }} </p>

                                </div>
                                <div class="is-verified  d-flex justify-content-start align-content-center flex-row">
                                    <i class="las la-check-circle d-flex justify-content-center align-items-center"
                                        style="color: green ;"></i>
                                    <p class="m-0 " style="    font-size: 14px !important;color: green;"> موثق</p>

                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- ----- Action Buttons --}}
                    @if ($allow_actions ===1)    
                        <div class="infos d-flex justify-content-between align-items-center px-3">
                            <a href="{{route('ads.edit', $ad)}}" class="btn btn-success fs-14px py-1">
                                <i class="las la-edit"></i>
                                تعديل اللوحة 
                            </a>

                            {{-- <a href="#" class="btn btn-danger fs-14px py-1 px-2 px-md-3 px-lg-3">
                                <i class="las la-trash-alt"></i>
                                حذف اللوحة 
                            </a> --}}
                            <button class="btn btn-danger fs-14px py-1 px-2 px-md-3 px-lg-3">

                           
                            <form method="POST"
                                    action="{{ route('ads.destroy', $ad) }}"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('ads.destroy', $ad) }}"
                                        class="btn-delete text-white"
                                        onclick="if(confirm('هل تود حذف هذا العنصر؟')) { event.preventDefault();
                                        this.closest('form').submit();} else { return false }">
                                       <i class="las la-trash-alt text-white"></i>  حذف 
                                    </a>
                            </form>

                            </button>
                        </div>
                    @endif

                </div> <!-- END Item 1 -->
