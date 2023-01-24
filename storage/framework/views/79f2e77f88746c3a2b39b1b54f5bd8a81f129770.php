

<?php $__env->startSection('title', '| Profile'); ?>

<?php $__env->startSection('content'); ?>

    <div class="profile-height d-flex align-items-center">
        <div class="nav-clone"></div>
        <div class="w-100 d-flex justify-content-center">
            <div class="py-4 glass-white w-50 d-flex flex-column ustify-content-center align-items-center">
                <img class="d-flex justify-content-center rounded-circle img-profile" src="<?php echo e(asset('storage/avatars/' . Auth::user()->image)); ?>">
                <div class="mt-4 fs-2 custom-txt fw-bold">
                    <?php echo e(Auth::user()->name); ?>

                </div>
                <div class="fw-bold">
                    <?php echo e(Auth::user()->email); ?>

                </div>
                <div class="py-4 w-100 d-flex justify-content-center">
                    <a href="<?php echo e(route('update_profile')); ?>" class="ctm text-decoration-none text-center w-75 py-2 custom-bg border-0 rounded text-light fw-bold">
                        <?php echo e(__('data.profile.btn_change')); ?>

                    </a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\WEB_PROG\LEC\PROJECT_LECTURE_GROUP\Revice_RedundantHops_MultiLang\resources\views/profile_user.blade.php ENDPATH**/ ?>