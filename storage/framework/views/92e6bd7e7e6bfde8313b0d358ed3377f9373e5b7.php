<nav class="fw-bold p-3 w-100 position-absolute d-flex justify-content-end align-items-center">
    <div class="p-2 me-3 rounded">
      <a href="<?php echo e(route('display_welcome_page')); ?>" class="nav-item text-decoration-none text-light">Beranda</a>
    </div>
    <div class="p-2 me-3 rounded">
      <a href="<?php echo e(route('tentang')); ?>" class="nav-item text-decoration-none text-light">Tentang</a>
    </div>
    
    <div class="p-2 me-3 rounded">
      <div class="dropdown">
        <a class="dropdown-toggle text-light nav-link" role="button" data-bs-toggle="dropdown">
          <img class="rounded-circle me-2" src="<?php echo e(asset('storage/avatars/' . Auth::user()->image)); ?>" style="width: 30px; height: 30px">
        </a>
        <ul class="mt-2 dropdown-menu bg-transparent glass-down text-center">
          <li class="py-3"><a class="text-decoration-none text-light nav-item" href="<?php echo e(route('profile')); ?>">Profile</a></li>
          <li class="py-3"><a class="text-decoration-none text-light nav-item" href="<?php echo e(route('logout_backend')); ?>">Logout</a></li>
        </ul>
      </div>
    </div>
</nav>
<?php /**PATH C:\BINUS5\WEB_PROG\LEC\PROJECT_LECTURE_GROUP\Redundant_Hops\resources\views/Navbar/navbar_user.blade.php ENDPATH**/ ?>