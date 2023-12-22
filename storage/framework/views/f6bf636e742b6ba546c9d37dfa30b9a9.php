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

                        
                        <div class="phone-login-form">
                          <div class="login-form d-flex flex-column flex-center">
                            <form action="<?php echo e(route('login')); ?>" method="post" class=" d-flex flex-column flex-center w-100">
                                <?php echo csrf_field(); ?>

                                
                                

                                 
                                 
                                 <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.phone','data' => ['name' => 'phone','class' => 'ltr','placeholder' => '5xxxxxxxx','id' => 'phone','value' => old('phone')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'phone','class' => 'ltr','placeholder' => '5xxxxxxxx','id' => 'phone','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('phone'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
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

                                <button class="btn w-100" type="submit"> دخول </button>
                                <button class="btn w-100 bg-gray text-blue" type="button" id="loginNafath"> الدخول عن طريق نفاذ </button>
                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        هل نسيت كلمة المرور؟
                                    </a>
                                <?php endif; ?>
                                
                                

                            </form>
                          </div>
                        </div>

                        <div class="nafath-login-form" style="display: none">
                          
                          <div class="msgFormRet" style="display: none">
                            <div class="alert"></div>
                          </div>

                          <div class="login-form d-flex flex-column flex-center">

                            <form action="<?php echo e(route('login')); ?>" method="post" class=" d-flex flex-column flex-center w-100">
                                <?php echo csrf_field(); ?>

                                
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.form.input','data' => ['name' => 'n_id','class' => 'ltr','placeholder' => 'أدخل رقم الهوية الخاص بك','id' => 'n_id','value' => old('n_id')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front.form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'n_id','class' => 'ltr','placeholder' => 'أدخل رقم الهوية الخاص بك','id' => 'n_id','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('n_id'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                <?php $__errorArgs = ['n_id'];
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

                                <button class="btn w-100" type="button" id="loginWithNafath"> دخول </button>
                                <button class="btn w-100 bg-gray text-blue" type="button" id="loginPhone"> الدخول عن طريق الهاتف </button>
                            </form>
                          </div>
                        </div>

                            
                            


                    </div>


                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $("#loginNafath").click(function (event) {
        event.preventDefault();
        $(".phone-login-form ").hide();
        $(".nafath-login-form").show();
        $(".msgFormRet").hide();
        $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");

    });
    $("#loginPhone").click(function (event) {
        event.preventDefault();
        $(".phone-login-form ").show();
        $(".nafath-login-form").hide();
        $(".msgFormRet").hide();
        $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");

    });


    $("#loginWithNafath").click(function (event) {
        event.preventDefault();

        $(".msgFormRet").hide();
        if ($("#n_id").val() == "") {
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("الرجاء إدخال رقم الهوية الخاص بك");
            $(".msgFormRet").show();
        } else {
            $(".msgFormRet").hide();
            $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-success').addClass('alert-danger').html("");

            $.ajax({
                method: "POST",
                url: "<?php echo e(route('nidverification.send')); ?>",
                dataType: 'JSON',
                data: { "_token": "<?php echo e(csrf_token()); ?>", "n_id": $("#n_id").val() },
                beforeSend: function() { }
            }).done(function (ret) {

                if (ret.transId && ret.transId != '' && ret.random && ret.random != '') {
                    var _random = ret.random;
                    var _transId = ret.transId;
                    Swal.fire({
                        title: ret.random,
                        text: 'رجاءا إختيار الرقم '+ret.random+' في التطبيق نفاذ' ,
                        icon: 'info',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()

                            retRequest(0, _random, _transId)
                                .then(function(responseData) {

                                    if (responseData=='COMPLETED'){
                                        Swal.fire({
                                            title: 'شكرًا!',
                                            text: 'لقد اكتملت عملية التوثيق، شكراً لك.' ,
                                            icon: 'success',
                                            confirmButtonText: 'تمام',
                                            timer: 6000,
                                            timerProgressBar: true,
                                        })

                                        $.ajax({
                                            method: "POST",
                                            url: "<?php echo e(route('nidverification.confirm')); ?>",
                                            dataType: 'text',
                                            data: { nationalId: $("#n_id").val(), random: _random, transId: _transId, "_token": "<?php echo e(csrf_token()); ?>"   },
                                        }).done(function (_ret) {
                                            if (_ret=='success') {
                                                $(".sectionAuthVerification").hide();
                                                $(".msgFormRet .alert").removeClass('alert-danger').removeClass('alert-success').removeClass('alert-info').addClass('alert-info').html('حسابك موثق، شكراً لك!');
                                                $(".msgFormRet").show();
                                            }
                                        }).fail(function(_ret) {
                                            $(".msgFormRet").hide();
                                        });

                                    }
                                    if (responseData=='REJECTED'){
                                        Swal.fire({
                                            title: 'خطأ!',
                                            text: 'تعذرت عملية التوثيق، الرجاء المحاولة من جديد و إختيار الرقم الصحيح في التطبيق نفاذ' ,
                                            icon: 'warning',
                                            confirmButtonText: 'تمام',
                                            timer: 6000,
                                            timerProgressBar: true,
                                        })
                                    }

                                })
                                .catch(function(error) {
                                    console.error('Error:', error);
                                    Swal.fire({
                                        title: 'خطأ!',
                                        text: 'تعذرت عملية تسجيل الدخول الرجاء المحاولة من جديد' ,
                                        icon: 'error',
                                        confirmButtonText: 'حسنا',
                                        timer: 6000,
                                        timerProgressBar: true,
                                    })
                                });

                        },
                    })

                } else {
                    let timerInterval
                    Swal.fire({
                        title: 'خطأ!',
                        text: 'تعذرت عملية التوثيق الرجاء إدخال رقم الهوية الصحيح والمحاولة من جديد' ,
                        icon: 'error',
                        confirmButtonText: 'تمام',
                        timer: 6000,
                        timerProgressBar: true,
                    })
                }
            }).fail(function(ret) {
                if (ret != true) {
                    $(".msgFormRet .alert").removeClass('alert-info').removeClass('alert-danger').addClass('alert-danger').html('تعذرت عملية التوثيق الرجاء المحاولة في وقت لاحق');
                    $(".msgFormRet").show();
                }
            });

        }
    });

    function retRequest(retryCount, _random='', _transId='') {

        var maxRetryCount = 30;
        return new Promise(function(resolve, reject) {
            $.ajax({
                method: "POST",
                url: "<?php echo e(route('nidverification.status')); ?>",
                dataType: 'json',
                data: { nationalId: $("#n_id").val(), random: _random, transId: _transId, "_token": "<?php echo e(csrf_token()); ?>"   },
                beforeSend: function() { }
            }).done(function (ret2) {
                if (ret2.status && ret2.status == 'COMPLETED'){
                    resolve('COMPLETED');
                } else if (ret2.status && ret2.status =='REJECTED') {
                    resolve('REJECTED');
                } else {
                    if (retryCount < maxRetryCount) {
                        setTimeout(function() {
                            retRequest(retryCount + 1, _random, _transId)
                                .then(resolve)
                                .catch(reject);
                        }, 1000);
                    } else {
                        reject('error');
                    }
                }
            }).fail(function(ret2) {
                reject('err2');
            });
        });
    }

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/auth/login.blade.php ENDPATH**/ ?>