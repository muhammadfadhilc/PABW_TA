<?php $__env->startSection('title', 'Konfirmasi Laporan'); ?>

<?php $__env->startSection('content'); ?>
<div class="confirmation card">
    <?php if($laporan): ?>
        <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'success','message' => 'Laporan banjir berhasil dikirim dan data telah diterima oleh sistem.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success','message' => 'Laporan banjir berhasil dikirim dan data telah diterima oleh sistem.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
        <h1 style="margin: 4px 0 5px; color:#12364a;">Laporan Berhasil Dikirim</h1>
        <p style="color:#64748b; line-height:1.6;">Berikut ringkasan data yang Anda kirimkan.</p>
        <div class="confirm-value"><?php echo e($laporan['id']); ?></div>
        <div style="text-align:left; background:#f8fafc; border-radius:10px; padding:15px 18px; line-height:1.8;">
            <strong>Nama Pelapor:</strong> <?php echo e($laporan['nama_pelapor']); ?><br>
            <strong>Lokasi:</strong> <?php echo e($laporan['lokasi']); ?><br>
            <strong>Tinggi Air:</strong> <?php echo e($laporan['tinggi_air']); ?> cm<br>
            <strong>Waktu:</strong> <?php echo e($laporan['waktu']); ?>

        </div>
    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'warning','message' => 'Belum ada laporan yang baru dikirim. Silakan isi form terlebih dahulu.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'warning','message' => 'Belum ada laporan yang baru dikirim. Silakan isi form terlebih dahulu.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
    <?php endif; ?>

    <div class="actions" style="justify-content:center; margin-top:20px;">
        <a class="btn btn-primary" href="<?php echo e(route('banjir.form')); ?>">Buat Laporan Baru</a>
        <a class="btn btn-secondary" href="<?php echo e(route('banjir.index')); ?>">Daftar Laporan</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SEM 3 SIKC\PABW\SmartResidentLaravel_Modul3\resources\views/laporbanjir/konfirmasi.blade.php ENDPATH**/ ?>