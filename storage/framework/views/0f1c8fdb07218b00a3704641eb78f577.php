<?php $__env->startSection('title', 'Daftar Laporan'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-heading">
    <h1>Daftar Laporan Banjir</h1>
    <p>Status genangan ditentukan dengan directive Blade: &lt;30 cm = Waspada, 30-70 cm = Siaga, dan &gt;70 cm = Awas.</p>
</div>

<div class="grid">
    <?php $__empty_1 = true; $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php echo $__env->make('partials.laporan-card', ['item' => $item], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="card" style="grid-column:1/-1;">Belum ada laporan banjir.</div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SEM 3 SIKC\PABW\SmartResidentLaravel_Modul3\resources\views/laporbanjir/index.blade.php ENDPATH**/ ?>