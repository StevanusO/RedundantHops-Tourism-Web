

<?php $__env->startSection('title', '| Ubah Profil'); ?>

<?php $__env->startSection('content'); ?>

<div class="nav-clone bg-dark">

</div>
<div class="custom-bg w-100">
    <div class="w-50 p-in">
        <div class="fs-2 fw-bold">
            Ubah Data Anda
        </div>
        <div>
            Perbarui data Anda setiap saat agar kami dapat
            memberitahukan informasi tentang wisata yang terbaru
            dan terpopuler di masa sekarang
        </div>
    </div>
    <div class="w-100 marq">
        <marquee class="border rounded h-100 p-2 mb-2 fw-bold bg-light custom-txt">
                Bagian yang tidak diisi tidak akan mengalami perubahan alias hanya bagian yang diisi yang akan mengalami perubahan.
        </marquee>
    </div>
</div>

<div class="p-form">
    <form action="<?php echo e(route('update_backend')); ?>" enctype="multipart/form-data" method="POST" autocomplete="off">
        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>
        <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
        

        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="nama" class="custom-txt fw-bold fs-5 l-side-form">Nama Pengguna</label>
            <input class="ipt-form" type="text" placeholder="Ubah nama Anda" id="nama" name="user_name">
        </div>  

        

        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="password" class="custom-txt fw-bold fs-5 l-side-form">Kata Sandi</label>
            <input class="ipt-form" type="password" placeholder="Kata sandi baru" id="password" name="pw">
        </div>  
        
        

        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="profile" class="custom-txt fw-bold fs-5 l-side-form">Gambar Profil</label>
            <input type="file" class="custom-bg rounded text-light" id="profile" name="profile" accept="image/png, image/jpg, image/jpeg">
        </div>

        <br>
        <div class="w-100 d-flex justify-content-end">
            <div class="d-flex flex-column pe-3 justify-content-center align-items-center">
                <button class="btn-regular rounded py-1" type="submit">Ubah</button>
            </div> 
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\WEB_PROG\LEC\PROJECT_LECTURE_GROUP\Redundant_Hops\resources\views/update_profile.blade.php ENDPATH**/ ?>