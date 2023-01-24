

<?php $__env->startSection('title', '| Tentang'); ?>

<?php $__env->startSection('content'); ?>
    <div class="nav-clone"></div>
    <div>
        <div class="ttg-part-1 d-flex flex-column justify-content-center align-items-center text-center">
            <div class="resp-title fw-bold py-3"><?php echo e(__('data.about.title')); ?></div>
            <div class="resp-subtitle w-50"><?php echo e(__('data.about.desc')); ?></div>
        </div>
        <div class="ctr-ttg-2">
            <div class="bar">
                <div class="resp-title-2 fw-bold"><?php echo e(__('data.about.history.title')); ?></div>
                <br>
                <div class="resp-subtitle">
                    <?php echo e(__('data.about.history.desc_one')); ?>

                </div>
                <br>
                <div class="resp-subtitle">
                    <?php echo e(__('data.about.history.desc_two')); ?>

                </div>
            </div>
        </div>
        <div class="ctr-ttg-3">
            <div class="">
                <div class="resp-title-2 fw-bold">
                    <?php echo e(__('data.about.principle.title')); ?>

                </div>
                <div class="mt-4 ttg-pt-2">
                    <div class="outer-w mb-4">
                        <div class="rect">
                            <div class="resp-subtitle fw-bold"><?php echo e(__('data.about.principle.first_principle.title')); ?></div>
                            <div class="mt-2">
                                <?php echo e(__('data.about.principle.first_principle.desc')); ?>

                            </div>
                        </div>
                    </div>
                    <div class="outer-w mb-4">
                        <div class="rect">
                            <div class="resp-subtitle fw-bold"><?php echo e(__('data.about.principle.second_principle.title')); ?></div>
                            <div class="mt-2">
                                <?php echo e(__('data.about.principle.second_principle.desc')); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="outer-w">
                        <div class="rect">
                            <div class="resp-subtitle fw-bold"><?php echo e(__('data.about.principle.third_principle.title')); ?></div>
                            <div class="mt-2">
                                <?php echo e(__('data.about.principle.third_principle.desc')); ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\WEB_PROG\LEC\PROJECT_LECTURE_GROUP\Revice_RedundantHops_MultiLang\resources\views/tentang.blade.php ENDPATH**/ ?>