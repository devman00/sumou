<?php if(isset($errors) && $errors->any()): ?>
    <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($error); ?> <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<?php if($status = session('status')): ?>
    <div class="alert alert-success">
        <?php echo e($status); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\wamp64\www\projects\sumou\vendor\qcod\laravel-app-settings\src/resources/views/_flash.blade.php ENDPATH**/ ?>