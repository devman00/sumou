<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
  'targetBlank' => 0,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
  'targetBlank' => 0,
]); ?>
<?php foreach (array_filter(([
  'targetBlank' => 0,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li class="<?php echo e($isChildren ? 'submenu-item' : ($hasDropdown == 'true' ? 'sidebar-item has-sub' : 'sidebar-item')); ?>  <?php if(Route::currentRouteName() == $activeLink): ?> active <?php endif; ?> ">
    <?php if($isChildren): ?>
    <a href="<?php echo e($link); ?>" <?php echo e($targetBlank === 1 ? 'target="_blank"' : ''); ?> >
        <span><?php echo e($title); ?></span>
    </a>
    <?php else: ?>
        <?php if($activeLink == 'logout'): ?>
          <a href="<?php echo e($link); ?>" class='sidebar-link' onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="<?php echo e($icon); ?>"></i>
            <span><?php echo e($title); ?></span>
          </a>
          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
          </form>
        <?php else: ?> 
          <a href="<?php echo e($link); ?>" class='sidebar-link' <?php echo e($targetBlank === 1 ? 'target="_blank"' : ''); ?>>
            <i class="<?php echo e($icon); ?>"></i>
            <span><?php echo e($title); ?></span>
          </a>
        <?php endif; ?>
    
    <?php endif; ?>
   
    <?php if($hasDropdown): ?>
    <ul class="submenu">
      <?php echo e($slot); ?>

    </ul>
    <?php endif; ?>

</li>
<?php /**PATH C:\wamp64\www\projects\sumou\resources\views/components/admin/sidebar-link.blade.php ENDPATH**/ ?>