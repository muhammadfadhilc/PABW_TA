<?php $__env->startSection('title', 'Beranda'); ?>
<?php $__env->startSection('subtitle', 'Kiosk Pelayanan Mandiri Warga'); ?>

<?php $__env->startSection('content'); ?>
<div class="hero">
    <section class="hero-left">
        <img src="<?php echo e(asset('logo.png')); ?>" alt="Logo SmartResident">
        <h1>SmartResident</h1>
        <p>Kiosk Pelayanan Mandiri Warga</p>
    </section>
    <section class="hero-right">
        <h2>Selamat Datang Warga Desa</h2>
        <div class="intro">
            SmartResident Kiosk adalah fasilitas mandiri pelaporan infrastruktur desa. Silakan masuk sebagai warga untuk membuat pengaduan baru atau memeriksa riwayat status laporan. Jika belum memiliki akun, lakukan registrasi terlebih dahulu.
        </div>
        <div class="hero-actions">
            <a class="btn btn-soft" href="<?php echo e(route('warga.login')); ?>">Masuk / Login Warga</a>
            <a class="btn btn-primary" href="<?php echo e(route('warga.register')); ?>">Daftar Akun Baru</a>
            <a class="btn btn-light" href="<?php echo e(route('admin.login')); ?>">Portal Petugas Desa</a>
        </div>
        <p class="muted" style="text-align:center; margin:22px 0 0; font-size:12px; font-weight:700;">• PILIH MENU DI ATAS UNTUK MEMULAI •</p>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.smartresident', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SEM 3 SIKC\PABW\SmartResidentLaravel_Modul3\resources\views/smartresident/home.blade.php ENDPATH**/ ?>