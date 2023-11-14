

<?php $__env->startSection('content'); ?>
    

    <!-- Account begin ============================-->
    <section class="dashboard d-flex flex-column justify-content-between ">

        <div class="row">
            
            <!-- Sidebar ----  -->
            <div class="col-md-2 col-lg-2 deskSidebar sidebar bg-white px-0">
                <div class="position-lg-fixed bg-white col-md-2 py-5 min-vh-lg-100">
                    <div class="py-3 mb-4 dashboard-sidebare-title text-center">
                        <h3>لوحة التحكم</h3>
                    </div>
                    <ul class=" nav nav-tabs d-flex flex-column justify-content-start align-items-start w-100"
                        id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="account.html">

                                <button class="nav-link active" id="profile-details-tab">حسابي</button>

                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="requests.html">

                                <button class="nav-link" id="talabat-tab">طلباتي</button>

                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="create-ad.html">
                                <button class="nav-link" type="button">إضافة لوحة</button>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="my-ads.html">
                                <button class="nav-link" type="button"> لوحاتي </button>
                            </a>
                        </li>
                        
                    </ul>

                    
                    <div class="logout position-relative">
                        
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <a href="<?php echo e(route('logout')); ?>" class="btn position-relative text-black" onclick="event.preventDefault();this.closest('form').submit();" > تسجيل الخروج </a>                       
                        </form>
                    </div>
                </div>

            </div>

            <!-- ------ Content  -->
            <div class="col-md-10 col-lg-10 py-6 data px-0">
                <div class="container px-3 mx-2">

                    <!-- Bloc 1 : Current User Info (Disabled) ---  -->
                    <div class="bloc">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="profile-details" role="tabpanel" aria-labelledby="profile-details-tab">

                                <!-- Personal info ---  -->
                                <h4 class="fw-bold p-3 px-3 px-lg-0 px-md-0 underline"  style="color:var(--dark-blue);">  البيانات الشخصية (عن طريق نفاد)</h4>
                                <div class="bloc p-4 bg-white pb-5">
                                    <div class="profile-details-textfields">
                                        <div class="area d-flex justify-content-start align-items-center flex-wrap">
                                            <div class="input-textfield d-flex flex-column">
                                                <label for="fullname">الإسم الكامل</label>
                                                <input value="فلان بن فلان" type="text" id="fullname" name="" disabled>
                                            </div>
                                            <div class="input-textfield d-flex flex-column">
                                                <label for="number">رقم الهاتف</label>
                                                <input type="tel" id="number" class="ltr" placeholder="+96645478848" name="" disabled="">
                                            </div>
                                            <div class="input-textfield d-flex flex-column">
                                                <label for="city"> المدينة </label>
                                                <input type="text" value="جدة" placeholder="إسم المدينة" id="old-password" name="" disabled>
                                            </div>
                                            
                                            <div class="input-textfield d-flex flex-column">
                                                <label for="district"> الحي </label>
                                                <input type="text" value="الحمدانية" placeholder="إسم الحي" id="new-password"  name="" disabled>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Bank info ---  -->
                                <!-- <div class="bloc">
                                    <h3 class="mb-5 fw-bolder text-center" style="color:var(--dark-blue);">المعلومات
                                        البنكية</h3>
                                    <div class="bank-info-edit row d-flex justify-content-center align-items-center"
                                        style=" flex-direction: row; align-items: flex-start!important; ">
                                        <div class="profile-pic mb-2 w-50" style="  padding: 10px;">
                                            <img src="assets/img/illustrations/bank_card.png" alt="" style="">
                                        </div>
                                        <div class="profile-details-textfields w-50">
                                            <div
                                                class="area d-flex justify-content-start align-items-center flex-wrap flex-column">
                                                <div class="input-textfield d-flex flex-column w-100">
                                                    <label for="bankName">الإسم الكامل</label>
                                                    <select id="bankName" name="board_type" class="form-select">
                                                        <option selected=""> بنك الراجحي</option>
                                                        <option value="خصوصي"> بنك الراجحي </option>
                                                        <option value="نقل"> بنك الراجحي </option>
                                                    </select>


                                                </div>
                                                <div class="input-textfield d-flex flex-column w-100">
                                                    <label for="iban">رقم الايبان </label>
                                                    <input type="text" id="iban" placeholder="4451165651651651"
                                                        name="">


                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div> -->


                                <!-- <div class="tab-pane fade  active" id="talabat" role="tabpanel"
                                    aria-labelledby="talabat-tab">
                                    <div class="bloc">
                                        <h3>المعلومات ddالشخصية</h3>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>

                    <!-- Bloc 2 ---  -->
                    <div class="bloc">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="profile-details" role="tabpanel" aria-labelledby="profile-details-tab">

                                <!-- Personal info ---  -->
                                <h4 class="fw-bold p-3 px-3 px-lg-0 px-md-0 underline"
                                    style="color:var(--dark-blue);"> بيانات أخرى</h4>
                                <div class="bloc p-4 bg-white pb-5">

                                    <form action="<?php echo e(route('user.account.update', $user)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="profile-details-textfields">
                                            <div class="area d-flex justify-content-start align-items-center flex-wrap">
                                                
                                                <div class="input-textfield d-flex flex-column">
                                                    <label for="whatsapp"> رقم الواتساب </label>
                                                    <input type="tel" value="<?php echo e($user->phone); ?>" name="whatsapp" placeholder="+96645478848" class="ltr" id="whatsapp" >
                                                </div>

                                                <div class="input-textfield d-flex flex-column">
                                                    <label for="number"> رقم اخر </label>
                                                    <input type="tel" id="number" class="ltr" placeholder="+96645478848" name="">
                                                </div>

                                                <div class="input-textfield d-flex flex-column">
                                                    <label for="password">كلمة المرور </label>
                                                    <input type="password" name="password" placeholder="********" id="password">
                                                </div>
                                                
                                                <div class="input-textfield d-flex flex-column">
                                                    <label for="re_password"> إعادة كلمة المرور </label>
                                                    <input type="password" name="re_password" id="re_password" placeholder="********"  >
                                                </div>

                                                <button type="submit"> حفظ البيانات </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Bank info ---  -->
                                <!-- <div class="bloc">
                                    <h3 class="mb-5 fw-bolder text-center" style="color:var(--dark-blue);">المعلومات
                                        البنكية</h3>
                                    <div class="bank-info-edit row d-flex justify-content-center align-items-center"
                                        style=" flex-direction: row; align-items: flex-start!important; ">
                                        <div class="profile-pic mb-2 w-50" style="  padding: 10px;">
                                            <img src="assets/img/illustrations/bank_card.png" alt="" style="">
                                        </div>
                                        <div class="profile-details-textfields w-50">
                                            <div
                                                class="area d-flex justify-content-start align-items-center flex-wrap flex-column">
                                                <div class="input-textfield d-flex flex-column w-100">
                                                    <label for="bankName">الإسم الكامل</label>
                                                    <select id="bankName" name="board_type" class="form-select">
                                                        <option selected=""> بنك الراجحي</option>
                                                        <option value="خصوصي"> بنك الراجحي </option>
                                                        <option value="نقل"> بنك الراجحي </option>
                                                    </select>


                                                </div>
                                                <div class="input-textfield d-flex flex-column w-100">
                                                    <label for="iban">رقم الايبان </label>
                                                    <input type="text" id="iban" placeholder="4451165651651651"
                                                        name="">


                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div> -->


                                <!-- <div class="tab-pane fade  active" id="talabat" role="tabpanel"
                                    aria-labelledby="talabat-tab">
                                    <div class="bloc">
                                        <h3>المعلومات ddالشخصية</h3>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- Account Close ============================-->

        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\sumou\resources\views/front/account.blade.php ENDPATH**/ ?>