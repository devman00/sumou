<?php $__env->startSection('pagetitle'); ?>
منصة سمو | للوحات المميزة
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <!-- Welcome Section --------- -->
    <section class="py-0 welcome-section px-3 px-md-0 px-lg-0 pt-8 gradientBlueViolet_180" id="welcome">

        <div class="bg-holder d-none d-md-block gradientBlueViolet_180">
        </div>

        <div class="bg-holder d-block d-md-none"> </div>

        <div class="container">

            <!-- Logo + Slogan  -->
            <div class="row align-items-center min-vh-md-75__ mt-7--">
                <div class="col-md-5 col-lg-5 pt-lg-6 text-sm-start text-center d-none d-md-flex d-lg-flex">
                    <img style="width: 100%;" src="<?php echo e(asset('assets/')); ?>/img/logo_white.png" alt="منصة سمو">
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
                <form method="post" action="<?php echo e(route('ads.lists')); ?>" class="row g-3">
                    <?php echo csrf_field(); ?>
                    <div class="col-6">
                        <label> نوع اللوحة </label>
                        <select id="boardType" name="board_type" class="form-control">
                            <option value="" selected> الكل </option>
                            <option value="خصوصي"> خصوصي </option>
                            <option value="نقل"> نقل </option>
                        </select>
                    </div>

                    <div class="col-6">
                        <label> نوع الأرقام </label>
                        <select id="numbersType" name="numbers_type" class="form-control">
                            <option value="" selected> الكل </option>
                            <option data-value="1" value="فردي"> فردي </option>
                            <option data-value="2" value="ثنائي"> ثنائي </option>
                            <option data-value="3" value="ثلاثي"> ثلاثي </option>
                            <option data-value="4" value="رباعي"> رباعي </option>
                        </select>
                    </div>

                    <!-- First Letter -------- -->
                    <div class="col-4">
                        <label> الحرف الأول </label>
                        <select id="firstLetter" name="first_letter" class="form-control">
                            <option value="" selected> الكل </option>
                            <option value="أ"> أ </option>
                            <option value="ب"> ب </option>
                            <option value="ح"> ح </option>
                            <option value="د"> د </option>
                            <option value="ر"> ر </option>
                            <option value="س"> س </option>
                            <option value="ص"> ص </option>
                            <option value="ط"> ط </option>
                            <option value="ع"> ع </option>
                            <option value="ق"> ق </option>
                            <option value="ك"> ك </option>
                            <option value="ل"> ل </option>
                            <option value="م"> م </option>
                            <option value="ن"> ن </option>
                            <option value="ه"> ه </option>
                            <option value="و"> و </option>
                            <option value="ي"> ي </option>
                        </select>
                    </div>

                    <div class="col-4">
                        <label> الحرف الثاني </label>
                        <select id="secondLetter" name="second_letter" class="form-control">
                            <option value="" selected> الكل </option>
                            <option value="أ"> أ </option>
                            <option value="ب"> ب </option>
                            <option value="ح"> ح </option>
                            <option value="د"> د </option>
                            <option value="ر"> ر </option>
                            <option value="س"> س </option>
                            <option value="ص"> ص </option>
                            <option value="ط"> ط </option>
                            <option value="ع"> ع </option>
                            <option value="ق"> ق </option>
                            <option value="ك"> ك </option>
                            <option value="ل"> ل </option>
                            <option value="م"> م </option>
                            <option value="ن"> ن </option>
                            <option value="ه"> ه </option>
                            <option value="و"> و </option>
                            <option value="ي"> ي </option>
                        </select>
                    </div>

                    <div class="col-4">
                        <label> الحرف الثالث </label>
                        <select id="thirdLetter" name="third_letter" class="form-control">
                            <option value="" selected> الكل </option>
                            <option value="أ"> أ </option>
                            <option value="ب"> ب </option>
                            <option value="ح"> ح </option>
                            <option value="د"> د </option>
                            <option value="ر"> ر </option>
                            <option value="س"> س </option>
                            <option value="ص"> ص </option>
                            <option value="ط"> ط </option>
                            <option value="ع"> ع </option>
                            <option value="ق"> ق </option>
                            <option value="ك"> ك </option>
                            <option value="ل"> ل </option>
                            <option value="م"> م </option>
                            <option value="ن"> ن </option>
                            <option value="ه"> ه </option>
                            <option value="و"> و </option>
                            <option value="ي"> ي </option>
                        </select>
                    </div>

                    <!-- First Number -------- -->
                    <div class="col-3 cnt_firstNumber">
                        <label> الرقم الأول </label>
                        <select id="firstNumber" name="first_number" class="form-control">
                            <option value="" selected> الكل </option>
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                        </select>
                    </div>

                    <div class="col-3 cnt_secondNumber">
                        <label> الرقم الثاني </label>
                        <select id="secondNumber" name="second_number" class="form-control">
                            <option value="" selected> الكل </option>
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                        </select>
                    </div>

                    <div class="col-3 cnt_thirdNumber">
                        <label> الرقم الثالث </label>
                        <select id="thirdNumber" name="third_number" class="form-control">
                            <option value="" selected> الكل </option>
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                        </select>
                    </div>

                    <div class="col-3 cnt_fourthNumber">
                        <label> الرقم الرابع </label>
                        <select id="fourthNumber" name="fourth_number" class="form-control">
                            <option value="" selected> الكل </option>
                            <option value="0"> 0 </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
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
                <div class="row ps-3">
                    <p class="d-none d-md-flex d-lg-flex">فئة اللوحة</p>

                    <!-- <div class=" form-check d-flex -start justify-content-center gap-2 px-3 ">
                    <input class="form-check-input align-self-center" name="golden-check" type="checkbox" id="golden-check">
                    <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="golden-check">ذهبي
                    </label>
                  </div> -->

                    <!--
                    <div class="form-check form-check-inline col-3 mx-0">
                        <input class="form-check-input align-self-center" name="golden-check" type="checkbox"
                            id="golden-check">
                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center"
                            for="golden-check">ذهبي
                        </label>
                    </div>

                    <div class="form-check form-check-inline col-3 mx-0">
                        <input class="form-check-input align-self-center" name="golden-check" type="checkbox"
                            id="golden-check">
                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center"
                            for="golden-check">فضي
                        </label>
                    </div>

                    <div class="form-check form-check-inline col-3 mx-0">
                        <input class="form-check-input align-self-center" name="golden-check" type="checkbox"
                            id="golden-check">
                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center"
                            for="golden-check"> برونزي
                        </label>
                    </div>

                    <div class="form-check form-check-inline col-3 mx-0">
                        <input class="form-check-input align-self-center" name="golden-check" type="checkbox"
                            id="golden-check">
                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center"
                            for="golden-check"> ألماسي
                        </label>
                    </div>
                    -->



                    <!-- <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                  </div> -->

                </div>

                <!-- <div class="lawha-feature-category d-flex flex-row justify-content-evenly align-content-center col">
                  <p>فئة اللوحة</p>
                  <div class="row feature-check d-flex flex-row flex-nowrap justify-content-center zindex-tooltip position-relative" style="margin-left: 20px;">
                    <div class=" form-check d-flex -start justify-content-center gap-2 px-3 " style="">
                      <input class="form-check-input align-self-center" name="golden-check" type="checkbox" id="golden-check">
                      <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center"
                        for="golden-check">ذهبي
                      </label>
                    </div>
                  </div>
                  
                  <div class="row feature-check d-flex flex-row flex-nowrap justify-content-center zindex-tooltip position-relative"
                    style="margin-left: 20px;">
                    <div class=" form-check d-flex -start justify-content-center gap-2 px-3 " style="">
                      <input class="form-check-input align-self-center" name="silver-check" type="checkbox" id="silver-check">
                      <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center"
                        for="silver-check">فضي
                      </label>
      
                    </div>
      
      
                  </div>
                  
                  <div class="row feature-check d-flex flex-row flex-nowrap justify-content-center zindex-tooltip position-relative"
                    style="margin-left: 20px;">
                    <div class=" form-check d-flex -start justify-content-center gap-2 px-3 " style="">
                      <input class="form-check-input align-self-center" name="bronze-check" type="checkbox" id="bronze-check">
                      <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center"
                        for="bronze-check">برونزي
                      </label>
      
                    </div>
      
      
                  </div>
      
                  <div class="row feature-check d-flex flex-row flex-nowrap justify-content-center zindex-tooltip position-relative"
                    style="margin-left: 20px;">
                    <div class=" form-check d-flex -start justify-content-center gap-2 px-3 " style="">
                      <input class="form-check-input align-self-center" name="platinium-check" type="checkbox"
                        id="platinium-check">
                      <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center"
                        for="platinium-check">ألماسي
                      </label>
      
                    </div>
                  </div>
                  
                </div> -->

                <div class="newer-older-filter d-flex justify-content-center align-items-center col-2">
                    <p class="selected">الأحدث</p>
                    <p class="">الأقدم</p>
                </div>

            </div>

            <div class="homepage-lawhat-wrapper p-3 p-md-0 p-lg-0">

                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.ad.default','data' => ['ad' => $ad->id,'date' => $ad->created_at->diffForHumans(),'firstLetter' => $ad->first_letter,'secondLetter' => $ad->second_letter,'thirdLetter' => $ad->third_letter,'firstNumber' => $ad->first_number,'secondNumber' => $ad->second_number,'thirdNumber' => $ad->third_number,'fourthNumber' => $ad->fourth_number,'price' => $ad->price,'phone' => $ad->phone,'allowContact' => 1,'whatsapp' => $ad->user->whatsapp,'username' => $ad->user->name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.ad.default'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ad' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->id),'date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->created_at->diffForHumans()),'first_letter' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->first_letter),'second_letter' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->second_letter),'third_letter' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->third_letter),'first_number' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->first_number),'second_number' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->second_number),'third_number' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->third_number),'fourth_number' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->fourth_number),'price' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->price),'phone' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->phone),'allow_contact' => 1,'whatsapp' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->user->whatsapp),'username' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->user->name)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </div>
    </section>
    <!-- end lawhat -->

    <!-- Partners section  begin ============================-->
    <section class="bg-100 pb-0">

        <div class="container">

            <div class="title">
                <h4 class="fw-bold text-black text-center"> شركاء النجاح </h4>
            </div>

            <div class="row">

                <div class="partnersCarousel owl-carousel owl-theme">
                    <div> <img src="<?php echo e(asset('assets/')); ?>/img/partners/1.png" alt=""> </div>
                    <div> <img src="<?php echo e(asset('assets/')); ?>/img/partners/2.png" alt=""> </div>
                    <div> <img src="<?php echo e(asset('assets/')); ?>/img/partners/3.png" alt=""> </div>
                    <div> <img src="<?php echo e(asset('assets/')); ?>/img/partners/4.png" alt=""> </div>
                    <div> <img src="<?php echo e(asset('assets/')); ?>/img/partners/5.png" alt=""> </div>

                </div>

            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <partners> close ============================-->
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/front/home.blade.php ENDPATH**/ ?>