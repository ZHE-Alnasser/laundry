<div wire:click.prefetch="toggle('<?php echo e($index); ?>')"
    class="<?php if($column['hidden']): ?> relative table-cell h-12 w-3 bg-blue-100 hover:bg-blue-300 overflow-none align-top group <?php else: ?> hidden <?php endif; ?>"
    style="min-width:12px; max-width:12px">
    <button class="relative h-12 w-3 focus:outline-none">
        <span
            class="w-32 hidden group-hover:inline-block absolute z-10 top-0 left-0 ml-3 bg-blue-300 font-medium leading-4 text-xs text-left text-blue-700 tracking-wider transform uppercase focus:outline-none">
            <?php echo e(str_replace('_', ' ', $column['label'])); ?>

        </span>
    </button>
    <svg class="absolute text-blue-100 fill-current w-full inset-x-0 bottom-0"
        viewBox="0 0 314.16 207.25">
        <path stroke-miterlimit="10" d="M313.66 206.75H.5V1.49l157.65 204.9L313.66 1.49v205.26z" />
    </svg>
</div>
<div
    class="<?php if($column['hidden']): ?> hidden <?php else: ?> relative h-12 overflow-hidden align-top flex table-cell <?php endif; ?>" <?php if(isset($column['width'])): ?>style="width:<?php echo e($column['width']); ?>"<?php endif; ?>>
    <button wire:click.prefetch="sort('<?php echo e($index); ?>')"
        class="w-full h-full px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider flex justify-between items-center focus:outline-none">
        <span class="inline flex-grow <?php if($column['align'] === 'right'): ?> text-right <?php elseif($column['align'] === 'center'): ?> text-center <?php endif; ?>""><?php echo e(str_replace('_', ' ', $column['label'])); ?></span>
        <span class="inline text-xs text-blue-400">
            <?php if($sort === $index): ?>
            <?php if($direction): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'icons::chevron-up','data' => ['class' => 'h-6 w-6 text-green-600 stroke-current']]); ?>
<?php $component->withName('icons.chevron-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'h-6 w-6 text-green-600 stroke-current']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php else: ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'icons::chevron-down','data' => ['class' => 'h-6 w-6 text-green-600 stroke-current']]); ?>
<?php $component->withName('icons.chevron-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'h-6 w-6 text-green-600 stroke-current']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
        </span>
    </button>
    <button wire:click.prefetch="toggle('<?php echo e($index); ?>')"
        class="absolute bottom-1 right-1 focus:outline-none">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'icons::arrow-circle-left','data' => ['class' => 'h-3 w-3 text-gray-300 hover:text-blue-400']]); ?>
<?php $component->withName('icons.arrow-circle-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'h-3 w-3 text-gray-300 hover:text-blue-400']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </button>
</div>
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/livewire/datatables/header-inline-hide.blade.php ENDPATH**/ ?>