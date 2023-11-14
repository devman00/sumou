<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
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
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
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
]); ?>
<?php foreach (array_filter(([
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
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>                
                <!-- Item 1 -----  -->
                <div class="homepage-lawha">
                    <div class="share-btn p-3 pb-0"> <i class="fas fa-share-alt"></i> 
                        <span class="published-date float-end fs-15px"> <?php echo e($date); ?> <i class="las la-history"></i> </span> 
                    </div>

                    <a href="<?php echo e(route('ads.show', $ad)); ?>" class="card-link">
                        <div class="ad-lawha mt-3 px-3 ">

                            <div class="lawha">
                                <div class="ksa-board"><img width="18" height="18" src="<?php echo e(asset('assets/')); ?>/img/icons/ksa.png" class="chakra-image css-y45xgh">
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
                                            <p class="first"> <?php echo e($first_letter); ?> </p>
                                            <p class="second"> <?php echo e($second_letter); ?> </p>
                                            <p class="third"> <?php echo e($third_letter); ?> </p>
                                        </div>
                                        <div class="english-version">
                                            <p class="first">h</p>
                                            <p class="second"> d </p>
                                            <p class="third"> m</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="serial-number ltr d-block">
                                    <div class="numbers">
                                        <div class="arabic">
                                            <p class="first"> <?php echo e($first_number); ?> </p>
                                            <p class="second"> <?php echo e($second_number); ?> </p>
                                            <p class="third"> <?php echo e($third_number); ?> </p>
                                            <p class="fourth"> <?php echo e($fourth_number); ?> </p>
                                        </div>
                                        <div class="english">
                                            <p class="first">1</p>
                                            <p class="second">2 </p>
                                            <p class="third"> 3</p>
                                            <p class="fourth"> 4</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </a>

                    <div class="price d-flex justify-content-center align-items-center gap-1">

                        <i class="las la-tags"></i>

                        <p class="m-0 fw-bold text-center text-black-- text-dark-gray"> <span
                                class="card-price px-0"><?php echo e($price); ?>.00</span> ريال</p>
                    </div>


                    
                    <?php if($allow_contact === 1): ?>
                        <div class="infos d-flex justify-content-between align-items-center px-3">
                            <div class=" number d-flex justify-content-center align-content-center flex-column">
                                <p class="m-0 text-black">رقم التواصل</p>
                                <p class="m-0 text-black"> <?php echo e($phone); ?> </p>
                            </div>

                            <a href="https://wa.me/<?php echo e($whatsapp); ?>" target="_blank" class="whatsapp">
                                <i class=" lab la-whatsapp d-flex justify-content-center align-content-center flex-column text-center"
                                    style="font-size: 30px; color: green;"> <span class="fs-13px fw-bold"> الواتس اب </span>
                                </i>
                            </a>

                            <div class=" d-flex publisher justify-content-center align-content-center flex-column">
                                <div class="name  d-flex justify-content-start flex-row align-content-center">
                                    <i class="las  d-flex justify-content-center align-items-center la-user"
                                        style="    font-size: 19px !important;"></i>
                                    <p class="m-0 " style="    font-size: 14px !important;"> <?php echo e($username); ?> </p>

                                </div>
                                <div class="is-verified  d-flex justify-content-start align-content-center flex-row">
                                    <i class="las la-check-circle d-flex justify-content-center align-items-center"
                                        style="color: green ;"></i>
                                    <p class="m-0 " style="    font-size: 14px !important;color: green;"> موثق</p>

                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    
                    <?php if($allow_actions ===1): ?>    
                        <div class="infos d-flex justify-content-between align-items-center px-3">
                            <a href="<?php echo e(route('ads.edit', $ad)); ?>" class="btn btn-success fs-14px py-1">
                                <i class="las la-edit"></i>
                                تعديل اللوحة 
                            </a>

                            
                            <button class="btn btn-danger fs-14px py-1 px-2 px-md-3 px-lg-3">

                           
                            <form method="POST"
                                    action="<?php echo e(route('ads.destroy', $ad)); ?>"
                                    class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>

                                    <a href="<?php echo e(route('ads.destroy', $ad)); ?>"
                                        class="btn-delete text-white"
                                        onclick="if(confirm('هل تود حذف هذا العنصر؟')) { event.preventDefault();
                                        this.closest('form').submit();} else { return false }">
                                       <i class="las la-trash-alt text-white"></i>  حذف 
                                    </a>
                            </form>

                            </button>
                        </div>
                    <?php endif; ?>

                </div> <!-- END Item 1 -->
<?php /**PATH /var/www/sumou.sa/html/resources/views/components/front/ad/default.blade.php ENDPATH**/ ?>