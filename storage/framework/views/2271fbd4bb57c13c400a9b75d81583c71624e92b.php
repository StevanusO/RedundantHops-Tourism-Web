

<?php $__env->startSection('title', '| Register'); ?>

<?php $__env->startSection('content'); ?>
<div class="nav-clone bg-dark">

</div>
<div class="custom-bg w-100">
    <div class="w-50 p-in">
        <div class="fs-2 fw-bold">
            Daftarkan akun Anda
        </div>
        <div>
            Daftarkan akun Anda, dapatkan segala informasi 
            wisata yang terbaru dan terpercaya
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
            <p class="text-warning">Harap cek kembali user_name yang digunakan</p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-warning">Harap cek kembali email yang digunakan</p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
        <?php $__errorArgs = ['pw'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-warning">Harap cek kembali kata sandi & konfirmasi kata sandi</p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
        <?php $__errorArgs = ['confirm-pw'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-warning">Konfirmasi kata sandi wajib di isi</p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <?php $__errorArgs = ['profile-img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-warning">Harap mengunggah gambar</p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="nama" class="custom-txt fw-bold fs-5 l-side-form">Nama Pengguna</label>
            <input class="ipt-form" type="text" placeholder="Masukkan nama Anda" id="nama" name="user_name">
        </div>            
        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="email" class="custom-txt fw-bold fs-5 l-side-form">Email</label>
            <input class="ipt-form" type="email" placeholder="Masukkan email Anda" id="email" name="email">
        </div>  

        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="password" class="custom-txt fw-bold fs-5 l-side-form">Kata Sandi</label>
            <input class="ipt-form" type="password" placeholder="Masukkan kata sandi Anda" id="password" name="pw">
        </div>  
        
        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="confirm-password" class="custom-txt fw-bold fs-5 l-side-form">Konfirmasi Kata Sandi</label>
            <input class="ipt-form h-100" type="password" placeholder="Masukkan kembali kata sandi Anda" id="confirm-password" name="confirm-pw">
        </div>  

        

        <br>
        <div class="w-100 d-flex justify-content-end">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <button class="btn-regular rounded" type="submit">Daftar</button>
                <div class="fw-bold text-center">Sudah punya akun? 
                    <a href="<?php echo e(route('login')); ?>" class="text-reset text-decoration-none"><span class="custom-txt">Masuk</span></a></div>   
            </div> 
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\WEB_PROG\LEC\PROJECT_LECTURE_GROUP\Redundant_Hops\resources\views/Register/register.blade.php ENDPATH**/ ?>