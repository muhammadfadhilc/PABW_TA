<?php if($status === 'Selesai'): ?>
    <span class="status status-selesai">Selesai</span>
<?php elseif($status === 'Diproses'): ?>
    <span class="status status-diproses">Diproses</span>
<?php else: ?>
    <span class="status status-menunggu">Menunggu</span>
<?php endif; ?>
<?php /**PATH C:\SEM 3 SIKC\PABW\SmartResidentLaravel_Modul3\resources\views/smartresident/partials/status-badge.blade.php ENDPATH**/ ?>