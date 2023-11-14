<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">

            <?php if ($__env->exists(config('app_settings.flash_partial'))) echo $__env->make(config('app_settings.flash_partial'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form method="post" action="<?php echo e(config('app_settings.url')); ?>" class="form-horizontal mb-3" enctype="multipart/form-data" role="form">
                <?php echo csrf_field(); ?>


                <?php if( isset($settingsUI) && count($settingsUI) ): ?>

                    <?php $__currentLoopData = Arr::get($settingsUI, 'sections', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section => $fields): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__env->startComponent('app_settings::section', compact('fields')); ?>
                            <div class="<?php echo e(Arr::get($fields, 'section_body_class', config('app_settings.section_body_class', 'card-body'))); ?>">
                                <?php $__currentLoopData = Arr::get($fields, 'inputs', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(!view()->exists('app_settings::fields.' . $field['type'])): ?>
                                        <div style="background-color: #f7ecb5; box-shadow: inset 2px 2px 7px #e0c492; border-radius: 0.3rem; padding: 1rem; margin-bottom: 1rem">
                                            Defined setting <strong><?php echo e($field['name']); ?></strong> with
                                            type <code><?php echo e($field['type']); ?></code> field is not supported. <br>
                                            You can create a <code>fields/<?php echo e($field['type']); ?>.balde.php</code> to render this input however you want.
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($__env->exists('app_settings::fields.' . $field['type'] )) echo $__env->make('app_settings::fields.' . $field['type'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php echo $__env->renderComponent(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <div class="row m-b-md">
                    <div class="col-md-12">
                        <button class="btn-primary btn">
                            <?php echo e(Arr::get($settingsUI, 'submit_btn_text', 'Save Settings')); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\wamp64\www\projects\sumou\vendor\qcod\laravel-app-settings\src/resources/views/_settings.blade.php ENDPATH**/ ?>