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
                        <h4 class=" affair-step-title d-inline-block text-center fw-bold m-0 p-1">إضافة لوحة </h4>
                    </div>
                </div>

                <div class="padding py-4 bg-white"></div>

                <!-- Start Form -------  -->
                <form action="<?php echo e(route('ads.store')); ?>" method="post" id="form-submit" class=" fill-details bg-white ps-4 px-lg-8 ">
                    <?php echo csrf_field(); ?>

                    
                    <div class=" col d-flex justify-self-start flex-row flex-wrap align-items-start py-2 ">
                        <div class="no-gap  row d-flex justify-content-center align-items-start flex-row position-relative gap-4 "
                            style=" width: 320px;">
                            <p class=" font-tajawal fw-500 col mb-2"
                                style=" font-weight: 500;color:#000023;border-left:#cac7c7 1px solid; margin-bottom: 20px;">
                                نوع اللوحة
                            </p>

                            <div class="col ">
                                <div class="switch-field type-lawha">
                                    <div class=" form-check" >
                                        <input class="form-check-input" value="خصوصي" name="plate_type" type="radio" id="plate-private" checked <?php echo e(old('plate_type') == "خصوصي" ? 'checked' : ''); ?> >
                                        <label class="form-check-label fw-bold font-tajawal" for="plate-private">خصوصي</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="نقل" name="plate_type" type="radio" id="plate-public" <?php echo e(old('plate_type') == "نقل" ? 'checked' : ''); ?> >
                                        <label class="form-check-label fw-bold font-tajawal" for="plate-public">نقل</label>
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

                    
                    <div class="col  d-flex controls d-flex align-items-center justify-content-start pb-2 position-relative">
                        <div class="row w-50 textfields py-1 d-flex flex-column align-items-center justify-content-center gap-3  ">
                            <div class="textfield-input mb-2 d-flex justify-content-start align-items-center m-0">
                                <label class="font-tajawal align-self-center"> نوع الأرقام </label>
                                <select id="numbersType" name="numbers_type" class="form-select" style="min-width: 100px;">
                                    <option value="" selected> الكل </option>
                                    <option data-value="1" value="1"> فردي </option>
                                    <option data-value="2" value="2"> ثنائي </option>
                                    <option data-value="3" value="3"> ثلاثي </option>
                                    <option data-value="4" value="4"> رباعي </option>                                
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white w-100">
                        <div class="ad-lawha mt-3__ m-auto w-lg-50 w-md-50 py-3__ pb-1">
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.ad.plate','data' => ['firstLetter' => '-','secondLetter' => '-','thirdLetter' => '-','firstNumber' => '-','secondNumber' => '-','thirdNumber' => '-','fourthNumber' => '-']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.ad.plate'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['first_letter' => '-','second_letter' => '-','third_letter' => '-','first_number' => '-','second_number' => '-','third_number' => '-','fourth_number' => '-']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        </div>
                    </div>

                    
                    <div class="col  d-flex controls d-flex align-items-center justify-content-start position-relative pt-3 rtl_arrow">
                        <div class="row  w-50 textfields py-1 d-flex flex-column align-items-center justify-content-center gap-3  ">
                            
                            
                            <div class="letterBlocAd textfield-input mb-2 d-flex justify-content-start align-items-center m-0">
                                <label class="font-tajawal align-self-center"> الأحرف &nbsp; </label>
                                <select id="first_letter" name="first_letter" class="form-select">
                                    <option value="" <?php echo e(old('first_letter') == "" ? 'selected' : ''); ?> >  </option>
                                    <?php $__currentLoopData = config('app')['arabic_letters']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value); ?>" <?php echo e(old('first_letter') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?> - <?php echo e(config('app')['english_letters'][$value]); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                
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

                                <select id="second_letter" name="second_letter" class="form-select mx-2 ms-md-4 ms-lg-4 me-md-0 me-lg-0">
                                    <option value="" <?php echo e(old('second_letter') == "" ? 'selected' : ''); ?> >  </option>
                                    <?php $__currentLoopData = config('app')['arabic_letters']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value); ?>" <?php echo e(old('second_letter') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?> - <?php echo e(config('app')['english_letters'][$value]); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                
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

                                <select id="third_letter" name="third_letter" class="form-select">
                                    <option value="" <?php echo e(old('third_letter') == "" ? 'selected' : ''); ?> >  </option>
                                    <?php $__currentLoopData = config('app')['arabic_letters']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value); ?>" <?php echo e(old('third_letter') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?> - <?php echo e(config('app')['english_letters'][$value]); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                
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
                    </div>

                    
                    <div  class="col  d-flex controls d-flex align-items-center justify-content-start pb-4 position-relative ">
                        <div class="row w-50 with-border textfields py-1 d-flex flex-column align-items-center justify-content-center gap-3  ">
                            
                            
                            <div class="numberBlocAd textfield-input mb-2 d-flex justify-content-start align-items-center">
                                <label class="font-tajawal align-self-center"> الأرقام &nbsp; </label>
                                <select id="first_number" name="first_number"  class="form-select cnt_firstNumber">
                                    <option class="font-tajawal" value="" <?php echo e(old('first_number') == "" ? 'selected' : ''); ?> >  </option>
                                    <?php $__currentLoopData = config('app')['arabic_numbers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option class="font-tajawal" value="<?php echo e($value); ?>" <?php echo e(old('first_number') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            
                                <select id="second_number" name="second_number" class="form-select cnt_secondNumber mx-2 ms-md-4 me-md-0 ms-lg-4 me-lg-0">
                                    <option class="font-tajawal" value="" <?php echo e(old('second_number') == "" ? 'selected' : ''); ?> >  </option>
                                    <?php $__currentLoopData = config('app')['arabic_numbers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option class="font-tajawal" value="<?php echo e($value); ?>" <?php echo e(old('second_number') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                
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
                            
                                <select id="third_number" name="third_number" class="form-select cnt_thirdNumber me-2 me-md-0 me-lg-0">
                                    <option class="font-tajawal" value="" <?php echo e(old('third_number') == "" ? 'selected' : ''); ?> >  </option>
                                    <?php $__currentLoopData = config('app')['arabic_numbers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option class="font-tajawal" value="<?php echo e($value); ?>" <?php echo e(old('third_number') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                    
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
                            
                                <select id="fourth_number" name="fourth_number" class="form-select cnt_fourthNumber">
                                    <option class="font-tajawal" value="" <?php echo e(old('fourth_number') == "" ? 'selected' : ''); ?> >  </option>
                                    <?php $__currentLoopData = config('app')['arabic_numbers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option class="font-tajawal" value="<?php echo e($value); ?>" <?php echo e(old('fourth_number') == $value ? 'selected' : ''); ?> > <?php echo e($value); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                    <div class="switch-field">
                                        <div class=" form-check">
                                            <input class="form-check-input" name="validity_of_periodic_examination" value="جديد" type="radio" id="validity_of_periodic_examination_new"  checked <?php echo e(old('validity_of_periodic_examination') == "جديد" ? 'checked' : ''); ?>>
                                            <label class="form-check-label fw-bold font-tajawal"  for="validity_of_periodic_examination_new"> جديد </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="validity_of_periodic_examination" value="منتهي" type="radio" id="validity_of_periodic_examination_expired" <?php echo e(old('validity_of_periodic_examination') == "منتهي" ? 'checked' : ''); ?> >
                                            <label class="form-check-label fw-bold font-tajawal" for="validity_of_periodic_examination_expired">منتهي</label>
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
                                    <div class="switch-field">
                                        <div class=" form-check">
                                            <input class="form-check-input" name="validity_of_driving_form" value="ساري" type="radio" id="validity_of_driving_form_new" checked <?php echo e(old('validity_of_driving_form') == "ساري" ? 'checked' : ''); ?> >
                                            <label class="form-check-label fw-bold font-tajawal"  for="validity_of_driving_form_new">ساري</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="validity_of_driving_form" value="غير ساري" type="radio" id="validity_of_driving_form_expired" <?php echo e(old('validity_of_driving_form') == "غير ساري" ? 'checked' : ''); ?> >
                                            <label class="form-check-label fw-bold font-tajawal" for="validity_of_driving_form_expired">غير ساري </label>
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
                                    <div class="switch-field">
                                        <div class=" form-check">
                                            <input class="form-check-input" name="vehicle_insurance_status" value="جديد" type="radio" id="vehicle_insurance_status_new" checked <?php echo e(old('vehicle_insurance_status') == "جديد" ? 'checked' : ''); ?> >
                                            <label class="form-check-label fw-bold font-tajawal" for="vehicle_insurance_status_new">جديد</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="vehicle_insurance_status" value="منتهي" type="radio" id="vehicle_insurance_status_expired" <?php echo e(old('vehicle_insurance_status') == "منتهي" ? 'checked' : ''); ?> >
                                            <label class="form-check-label fw-bold font-tajawal" for="vehicle_insurance_status_expired">منتهي</label>
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
                                    <div class="switch-field">
                                        <div class=" form-check">
                                            <input class="form-check-input" name="are_there_violations" value="نعم" type="radio"  id="are_there_violations_yes"  <?php echo e(old('are_there_violations') == "نعم" ? 'checked' : ''); ?> >
                                            <label class="form-check-label fw-bold font-tajawal"  for="are_there_violations_yes">نعم</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="are_there_violations" value="لا" type="radio"  id="are_there_violations_no" checked <?php echo e(old('are_there_violations') == "لا" ? 'checked' : ''); ?> >
                                            <label class="form-check-label fw-bold font-tajawal" for="are_there_violations_no">لا</label>
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
                        
                        
                        <div class="col textfields py-1 d-flex flex-column align-items-start justify-content-start gap-3 px-0 fieldPhoneFlag">
                            
                            
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.phone','data' => ['name' => 'phone','class' => 'ltr','placeholder' => '5xxxxxxxx','id' => 'phone','value' => old('phone')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'phone','class' => 'ltr','placeholder' => '5xxxxxxxx','id' => 'phone','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('phone'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
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

                        
                        <div class="col textfields py-1 d-flex flex-column align-items-start justify-content-start gap-3  ps-lg-4 px-0 "  style="border-left:#cac7c7 1px solid ; padding-left: 5px;">
                            <div class="textfield-input   m-0 d-flex justify-content-center align-items-center">
                                <label style="width: auto;" class="font-tajawal align-self-center" for="price"> السعر </label>
                                <input type="text" class="font-tajawal bg-transparent text-right custom_input price_input ms-md-1 ms-lg-1" name="price"  value="<?php echo e(old('price')); ?>" id="price"  placeholder="100 ريال " >
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
                                        <input class="form-check-input align-self-center" value="نعم" name="in_auction" type="checkbox" id="in_auction" <?php echo e(old('in_auction') == 'نعم' ? 'checked' : ''); ?> >
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
                                <i class="las la-plus" style="font-size: 20px;"></i> أضف اللوحة
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

<?php echo $__env->make('layouts.front-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/front/ads/create.blade.php ENDPATH**/ ?>