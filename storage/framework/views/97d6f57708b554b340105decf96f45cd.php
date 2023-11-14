<?php $__env->startSection('title'); ?>
    Posts List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.page-heading','data' => ['heading' => 'Posts List']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.page-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'Posts List']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    <div class="buttons">
        <a href="<?php echo e(route('admin.posts.create')); ?>" class="btn icon btn-secondary"><i class="bi bi-plus"></i></a>
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

                                      <?php if(!$posts->isEmpty()): ?>
                                        <thead>
                                            <tr>
                                                <th>Thumbnail</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="text-bold-500"> <img
                                                            src="<?php echo e(url('storage/images/posts/' . $post->thumbnail)); ?>"
                                                            class="w120" alt=""> 
                                                    </td>
                                                    <td class="text-bold-500"> <?php echo e($post->title); ?> </td>
                                                    <td class="text-bold-500"> <?php echo e($post->category->name); ?> </td>
                                                    <td class="text-bold-500">
                                                        <?php echo e($post->status == 1 ? 'Enabled' : 'Disabled'); ?> </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <?php if (app('laratrust')->hasPermission('posts-update')) : ?>
                                                            <a href="<?php echo e(route('admin.posts.edit', $post->id)); ?>"><i
                                                                    class="icon dripicons dripicons-document-edit font-medium-1"></i>
                                                            </a>
                                                            <?php endif; // app('laratrust')->permission ?>
                                                            <?php if (app('laratrust')->hasPermission('posts-update')) : ?>
                                                            <form action="<?php echo e(route('admin.posts.destroy', $post->id)); ?>"
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
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>

                                      <?php else: ?>

                                        <tr><td>No posts found</td></tr>

                                      <?php endif; ?>

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/admin/post/index.blade.php ENDPATH**/ ?>