<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name', 'WMW')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/main/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/main/app-dark.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('admin/assets/images/logo/favicon.svg')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('admin/assets/images/logo/favicon.png')); ?>" type="image/png">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/shared/iconly.css')); ?>">
    
    
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/extensions/@icon/dripicons/dripicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/pages/dripicons.css')); ?>">

    <?php echo $__env->yieldContent('head'); ?>

    
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/style.css')); ?>">


  </head>
  <body>
    <div id="app">

      
      <?php echo $__env->make('layouts.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div id="main">
        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>
            
        <?php echo $__env->yieldContent('content'); ?>
        
      
      <?php echo $__env->make('layouts.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
      </div>
    </div>
    <script src="<?php echo e(asset('admin/assets/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/extensions/jquery/jquery.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('foot'); ?>
    <script src="<?php echo e(asset('admin/assets/js/script.js')); ?>"></script>
  </body>
</html><?php /**PATH C:\wamp64\www\projects\wmw_blog\resources\views/layouts/master.blade.php ENDPATH**/ ?>