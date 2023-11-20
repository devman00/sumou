<?php $__env->startSection('content'); ?>
    
    <section class="register-login-section bg-white ">
        <div class="container-fluid pt-5">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-lg-5 col-md-5 p-5  d-flex justify-content-center align-items-center flex-column"
                    style="">
                    <h2 class="text-black fw-bold"> مرحبا بعودتك مجددا !
                    </h2>
                    <h4> سجل دخولك .</h4>
                </div>
                <div class="col-12 col-md-7 col-lg-7 bg-white p-5 ">

                    <div class="container" style="  padding: 38px 75px;">
                        <ul class="nav nav-pills login-register-ul mb-3 nav-justified" id="pills-tab" role="tablist">

                            <li class="nav-item" role="presentation">
                                

                                <a href="<?php echo e(route('login')); ?>" class="nav-link active"> تسجيل الدخول </a>

                            </li>
                            <li class="nav-item" role="presentation">
                                
                                <a href="<?php echo e(route('register')); ?>" class="nav-link "> إنشاء حساب </a>
                            </li>


                        </ul>

                        
                        <div class="login-form d-flex flex-column flex-center">
                                    
                            <form action="<?php echo e(route('login')); ?>" method="post" class=" d-flex flex-column flex-center w-100">
                                <?php echo csrf_field(); ?>

                                 
                                

                                  
                                 <input class="w-100" id="phone" type="phone"  placeholder="رقم الجوال" <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" value="<?php echo e(old('phone')); ?>" required autocomplete="phone" autofocus >
                                 <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                     <span class="invalid-feedback" role="alert">
                                         <strong><?php echo e($message); ?></strong>
                                     </span>
                                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                
                                 
                                <input class="w-100" id="password" type="password"  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="كلمة المرور" >
                                
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                <button class="btn" type="submit"> دخول </button>
                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        هل نسيت كلمة المرور؟
                                    </a>
                                <?php endif; ?>
                                
                                

                            </form>
                        </div>

                            
                            

                           
                    </div>


                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/auth/login.blade.php ENDPATH**/ ?>