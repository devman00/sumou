<div class="col-md-2 col-lg-2 deskSidebar sidebar bg-white px-0">
    <div class="position-lg-fixed bg-white col-md-2 py-5 min-vh-lg-100 sidebar_icns">
        <div class="py-3 mb-5 dashboard-sidebare-title text-center">
            <h3>لوحة التحكم</h3>
        </div>
        <ul class=" nav nav-tabs d-flex flex-column justify-content-start align-items-start w-100" id="myTab"
            role="tablist">
            
            <li class="nav-item" role="presentation">
                <a href="<?php echo e(route('user.profile')); ?>">
                   
                    <button class="nav-link <?php if(Route::currentRouteName() == 'user.profile'): ?> active <?php endif; ?>" id="profile-details-tab">
                        <i class="las la-cog pe-2"></i>
                        إعدادات الحساب 
                    </button>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="<?php echo e(route('ads.create')); ?>">
                    <button class="nav-link <?php if(Route::currentRouteName() == 'ads.create'): ?> active <?php endif; ?>"" type="button">
                        <i class="las la-plus pe-2"></i>
                        إضافة لوحة
                    </button>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo e(route('ads.index')); ?>">
                    <button class="nav-link <?php if(Route::currentRouteName() == 'ads.index'): ?> active <?php endif; ?>"" type="button">
                        <i class="las la-copy pe-2"></i>
                        لوحاتي 
                    </button>
                </a>
            </li>

            <li class="nav-item" role="presentation">
                <a href="requests.html">
                    <button class="nav-link" id="talabat-tab">
                        <i class="las la-exchange-alt pe-2"></i>
                        طلباتي
                    </button>
                </a>
            </li>
        </ul>

        
        <div class="logout__ position-relative ps-5">
            
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <a href="<?php echo e(route('logout')); ?>" class="btn position-relative text-black p-0"
                    onclick="event.preventDefault();this.closest('form').submit();">
                    <i class="las la-sign-out-alt pe-2"></i>
                    تسجيل الخروج 
                </a>
            </form>
        </div>
    </div>

</div><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/layouts/front/partials/sidebar.blade.php ENDPATH**/ ?>