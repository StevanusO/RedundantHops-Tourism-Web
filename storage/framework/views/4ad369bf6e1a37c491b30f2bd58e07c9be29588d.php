

<?php $__env->startSection('title', '| Register'); ?>

<?php $__env->startSection('content'); ?>
<div class="nav-clone"></div>
<div class="content-2">

    <div class="fs-2 fw-bold text-center w-100 py-4">
        Liburan  
    </div>
      <div class="w-100 my-4 d-flex align-items-center justify-content-between">
        <form class="w-100 ms-2 text-center" action="<?php echo e(route('search')); ?>" enctype="multipart/form-data" method="GET">
          <?php echo csrf_field(); ?>
          <input type="search" class="sch w-50 p-1" name="keywords" placeholder="Cari nama tempat wisata...">
          <button type="submit" class="sch-btn p-1">Search</button>
        </form>
      </div> 
    <?php if(count($pass_data)<1): ?>
    <div class="h-none-data fst-italic text-white opacity-50 fs-5 d-flex justify-content-center align-items-center">
      Data Tidak Ada
    </div>
    <?php else: ?>
      <div class="row d-flex justify-content-center container gap-3">
        <?php $__currentLoopData = $pass_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-sm-3 custom-bg rounded text-light p-2 card-size">
            <div class="pb-1">
              <div class="rounded border-0" style="width:100%; height: 140px; background-image: url(<?php echo e($data->image); ?>); background-size: cover; background-position: center center; background-repeat: no-repeat"></div>
            </div>
            <div class="">
              <div class="fw-bold pb-2" style="font-size: 2vw"><?php echo e($data->name); ?></div>
              <div class="fs-6 text-reset desc-card"><?php echo e($data->description); ?></div>
              <a href="<?php echo e(route('review', ['tourist_attraction_id' => $data->id])); ?>" class="btn-detail">Detail</a>
            </div>
          </div> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="center m-3 pagination">
          <?php echo e($pass_data->links()); ?>

        </div>
      </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\WEB_PROG\LEC\PROJECT_LECTURE_GROUP\Redundant_Hops\resources\views/liburan.blade.php ENDPATH**/ ?>