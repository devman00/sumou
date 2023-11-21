<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e(app()->getLocale() == 'ar' ? 'rtl' : 'ltr'); ?>">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> تسجيل الدخول - <?php echo e(config('app.name', 'WMW')); ?></title>
    
    
    <link rel="stylesheet" href="assets/css/style.css">

    <?php if(app()->getLocale() == 'ar'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/rtl.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/main/app-rtl.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/pages/rtl/auth.css')); ?>">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/main/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/pages/auth.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/main/app-dark.css')); ?>">
    <?php endif; ?>
    
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">

    
   

</head>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                
                <a href="index.html"><img src="<?php echo e(asset('admin/assets/images/logo/logo.png')); ?>" alt="Logo"></a>
            </div>
            <h1 class="auth-title pb-3 fs2_8 text-center"> الإدارة | <span> تسجيل الدخول </span> </h1>
            

            <form action="<?php echo e(route('admin.login')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                
                <?php $__errorArgs = ['phone|password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   البيانات المدخلة غير صحيحة
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input name="phone" type="text" class="form-control form-control-xl" placeholder="إسم المستخدم">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input name="password" type="password" class="form-control form-control-xl" placeholder="كلمة المرور">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        تذكرني
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5"> دخول </button>
            </form>
            
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
</body>

</html>
<?php /**PATH C:\wamp64\www\projects\sumou\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>