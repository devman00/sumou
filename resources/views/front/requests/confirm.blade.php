@extends('layouts.front-layout')

@section('content')
    <!-- Welcome boxes -------  -->
    <section class="affair mt-9 p-0 mt-7">
        <div class="affair-step">
            <div class="container d-flex   justify-content-center  align-items-center">
                <div class=" d-flex align-items-center gap-4 py-3 px-4 bg-white position-relative ">
                    <h4 class=" affair-step-title d-inline-block text-center fw-bold m-0 p-0">مبايعة اللوحات </h4>
                    <p class="m-0"> / </p>
                    <p class="  d-inline-block text-center affair-step-stage m-0"> مرحلة
                        <b class="fw-bolder ms-1 curStep" style="color: var(--dark-blue);"> 2 </b> <span class=""> /
                        </span> 4
                    </p>
                    <i width="36" height="36"></i>
                </div>
            </div>
        </div>

    </section>
    <!-- <section> close ============================-->


    <!-- FORM start ============================-->
    <section class=" fill-details plate-info pt-0 py-6 ">
        <form action="{{ route('requests.update', $r->id) }}" method="post">
            @csrf
            @method('PATCH')

            <!-- ==================================== -->
            <!-- STEP 1  ------>
            <!-- ====================================  -->
            <div class="frmStep01">

                <!------- form 1 : Seller Plat  Review ----->
                <div class="container 	 position-relative bg-white p-3 mb-7">
                    <div class="title mb-4">
                        <div class="box d-flex justify-content-center align-items-center position-absolute top-0 right--1">
                            <i></i>
                        </div>
                        <p class="h3 fw-bold" style="font-size:20px!important">تفاصيل الطلب</p>
                    </div>

                    <div class="row p-3 bg-gray">
                        {{-- Plate ----  --}}
                        <div class="col-md-6 col-lg-6">
                            <div class="bg-white w-100">
                                <div class="ad-lawha mt-3__ m-auto py-3__ pb-1">
                                    <x-front.ad.plate 
                                    :first_letter="$r->first_letter"
                                    :second_letter="$r->second_letter"
                                    :third_letter="$r->third_letter"
                                    :first_number="$r->first_number"
                                    :second_number="$r->second_number"
                                    :third_number="$r->third_number"
                                    :fourth_number="$r->fourth_number"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-lg-1  border-end border-secondary"></div>
                        <div class="col-md-1 col-lg-1"></div>
                         {{-- Price / NationalId / Phone...  --}}
                         <div class="col text-black">
                                <p>سعر اللوحة : 
                                     <b> {{$r->plate_price}} ريال </b>
                                </p>
                               <p> هوية البائع :
                                <b>  {{$r->user->national_id}} </b> 
                                </p>
                                <p> رقم جوال البائع : 
                                    <span class="ltr fw-bold"> {{$r->user->phone}}  </span>
                                </p>
                        </div>
                    </div>
                </div>

                <!------- form 2 : Vendor plat infos ----->
                <div class="container 	 position-relative bg-white p-3 ">
                    <div class="title mb-4">
                        <div class="box d-flex justify-content-center align-items-center position-absolute top-0 right--1">
                            <i></i>
                        </div>
                        <p class="h3 fw-bold" style="font-size:20px!important">معلومات اللوحة الخاصة بك </p>
                    </div>

                    <div class="controls d-flex align-items-center justify-content-between px-3 ">
                        <div class="textfields py-1 d-flex flex-column align-items-start justify-content-center gap-3 col-4 ">
                            <div class="textfield-input mb-2 d-flex justify-content-center align-items-center">
                                <label for="vendor_plate_number">رقم اللوحة </label>
                                <input type="text" name="vendor_plate_number" class="bg-transparent text-right" id="vendor_plate_number"
                                    placeholder="مثال: ح م ر 2224 " value="{{old('vendor_plate_number')}}">
                                <x-front.form.error field="vendor_plate_number" />
                            </div>
                            <div class="textfield-input mb-2 d-flex justify-content-center align-items-center">
                                <label for="vendor_serial_number">الرقم التسلسلي</label>
                                <input type="text" name="vendor_serial_number" class="bg-transparent text-right" id="vendor_serial_number"
                                    placeholder="ادخل الرقم" value="{{old('vendor_serial_number')}}">
                                <x-front.form.error field="vendor_serial_number" />
                            </div>
                            <div class="textfield-input mb-2 d-flex justify-content-center align-items-center">
                                <label for="vendor_national_id"> رقم الهوية </label>
                                <input type="text" name="vendor_national_id" class="bg-transparent text-right bg-gray" id="vendor_national_id"
                                    placeholder=" رقم هوية المشتري" value="{{old('vendor_national_id', auth()->user()->national_id)}}" readonly>
                                <x-front.form.error field="vendor_national_id" />
                            </div>
                        </div>
                        <hr style=" transform:rotate(180deg);" class=" ">
                        {{-- Attachments --------  --}}
                        <!-- <div class="uploads col-7 d-flex flex-row flex-wrap justify-content-center align-items-center ">
                            <p class="w-100 mb-3 fw-bold text-black h4"> المرفقات</p>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="formFile" class="form-label">صورة من الهوية الوطنية</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="col mb-3 ">
                                    <label for="formFile" class="form-label">صورة من الهوية الوطنية</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-3">
                                    <label for="formFile" class="form-label">صورة من الهوية الوطنية</label>
                                    <input class="form-control" placeholder="" type="file" id="formFile">
                                </div>
                                <div class=" col mb-3 ">
                                    <label for="formFile" class="form-label">صورة من الهوية الوطنية</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>

                            </div>


                        </div> -->
                    </div>
                </div>

                <!------- form 3 : Bank Info ----->
                <div class="container 	 position-relative bg-white p-3 mt-3">
                    <div class="title mb-4">
                        <div class="box d-flex justify-content-center align-items-center position-absolute top-0 right--1">
                            <i></i>
                        </div>
                        <p class="h3 fw-bold" style="font-size:20px!important">المعلومات البنكية الخاصة بك</p>
                    </div>

                    <div class="row d-flex controls d-flex align-items-start justify-content-start m-0 ">
                        <div class="col textfields py-1 d-flex flex-column align-items-start justify-content-start gap-3  ">
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center w-50">
                                <label> إسم البنك</label>
                                <select name="vendor_bank_name" class="form-select w-100" id="vendor_bank_name" >
                                    @foreach (config('app.banks_list') as $bank_name)
                                        <option value="{{$bank_name}}" @selected($bank_name == old('vendor_bank_name'))> {{ $bank_name }} </option>
                                    @endforeach
                                </select>
                                <x-front.form.error field="vendor_bank_name" /> 

                            </div>
                            <div class="textfield-input mb-2 d-flex justify-content-start  align-items-center w-50">
                                <label for="vendor_bank_iban"> الايبان</label>
                                <input type="text" name="vendor_bank_iban" class="bg-transparent text-right" id="vendor_bank_iban" placeholder="رقم الأيبان من 11 رقم"
                                        value="{{old('vendor_bank_iban')}}">
                                <x-front.form.error field="vendor_bank_iban" /> 
                            </div>
                        </div>
                        <!-- <hr style=" transform:rotate(180deg);" class=" "> -->
                    </div>
                </div>

                <!------- form 4 : Address ----->
                <div class="container 	 position-relative bg-white p-3 mt-3">
                    <div class="title mb-4">
                        <div class="box d-flex justify-content-center align-items-center position-absolute top-0 right--1">
                            <i></i>
                        </div>
                        <p class="h3 fw-bold" style="font-size:20px!important">معلومات العنوان</p>

                    </div>

                    <div class="row d-flex controls d-flex align-items-start justify-content-start m-0 ">

                        <div class="col textfields py-1 d-flex flex-column align-items-start justify-content-start gap-3  ">
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center w-50">
                                <label> المدينة</label>
                                <select name="vendor_city" class="form-select w-100" id="vendor_city" >
                                    @foreach (config('location.cities') as $city )
                                        <option value="{{$city}}" @selected($city == old('vendor_city') ) > {{$city}}</option>
                                    @endforeach
                                </select>
                                <x-front.form.error field="vendor_city" /> 
                            </div>
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center" >
                                <label for="vendor_address"> العنوان</label>
                                <input type="text" name="vendor_address" class="bg-transparent text-right" id="vendor_address" placeholder=""
                                    style="height: 60px; width: 600px;" value="{{old('vendor_address')}}" >
                                <x-front.form.error field="vendor_address" /> 
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SUBMIT Button (Next & Back Button)  -->
                <div class="next-button p-6">
                    <div class="container__ d-flex justify-content-center gap-3 ">
                        <button id="Step01next" class="btn  btn-primary d-flex justify-content-center align-items-center ">  
                            <i class="las la-arrow-right" style=" margin-left:5px;font-size: 21px;"></i>  التالي
                        </button>
                        <a href="{{route('requests.type')}}" class="btn  btn-secondary d-flex justify-content-center align-items-center "> رجوع <i class="las la-arrow-left" style=" margin-right:5px;font-size: 21px;"></i>  </a>
                    </div>
                </div>

            </div>


            <!-- ============================================================ -->
            <!-- STEP 2  : Authorization via Najez ( التفويض عن طريق ناجز ) ------>
            <!-- ============================================================ -->
            <div class="frmStep02" style="display: none;">

                <!------- form 6 ----->
                <div class="container 	 position-relative bg-white p-3 mt-3">
                    <div class="title not mb-4">
                        <div class="box d-flex justify-content-center align-items-center position-absolute top-0 right--1">
                            <i></i>
                        </div>
                        <p class="h3 fw-bold p-2" style="font-size:20px!important"> التفويض عن طريق ناجز </p>
                    </div>

                    <div class="">
                        <div class=" authorization p-md-4 p-lg-4 border-dashed bg-gray-- mx-md-5 mx-lg-5 mx-1 mb-4 text-black">
                            <p class="p-4">
                                تتطلب عملية نقل اللوحات إلى تفويض أحد شركائنا لإنجاز العملية عن طريق المرور السعودي <br>

                                إسم المفوض : <b> صادق سلمان عبد الله السلمان </b> <br>

                                رقم الهوية : <b> 1088079817 </b> <br>
                                تاريخ الميلاد : <b> 1412/11/21 </b> <br>
                                رقم الجوال : <b>0557002300 </b>
                            </p>
                        </div>

                        <div class="p-5">
                            <h5 class="mb-2"> خطوات الوكالة عن طريق ناجز </h5>
                            <p class="authorization-steps">

                                <i class="las la-check"></i> الدخول على منصه ناجز عن طريق المتصفح <a
                                    href="https://new.najiz.sa/applications/landing/service/3472d517-7cb4-4cd5-a6bc-2abc9751eea3"
                                    target="_blank" class="fs-16px font-tajawal">من هنا </a> <br>

                                <i class="las la-check"></i> الخدمات الالكترونيه <br>
                                <i class="las la-check"></i> الضغط على علامه الشرطات الثلاث فوق يسار الصفحه <br>
                                <i class="las la-check"></i> تسجيل الدخول <br>
                                <i class="las la-check"></i> الضغط على خيار اصدار وكاله <br>
                                <i class="las la-check"></i> ادخال رقم جوالك واضغط على خيار تحقق <br>
                                <i class="las la-check"></i> ارفاق بيانات الوكيل <br>
                                <i class="las la-check"></i> رقم الهويه : 1088079817 <br>
                                <i class="las la-check"></i> رقم الجوال :0557002300 <br>
                                <i class="las la-check"></i> تاريخ الميلاد :1412/11/21 <br>
                                <i class="las la-check"></i> واضغط على خيار تحقق وبعدها الضغط على خيار اضافه <br>
                                <i class="las la-check"></i> اختار نوع الوكاله ( المرور ) <br>
                                <i class="las la-check"></i> الضغط على خيار المسجل المرور واختيار خدمه نقل لوحات سيارة <br>
                                <i class="las la-check"></i> اخيرا تعبئه البيانات التاليه : نوع السيارة واللون ورقم اللوحة
                                <br>
                                <i class="las la-check"></i> الضغط على خيار الى سيارة وتعبئه بيانات السيارة الاخرى المراد
                                نقل اللوحة لها <br>
                                <i class="las la-check"></i> بعدها الضغط على خيار الاعتماد <br>

                            </p>

                            <div class="controls">
                                <div class="textfield-input mb-2 d-flex text-dark-blue pt-3">
                                    <label for="" class="pt-2 fs-18px w-25 ps-5"> أدخل رقم الوكالة </label>
                                    <input type="text" name="vendor_authorization_number"  id="vendor_authorization_number" class="col-md-4 mx-0"
                                        placeholder="رقم الوكالة يتكون من 9 ارقام" value="{{old('vendor_authorization_number')}}" >
                                        <x-front.form.error field="vendor_authorization_number" /> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- SUBMIT Button (Next & Back Button)  -->
                <div class="next-button p-6">
                    <div class="container__ d-flex justify-content-center gap-3 ">
                        <a href="javascript:void(0);" id="Step02next"
                        class="btn  btn-primary d-flex justify-content-center align-items-center ">
                         <i class="las la-arrow-right" style=" margin-left:5px;font-size: 21px;"></i> التالي </a>

                        <a href="javascript:void(0);" id="Step02back"
                            class="btn  btn-secondary d-flex justify-content-center align-items-center ">
                            رجوع <i class="las la-arrow-left" style=" margin-right:5px;font-size: 21px;"></i>  </a>

                    </div>
                </div>
            </div>



            <!-- ==================================== -->
            <!-- STEP 3  : Revision & Accept terms ------>
            <!-- ====================================  -->
            <div class="frmStep03" style="display: none;">

                <!------- form 7 ----->
                <div class="container 	 position-relative bg-white p-3 mt-3">
                    <div class="title not mb-4">
                        <div class="box d-flex justify-content-center align-items-center position-absolute top-0 right--1">
                            <i></i>
                        </div>
                        <p class="h3 fw-bold p-2" style="font-size:20px!important">المعلومات البنكية الخاصة
                            بك
                        </p>

                    </div>

                    <div class="row bank-name-details d-flex justify-content-between align-items-center w-50 ps-3">
                        <label class="col d-grid justify-self-end " for="">إسم البنك </label>
                        <label class="col d-grid justify-self-end fw-bold" for=""> : </label>
                        <label class="col d-grid justify-self-end text-black"><span class="step3BankName"></span></label>
                    </div>
                    <div class="row bank-iban-details d-flex justify-content-between  align-items-center w-50 ps-3">
                        <label class="col d-grid justify-self-end"> الإيبان </label>
                        <label class="col d-grid justify-self-end fw-bold" for=""> : </label>
                        <label class="col d-grid justify-self-end text-black"><span class="step3BankIban"></span></label>
                    </div>

                    <div class="row bank-iban-details d-flex justify-content-between  align-items-center w-50 ps-3">
                        <label class="col d-grid justify-self-end"> رقم الوكالة </label>
                        <label class="col d-grid justify-self-end fw-bold" for=""> : </label>
                        <label class="col d-grid justify-self-end text-black"> <span class="step3AuthorizationNumber"></span> </label>
                    </div>
                </div>

                <!------- form 8 ----->
                <div class="container 	 position-relative bg-white p-3 mt-3">
                    <div class="title not mb-4">
                        <div class="box d-flex justify-content-center align-items-center position-absolute top-0 right--1">
                            <i></i>
                        </div>
                        <p class="h3 fw-bold p-2" style="font-size:20px!important"> الشروط والأحكام</p>

                    </div>

                    <div class="row d-flex flex-column conditions-and-agreement gap-5 zindex-tooltip position-relative">
                        <div class=" form-check px-6">
                            <input class="form-check-input" type="checkbox" id="Iagree">
                            <label class="form-check-label" for="Iagree">
                                أقرأ و أوافق على الشروط والأحكام إستخدام منصة سمو
                                هذه البوابة الإلكترونية لمنصة سمو بالمملكة العربية السعودية متاحة لاستخدامك الشخصي،
                                ويخضع
                                دخولك واستخدامك
                                لهذه البوابة لبنود وشروط الاستخدام هذه، ولأنظمة المملكة العربية السعودية،</label>
                        </div>

                        <div class="conditon-text">
                            <div class="not container d-grid">
                                <p class="condition-text-container h-20">
                                    توفير أو تحميل ملفات تحتوى على برمجيات أو مواد أو بيانات أو معلومات أخرى ليست مملوكة
                                    لك
                                    أو لا تملك ترخيصاً بشأنه
                                    استخدام هذه البوابة بأي طريقة لإرسال أي بريد إلكتروني تجاري أو غير مرغوب فيه، أو أي
                                    إساءة استخدام من
                                    هذا النوع لمنصة سمو توفير أو تحميل ملفات على هذه البوابة تحتوى على فيروسات أو بيانات
                                    تالفة.
                                    نشر أو إعلان أو توزيع أو تعميم مواد أو معلومات تحتوي تشويهاً للسمعة أو انتهاكاً
                                    للقوانين، أو مواد إباحية، أو بذيئة،
                                    أو مخالفة للآداب العامة، أو أي مواد أو معلومات غير قانونية من خلال بوابةأبشر أفراد.
                                    الاشتراك من خلال بوابة أبشر أفراد في أنشطة غير مشروعة أو غير قانونية في المملكة
                                    العربية
                                    السعودية.
                                    الإعلان -على بوابة أبشر أفرادة- عن أي منتج أو خدمة تجعلنا في وضع انتهاك لأي قانون أو
                                    نظام مطبق في أي مجال.
                                    استخدام أي وسيلة أو برنامج أو إجراء لاعتراض أو محاولة اعتراض التشغيل الصحيح لبوابة
                                    أبشر
                                    أفراد.
                                    القيام بأي إجراء يفرض حملاً غير معقول أو كبير بصورة غير مناسبة على البنية التحتية
                                    لبوابة
                                    أبشر أفراد.
                                    الروابط من وإلى بوابتنا توفير أو تحميل ملفات تحتوى على برمجيات أو مواد أو بيانات أو
                                    معلومات أخرى ليست مملوكة لك
                                    أو لا تملك ترخيصاً بشأنه
                                    استخدام هذه البوابة بأي طريقة لإرسال أي بريد إلكتروني تجاري أو غير مرغوب فيه، أو أي
                                    إساءة استخدام من
                                    هذا النوع لمنصة سمو توفير أو تحميل ملفات على هذه البوابة تحتوى على فيروسات أو بيانات
                                    تالفة.
                                    نشر أو إعلان أو توزيع أو تعميم مواد أو معلومات تحتوي تشويهاً للسمعة أو انتهاكاً
                                    للقوانين، أو مواد إباحية، أو بذيئة،
                                    أو مخالفة للآداب العامة، أو أي مواد أو معلومات غير قانونية من خلال بوابةأبشر أفراد.
                                    الاشتراك من خلال بوابة أبشر أفراد في أنشطة غير مشروعة أو غير قانونية في المملكة
                                    العربية
                                    السعودية.
                                    الإعلان -على بوابة أبشر أفرادة- عن أي منتج أو خدمة تجعلنا في وضع انتهاك لأي قانون أو
                                    نظام مطبق في أي مجال.
                                    استخدام أي وسيلة أو برنامج أو إجراء لاعتراض أو محاولة اعتراض التشغيل الصحيح لبوابة
                                    أبشر
                                    أفراد.
                                    القيام بأي إجراء يفرض حملاً غير معقول أو كبير بصورة غير مناسبة على البنية التحتية
                                    لبوابة
                                    أبشر أفراد.
                                    الروابط من وإلى بوابتنا توفير أو تحميل ملفات تحتوى على برمجيات أو مواد أو بيانات أو
                                    معلومات أخرى ليست مملوكة لك
                                    أو لا تملك ترخيصاً بشأنه
                                    استخدام هذه البوابة بأي طريقة لإرسال أي بريد إلكتروني تجاري أو غير مرغوب فيه، أو أي
                                    إساءة استخدام من
                                    هذا النوع لمنصة سمو توفير أو تحميل ملفات على هذه البوابة تحتوى على فيروسات أو بيانات
                                    تالفة.
                                    نشر أو إعلان أو توزيع أو تعميم مواد أو معلومات تحتوي تشويهاً للسمعة أو انتهاكاً
                                    للقوانين، أو مواد إباحية، أو بذيئة،
                                    أو مخالفة للآداب العامة، أو أي مواد أو معلومات غير قانونية من خلال بوابةأبشر أفراد.
                                    الاشتراك من خلال بوابة أبشر أفراد في أنشطة غير مشروعة أو غير قانونية في المملكة
                                    العربية
                                    السعودية.
                                    الإعلان -على بوابة أبشر أفرادة- عن أي منتج أو خدمة تجعلنا في وضع انتهاك لأي قانون أو
                                    نظام مطبق في أي مجال.
                                    استخدام أي وسيلة أو برنامج أو إجراء لاعتراض أو محاولة اعتراض التشغيل الصحيح لبوابة
                                    أبشر
                                    أفراد.
                                    القيام بأي إجراء يفرض حملاً غير معقول أو كبير بصورة غير مناسبة على البنية التحتية
                                    لبوابة
                                    أبشر أفراد.
                                    الروابط من وإلى بوابتنا
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- SUBMIT Button (Next & Back Button)  -->
                <div class="next-button p-6">
                    <div class="container__ d-flex justify-content-center gap-3 ">
                        <button type="submit"  id="Step03next" class="btn  btn-primary d-flex justify-content-center align-items-center ">  تأكيد المبايعة  </button>
                        <a href="javascript:void(0);" id="Step03back" class="btn  btn-secondary d-flex justify-content-center align-items-center ">
                            رجوع <i class="las la-arrow-left" style=" margin-left:5px;font-size: 21px;"></i>  
                        </a>
                    </div>
                </div>

            </div>

            <input type="hidden" name="confirmation_status" value="confirmed">
            <input type="hidden" name="request_id" value="{{ $r->id }}">

        </form>
    </section>
    <!-- CLOSE FORM ============================-->
