<!DOCTYPE html>
<html lang="en-US" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title> <?php echo $__env->yieldContent('pagetitle'); ?> </title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  
  
  <meta name="msapplication-TileImage" content="<?php echo e(asset('assets/')); ?>/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Favicon  -->
  <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/')); ?>/img/favicon.ico">

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="<?php echo e(asset('assets/')); ?>/css/theme-rtl.css" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/')); ?>/css/style.css" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/')); ?>/css/parts/homepage.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo e(asset('assets/')); ?>/css/parts/ad.css">
  <link rel="stylesheet" href="<?php echo e(asset('assets/')); ?>/css/parts/account.css">
  
  <!-- -------- OWL Carousel ------  -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/')); ?>/css/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('assets/')); ?>/css/owl-carousel/owl.theme.default.min.css">
  <!-- <link rel="stylesheet" href="<?php echo e(asset('assets/')); ?>/css/owl-carousel/owl.theme.green.min.css"> -->

  <!-- bootstrap RTL  -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous"> -->

  <!-- Line-awesome----- -->
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

  <!-- Fontawesome --->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

  
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>


<body <?php if(Route::currentRouteName() == 'user.profile' OR Route::currentRouteName() == 'ads.create' OR Route::currentRouteName() == 'ads.index'): ?> class="accountPage" <?php endif; ?>>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main overflow-hidden" id="top">

    <?php if ($__env->exists('layouts.front.navbar')) echo $__env->make('layouts.front.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->yieldContent('content'); ?>
    
    
    <?php if ($__env->exists('layouts.front.footer')) echo $__env->make('layouts.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->

  <?php if ($__env->exists('layouts.front.foot')) echo $__env->make('layouts.front.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH /var/www/sumou.sa/html/resources/views/layouts/front-layout.blade.php ENDPATH**/ ?>