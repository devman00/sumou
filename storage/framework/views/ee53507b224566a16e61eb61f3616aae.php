<li class="<?php echo e($isChildren ? 'submenu-item' : ($hasDropdown == 'true' ? 'sidebar-item has-sub' : 'sidebar-item')); ?>  <?php if(Route::currentRouteName() == $activeLink): ?> active <?php endif; ?> ">
    <?php if($isChildren): ?>
    <a href="<?php echo e($link); ?>">
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
          <a href="<?php echo e($link); ?>" class='sidebar-link'>
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
<?php /**PATH C:\wamp64\www\projects\wmw_blog\resources\views/components/admin/sidebar-link.blade.php ENDPATH**/ ?>