<?php $__env->startSection('title', 'Form Laporan'); ?>
<?php $__env->startSection('subtitle', 'Formulir Pengaduan Warga'); ?>

<?php $__env->startSection('content'); ?>
<div class="form-card card">
    <div class="page-title">
        <h1>Formulir Pengaduan Kerusakan Fasilitas</h1>
        <p>Lengkapi jenis fasilitas, lokasi, dan deskripsi kerusakan.</p>
    </div>

    <?php if($errors->any()): ?>
        <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'error','message' => 'Semua data laporan wajib diisi dengan benar.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'error','message' => 'Semua data laporan wajib diisi dengan benar.']); ?>
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

    <form method="POST" action="<?php echo e(route('warga.laporan.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="field">
            <label for="tipe_fasilitas">Jenis Fasilitas Rusak</label>
            <select id="tipe_fasilitas" name="tipe_fasilitas" required>
                <option value="">-- Pilih Jenis Fasilitas --</option>
                <?php $__currentLoopData = ['Jalan Raya', 'Penerangan Jalan', 'Saluran Air', 'Lainnya']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($jenis); ?>" <?php if(old('tipe_fasilitas') === $jenis): echo 'selected'; endif; ?>><?php echo e($jenis); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['tipe_fasilitas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="error-text"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="field">
            <label for="lokasi">Lokasi Kerusakan (Nama Jalan, RT/RW, Dusun)</label>
            <input id="lokasi" name="lokasi" value="<?php echo e(old('lokasi')); ?>" required>
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
            <label for="deskripsi">Deskripsi Kerusakan (Jenis Kerusakan, Dampak, dll)</label>
            <textarea id="deskripsi" name="deskripsi" required><?php echo e(old('deskripsi')); ?></textarea>
            <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="error-text"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="actions">
            <button class="btn btn-primary" type="submit">Kirim Laporan Pengaduan</button>
            <a class="btn btn-light" href="<?php echo e(route('warga.dashboard')); ?>">Kembali / Batal</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.smartresident', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SEM 3 SIKC\PABW\SmartResidentLaravel_Modul3\resources\views/smartresident/warga/form-laporan.blade.php ENDPATH**/ ?>