@endsection


@push('scripts')
    <script>
        $('#Step01next').on('click', function(e) {
            e.preventDefault();
            $('.curStep').text('3');
            $('.frmStep02').slideDown();
            $('.frmStep01').slideUp();
        });

        $('#Step02next').on('click', function(e) {
            e.preventDefault();
            $('.curStep').text('4');
            $('.frmStep03').slideDown();
            $('.frmStep02').slideUp();
            $('.step3BankName').text($('#vendor_bank_name').find('option:selected').val());
            $('.step3BankIban').text($('#vendor_bank_iban').val());
            $('.step3AuthorizationNumber').text($('#vendor_authorization_number').val());
            console.log("11 " + $('#vendor_bank_name').find('option:selected').val());
            console.log("22 " + $('#vendor_bank_iban').val());
            console.log("33 " + $('#vendor_authorization_number').val());
        });

        $('#Step02back').on('click', function(e) {
            e.preventDefault();
            $('.curStep').text('2');
            $('.frmStep01').slideDown();
            $('.frmStep02').slideUp();
        });

        $('#Step03back').on('click', function(e) {
            e.preventDefault();
            $('.curStep').text('3');
            $('.frmStep02').slideDown();
            $('.frmStep03').slideUp();
        });

        const mouseWheel1 = document.querySelector('.affair-process-steps');
        mouseWheel1.addEventListener('wheel', function(e) {
            const race = 50;
            if (e.deltaY > 0)
                mouseWheel1.scrollLeft += race;
            else
                mouseWheel1.scrollLeft -= race;
            e.preventDefault();
        });

        const mouseWheel2 = document.querySelector('.affair-requirements-condition-seller');
        mouseWheel2.addEventListener('wheel', function(e) {
            const race = 50;
            if (e.deltaY > 0)
                mouseWheel2.scrollLeft += race;
            else
                mouseWheel2.scrollLeft -= race;
            e.preventDefault();
        });

        const mouseWheel3 = document.querySelector('.affair-requirements-condition-vendor');
        mouseWheel3.addEventListener('wheel', function(e) {
            const race = 50;
            if (e.deltaY > 0)
                mouseWheel3.scrollLeft += race;
            else
                mouseWheel3.scrollLeft -= race;
            e.preventDefault();
        });
    </script>
@endpush
