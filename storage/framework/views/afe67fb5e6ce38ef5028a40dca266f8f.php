<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'type' => 'success',
    'message' => null,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'type' => 'success',
    'message' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $styles = [
        'success' => ['#ecfdf5', '#10b981', '#065f46', '✓'],
        'error'   => ['#fef2f2', '#ef4444', '#991b1b', '!'],
        'warning' => ['#fffbeb', '#f59e0b', '#92400e', '!'],
        'info'    => ['#eff6ff', '#3b82f6', '#1e40af', 'i'],
    ];
    [$bg, $border, $text, $icon] = $styles[$type] ?? $styles['info'];
?>

<div <?php echo e($attributes->merge(['class' => 'alert-box'])); ?> style="background: <?php echo e($bg); ?>; border: 1px solid <?php echo e($border); ?>; color: <?php echo e($text); ?>;">
    <span class="alert-icon" style="border-color: <?php echo e($border); ?>;"><?php echo e($icon); ?></span>
    <div>
        <strong><?php echo e(ucfirst($type)); ?></strong>
        <div><?php echo e($message ?? $slot); ?></div>
    </div>
</div>
<?php /**PATH C:\SEM 3 SIKC\PABW\SmartResidentLaravel_Modul3\resources\views/components/alert.blade.php ENDPATH**/ ?>