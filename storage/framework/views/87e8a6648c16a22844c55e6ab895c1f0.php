<?php $__env->startSection('title', 'Dashboard Warga'); ?>
<?php $__env->startSection('subtitle', 'Riwayat Laporan Warga'); ?>

<?php $__env->startSection('content'); ?>
<div class="banner">
    <div>
        <strong>Selamat Datang Warga, <?php echo e($warga['nama']); ?></strong>
        <div style="font-size:12px; margin-top:3px;">Pantau riwayat laporan kerusakan fasilitas desa dari halaman ini.</div>
    </div>
    <a class="btn btn-primary" href="<?php echo e(route('warga.laporan.create')); ?>">+ Lapor Baru</a>
</div>

<div class="toolbar">
    <div class="page-title" style="margin:0;">
        <h1 style="font-size:21px;">Riwayat Laporan Kerusakan Anda</h1>
    </div>
    <span class="muted" style="font-size:13px;">Total: <?php echo e(count($laporan)); ?> laporan</span>
</div>

<div class="report-grid">
    <?php $__empty_1 = true; $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php echo $__env->make('smartresident.partials.report-card', ['report' => $report], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="card" style="grid-column:1/-1;">Belum ada laporan. Klik <strong>Lapor Baru</strong> untuk membuat laporan pertama.</div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.smartresident', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SEM 3 SIKC\PABW\SmartResidentLaravel_Modul3\resources\views/smartresident/warga/dashboard.blade.php ENDPATH**/ ?>