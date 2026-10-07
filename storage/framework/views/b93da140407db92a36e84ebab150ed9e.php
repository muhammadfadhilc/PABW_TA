<?php $__env->startSection('title', 'Form Pelaporan'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-heading">
    <h1>Form Pelaporan Banjir</h1>
    <p>Isi data kejadian banjir secara singkat. Laporan akan dikirim melalui method POST dan ditampilkan kembali pada halaman konfirmasi.</p>
</div>

<div class="card" style="max-width: 720px;">
    <?php if($errors->any()): ?>
        <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'error','message' => 'Masih ada data yang belum benar. Silakan periksa kembali form.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'error','message' => 'Masih ada data yang belum benar. Silakan periksa kembali form.']); ?>
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

    <form method="POST" action="<?php echo e(route('banjir.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="field">
            <label for="nama_pelapor">Nama Pelapor</label>
            <input id="nama_pelapor" name="nama_pelapor" value="<?php echo e(old('nama_pelapor')); ?>" placeholder="Contoh: Muhammad Fadhil" required>
            <?php $__errorArgs = ['nama_pelapor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="error-text"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="field">
            <label for="lokasi">Lokasi Kejadian</label>
            <input id="lokasi" name="lokasi" value="<?php echo e(old('lokasi')); ?>" placeholder="Nama jalan, desa/kecamatan, atau patokan lokasi" required>
            <?php $__errorArgs = ['lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="error-text"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="field">
            <label for="tinggi_air">Tinggi Genangan Air (cm)</label>
            <input id="tinggi_air" name="tinggi_air" type="number" min="0" max="500" value="<?php echo e(old('tinggi_air')); ?>" placeholder="Contoh: 45" required>
            <?php $__errorArgs = ['tinggi_air'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="error-text"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="actions">
            <button class="btn btn-primary" type="submit">Kirim Laporan</button>
            <a class="btn btn-secondary" href="<?php echo e(route('banjir.index')); ?>">Lihat Daftar Laporan</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SEM 3 SIKC\PABW\SmartResidentLaravel_Modul3\resources\views/laporbanjir/form.blade.php ENDPATH**/ ?>