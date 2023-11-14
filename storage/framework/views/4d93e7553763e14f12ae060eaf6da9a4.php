

<?php $__env->startSection('content'); ?>
    <!-- Add Form start ============================-->
    <!-- ============================================-->
    <section class=" affair dashboard d-flex flex-column justify-content-between">
        <div class="container px-0 row">
            
            <!-- Sidebar ----  -->
            <?php if ($__env->exists('layouts.front.partials.sidebar')) echo $__env->make('layouts.front.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="affair-step col-md-10 col-lg-10 mt-md-5 mt-lg-5">
                <div class="container d-flex position-relative justify-content-center  align-items-center">
                    <div class=" d-flex align-items-center justify-content-start gap-3 py-2 px-4 bg-white position-relative ">
                        <i class="las la-plus fw-bold" style="font-size: 30px;"></i>
                        <h4 class=" affair-step-title d-inline-block text-center fw-bold m-0 p-1">تعديل اللوحة <span class="px-4"> | </span> <?php echo e($ad->first_letter .' '.$ad->second_letter .' '.$ad->third_letter .' / '.$ad->first_number .' '.$ad->second_number .' '.$ad->third_number .' '.$ad->fourth_number); ?> </h4>
                    </div>
                </div>

                <div class="padding py-4 bg-white"></div>

                
                <div class="bg-white w-100">
                    <div class="ad-lawha mt-3 px-3 m-auto w-lg-50 w-md-50 py-5">
                        <div class="lawha">
                            <div class="ksa-board"><img width="18" height="18" src="<?php echo e(asset('assets')); ?>/img/icons/ksa.png"
                                    class="chakra-image css-y45xgh">
                                <p style="font-size: 6px!important;margin-bottom: 5px!important;">السعودية</p>
                                <p style="font-size: 12px!important;">k</p>
                                <p style="font-size: 12px!important;">s</p>
                                <p style="font-size: 12px!important;margin-bottom: 8px!important;">a</p>
                                <div
                                    style="    width: 10px!important;
                                      height: 10px!important;
                                      border-radius: 50%!important;
                                      background-color: black !important;
                                      margin: 2px auto auto!important;">
                                </div>
                            </div>
                            <div class="informations">
                                <div class="letters">
                                    <div class="arabic-version">
                                        <p class="first"> <?php echo e($ad->first_letter); ?> </p>
                                        <p class="second"> <?php echo e($ad->second_letter); ?>  </p>
                                        <p class="third"> <?php echo e($ad->third_letter); ?>  </p>
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
                                        <p class="first"> <?php echo e($ad->first_number); ?>  </p>
                                        <p class="second"> <?php echo e($ad->second_number); ?>   </p>
                                        <p class="third"> <?php echo e($ad->third_number); ?>   </p>
                                        <p class="fourth"> <?php echo e($ad->fourth_number); ?>   </p>
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
                </div>

                <!-- Start Form -------  -->
                <form action="<?php echo e(route('ads.update', $ad)); ?>" method="post" id="form-submit" class=" fill-details bg-white px-4 px-lg-8 ">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    
                    <div class=" col d-flex justify-self-start flex-row flex-wrap align-items-start py-3 ">
                        <div class="no-gap  row with-border d-flex justify-content-center align-items-start flex-row position-relative gap-4 "
                            style=" width: 320px;">
                            <p class=" font-tajawal fw-500 col mb-2"
                                style=" font-weight: 500;color:#000023;border-left:#cac7c7 1px solid; margin-bottom: 20px;">
                                نوع اللوحة
                            </p>

                            <div class="col mb-4 ">
                                <div class="row type-lawha  d-flex flex-row flex-nowrap  zindex-tooltip position-relative">
                                    <div class=" form-check w-50" style="margin-left: 20px;">
                                        <input class="form-check-input" value="خصوصي" name="plate_type" type="radio" id="plate-private" <?php echo e(old('plate_type', $ad->plate_type) == "خصوصي" ? 'checked' : ''); ?> >
                                        <label class="form-check-label text-black fw-bold font-tajawal" for="plate-private">خصوصي</label>
                                    </div>
                                    <div class="form-check w-50">
                                        <input class="form-check-input" value="نقل" name="plate_type" type="radio" id="plate-public" <?php echo e(old('plate_type', $ad->plate_type) == "نقل" ? 'checked' : ''); ?> >
                                        <label class="form-check-label text-black fw-bold font-tajawal" for="plate-public">نقل</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'plate_type']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'plate_type']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>

                    
                    <div class="col  d-flex controls d-flex align-items-center justify-content-start py-4 position-relative">
                        <div class="row  with-border w-50 textfields py-1 d-flex flex-column align-items-center justify-content-center gap-3  ">
                            
                            
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center m-0">
                                <label class="font-tajawal align-self-center"> الحرف الأول</label>
                                <select id="first_letter" name="first_letter" class="form-select">
                                    <option value="أ" <?php echo e(old('first_letter', $ad->first_letter)=="أ" ? 'selected' : ''); ?>> حرف أ </option>
                                    <option value="ب" <?php echo e(old('first_letter', $ad->first_letter)=="ب" ? 'selected' : ''); ?>> حرف ب </option>
                                    <option value="ح" <?php echo e(old('first_letter', $ad->first_letter)=="ح" ? 'selected' : ''); ?>> حرف ح </option>
                                    <option value="د" <?php echo e(old('first_letter', $ad->first_letter)=="د" ? 'selected' : ''); ?>> حرف د </option>
                                    <option value="ر" <?php echo e(old('first_letter', $ad->first_letter)=="ر" ? 'selected' : ''); ?>> حرف ر </option>
                                    <option value="س" <?php echo e(old('first_letter', $ad->first_letter)=="س" ? 'selected' : ''); ?>> حرف س </option>
                                    <option value="ص" <?php echo e(old('first_letter', $ad->first_letter)=="ص" ? 'selected' : ''); ?>> حرف ص </option>
                                    <option value="ط" <?php echo e(old('first_letter', $ad->first_letter)=="ط" ? 'selected' : ''); ?>> حرف ط </option>
                                    <option value="ع" <?php echo e(old('first_letter', $ad->first_letter)=="ع" ? 'selected' : ''); ?>> حرف ع </option>
                                    <option value="ق" <?php echo e(old('first_letter', $ad->first_letter)=="ق" ? 'selected' : ''); ?>> حرف ق </option>
                                    <option value="ك" <?php echo e(old('first_letter', $ad->first_letter)=="ك" ? 'selected' : ''); ?>> حرف ك </option>
                                    <option value="ل" <?php echo e(old('first_letter', $ad->first_letter)=="ل" ? 'selected' : ''); ?>> حرف ل </option>
                                    <option value="م" <?php echo e(old('first_letter', $ad->first_letter)=="م" ? 'selected' : ''); ?>> حرف م </option>
                                    <option value="ن" <?php echo e(old('first_letter', $ad->first_letter)=="ن" ? 'selected' : ''); ?>> حرف ن </option>
                                    <option value="ه" <?php echo e(old('first_letter', $ad->first_letter)=="ه" ? 'selected' : ''); ?>> حرف ه </option>
                                    <option value="و" <?php echo e(old('first_letter', $ad->first_letter)=="و" ? 'selected' : ''); ?>> حرف و </option>
                                    <option value="ي" <?php echo e(old('first_letter', $ad->first_letter)=="ي" ? 'selected' : ''); ?>> حرف ي </option>
                                </select>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'first_letter']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'first_letter']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </div>

                            
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center m-0">
                                <label class="font-tajawal align-self-center"> الحرف الثاني</label>
                                <select id="second_letter" name="second_letter" class="form-select">
                                    <option value="أ" <?php echo e(old('second_letter', $ad->second_letter) == "أ" ? 'selected' : ''); ?> > حرف أ </option>
                                    <option value="ب" <?php echo e(old('second_letter', $ad->second_letter) == "ب" ? 'selected' : ''); ?> > حرف ب </option>
                                    <option value="ح" <?php echo e(old('second_letter', $ad->second_letter) == "ح" ? 'selected' : ''); ?> > حرف ح </option>
                                    <option value="د" <?php echo e(old('second_letter', $ad->second_letter) == "د" ? 'selected' : ''); ?> > حرف د </option>
                                    <option value="ر" <?php echo e(old('second_letter', $ad->second_letter) == "ر" ? 'selected' : ''); ?> > حرف ر </option>
                                    <option value="س" <?php echo e(old('second_letter', $ad->second_letter) == "س" ? 'selected' : ''); ?> > حرف س </option>
                                    <option value="ص" <?php echo e(old('second_letter', $ad->second_letter) == "ص" ? 'selected' : ''); ?> > حرف ص </option>
                                    <option value="ط" <?php echo e(old('second_letter', $ad->second_letter) == "ط" ? 'selected' : ''); ?> > حرف ط </option>
                                    <option value="ع" <?php echo e(old('second_letter', $ad->second_letter) == "ع" ? 'selected' : ''); ?> > حرف ع </option>
                                    <option value="ق" <?php echo e(old('second_letter', $ad->second_letter) == "ق" ? 'selected' : ''); ?> > حرف ق </option>
                                    <option value="ك" <?php echo e(old('second_letter', $ad->second_letter) == "ك" ? 'selected' : ''); ?> > حرف ك </option>
                                    <option value="ل" <?php echo e(old('second_letter', $ad->second_letter) == "ل" ? 'selected' : ''); ?> > حرف ل </option>
                                    <option value="م" <?php echo e(old('second_letter', $ad->second_letter) == "م" ? 'selected' : ''); ?> > حرف م </option>
                                    <option value="ن" <?php echo e(old('second_letter', $ad->second_letter) == "ن" ? 'selected' : ''); ?> > حرف ن </option>
                                    <option value="ه" <?php echo e(old('second_letter', $ad->second_letter) == "ه" ? 'selected' : ''); ?> > حرف ه </option>
                                    <option value="و" <?php echo e(old('second_letter', $ad->second_letter) == "و" ? 'selected' : ''); ?> > حرف و </option>
                                    <option value="ي" <?php echo e(old('second_letter', $ad->second_letter) == "ي" ? 'selected' : ''); ?> > حرف ي </option>
                                    </select>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'second_letter']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'second_letter']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </div>

                            
                            <div class="  textfield-input mb-2 d-flex justify-content-start align-items-center m-0">
                                <label class=" font-tajawal align-self-center"> الحرف الثالث</label>
                                <select id="third_letter" name="third_letter" class="form-select">
                                    <option value="أ" <?php echo e(old('third_letter', $ad->third_letter) == "أ" ? 'selected' : ''); ?> > حرف أ </option>
                                    <option value="ب" <?php echo e(old('third_letter', $ad->third_letter) == "ب" ? 'selected' : ''); ?> > حرف ب </option>
                                    <option value="ح" <?php echo e(old('third_letter', $ad->third_letter) == "ح" ? 'selected' : ''); ?> > حرف ح </option>
                                    <option value="د" <?php echo e(old('third_letter', $ad->third_letter) == "د" ? 'selected' : ''); ?> > حرف د </option>
                                    <option value="ر" <?php echo e(old('third_letter', $ad->third_letter) == "ر" ? 'selected' : ''); ?> > حرف ر </option>
                                    <option value="س" <?php echo e(old('third_letter', $ad->third_letter) == "س" ? 'selected' : ''); ?> > حرف س </option>
                                    <option value="ص" <?php echo e(old('third_letter', $ad->third_letter) == "ص" ? 'selected' : ''); ?> > حرف ص </option>
                                    <option value="ط" <?php echo e(old('third_letter', $ad->third_letter) == "ط" ? 'selected' : ''); ?> > حرف ط </option>
                                    <option value="ع" <?php echo e(old('third_letter', $ad->third_letter) == "ع" ? 'selected' : ''); ?> > حرف ع </option>
                                    <option value="ق" <?php echo e(old('third_letter', $ad->third_letter) == "ق" ? 'selected' : ''); ?> > حرف ق </option>
                                    <option value="ك" <?php echo e(old('third_letter', $ad->third_letter) == "ك" ? 'selected' : ''); ?> > حرف ك </option>
                                    <option value="ل" <?php echo e(old('third_letter', $ad->third_letter) == "ل" ? 'selected' : ''); ?> > حرف ل </option>
                                    <option value="م" <?php echo e(old('third_letter', $ad->third_letter) == "م" ? 'selected' : ''); ?> > حرف م </option>
                                    <option value="ن" <?php echo e(old('third_letter', $ad->third_letter) == "ن" ? 'selected' : ''); ?> > حرف ن </option>
                                    <option value="ه" <?php echo e(old('third_letter', $ad->third_letter) == "ه" ? 'selected' : ''); ?> > حرف ه </option>
                                    <option value="و" <?php echo e(old('third_letter', $ad->third_letter) == "و" ? 'selected' : ''); ?> > حرف و </option>
                                    <option value="ي" <?php echo e(old('third_letter', $ad->third_letter) == "ي" ? 'selected' : ''); ?> > حرف ي </option>
                                </select>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'third_letter']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'third_letter']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <!-- <hr style=" transform:rotate(180deg);" class=" "> -->
                    </div>

                    
                    <div  class="col  d-flex controls d-flex align-items-center justify-content-start py-4 position-relative ">
                        <div class="row w-50 with-border textfields py-1 d-flex flex-column align-items-center justify-content-center gap-3  ">
                            
                            
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center">
                                <label class="font-tajawal align-self-center"> الرقم الأول</label>
                                <select id="first_number" name="first_number"  class="form-select">
                                    <option class="font-tajawal" value="١" <?php echo e(old('first_number', $ad->first_number) == '١' ? 'selected' : ''); ?> > ١</option>
                                    <option class="font-tajawal" value="٢" <?php echo e(old('first_number', $ad->first_number) == "٢" ? 'selected' : ''); ?> > ٢</option>
                                    <option class="font-tajawal" value="٣" <?php echo e(old('first_number', $ad->first_number) == "٣" ? 'selected' : ''); ?> > ٣</option>
                                    <option class="font-tajawal" value="٤" <?php echo e(old('first_number', $ad->first_number) == "٤" ? 'selected' : ''); ?> > ٤</option>
                                    <option class="font-tajawal" value="٥" <?php echo e(old('first_number', $ad->first_number) == "٥" ? 'selected' : ''); ?> > ٥</option>
                                    <option class="font-tajawal" value="٦" <?php echo e(old('first_number', $ad->first_number) == "٦" ? 'selected' : ''); ?> > ٦</option>
                                    <option class="font-tajawal" value="٧" <?php echo e(old('first_number', $ad->first_number) == "٧" ? 'selected' : ''); ?> > ٧</option>
                                    <option class="font-tajawal" value="٨" <?php echo e(old('first_number', $ad->first_number) == "٨" ? 'selected' : ''); ?> > ٨</option>
                                    <option class="font-tajawal" value="٩" <?php echo e(old('first_number', $ad->first_number) == "٩" ? 'selected' : ''); ?> > ٩</option> 
                                </select>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'first_number']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'first_number']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </div>

                            
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center">
                                <label class="font-tajawal align-self-center"> الرقم الثاني</label>
                                <select id="second_number" name="second_number" class="form-select">
                                    <option class="font-tajawal" value="١" <?php echo e(old('second_number', $ad->second_number) == '١' ? 'selected' : ''); ?> > ١</option>
                                    <option class="font-tajawal" value="٢" <?php echo e(old('second_number', $ad->second_number) == "٢" ? 'selected' : ''); ?> > ٢</option>
                                    <option class="font-tajawal" value="٣" <?php echo e(old('second_number', $ad->second_number) == "٣" ? 'selected' : ''); ?> > ٣</option>
                                    <option class="font-tajawal" value="٤" <?php echo e(old('second_number', $ad->second_number) == "٤" ? 'selected' : ''); ?> > ٤</option>
                                    <option class="font-tajawal" value="٥" <?php echo e(old('second_number', $ad->second_number) == "٥" ? 'selected' : ''); ?> > ٥</option>
                                    <option class="font-tajawal" value="٦" <?php echo e(old('second_number', $ad->second_number) == "٦" ? 'selected' : ''); ?> > ٦</option>
                                    <option class="font-tajawal" value="٧" <?php echo e(old('second_number', $ad->second_number) == "٧" ? 'selected' : ''); ?> > ٧</option>
                                    <option class="font-tajawal" value="٨" <?php echo e(old('second_number', $ad->second_number) == "٨" ? 'selected' : ''); ?> > ٨</option>
                                    <option class="font-tajawal" value="٩" <?php echo e(old('second_number', $ad->second_number) == "٩" ? 'selected' : ''); ?> > ٩</option> 
                                </select>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'second_number']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'second_number']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </div>

                            
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center">
                                <label class="font-tajawal align-self-center"> الرقم الثالث</label>
                                <select id="third_number" name="third_number" class="form-select">
                                    <option class="font-tajawal" value="١" <?php echo e(old('third_number', $ad->third_number) == '١' ? 'selected' : ''); ?> > ١</option>
                                    <option class="font-tajawal" value="٢" <?php echo e(old('third_number', $ad->third_number) == "٢" ? 'selected' : ''); ?> > ٢</option>
                                    <option class="font-tajawal" value="٣" <?php echo e(old('third_number', $ad->third_number) == "٣" ? 'selected' : ''); ?> > ٣</option>
                                    <option class="font-tajawal" value="٤" <?php echo e(old('third_number', $ad->third_number) == "٤" ? 'selected' : ''); ?> > ٤</option>
                                    <option class="font-tajawal" value="٥" <?php echo e(old('third_number', $ad->third_number) == "٥" ? 'selected' : ''); ?> > ٥</option>
                                    <option class="font-tajawal" value="٦" <?php echo e(old('third_number', $ad->third_number) == "٦" ? 'selected' : ''); ?> > ٦</option>
                                    <option class="font-tajawal" value="٧" <?php echo e(old('third_number', $ad->third_number) == "٧"? 'selected' : ''); ?> > ٧</option>
                                    <option class="font-tajawal" value="٨" <?php echo e(old('third_number', $ad->third_number) == "٨" ? 'selected' : ''); ?> > ٨</option>
                                    <option class="font-tajawal" value="٩" <?php echo e(old('third_number', $ad->third_number) == "٩" ? 'selected' : ''); ?> > ٩</option> 
                                </select>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'third_number']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'third_number']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </div>

                            
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center">
                                <label class="font-tajawal  align-self-center"> الرقم الرابع</label>
                                <select id="fourth_number" name="fourth_number" class="form-select">
                                    <option class="font-tajawal" value="١" <?php echo e(old('fourth_number', $ad->fourth_number) == '١' ? 'selected' : ''); ?> > ١</option>
                                    <option class="font-tajawal" value="٢" <?php echo e(old('fourth_number', $ad->fourth_number) == "٢" ? 'selected' : ''); ?> > ٢</option>
                                    <option class="font-tajawal" value="٣" <?php echo e(old('fourth_number', $ad->fourth_number) == "٣" ? 'selected' : ''); ?> > ٣</option>
                                    <option class="font-tajawal" value="٤" <?php echo e(old('fourth_number', $ad->fourth_number) == "٤" ? 'selected' : ''); ?> > ٤</option>
                                    <option class="font-tajawal" value="٥" <?php echo e(old('fourth_number', $ad->fourth_number) == "٥" ? 'selected' : ''); ?> > ٥</option>
                                    <option class="font-tajawal" value="٦" <?php echo e(old('fourth_number', $ad->fourth_number) == "٦" ? 'selected' : ''); ?> > ٦</option>
                                    <option class="font-tajawal" value="٧" <?php echo e(old('fourth_number', $ad->fourth_number) == "٧" ? 'selected' : ''); ?> > ٧</option>
                                    <option class="font-tajawal" value="٨" <?php echo e(old('fourth_number', $ad->fourth_number) == "٨" ? 'selected' : ''); ?> > ٨</option>
                                    <option class="font-tajawal" value="٩" <?php echo e(old('fourth_number', $ad->fourth_number) == "٩" ? 'selected' : ''); ?> > ٩</option> 
                                </select>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'fourth_number']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'fourth_number']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <!-- <hr style=" transform:rotate(180deg);" class=" "> -->
                    </div>

                    
                    <div class="checkboxes font-tajawal" style="margin-top:30px">
                        
                        
                        <div class="add-lawha-radio-container col d-flex justify-self-start flex-row flex-wrap align-items-start  ">
                            <div class="row add-lawha-radio no-gap  d-flex justify-content-center align-items-start flex-row position-relative gap-4 mb-3 "
                                style="width: 390px !important; ">
                                <p class=" font-tajawal fw-500 col mb-2" style=" font-weight: 500;color:#000023;">
                                    سريان الفحص الدوري
                                </p>

                                <div class="col mb-3 ">
                                    <div class="row d-flex flex-row flex-nowrap  zindex-tooltip position-relative">
                                        <div class=" form-check w-50">
                                            <input class="form-check-input" name="validity_of_periodic_examination" value="جديد" type="radio" id="validity_of_periodic_examination_new"  <?php echo e(old('validity_of_periodic_examination',$ad->validity_of_periodic_examination ) == "جديد" ? 'checked' : ''); ?>>
                                            <label class="form-check-label text-black fw-bold font-tajawal"  for="validity_of_periodic_examination_new"> جديد </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="validity_of_periodic_examination" value="منتهي" type="radio" id="validity_of_periodic_examination_expired" <?php echo e(old('validity_of_periodic_examination',$ad->validity_of_periodic_examination ) == "منتهي" ? 'checked' : ''); ?> >
                                            <label class="form-check-label text-black fw-bold font-tajawal" for="validity_of_periodic_examination_expired">منتهي</label>
                                        </div>
                                    </div>
                                </div>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'validity_of_periodic_examination']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'validity_of_periodic_examination']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </div>
                        </div>

                        
                         <div class="add-lawha-radio-container col d-flex justify-self-start flex-row flex-wrap align-items-start  ">
                            <div class="row add-lawha-radio no-gap  d-flex justify-content-center align-items-start flex-row position-relative gap-4 mb-3 "
                                style="width: 390px !important; ">
                                <p class=" font-tajawal fw-500 col mb-2" style=" font-weight: 500;color:#000023;">
                                    سريان استمارة السير
                                </p>

                                <div class="col mb-3 ">
                                    <div class="row d-flex flex-row flex-nowrap  zindex-tooltip position-relative">
                                        <div class=" form-check w-50">
                                            <input class="form-check-input" name="validity_of_driving_form" value="ساري" type="radio" id="validity_of_driving_form_new" <?php echo e(old('validity_of_driving_form', $ad->validity_of_driving_form) == "ساري" ? 'checked' : ''); ?> >
                                            <label class="form-check-label text-black fw-bold font-tajawal"  for="validity_of_driving_form_new">ساري</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="validity_of_driving_form" value="غير ساري" type="radio" id="validity_of_driving_form_expired" <?php echo e(old('validity_of_driving_form', $ad->validity_of_driving_form) == "غير ساري" ? 'checked' : ''); ?> >
                                            <label class="form-check-label text-black fw-bold font-tajawal" for="validity_of_driving_form_expired">غير ساري </label>
                                        </div>
                                    </div>
                                </div>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'validity_of_driving_form']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'validity_of_driving_form']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </div>
                        </div>

                        
                        <div class="add-lawha-radio-container col d-flex justify-self-start flex-row flex-wrap align-items-start  ">
                            <div class="row add-lawha-radio  d-flex justify-content-center align-items-start flex-row position-relative gap-4 "
                                style="width: 390px !important; ">
                                <p class=" font-tajawal fw-500 col mb-2" style=" font-weight: 500;color:#000023;">
                                    حالة تأمين المركبة
                                </p>

                                <div class="col mb-3 ">
                                    <div class="row d-flex flex-row flex-nowrap  zindex-tooltip position-relative">
                                        <div class=" form-check w-50">
                                            <input class="form-check-input" name="vehicle_insurance_status" value="جديد" type="radio" id="vehicle_insurance_status_new" <?php echo e(old('vehicle_insurance_status', $ad->vehicle_insurance_status) == "جديد" ? 'checked' : ''); ?> >
                                            <label class="form-check-label text-black fw-bold font-tajawal" for="vehicle_insurance_status_new">جديد</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="vehicle_insurance_status" value="منتهي" type="radio" id="vehicle_insurance_status_expired" <?php echo e(old('vehicle_insurance_status', $ad->vehicle_insurance_status) == "منتهي" ? 'checked' : ''); ?> >
                                            <label class="form-check-label text-black fw-bold font-tajawal" for="vehicle_insurance_status_expired">منتهي</label>
                                        </div>
                                    </div>
                                </div>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'vehicle_insurance_status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'vehicle_insurance_status']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </div>
                        </div>

                        
                        <div class="add-lawha-radio-container  col d-flex justify-self-start flex-row flex-wrap align-items-start  ">
                            <div class="row add-lawha-radio  d-flex justify-content-center align-items-start flex-row position-relative gap-4 "  style="width: 390px !important; ">
                                <p class=" font-tajawal fw-500 col mb-2" style=" font-weight: 500;color:#000023;">
                                    هل توجد مخالفات؟
                                </p>

                                <div class="col mb-3 ">
                                    <div class="row d-flex flex-row flex-nowrap  zindex-tooltip position-relative">
                                        <div class=" form-check w-50">
                                            <input class="form-check-input" name="are_there_violations" value="نعم" type="radio"  id="are_there_violations_yes"  <?php echo e(old('are_there_violations', $ad->are_there_violations) == "نعم" ? 'checked' : ''); ?> >
                                            <label class="form-check-label text-black fw-bold font-tajawal"  for="are_there_violations_yes">نعم</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="are_there_violations" value="لا" type="radio"  id="are_there_violations_no"  <?php echo e(old('are_there_violations', $ad->are_there_violations) == "لا" ? 'checked' : ''); ?> >
                                            <label class="form-check-label text-black fw-bold font-tajawal" for="are_there_violations_no">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'are_there_violations']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'are_there_violations']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>

                    
                    <div class="d-flex controls d-flex flex-row align-items-center justify-content-start py-2 gap-1">
                        
                        
                        <div class="col textfields py-1 d-flex flex-column align-items-start justify-content-start gap-3 px-0 ">
                            <div class="textfield-input    m-0 d-flex justify-content-center align-items-center">
                                <label style="width: auto;" class="font-tajawal align-self-center" for="phone">
                                    رقم التواصل</label>
                                <input type="text" class="font-tajawal bg-transparent text-right custom_input ltr" name="phone" value="<?php echo e(old('phone', $ad->phone )); ?>" id="phone" placeholder="يبدأ ب 05" >
                            </div>
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'phone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'phone']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                        </div>

                        
                        <div class="col textfields py-1 d-flex flex-column align-items-start justify-content-start gap-3  px-0 "  style="border-left:#cac7c7 1px solid ; padding-left: 5px;">
                            <div class="textfield-input   m-0 d-flex justify-content-center align-items-center">
                                <label style="width: auto;" class="font-tajawal align-self-center" for="price"> السعر </label>
                                <input type="text" class="font-tajawal bg-transparent text-right custom_input" name="price"  value="<?php echo e(old('price', $ad->price)); ?>" id="price"  placeholder="100 ريال " >
                            </div>
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'price']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'price']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                        </div>

                        
                        <div class="   col d-flex justify-self-start flex-row flex-wrap align-items-start  ">
                            <div class="col">
                                <div class="row sawm-check d-flex flex-row flex-nowrap justify-content-center zindex-tooltip position-relative" style="width: 159px;margin-right: 10px;">
                                    <div class=" form-check d-flex -start justify-content-between px-3 " style="width: 108px;">
                                        <input class="form-check-input align-self-center" value="نعم" name="in_auction" type="checkbox" id="in_auction" <?php echo e(old('in_auction', $ad->in_auction) == 'نعم' ? 'checked' : ''); ?> >
                                        <label class="form-check-label text-black fw-bold font-tajawal m-0  align-self-center" for="in_auction">على السوم</label>
                                    </div>
                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.error','data' => ['field' => 'in_auction']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => 'in_auction']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                                </div>
                            </div>
                        </div>

                    </div>
            

                     <!-- --------- Submit  -->
                    <div class="next-button  py-4 bg-white">
                        <div class="container-- d-flex justify-content-center gap-3 align-items-center ">
                            <button form="form-submit" type="submit" class="btn d-flex justify-content-between gap-2 px-5 align-items-center  btn-primary blue-btn ">
                                <i class="las la-plus" style="font-size: 20px;"></i> حفظ اللوحة
                            </button>
                        </div>
                    </div>

                </form>
            
            </div>
            <div class="padding py-5 bg-white"></div>

        </div>
        </div>

    </section>
    <!-- Add Form close ============================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/front/ads/edit.blade.php ENDPATH**/ ?>