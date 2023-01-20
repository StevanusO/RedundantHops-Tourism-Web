<div>
    heloos masuk bro
    <?php if(count($passed_data) < 1): ?>
        <h2>No data user</h2>
    <?php else: ?>
        <?php $__currentLoopData = $passed_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h4><?php echo e($user->name); ?></h4>
            <img class="rounded" src="<?php echo e(asset('storage/avatars/' . $user->image)); ?>" alt="" style="width: 30px; height: 30px">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div><?php /**PATH C:\BINUS5\WEB_PROG\LEC\PROJECT_LECTURE_GROUP\Redundant_Hops\resources\views/testing.blade.php ENDPATH**/ ?>