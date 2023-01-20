<?php $__env->startSection('title', '| Home'); ?>

<?php $__env->startSection('content'); ?>
<section>
  <div>
    <div class="content-1 grad">
      <div class="h-100 w-100 left-side-home">
        <div class="h-100 d-flex flex-column justify-content-center temp-cnt">
          <h1 class="text-light fw-bold w-100">Selamat Datang di</h1>
          <h1 class="text-light fw-bold country">NESIA</h1>
          <div class="text-light mt-2 w-50">
            <p>Indonesia merupakan negara kepulauan yang kaya akan sumber 
              daya alam dan keindahannya, sopan dan ramah menjadi ciri khas 
              kebudayaan orang Indonesia. Sehingga Anda tidak perlu 
              memikirkan kemana harus Anda berwisata karena Indonesia 
              adalah jawabannya.</p>
          </div>
          <div class="d-flex mt-1 gap-3 w-100 grp-btn">
            <a href="<?php echo e(route('tentang')); ?>"><button type="button" class="btn btn-danger w-100 py-2 px-4">Jelajah</button></a>
            <?php if(!Auth::user()): ?>
              <a href="<?php echo e(route('login')); ?>"><button type="button" class="btn btn-outline-warning w-100 py-2 px-4">Masuk</button></a>
            <?php else: ?>
            <a href="<?php echo e(route('liburan')); ?>"><button type="button" class="btn btn-outline-warning w-100 py-2 px-4">Liburan</button></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="vid w-100">
      <video autoplay muted loop width="2000px">
        <source src="<?php echo e(asset('assets/images/video.mp4')); ?>" type="video/mp4">
      </video>
    </div>
  </div>

  <?php if(Auth::user() != null): ?>
  <div class="bg-dark h-100 py-4 mb-4">
    <div class="content-2">
      <div class="fs-2 fw-bold text-center w-100 py-4">
        Tempat Favorit
      </div>
      <?php if(count($pass_data)<0): ?>
          Data tidak ada
      <?php else: ?>
        <div class="custom-crd container">
          <?php $__currentLoopData = $pass_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="custom-bg rounded text-light p-2 card-size">
              <div class="pb-1">
                <div class="rounded border-0" style="width:100%; height: 140px; background-image: url(<?php echo e($data->image); ?>); background-size: cover; background-position: center center; background-repeat: no-repeat"></div>
              </div>
              <div class="">
                <div class="fs-5 fw-bold pb-2"><?php echo e($data->name); ?></div>
                <div class="fs-6 text-reset desc-card"><?php echo e($data->description); ?></div>
                <a href="<?php echo e(route('review', ['tourist_attraction_id' => $data->id])); ?>" class="btn-detail">Detail</a>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>

</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\WEB_PROG\LEC\PROJECT_LECTURE_GROUP\Redundant_Hops\resources\views/welcome.blade.php ENDPATH**/ ?>