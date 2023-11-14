<!-- <Footer> begin ============================-->
    <section class="py-0 bg-primary footer">

        <div class="container">
          <div class="row justify-content-center pb-3 pt-6 ps-3 px-md-3 px-lg-3 d-flex  text-md-start">
            <div class="col-md-3 col-xs-12 mb-3 mb-5 mb-lg-0 d-none d-md-block d-lg-block">
              <a class="d-flex___ align-items-center__ fw-semi-bold fs-3 text-center" href="#">
                <img class="me-3" src="<?php echo e(asset('assets/')); ?>/img/logo_white.png" alt="سمو" width="120" />
              </a>
              <p class="my-3 text-100 fw-light d-none"> منصة سمو للوحات المميزة </p>
            </div>
            <div class="col-md-3 col-lg-3 col-6 mb-3 pe-0">
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="mb-2"><span class="foo-link-icn mx-2"> > </span> <a
                    class="text-100 fw-light text-decoration-none" href="<?php echo e(route('home')); ?>"> الرئيسية</a></li>
                <li class="mb-2"><span class="foo-link-icn mx-2"> > </span><a
                    class="text-100 fw-light text-decoration-none" href="about.html">من نحن</a></li>
                <li class="mb-2"><span class="foo-link-icn mx-2"> > </span><a
                    class="text-100 fw-light text-decoration-none" href="listing.html">إبحث عن لوحة</a></li>
                <li class="mb-2"><span class="foo-link-icn mx-2"> > </span><a
                    class="text-100 fw-light text-decoration-none" href="confirm.html"> مبايعة عن طريق سمو </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 col-lg-3 col-6 mb-3">
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <?php if(auth()->check()): ?>
                  <li class="mb-2"><span class="foo-link-icn mx-2"> > </span> 
                    <a class="text-100 fw-light text-decoration-none" href="<?php echo e(route('ads.create')); ?>"> أضف لوحتك</a>
                  </li>
                  <li class="mb-2"><span class="foo-link-icn mx-2"> > </span>
                    <a class="text-100 fw-light text-decoration-none" href="<?php echo e(route('user.profile')); ?>"> حسابي </a>
                  </li>
                  <?php else: ?>
                  <li class="mb-2"><span class="foo-link-icn mx-2"> > </span> 
                    <a class="text-100 fw-light text-decoration-none" href="<?php echo e(route('login')); ?>"> تسجيل الدخول </a>
                  </li>
                  <li class="mb-2"><span class="foo-link-icn mx-2"> > </span>
                    <a class="text-100 fw-light text-decoration-none" href="<?php echo e(route('register')); ?>"> أنشىء حسابك </a>
                  </li>
                <?php endif; ?>
                

                <li class="mb-2"><span class="foo-link-icn mx-2"> > </span><a
                    class="text-100 fw-light text-decoration-none" href="blog.html"> أخبارنا </a>
                </li>
                <li class="mb-2"><span class="foo-link-icn mx-2"> > </span><a
                    class="text-100 fw-light text-decoration-none" href="contact.html"> تواصل معنا </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 col-xs-12 mb-3 mb-4 d-flex align-items-center justify-content-center">
              <div class="row text-center">
                <div class="col-12 logo-2030 d-none">
                  <img src="<?php echo e(asset('assets/')); ?>/img/2030.png" alt="2030 رؤية">
                </div>
                <div class="col-12 text-center">
                  <ul class="list-unstyled list-inline mb-0 mt-2 mt-md-3">
                    <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!">
                        <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                          fill="#ffffff" viewBox="0 0 16 16">
                          <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                          </path>
                        </svg></a></li>
                    <li class="list-inline-item me-3"><a href="#!">
                        <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                          fill="#ffffff" viewBox="0 0 16 16">
                          <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                          </path>
                        </svg></a></li>
                    <li class="list-inline-item me-3"><a href="#!">
                        <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                          fill="#ffffff" viewBox="0 0 16 16">
                          <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                          </path>
                        </svg></a></li>
                  </ul>
                </div>
  
              </div>
  
            </div>
          </div>
        </div><!-- end of .container-->
  
        <!-- Copyrights  -->
        <div class="container-fluid end-footer">
          <div class="row justify-content-center">
            <div class="col-auto py-3">
              <a href="#" class="">الشروط والأحكام</a> <span class="mx-2"> | </span>
              <a href="#" class="">سياسة الخصوصية</a> <span class="mx-2"> | </span>
              <a href="#" class=""> تواصل معنا </a> <span class="mx-2"> | </span>v
              <span class="copyrights mx-3"> &copy; جميع الحقوق محفوظة لمنصة سمو 2023 <span class="mx-2"> |
                </span> برمجة
                وتصميم Webmanway </span>
            </div>
          </div>
        </div>
    </section>
    <!-- <Footer> close ============================-->
  
<?php /**PATH C:\wamp64\www\projects\sumou\resources\views/layouts/front/footer.blade.php ENDPATH**/ ?>