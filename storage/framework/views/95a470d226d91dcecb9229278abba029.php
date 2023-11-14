<?php $__env->startComponent('app_settings::input_group', compact('field')); ?>

    <input type="<?php echo e($field['type']); ?>"
           name="<?php echo e($field['name']); ?>"
           <?php if( $placeholder = Arr::get($field, 'placeholder') ): ?>
           placeholder="<?php echo e($placeholder); ?>"
           <?php endif; ?>
           value="<?php echo e(old($field['name'], \setting($field['name']))); ?>"
           class="<?php echo e(Arr::get( $field, 'class', config('app_settings.input_class', 'form-control'))); ?> <?php echo e($errors->has($field['name']) ? config('app_settings.input_invalid_class', 'is-invalid') : ''); ?>"
           <?php if( $styleAttr = Arr::get($field, 'style')): ?> style="<?php echo e($styleAttr); ?>" <?php endif; ?>
           <?php if( $maxAttr = Arr::get($field, 'max')): ?> max="<?php echo e($maxAttr); ?>" <?php endif; ?>
           <?php if( $minAttr = Arr::get($field, 'min')): ?> min="<?php echo e($minAttr); ?>" <?php endif; ?>
           id="<?php echo e(Arr::get($field, 'name')); ?>"
    >

    <?php if( $append = Arr::get($field, 'append')): ?>
        <span><?php echo e($append); ?></span>
    <?php endif; ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\wamp64\www\projects\sumou\vendor\qcod\laravel-app-settings\src/resources/views/fields/_text.blade.php ENDPATH**/ ?>