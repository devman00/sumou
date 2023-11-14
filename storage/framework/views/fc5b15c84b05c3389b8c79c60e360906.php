<?php $__env->startSection('title'); ?>
    المستخدمين
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.page-heading','data' => ['heading' => 'المستخدمين']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.page-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'المستخدمين']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    <div class="buttons">
        <a href="<?php echo e(route('admin.users.create')); ?>" class="btn icon btn-secondary"><i class="bi bi-plus"></i></a>
    </div>

    <div class="page-content">
        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-header"></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                     

                                        <thead>
                                            <tr>
                                                <th>الصورة</th>
                                                <th>الإسم</th>
                                                <th>الإيميل</th>
                                                <th>الجوال</th>
                                                <th>الدور</th>
                                                <th>الحالة</th>
                                                <th>الخيارات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <?php if(Auth::user()->roles()->first()->name != 'superadministrator'): ?>
                                                            
                                                    <?php if($user->roles()->first()->id != config('app.administrators_id')[0]): ?>
                                                    <tr <?php if($user->status == 0): ?> class="disabled-gray" <?php endif; ?> >
                                                        <td class="text-bold-500"> 
                                                            <img src="<?php echo e(url('storage/images/users/' . $user->avatar)); ?>" class="w70 p-1 rounded-circle bg-info" alt="">
                                                        </td>
                                                        <td class="text-bold-500"> <?php echo e($user->name); ?> </td>
                                                        <td class="text-bold-500"> <?php echo e($user->email); ?> </td>
                                                        <td class="text-bold-500"> <?php echo e($user->phone); ?> </td>
                                                        <td class="text-bold-500"> <?php if($role = $user->roles->first() ): ?> <?php echo e($role->display_name); ?> <?php endif; ?> </td>
                                                        <td class="text-bold-500"> <?php echo e($user->status == 1 ? 'مفعل' : 'معطل'); ?> </td>

                                                        <td>
                                                            <div class="d-flex">
                                                                <?php if (app('laratrust')->hasPermission('users-update')) : ?>
                                                                <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>"><i
                                                                        class="icon dripicons dripicons-document-edit font-medium-1"></i>
                                                                </a>
                                                                <?php endif; // app('laratrust')->permission ?>
                                                                <?php if (app('laratrust')->hasPermission('users-delete')) : ?>
                                                                <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>"
                                                                    method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>

                                                                    <button type="submit"
                                                                        class="me-1 mb-1 border-0 bg-transparent text-danger"
                                                                        onclick="return confirm('Are you sure you want to delete?');">
                                                                        <i
                                                                            class="icon dripicons dripicons-trash font-medium-1"></i>
                                                                    </button>
                                                                </form>
                                                                <?php endif; // app('laratrust')->permission ?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <tr <?php if($user->status == 0): ?> class="disabled-gray" <?php endif; ?> >
                                                        <td class="text-bold-500"> 
                                                            <img src="<?php echo e(url('storage/images/users/' . $user->avatar)); ?>" class="w70 p-1 rounded-circle bg-info" alt="">
                                                        </td>
                                                        <td class="text-bold-500"> <?php echo e($user->name); ?> </td>
                                                        <td class="text-bold-500"> <?php echo e($user->email); ?> </td>
                                                        <td class="text-bold-500"> <?php echo e($user->phone); ?> </td>
                                                        <td class="text-bold-500"> <?php if($role = $user->roles->first() ): ?> <?php echo e($role->display_name); ?> <?php endif; ?> </td>
                                                        <td class="text-bold-500"> <?php echo e($user->status == 1 ? 'مفعل' : 'معطل'); ?> </td>

                                                        <td>
                                                            <div class="d-flex">
                                                                <?php if (app('laratrust')->hasPermission('users-update')) : ?>
                                                                <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>"><i
                                                                        class="icon dripicons dripicons-document-edit font-medium-1"></i>
                                                                </a>
                                                                <?php endif; // app('laratrust')->permission ?>
                                                                <?php if (app('laratrust')->hasPermission('users-delete')) : ?>
                                                                <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>"
                                                                    method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>

                                                                    <button type="submit"
                                                                        class="me-1 mb-1 border-0 bg-transparent text-danger"
                                                                        onclick="return confirm('Are you sure you want to delete?');">
                                                                        <i
                                                                            class="icon dripicons dripicons-trash font-medium-1"></i>
                                                                    </button>
                                                                </form>
                                                                <?php endif; // app('laratrust')->permission ?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr><td> لا يوجد مستخدمين </td></tr>
                                            <?php endif; ?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/admin/user/index.blade.php ENDPATH**/ ?>