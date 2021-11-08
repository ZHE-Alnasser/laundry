<?php $attributes = $attributes->exceptProps(['active']); ?>
<?php foreach (array_filter((['active']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div x-data="{
        activeTab: '<?php echo e($active); ?>',
        tabs: [],
        tabHeadings: [],
     }"
     x-init="
     $nextTick(() => {
        tabs = [...$refs.tabs.children];
        tabHeadings = tabs.map((tab, index) => {
        return tab.getAttribute('x-ref')
        });
})
"
     x-cloak
>
    <div class="mb-3"
         role="tablist"
    >
        <template x-for="(tab, index) in tabHeadings"
                  :key="index"
        >
            <button x-text="tab"
                    @click="activeTab = tab"
                    class="px-4 py-1 mx-1 text-sm rounded hover:bg-blue-300 hover:text-white"
                    :class="tab === activeTab ? 'bg-blue-300 text-white' : 'text-gray-800'"
                    :id="`tab-${index + 1}`"
                    role="tab"
                    type="button"
                    :aria-selected="(tab === activeTab).toString()"
                    :aria-controls="`tab-panel-${index + 1}`"
            ></button>
        </template>
    </div>

    <div x-ref="tabs" class="p-3">
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/components/tabs.blade.php ENDPATH**/ ?>