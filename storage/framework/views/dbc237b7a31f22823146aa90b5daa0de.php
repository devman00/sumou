<?php $__env->startSection('title'); ?>
    قائمة اللوحات
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.page-heading','data' => ['heading' => 'قائمة اللوحات']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.page-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'قائمة اللوحات']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    

    <div class="page-content">
        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-header"></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">

                                      <?php if(!$ads->isEmpty()): ?>
                                        <thead>
                                            <tr>
                                                <th> بيانات اللوحة </th>
                                                <th> نوع اللوحة </th>
                                                <th> السعر </th>
                                                <th> تاريخ الإضافة </th>
                                                <th>  الحالة </th>
                                                <th> الخيارات </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    
                                                    <td class="text-bold-500 ad-lawha p-4"> 
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
                                                    
                                                    </td>
                                                    <td class="text-bold-500"> <?php echo e($ad->plate_type); ?> </td>
                                                    <td class="text-bold-500"> <?php echo e($ad->price); ?> </td>
                                                    <td class="text-bold-500"> <?php echo e($ad->created_at->diffForHumans()); ?> </td>
                                                    <td class="text-bold-500"> <?php echo e($ad->status); ?> </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <?php if (app('laratrust')->hasPermission('ads-update')) : ?>
                                                            <a href="<?php echo e(route('admin.ads.edit', $ad->id)); ?>"><i
                                                                    class="icon dripicons dripicons-document-edit font-medium-1"></i>
                                                            </a>
                                                            <?php endif; // app('laratrust')->permission ?>
                                                            <?php if (app('laratrust')->hasPermission('ads-update')) : ?>
                                                            <form action="<?php echo e(route('admin.ads.destroy', $ad->id)); ?>"
                                                                method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>

                                                                <button type="submit"
                                                                    class="me-1 mb-1 border-0 bg-transparent text-danger"
                                                                    onclick="return confirm('هل أنت متأكد من حذف العنصر ؟');">
                                                                    <i class="icon dripicons dripicons-trash font-medium-1"></i>
                                                                </button>
                                                            </form>
                                                            <?php endif; // app('laratrust')->permission ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>

                                      <?php else: ?>

                                        <tr><td> لا توجد لوحات </td></tr>

                                      <?php endif; ?>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/admin/ad/index.blade.php ENDPATH**/ ?>