<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
      <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
          <div class="logo">
            <a href="index.html">
              <img src="<?php echo e(asset('assets/img/logo_blue.png')); ?>" alt="Logo" srcset="">
            </a>
            
          </div>
          <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
              <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                <g transform="translate(-210 -1)">
                  <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                  <circle cx="220.5" cy="11.5" r="4"></circle>
                  <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                </g>
              </g>
            </svg>
            <div class="form-check form-switch fs-6">
              <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
              <label class="form-check-label"></label>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
              <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
            </svg>
          </div>
          <div class="sidebar-toggler  x">
            <a href="#" class="sidebar-hide d-xl-none d-block">
              <i class="bi bi-x bi-middle"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="sidebar-menu">
        <ul class="menu">

          

          
          <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'لوحة التحكم','link' => route('admin.dashboard.index'),'icon' => 'bi bi-grid-fill','hasDropdown' => false,'activeLink' => 'dashboard'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?> 

          
          <?php if(Auth::user()->hasPermission('posts-read') || Auth::user()->hasPermission('posts-create')): ?>
            <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'المقالات','icon' => 'icon dripicons dripicons-blog','hasDropdown' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
              <?php if (app('laratrust')->hasPermission('posts-read')) : ?><?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'قائمة المقالات','link' => route('admin.posts.index'),'hasDropdown' => false,'isChildren' => true,'activeLink' => 'admin.posts.index'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?> <?php endif; // app('laratrust')->permission ?>
              <?php if (app('laratrust')->hasPermission('posts-create')) : ?><?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'إضافة مقال','link' => route('admin.posts.create'),'hasDropdown' => false,'isChildren' => true,'activeLink' => 'admin.posts.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?> <?php endif; // app('laratrust')->permission ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?>
          <?php endif; ?>

          
          <?php if(Auth::user()->hasPermission('categories-read') || Auth::user()->hasPermission('categories-create')): ?>
           <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'التصنيفات','icon' => 'icon dripicons dripicons-view-thumb','hasDropdown' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (app('laratrust')->hasPermission('categories-read')) : ?> <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'كل التصنيفات','link' => route('admin.categories.index'),'hasDropdown' => false,'isChildren' => true,'activeLink' => 'admin.categories.index'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?> <?php endif; // app('laratrust')->permission ?>
            <?php if (app('laratrust')->hasPermission('categories-create')) : ?> <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'إضافة تصنيف','link' => route('admin.categories.create'),'hasDropdown' => false,'isChildren' => true,'activeLink' => 'admin.categories.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?> <?php endif; // app('laratrust')->permission ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?>
          <?php endif; ?>
          
          
          <?php if(Auth::user()->hasPermission('ads-read') || Auth::user()->hasPermission('ads-create')): ?>
            <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'اللوحات','icon' => 'icon dripicons dripicons-card','hasDropdown' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
              <?php if (app('laratrust')->hasPermission('ads-read')) : ?><?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'قائمة اللوحات','link' => route('admin.ads.index'),'hasDropdown' => false,'isChildren' => true,'activeLink' => 'admin.ads.index'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?> <?php endif; // app('laratrust')->permission ?>
              
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?>
          <?php endif; ?>

          
          
            <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'المبايعات','icon' => 'icon dripicons dripicons-briefcase','hasDropdown' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
              
              <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'قائمة المبايعات','link' => '#','hasDropdown' => false,'isChildren' => true,'activeLink' => '#'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?>
              <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'عقد مبايعة','link' => '#','hasDropdown' => false,'isChildren' => true,'activeLink' => '#'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?>
          
           
          
          <?php if(Auth::user()->hasPermission('users-read') || Auth::user()->hasPermission('users-create')): ?>
            <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'المستخدمين','icon' => 'icon dripicons dripicons-user-group','hasDropdown' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
              <?php if (app('laratrust')->hasPermission('users-read')) : ?> <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'كل المستخدمين','link' => route('admin.users.index'),'hasDropdown' => false,'isChildren' => true,'activeLink' => 'admin.users.index'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?> <?php endif; // app('laratrust')->permission ?>
              <?php if (app('laratrust')->hasPermission('users-create')) : ?> <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'مستخدم جديد','link' => route('admin.users.create'),'hasDropdown' => false,'isChildren' => true,'activeLink' => 'admin.users.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?> <?php endif; // app('laratrust')->permission ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?>
          <?php endif; ?>
          
          
          <?php if(Auth::user()->hasPermission('permissions-read') || Auth::user()->hasPermission('permissions-create')): ?>
            <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'الصلاحيات','icon' => 'icon dripicons dripicons-lock','hasDropdown' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
              <?php if (app('laratrust')->hasPermission('permissions-read')) : ?> <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'قائمة الصلاحيات','link' => route('admin.permissions.index'),'hasDropdown' => false,'isChildren' => true,'activeLink' => 'admin.permissions.index'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?> <?php endif; // app('laratrust')->permission ?>
              <?php if (app('laratrust')->hasPermission('permissions-create')) : ?> <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'إضافة صلاحية جديدة','link' => route('admin.permissions.create'),'hasDropdown' => false,'isChildren' => true,'activeLink' => 'admin.permissions.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?> <?php endif; // app('laratrust')->permission ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?>
          <?php endif; ?>

          
          <?php if(Auth::user()->hasPermission('roles-read') || Auth::user()->hasPermission('roles-create')): ?> 
            <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'الأدوار','icon' => 'icon dripicons dripicons-user-id','hasDropdown' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
              <?php if (app('laratrust')->hasPermission('roles-read')) : ?> <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'قائمة الأدوار','link' => route('admin.roles.index'),'hasDropdown' => false,'isChildren' => true,'activeLink' => 'admin.roles.index'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?> <?php endif; // app('laratrust')->permission ?>
              <?php if (app('laratrust')->hasPermission('roles-create')) : ?> <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'إضافة دور جديد','link' => route('admin.roles.create'),'hasDropdown' => false,'isChildren' => true,'activeLink' => 'admin.roles.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?> <?php endif; // app('laratrust')->permission ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?>
          <?php endif; ?>

          
          <?php if(Auth::user()->hasPermission('settings-read')): ?>
            
              
                <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'الإعدادات','icon' => 'icon dripicons dripicons-gear','hasDropdown' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                  <?php if (app('laratrust')->hasPermission('settings-update')) : ?><?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'الإعدادات العامة','link' => route('admin.settings.index'),'hasDropdown' => false,'isChildren' => true,'activeLink' => 'admin.settings.index'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?> <?php endif; // app('laratrust')->permission ?> 
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?>
          <?php endif; ?>

          <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'زيارة الموقع','icon' => 'icon dripicons dripicons-backspace','hasDropdown' => false,'link' => route('home')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['targetBlank' => 1]); ?>
           <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?>

          
          <?php if (isset($component)) { $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4 = $component; } ?>
<?php $component = App\View\Components\Admin\SidebarLink::resolve(['title' => 'تسجيل الخروج','icon' => 'icon dripicons dripicons-exit','link' => route('logout'),'hasDropdown' => false,'activeLink' => 'logout'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SidebarLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4)): ?>
<?php $component = $__componentOriginal16eee84b5cece94f642e56d2a8e39cc4; ?>
<?php unset($__componentOriginal16eee84b5cece94f642e56d2a8e39cc4); ?>
<?php endif; ?>

        </ul>
      </div>
    </div>
  </div><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/layouts/admin/sidebar.blade.php ENDPATH**/ ?>