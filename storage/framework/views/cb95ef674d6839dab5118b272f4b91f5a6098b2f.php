

<?php $__env->startSection('title', '| Register'); ?>

<?php $__env->startSection('content'); ?>
<div class="nav-clone bg-dark">

</div>
<div class="custom-bg w-100">
    <div class="w-ctm p-in">
        <div class="fs-2 fw-bold resp-title">
            <?php echo e(__('data.register.title')); ?>

        </div>
        <div>
            <?php echo e(__('data.register.desc')); ?>

        </div>
    </div>
</div>

<div class="p-form">
    <form action="<?php echo e(route('register_backend')); ?>" enctype="multipart/form-data" method="POST" autocomplete="on">
        <?php echo csrf_field(); ?>
       
        <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-warning"><?php echo e(__('data.register.error.username')); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-warning"><?php echo e(__('data.register.error.email')); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
        <?php $__errorArgs = ['pw'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-warning"><?php echo e(__('data.register.error.pw')); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
        <?php $__errorArgs = ['confirm-pw'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-warning"><?php echo e(__('data.register.error.confirm_pw')); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <?php $__errorArgs = ['profile-img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-warning"><?php echo e(__('data.register.error.profile_img')); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="nama" class="custom-txt fw-bold resp-form-text l-side-form"><?php echo e(__('data.register.username.title')); ?></label>
            <input class="ipt-form" type="text" placeholder="<?php echo e(__('data.register.username.placeholder')); ?>" id="nama" name="user_name">
        </div>            
        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="email" class="custom-txt fw-bold resp-form-text l-side-form"><?php echo e(__('data.register.email.title')); ?></label>
            <input class="ipt-form" type="email" placeholder="<?php echo e(__('data.register.email.placeholder')); ?>" id="email" name="email">
        </div>  

        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="password" class="custom-txt fw-bold resp-form-text l-side-form"><?php echo e(__('data.register.password.title')); ?></label>
            <input class="ipt-form" type="password" placeholder="<?php echo e(__('data.register.password.placeholder')); ?>" id="password" name="pw">
        </div>  
        
        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="confirm-password" class="custom-txt fw-bold resp-form-text l-side-form"><?php echo e(__('data.register.confirm_password.title')); ?></label>
            <input class="ipt-form h-100" type="password" placeholder="<?php echo e(__('data.register.confirm_password.placeholder')); ?>" id="confirm-password" name="confirm-pw">
        </div>  

        

        <br>
        <div class="w-100 d-flex justify-content-end">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <button class="btn-regular rounded" type="submit"><?php echo e(__('data.register.btn_regist')); ?></button>
                <div class="fw-bold text-center"><?php echo e(__('data.register.req.title')); ?>

                    <a href="<?php echo e(route('login')); ?>" class="text-reset text-decoration-none"><span class="custom-txt"><?php echo e(__('data.register.req.btn_login')); ?></span></a></div>   
            </div> 
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\WEB_PROG\LEC\PROJECT_LECTURE_GROUP\Revice_RedundantHops_MultiLang\resources\views/Register/register.blade.php ENDPATH**/ ?>