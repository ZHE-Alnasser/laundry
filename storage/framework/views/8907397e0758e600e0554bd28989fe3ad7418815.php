<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.app','data' => []]); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card','data' => []]); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
        <div class="flex justify-between">
            <div class="flex-grow">
    <a class="btn inline-flex justify-center mb-2 items-center" href="<?php echo e("/orders/create"); ?>">
        <svg class="w-6 h-6 ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-plus-square">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="12" y1="8" x2="12" y2="16"></line>
            <line x1="8" y1="12" x2="16" y2="12"></line>
        </svg>
        <span><?php echo e(__('Create')); ?></span>
    </a>
            </div>

         
<div class="mx-1">
    <div x-data="{show: false}" @click.away="show = false" x-cloak >

        <a class="btn" @click="show = ! show" class="ml-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg><?php echo e(__('Reports')); ?><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5 pt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg></a>

        <div class="absolute border-2 bg-white py-0 z-40 rounded mt-1"
             x-show="show"
             x-transition:enter="transition duration-200 transform ease-out"
             x-transition:enter-start="scale-75"
             x-transition:leave="transition duration-100  transform ease-in"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end ="opacity-0 scale-90">
       <div class="mx-2 mt-1 border-b">
           <a class="text-sm z-40" href="<?php echo e('/orders/reports/vat'); ?>"><?php echo e(__('VAT')); ?></a>
       </div>
            <div class="mx-1 mb-2 mt-2">
           <a class="text-sm z-40" href="<?php echo e('/orders/reports/per-month'); ?>"><?php echo e(__('Orders Per Month')); ?></a>
       </div>

        </div>

    </div>

</div>
            </div>

        
            
            
        
        
            
            
        


    <div class="my-5">
        <h1 class="mb-3"><?php echo e(__('All Orders')); ?></h1>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('order-datatable')->html();
} elseif ($_instance->childHasBeenRendered('lbwxdNH')) {
    $componentId = $_instance->getRenderedChildComponentId('lbwxdNH');
    $componentTag = $_instance->getRenderedChildComponentTagName('lbwxdNH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lbwxdNH');
} else {
    $response = \Livewire\Livewire::mount('order-datatable');
    $html = $response->html();
    $_instance->logRenderedChild('lbwxdNH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laundry\resources\views/orders/manage.blade.php ENDPATH**/ ?>