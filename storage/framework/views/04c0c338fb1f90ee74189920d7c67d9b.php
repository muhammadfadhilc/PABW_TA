<div class="report-card">
    <h3><?php echo e($item['id']); ?> - <?php echo e($item['lokasi']); ?></h3>
    <div class="meta">
        Pelapor: <strong><?php echo e($item['nama_pelapor']); ?></strong><br>
        Waktu: <?php echo e($item['waktu']); ?><br>
        Tinggi genangan: <strong><?php echo e($item['tinggi_air']); ?> cm</strong>
    </div>

    <?php if($item['tinggi_air'] < 30): ?>
        <span class="status waspada">Waspada</span>
    <?php elseif($item['tinggi_air'] <= 70): ?>
        <span class="status siaga">Siaga</span>
    <?php else: ?>
        <span class="status awas">Awas</span>
    <?php endif; ?>
</div>
<?php /**PATH C:\SEM 3 SIKC\PABW\SmartResidentLaravel_Modul3\resources\views/partials/laporan-card.blade.php ENDPATH**/ ?>