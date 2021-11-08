<?php $attributes = $attributes->exceptProps(['name']); ?>
<?php foreach (array_filter((['name']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
        x-ref="<?php echo e($name); ?>"
        x-show="activeTab == $el.getAttribute('x-ref')"
        role="tabpanel"
        :aria-labelledby="`tab-${$el.getAttribute('x-ref')}`"
        :id="`tab-panel-${$el.getAttribute('x-ref')}`"
        class="h-full"
>
    <?php echo e($slot); ?>

</div>
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/components/tab.blade.php ENDPATH**/ ?>