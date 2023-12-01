<?php $__env->startSection('pagetitle'); ?>
منصة سمو | للوحات المميزة
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="py-0 welcome-section__ px-3 px-md-0 px-lg-0 pt-8 gradientBlueViolet_180" id="welcome">
        <div class="bg-holder d-none d-md-block welcome-bg__">
        </div>

        
        <div class="container-fluid pt-5 bg-gray__ listing-page ">
            <!-- Submit Form -->
            <h3 class="text-center font-tajawal">  البحث عن اللوحات </h3>

            <div class="row align-items-center pb-3 pb-md-7 pb-lg-7 px-md-5 px-lg-5 justify-content-center search_form">
                <form method="post" action="<?php echo e(route('ads.lists')); ?>" class="row g-3 form_ads_search">
                    <?php echo csrf_field(); ?>
                    <div class="col-6">
                        <label> نوع اللوحة </label>
                        <select id="boardType" name="board_type" class="form-control">
                            <option value="" selected> - </option>
                            <option value="خصوصي" <?php echo e(request()->input('board_type') == 'خصوصي' ? 'selected' : ''); ?>  > خصوصي </option>
                            <option value="نقل" <?php echo e(request()->input('board_type') == 'نقل' ? 'selected' : ''); ?>  > نقل </option>
                        </select>
                    </div>

                    <div class="col-6">
                        <label> نوع الأرقام </label>
                        <select id="numbersType" name="numbers_type" class="form-control">
                            <option value="" selected> - </option>
                            <option data-value="1" value="1" <?php echo e(request()->input('numbers_type') == '1' ? 'selected' : ''); ?>> فردي </option>
                            <option data-value="2" value="2" <?php echo e(request()->input('numbers_type') == '2' ? 'selected' : ''); ?>> ثنائي </option>
                            <option data-value="3" value="3" <?php echo e(request()->input('numbers_type') == '3' ? 'selected' : ''); ?>> ثلاثي </option>
                            <option data-value="4" value="4" <?php echo e(request()->input('numbers_type') == '4' ? 'selected' : ''); ?>> رباعي </option>
                        </select>
                    </div>
                    
                    <!-- First Letter -------- -->
                    <div class="col-4"> 
                        <label> الحرف الأول </label>
                        <select id="firstLetter" name="first_letter" class="form-control">
                            <option value="" selected> - </option>
                            <?php $__currentLoopData = config('app')['arabic_letters']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value); ?>" <?php echo e(request()->input('first_letter') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </select>
                    </div>

                    <div class="col-4">
                        <label> الحرف الثاني </label>
                        <select id="secondLetter" name="second_letter" class="form-control">
                            <option value="" selected> - </option>
                            <?php $__currentLoopData = config('app')['arabic_letters']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value); ?>" <?php echo e(request()->input('second_letter') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </select>
                    </div>

                    <div class="col-4">
                        <label> الحرف الثالث </label>
                        <select id="thirdLetter" name="third_letter" class="form-control">
                            <option value="" selected> - </option>
                            <?php $__currentLoopData = config('app')['arabic_letters']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value); ?>" <?php echo e(request()->input('third_letter') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </select>
                    </div>

                    <!-- First Number -------- -->
                    <div class="col-3 cnt_firstNumber">
                        <label> الرقم الأول </label>
                        <select id="firstNumber" name="first_number" class="form-control">
                            <option value="" selected> - </option>
                            <?php $__currentLoopData = config('app')['arabic_numbers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option class="font-tajawal" value="<?php echo e($value); ?>" <?php echo e(request()->input('first_number') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="col-3 cnt_secondNumber" style="<?php echo e(request()->input('numbers_type') == '1' ? 'display:none' : ''); ?>">
                        <label> الرقم الثاني </label>
                        <select id="secondNumber" name="second_number" class="form-control">
                            <option value="" selected> - </option>
                            <?php $__currentLoopData = config('app')['arabic_numbers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option class="font-tajawal" value="<?php echo e($value); ?>" <?php echo e(request()->input('second_number') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="col-3 cnt_thirdNumber" style="<?php echo e(request()->input('numbers_type') == '1' ||  request()->input('numbers_type') == '2' ? 'display:none' : ''); ?>">
                        <label> الرقم الثالث </label>
                        <select id="thirdNumber" name="third_number" class="form-control">
                            <option value="" selected> - </option>
                            <?php $__currentLoopData = config('app')['arabic_numbers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option class="font-tajawal" value="<?php echo e($value); ?>" <?php echo e(request()->input('third_number') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="col-3 cnt_fourthNumber" style="<?php echo e(request()->input('numbers_type') == '1' ||  request()->input('numbers_type') == '2' ||  request()->input('numbers_type') == '3' ? 'display:none' : ''); ?>">
                        <label> الرقم الرابع </label>
                        <select id="fourthNumber" name="fourth_number" class="form-control">
                            <option value="" selected> - </option>
                            <?php $__currentLoopData = config('app')['arabic_numbers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option class="font-tajawal" value="<?php echo e($value); ?>" <?php echo e(request()->input('fourth_number') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <!-- Submit ----  -->
                    <div class="col-12 text-center mt-4 mt-md-6 mt-lg-6 ">
                        <button type="submit" class="btn btn-primary search-btn px-5 fw-bold"> <i
                                class="las la-search mx-2"></i> إبدأ البحث </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--start lawhat Listing -->
    <section class="homepage-lawhat py-0 my-5">
        <div class="container flex-column justify-content-center align-content-center ">
            
            <!-- Filter ------  -->
            <div class="dashboard-lawhat-menu mb-5 p-3">
                <div class="title col-2">
                    <i></i>
                    <p class="fw-bold text-black"> </p>
                </div>

                <form method="post" action="" class="formFilter0">
                  <?php echo csrf_field(); ?>
                  <div class="row ps-3">
                    
                    <div class="form-check form-check-inline col-3 mx-0">
                        <input class="form-check-input align-self-center filterHomeForm0" name="numbers_type-check" type="radio" id="monocular-check" value="1" <?php echo e(request()->input('numbers_type-check') && request()->input('numbers_type-check') == '1' ? 'checked' : ''); ?>>
                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="monocular-check">أحادي</label>
                    </div>
                    <div class="form-check form-check-inline col-3 mx-0">
                        <input class="form-check-input align-self-center filterHomeForm0" name="numbers_type-check" type="radio" id="bilateral-check" value="2" <?php echo e(request()->input('numbers_type-check') && request()->input('numbers_type-check') == '2' ? 'checked' : ''); ?>>
                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="bilateral-check">ثنائي</label>
                    </div>
                    <div class="form-check form-check-inline col-3 mx-0">
                        <input class="form-check-input align-self-center filterHomeForm0" name="numbers_type-check" type="radio" id="tripartite-check" value="3" <?php echo e(request()->input('numbers_type-check') && request()->input('numbers_type-check') == '3' ? 'checked' : ''); ?>>
                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="tripartite-check">ثلاثي</label>
                    </div>
                    <div class="form-check form-check-inline col-3 mx-0">
                        <input class="form-check-input align-self-center filterHomeForm0" name="numbers_type-check" type="radio" id="quadrant-check" value="4" <?php echo e(request()->input('numbers_type-check') && request()->input('numbers_type-check') == '4' ? 'checked' : ''); ?>>
                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="quadrant-check">رباعي</label>
                    </div>
                  </div>
                </form>
            </div>


            <div id="data-wrapper">
                <?php echo $__env->make('front.parts.data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            
            <div class="align-self-center d-flex justify-content-center">
                <button class="btn btn-dark-blue fw-bold align-self-center d-flex justify-content-center load-more-data" id="loadMore">عرض المزيد</button>
            </div>

            <!-- Data Loader -->
            <div class="auto-load text-center" style="display: none;">
                <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="60" viewBox="0 0 100 100"
                    enable-background="new 0 0 0 0" xml:space="preserve">
                    <path fill="#000"
                        d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                        <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                            from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                    </path>
                </svg>
            </div>

        </div>
    </section>
    <!-- end lawhat -->

<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
    <script>
        var URL = "<?php echo e(route('ads.lists')); ?>";
        var page = 1;
        
        /*------------------------------------------
        Call on Click
        --------------------------------------------*/
        $(".load-more-data").click(function(){
            page++;
            infinteLoadMore(page);

            // scrollIntoView();
            var elem = document.getElementById("loadMore"); 

            $('html, body').animate({
                scrollTop: $(elem).offset().top
            }, 300)
        });

        /*------------------------------------------
        --------------------------------------------
        call infinteLoadMore()
        --------------------------------------------
        --------------------------------------------*/
        function infinteLoadMore(page) 
        {
            $.ajax({
                    url: URL + "?page=" + page,
                    datatype: "html",
                    type: "get",
                    beforeSend: function() {
                        $('.auto-load').show();
                    }
                })
                .done(function(response) {
                    if (response.html == '') {
                        $('.auto-load').html("لا يوجد المزيد من البيانات لعرضها :(");
                        return;
                    }

                    $('.auto-load').hide();
                    $("#data-wrapper").append(response.html);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }


    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.front-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/front/ads/lists.blade.php ENDPATH**/ ?>