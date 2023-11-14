
<!-- NAV -------  -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white py-2" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3" href="<?php echo e(route('home')); ?>">
            <img class="me-3 logo" src="<?php echo e(asset('assets/')); ?>/img/logo_blue.png" alt="" />
        </a>

        <a class="confirm-btn-mob nav-link px-1" href="#" style="font-size: 14px; display:none"> <i class="las la-check-circle"></i>
          اتمام المبايعة<br>عن طريق سمو
        </a>


        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menue  -->
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0 px-3 px-md-0 px-lg-0"
            id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
                <li class="nav-item "> <a class="nav-link fw-medium active" aria-current="page" href="<?php echo e(route('home')); ?>">الرئيسية</a> </li>

                <li class="nav-item px-3 confirm-btn">
                    <a class="nav-link px-3 text-white" href="#"> <i class="las la-check-circle"></i>
                        اتمام المبايعة عن طريق سمو
                    </a>
                </li>

                <li class="nav-item "><a class="nav-link" href="about.html">من نحن</a></li>
                <li class="nav-item "><a class="nav-link" href="contact.html"> إتصل بنا </a></li>
                
                <?php if(auth()->check()): ?>
                  <li class="nav-item "><a class="nav-link" href="<?php echo e(route('ads.create')); ?>"> إضافة لوحة </a></li>
                  <li class="nav-item "><a class="nav-link" href="<?php echo e(route('user.profile')); ?>"> حسابي </a></li>
                  <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']); ?>تسجيل الخروج  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                  </form>                                
                <?php else: ?>
                <li class="nav-item "><a class="nav-link" href="<?php echo e(route('login')); ?>">  تسجيل الدخول </a></li>
                <?php endif; ?>

            </ul>
            <div class="ps-lg-5">
                



                

                <!-- <img src="<?php echo e(asset('assets/')); ?>/img/2030.png" style="margin-right: 10px" alt="2030 رؤية" width="90"> -->
            </div>
        </div>
    </div>
</nav>


<?php if(auth()->check()): ?>
<?php if(Route::currentRouteName() == 'user.profile' OR Route::currentRouteName() == 'ads.create' OR Route::currentRouteName() == 'ads.index'): ?> 
<!---->
<nav class="mobSidebar hoverable close">
    <div class="logo_items flex">
      <i class="bx bx-lock-alt" id="lock-icon" title=""></i>
      <i class="bx bx-x" id="mobSidebar-close"></i>
    </div>

    <div class="menu_container">
      <div class="menu_items">
        <ul class="menu_item">
          <div class="menu_title flex">
            <span class="title">لوحة التحكم</span>
            <span class="line"></span>
          </div>
          <li class="item">
            <a href="<?php echo e(route('user.profile')); ?>" class="link flex"> 
              <i class="las la-user"></i>
              <span>حسابي</span>
            </a>
          </li>
          <li class="item">
            <a href="" class="link flex">
              <i class="las la-file-invoice"></i>
              <span>طلباتي</span>
            </a>
          </li>
          <li class="item">
            <a href="<?php echo e(route('ads.create')); ?>" class="link flex">
              <i class="las la-folder-plus"></i>
              <span>إضافة لوحة</span>
            </a>
          </li>
          <li class="item">
            <a href="<?php echo e(route('ads.index')); ?>" class="link flex">
              <i class="las la-stream"></i>
              <span>لوحاتي</span>
            </a>
          </li>
        </ul>

      </div>

      <div class="mobSidebar_profile flex">
        <span class="nav_image">
          <img src="<?php echo e(asset('assets/')); ?>/img/logo_blue.png" alt="" />
        </span>
        <div class="data_text">
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <a href="<?php echo e(route('logout')); ?>" class="btn position-relative top-0 text-black p-0"
                    onclick="event.preventDefault();this.closest('form').submit();">
                    <i class="las la-sign-out-alt pe-2"></i>
                    تسجيل الخروج 
                </a>
            </form>
        </div>
      </div>
    </div>
</nav>        
<!---->
<?php endif; ?>
<?php endif; ?><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/layouts/front/navbar.blade.php ENDPATH**/ ?>