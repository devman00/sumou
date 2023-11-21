<?php $__env->startSection('content'); ?>
   
<section class="ad-page mt-4">
    <div class="container">
        <!-- <div class="ad-title mb-5 ">
            <p class="d-flex  align-items-center gap-1"> رقم الإعلان  <span class="ad-id-title fw-bold"> 231011707 </span> </p>
        </div> -->

        <!-- ------ Law7a -----  -->
        <div class="ad-lawha mb-5 px-3">
          <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.ad.plate','data' => ['firstLetter' => $ad->first_letter,'secondLetter' => $ad->second_letter,'thirdLetter' => $ad->third_letter,'firstNumber' => $ad->first_number,'secondNumber' => $ad->second_number,'thirdNumber' => $ad->third_number,'fourthNumber' => $ad->fourth_number]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.ad.plate'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['first_letter' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->first_letter),'second_letter' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->second_letter),'third_letter' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->third_letter),'first_number' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->first_number),'second_number' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->second_number),'third_number' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->third_number),'fourth_number' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ad->fourth_number)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
        <!-- bloc 1 ---------  -->
        <div class="ad-card-details card-details p-4 p-lg-5 p-md-5">
            <div class="row"><div class="col-lg-12 col-md-12 col-12 text-center mb-3"><h5 class="mb-4">  <span> <i class="las la-user-alt fs-2em px-0"></i> <?php echo e($ad->user->name); ?> </span></h5></div></div>
            <div class="row mb-4">
                <div class="col-lg-4 col-md-4 col-4"><i class="las la-map-marker"></i>  <?php echo e($ad->user->city); ?> جدة </div>
                <div class="col-lg-4 col-md-4 col-4"><i class="las la-clock"></i> <?php echo e($ad->created_at->diffForHumans()); ?> </div>
                <div class="col-lg-4 col-md-4 col-4"><i class="las la-hashtag"></i> 000<?php echo e($ad->id); ?> </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-lg-7 col-md-7 col-7 ps-md-5 ps-lg-5"><h5>  سريان الفحص الدوري </h5></div>
                <div class="col-lg-5 col-md-5 col-5"><span class=" <?php echo e($ad->validity_of_periodic_examination == 'جديد' ? 'accept' : 'reject'); ?> btn-sm"> <i class="las la-<?php echo e($ad->validity_of_periodic_examination == 'جديد' ? 'check' : 'times'); ?>"></i> <?php echo e($ad->validity_of_periodic_examination); ?> </span></div>                        
            </div>
            <div class="row mb-3">
                <div class="col-lg-7 col-md-7 col-7 ps-md-5 ps-lg-5"><h5>   سريان إستمارة السير </h5></div>
                <div class="col-lg-5 col-md-5 col-5"><span class=" <?php echo e($ad->validity_of_driving_form == 'ساري' ? 'accept' : 'reject'); ?> btn-sm"> <i class="las la-<?php echo e($ad->validity_of_driving_form == 'ساري' ? 'check' : 'times'); ?>"></i> <?php echo e($ad->validity_of_driving_form); ?> </span></div>                        
            </div>
            <div class="row mb-3">
                <div class="col-lg-7 col-md-7 col-7 ps-md-5 ps-lg-5"><h5>  حالة تأمين المركبة </h5></div>
                <div class="col-lg-5 col-md-5 col-5"><span class=" <?php echo e($ad->vehicle_insurance_status == 'جديد' ? 'accept' : 'reject'); ?> btn-sm"> <i class="las la-<?php echo e($ad->vehicle_insurance_status == 'جديد' ? 'check' : 'times'); ?>"></i> <?php echo e($ad->vehicle_insurance_status); ?> </span></div>                        
            </div>
            <div class="row mb-4">
                <div class="col-lg-7 col-md-7 col-7 ps-md-5 ps-lg-5"><h5>   هل توجد مخالفات؟ </h5></div>
                <div class="col-lg-5 col-md-5 col-5"><span class="  <?php echo e($ad->are_there_violations == 'لا' ? 'accept' : 'reject'); ?> btn-sm"> <i class="las la-<?php echo e($ad->are_there_violations == 'لا' ? 'check' : 'times'); ?>"></i>  <?php echo e($ad->are_there_violations); ?> </span></div>                        
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


<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title h4" id="contactModalLabel"> تواصل مع البائع</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-6">
                    <a href="https://wa.me/<?php echo e($ad->user->whatsapp); ?>" target="_blank" class="whatsapp">
                        <i class=" lab la-whatsapp d-flex justify-content-center align-content-center flex-column text-center" style="font-size: 30px; color: green;"> <span class="fs-13px fw-bold"> الواتس اب </span></i>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-6">
                    <a href="tel:<?php echo e($ad->phone); ?>" class="whatsapp text-dark-blue">
                        <i class=" las la-phone d-flex justify-content-center align-content-center flex-column text-center" style="font-size: 30px;"> <span class="fs-13px fw-bold"> <?php echo e($ad->phone); ?> </span></i>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/front/ads/show.blade.php ENDPATH**/ ?>