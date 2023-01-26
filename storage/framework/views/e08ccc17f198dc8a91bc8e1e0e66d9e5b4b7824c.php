

<?php $__env->startSection('title', '| Change Profile'); ?>

<?php $__env->startSection('content'); ?>

<div class="nav-clone bg-dark">

</div>
<div class="custom-bg w-100">
    <div class="w-ctm p-in">
        <div class="fs-2 fw-bold">
            <?php echo e(__('data.change_profile.title')); ?>

        </div>
        <div>
            <?php echo e(__('data.change_profile.desc')); ?>

        </div>
    </div>
    <div class="w-100 marq">
        <marquee class="border rounded h-100 p-2 mb-2 fw-bold bg-light custom-txt">
                <?php echo e(__('data.change_profile.info')); ?>

        </marquee>
    </div>
</div>

<div class="p-form">
    <form action="<?php echo e(route('update_backend')); ?>" enctype="multipart/form-data" method="POST" autocomplete="off">
        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>
        <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">

        
        <div class="mt-3 mb-4">
            <div>
                <label for="nama" class="fs-4 custom-txt mb-2">
                    <?php echo e(__('data.change_profile.username.title')); ?>

                </label>
            </div>
            <input class="ipt-form" type="text" placeholder="<?php echo e(__('data.change_profile.username.placeholder')); ?>" id="nama" name="user_name">
            <div class="bar-b"></div>
        </div>

        <div class="my-4">
            <div>
                <label for="pw" class="fs-4 custom-txt mb-2">
                    <?php echo e(__('data.change_profile.password.title')); ?>

                </label>
            </div>
            <input class="ipt-form" type="password" placeholder="<?php echo e(__('data.change_profile.password.placeholder')); ?>" id="password" name="pw">
            <div class="bar-b"></div>
        </div>

        <div class="my-4">
            <div>
                <label for="pw" class="fs-4 custom-txt mb-2">
                    <?php echo e(__('data.change_profile.image.title')); ?>

                </label>
            </div>
            <input type="file" class="custom-bg rounded text-light" id="profile" name="profile" accept="image/png, image/jpg, image/jpeg">
        </div>

        <br>
        <div class="w-100 d-flex justify-content-end">
            <div class="d-flex flex-column pe-3 justify-content-center align-items-center">
                <button class="btn-regular rounded py-1" type="submit"><?php echo e(__('data.change_profile.btn_chg')); ?></button>
            </div> 
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\WEB_PROG\LEC\PROJECT_LECTURE_GROUP\Revice_RedundantHops_MultiLang\resources\views/update_profile.blade.php ENDPATH**/ ?>