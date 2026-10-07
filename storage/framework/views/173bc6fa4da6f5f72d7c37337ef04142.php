<div class="report-mini">
    <h3>TKT-<?php echo e(str_pad((string) $report['id'], 5, '0', STR_PAD_LEFT)); ?> · <?php echo e($report['tipe_fasilitas']); ?></h3>
    <p><strong>Lokasi:</strong> <?php echo e($report['lokasi']); ?></p>
    <p><strong>Tanggal:</strong> <?php echo e($report['tanggal_lapor']); ?></p>
    <div class="row">
        <?php echo $__env->make('smartresident.partials.status-badge', ['status' => $report['status']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php if(isset($showDetail)): ?>
            <a class="btn btn-light" style="padding:7px 10px;" href="<?php echo e(route('admin.laporan.detail', $report['id'])); ?>">Detail</a>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\SEM 3 SIKC\PABW\SmartResidentLaravel_Modul3\resources\views/smartresident/partials/report-card.blade.php ENDPATH**/ ?>