<?php $__env->startSection('content'); ?>
    <!-- Account begin ============================-->
    <section class="dashboard d-flex flex-column justify-content-between ">

        <div class="row">

            <!-- Sidebar ----  -->
            <?php if ($__env->exists('layouts.front.partials.sidebar')) echo $__env->make('layouts.front.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- ------ Content  -->
            <div class="col-md-10 col-lg-10 py-6 data px-0 min-vh-md-100 min-vh-lg-100">
                <div class="container px-3 mx-3">
                    <h3 class="px-3"> لوحاتي </h3>
                </div>

                <div class="homepage-lawhat-wrapper p-5 pt-4">
                    <?php $__empty_1 = true; $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.ad.default','data' => ['ad' => $ad->id,'date' => $ad->created_at->diffForHumans(),'firstLetter' => $ad->first_letter,'secondLetter' => $ad->second_letter,'thirdLetter' => $ad->third_letter,'firstNumber' => $ad->first_number,'secondNumber' => $ad->second_number,'thirdNumber' => $ad->third_number,'fourthNumber' => $ad->fourth_number,'price' => $ad->price,'phone' => $ad->phone,'allowContact' => 0,'allowActions' => 1,'inAuction' => $ad->in_auction]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.ad.default'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ad' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->id),'date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->created_at->diffForHumans()),'first_letter' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->first_letter),'second_letter' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->second_letter),'third_letter' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->third_letter),'first_number' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->first_number),'second_number' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->second_number),'third_number' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->third_number),'fourth_number' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->fourth_number),'price' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->price),'phone' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->phone),'allow_contact' => 0,'allow_actions' => 1,'in_auction' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->in_auction)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="alert alert-warning text-center"> لا توجد لوحات. </p>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </section>
    <!-- Account Close ============================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/front/account/ads.blade.php ENDPATH**/ ?>