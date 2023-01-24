

<?php $__env->startSection('title', '| Login'); ?>

<?php $__env->startSection('content'); ?>
    <div class="nav-clone bg-dark">

    </div>
    <div class="custom-bg w-100">
        <div class="w-ctm p-in">
            <div class="fs-2 fw-bold">
                <?php echo e(__('data.login.title')); ?>

            </div>
            <div>
                <?php echo e(__('data.login.desc')); ?>

            </div>
        </div>
    </div>

    <div class="p-form">
        <form action="<?php echo e(route('login_backend')); ?>" enctype="multipart/form-data" method="POST" autocomplete="off">
            <?php echo csrf_field(); ?>
            <?php if($errors->any()): ?>
                <div class="text-warning py-2">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            
            <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
                <label for="nama" class="custom-txt fw-bold resp-form-text l-side-form"><?php echo e(__('data.login.email.title')); ?></label>
                <input class="ipt-form" type="text" placeholder="<?php echo e(__('data.login.email.placeholder')); ?>" id="email" name="email">
            </div>            
            <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
                <label for="password" class="custom-txt fw-bold resp-form-text l-side-form"><?php echo e(__('data.login.password.title')); ?></label>
                <input class="ipt-form" type="password" placeholder="<?php echo e(__('data.login.password.placeholder')); ?>" id="password" name="pw">
            </div>  
            <br>
            <div class="w-100 d-flex justify-content-end">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <button class="btn-regular rounded" type="submit"><?php echo e(__('data.login.btn_login')); ?></button>
                    <div class="fw-bold text-center"><?php echo e(__('data.login.req.title')); ?>

                        <a href="<?php echo e(route('register')); ?>" class="text-reset text-decoration-none"><span class="custom-txt"><?php echo e(__('data.login.req.btn_regist')); ?></span></a></div>   
                </div> 
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\WEB_PROG\LEC\PROJECT_LECTURE_GROUP\Revice_RedundantHops_MultiLang\resources\views/Login/login.blade.php ENDPATH**/ ?>