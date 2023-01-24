<nav class="fw-bold p-3 w-100 position-absolute d-flex justify-content-end align-items-center">
    <div class="p-2 me-3 rounded">
      <a href="<?php echo e(route('display_welcome_page')); ?>" class="nv-hide nav-item text-decoration-none text-light"><?php echo e(__('data.nav.home')); ?></a>
    </div>
    <div class="p-2 me-3 rounded">
      <a href="<?php echo e(route('tentang')); ?>" class="nv-hide nav-item text-decoration-none text-light"><?php echo e(__('data.nav.about')); ?></a>
    </div>
    <div class="p-2 me-3 rounded">
      <a href="<?php echo e(route('liburan')); ?>" class="nv-hide nav-item text-decoration-none text-light"><?php echo e(__('data.nav.travel')); ?></a>
    </div>
    <div class="p-2 me-3 rounded">
      <div class="dropdown">
        <a class=" text-light nav-link" role="button" data-bs-toggle="dropdown">
          <?php if(is_null(app()->getLocale())): ?>
            <img class="rounded" src="<?php echo e(asset('../assets/images/id_flag.png')); ?>" alt="Choose_language" style="width: 25px; height: 25px">
          <?php else: ?>
            <?php if(app()->getLocale() == "id"): ?>
              <img class="rounded" src="<?php echo e(asset('../assets/images/id_flag.png')); ?>" alt="" style="width: 25px; height: 25px">
            <?php else: ?>
              <img class="rounded" src="<?php echo e(asset('../assets/images/en_flag.png')); ?>" alt="" style="width: 25px; height: 25px">
            <?php endif; ?>  
          <?php endif; ?>
        </a>
        <ul class="mt-2 dropdown-menu bg-transparent glass-down text-center">
          <li class="py-3">
            <a class="d-flex justify-content-start ms-3 align-items-center text-decoration-none text-light nav-item" href="<?php echo e(url('locale/id')); ?>">
              <div>
                <img class="rounded" src="<?php echo e(asset('../assets/images/id_flag.png')); ?>" alt="" style="width: 25px; height: 25px">
              </div>
              <div class="ms-2">
                <?php echo e(__('data.lang.id')); ?>

              </div>
            </a>
          </li>
          <li class="py-3">
            <a class="d-flex justify-content-start ms-3 align-items-center text-decoration-none text-light nav-item" href="<?php echo e(url('locale/en')); ?>">
              <img class="rounded" src="<?php echo e(asset('../assets/images/en_flag.png')); ?>" alt="" style="width: 25px; height: 25px">
              <div class="ms-2">
                <?php echo e(__('data.lang.en')); ?>

              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="p-2 me-3 rounded">
      <div class="dropdown">
        <a class="dropdown-toggle text-light nav-link" role="button" data-bs-toggle="dropdown">
          <img class="rounded-circle me-2" src="<?php echo e(asset('storage/avatars/' . Auth::user()->image)); ?>" style="width: 30px; height: 30px">
        </a>
        <ul class="mt-2 dropdown-menu bg-transparent glass-down text-center">
          <li class="py-3"><a class="text-decoration-none text-light nav-item" href="<?php echo e(route('profile')); ?>"><?php echo e(__('data.nav.profile')); ?></a></li>
          <li class="py-3 nv-show-hide "><a class="text-decoration-none text-light nav-item" href="<?php echo e(route('display_welcome_page')); ?>"><?php echo e(__('data.nav.home')); ?></a></li>
          <li class="py-3 nv-show-hide "><a class="text-decoration-none text-light nav-item" href="<?php echo e(route('tentang')); ?>"><?php echo e(__('data.nav.about')); ?></a></li>
          <li class="py-3 nv-show-hide "><a class="text-decoration-none text-light nav-item" href="<?php echo e(route('liburan')); ?>"><?php echo e(__('data.nav.travel')); ?></a></li>
          <li class="py-3"><a class="text-decoration-none text-light nav-item" href="<?php echo e(route('logout_backend')); ?>"><?php echo e(__('data.nav.logout')); ?></a></li>
        </ul>
      </div>
    </div>
    
</nav>
<?php /**PATH C:\BINUS5\WEB_PROG\LEC\PROJECT_LECTURE_GROUP\Revice_RedundantHops_MultiLang\resources\views/Navbar/navbar_user.blade.php ENDPATH**/ ?>