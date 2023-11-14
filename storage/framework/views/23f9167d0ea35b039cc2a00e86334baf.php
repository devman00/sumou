<?php $__errorArgs = [$field];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span <?php echo e($attributes->merge(['class' => "invalid-feedback d-block"])); ?>> <?php echo e($message); ?> </span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php /**PATH C:\wamp64\www\projects\sumou\resources\views/components/admin/form-error.blade.php ENDPATH**/ ?>