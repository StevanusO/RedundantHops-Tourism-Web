

<?php $__env->startSection('title', '| Detail'); ?>

<?php $__env->startSection('content'); ?>
<div>
    <div class="nav-clone"></div>
    <div class="detail" style="background-image: url(<?php echo e($tourist->image); ?>); filter: brightness(60%); background-size: cover; background-position: center center"></div>
    <div class="container">
        <div class="fw-bold fs-1 py-2">
            <?php echo e($tourist->name); ?> 
        </div>
        <p class="detail-desc">
            <?php echo e($tourist->description); ?>

        </p>
        <div class="bg-light text-dark rounded p-2 mb-4 mt-5">
            <div class="d-flex justify-content-between align-items-center" id="title-label">
                <div class="fw-bold fs-4 d-flex align-items-center"><span class="bg-success rounded-circle me-2" style="display:inline-block; width:20px; height:20px;"></span>Lokasi</div>
                <div class="dropdown-toggle"></div>
            </div>
            
            <div class="temp-value-label mt-2" id="value-label">
                <?php echo e($tourist->location); ?>

            </div>
        </div>
        <div class="bg-light text-dark rounded p-2 mb-4"  id="title-label-2">
            <div class="d-flex justify-content-between align-items-center" id="title-label">
                <div class="fw-bold fs-4 d-flex align-items-center"><span class="bg-success rounded-circle me-2" style="display:inline-block; width:20px; height:20px;"></span>Harga Tiket</div>
                <div class="dropdown-toggle"></div>
            </div>
            <div class="temp-value-label mt-2" id="value-label-2">
                <?php echo e($tourist->price_estimate); ?>

            </div>
        </div>
        <div class="bg-light text-dark rounded p-2 mb-4" id="title-label-3">
            <div class="d-flex justify-content-between align-items-center" id="title-label">
                <div class="fw-bold fs-4 d-flex align-items-center"><span class="bg-success rounded-circle me-2" style="display:inline-block; width:20px; height:20px;"></span>Waktu Operasional</div>
                <div class="dropdown-toggle"></div>
            </div>
            <div class="temp-value-label mt-2" id="value-label-3">
                <?php echo e($tourist->time); ?> (WIB)
            </div>
        </div>
    </div>

    
    <div class="container my-5">
        <div class="fs-1 fw-bold custom-txt mb-3">Review</div>
        
        <div class="ctr-rev">
            <div class="frontend-view pe-3">
                <?php if(count($post) < 1): ?>
                    <div class="fst-italic text-white opacity-50 fs-5 h-100 d-flex justify-content-center align-items-center">
                        Jadilah orang pertama yang memberi ulasan
                    </div>
                <?php else: ?>
                    <div class="d-none">
                        <?php echo e($tes = 0); ?>

                    </div>
                    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bor-btm ps-1 mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="w-50 d-flex">
                                    <div class="rounded rounded" style="width: 70px; height: 70px; background-image: url(<?php echo e(asset('storage/avatars/' . $data->post_belongsTo_user->image)); ?>); background-size: cover; background-position: center center"></div>
                                    <div class="ps-3 d-flex flex-column justify-content-center">
                                        <div class="fw-bold custom-txt fs-4"><?php echo e($data->post_belongsTo_user->name); ?></div>
                                        <div class="date"><?php echo e($data->time); ?></div>
                                    </div>
                                </div>
                                <?php if(Auth::user()->id == $data->user_id): ?>
                                    <div class=" me-3">
                                        <form action="<?php echo e(route('post_delete_logic', ['id' => $data->id])); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button class="custom-bg text-light fw-bold px-1 pb-1 rounded border-0" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="d-none">
                                <?php echo e($tes += 1); ?>

                                <?php echo e($temp2 = "con".$tes); ?>

                            </div>
                            <div class="ps-3 py-3" style="margin-left: 70px">
                                <div class="d-flex justify-content-between me-3">
                                    <div>
                                        <?php echo e($data->review); ?>

                                    </div>
                                    <?php if(Auth::user()->id == $data->user_id): ?>
                                        <button onclick="slider(<?php echo e($tes); ?>)" class="rounded text-center btn-edit-2">
                                            &#9998;
                                        </button>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <?php if(Auth::user()->id == $data->user_id): ?>
                                        <form id="<?php echo e($temp2); ?>" action="<?php echo e(route('post_edit_logic')); ?>" class="temp-value-label position-relative mt-2" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('patch'); ?>
                                            <div class="d-flex justify-content-between me-3">
                                                <input type="text" style="visibility: hidden; display: none" name="id" value="<?php echo e($data->id); ?>">
                                                <input type="text" class="edit" name="review" placeholder="ubah review Anda" id="review">
                                                <button type="submit" class="btn-edit">Ubah</button>
                                            </div>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            
            <form action="<?php echo e(route('insert_review')); ?>" class="d-flex gap-3 pt-3" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="text" name="user_id" style="visibility: hidden; display: none" value="<?php echo e(Auth::user()->id); ?>">
                <input type="text" name="tourist_attraction_id" style="visibility: hidden; display: none" value="<?php echo e($tourist->id); ?>">
                <input class="comment-view" type="text" name="review" placeholder="Masukkan review Anda">
                <button class="send-review" type="submit">&#10146;</button>
            </form>
        </div>
    </div>
</div>
<script>
    function slider(pass){
        $('#con'+pass).slideToggle(500);
    }

    $(document).ready(function(){     
        slider();
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\WEB_PROG\LEC\PROJECT_LECTURE_GROUP\Redundant_Hops\resources\views/detail.blade.php ENDPATH**/ ?>