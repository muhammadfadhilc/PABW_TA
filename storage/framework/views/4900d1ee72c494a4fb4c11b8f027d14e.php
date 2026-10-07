<?php $__env->startSection('title', 'Dashboard Admin'); ?>
<?php $__env->startSection('subtitle', 'Antrian Laporan Kerusakan Fasilitas'); ?>

<?php $__env->startSection('content'); ?>
<div class="banner">
    <div>
        <strong>Petugas: <?php echo e($admin['nama']); ?></strong>
        <div style="font-size:12px; margin-top:3px;">Peran: <?php echo e(strtoupper($admin['role'])); ?></div>
    </div>
    <a class="btn btn-soft" href="<?php echo e(route('admin.manajemen')); ?>">Kelola Akun Admin</a>
</div>

<div class="toolbar">
    <div class="page-title" style="margin:0;">
        <h1 style="font-size:21px;">Antrian Laporan Kerusakan Fasilitas</h1>
    </div>
    <form class="filter" method="GET" action="<?php echo e(route('admin.dashboard')); ?>">
        <label for="status" style="margin:0;">Filter Status:</label>
        <select id="status" name="status" onchange="this.form.submit()">
            <?php $__currentLoopData = ['Semua', 'Menunggu', 'Diproses', 'Selesai']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item); ?>" <?php if($filter === $item): echo 'selected'; endif; ?>><?php echo e($item); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </form>
</div>

<div class="report-grid">
    <?php $__empty_1 = true; $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php echo $__env->make('smartresident.partials.report-card', ['report' => $report, 'showDetail' => true], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="card" style="grid-column:1/-1;">Tidak ada laporan pada filter ini.</div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.smartresident', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SEM 3 SIKC\PABW\SmartResidentLaravel_Modul3\resources\views/smartresident/admin/dashboard.blade.php ENDPATH**/ ?>