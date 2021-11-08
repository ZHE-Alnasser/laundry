<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.tab','data' => ['name' => __('Branches')]]); ?>
<?php $component->withName('tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Branches'))]); ?>
    <div class="">

        <div>


            
         <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('branch-datatable')->html();
} elseif ($_instance->childHasBeenRendered('Bn8hr2a')) {
    $componentId = $_instance->getRenderedChildComponentId('Bn8hr2a');
    $componentTag = $_instance->getRenderedChildComponentTagName('Bn8hr2a');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Bn8hr2a');
} else {
    $response = \Livewire\Livewire::mount('branch-datatable');
    $html = $response->html();
    $_instance->logRenderedChild('Bn8hr2a', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>

        <div class="mt-3">
        <a class="btn inline-flex mb-2 justify-center items-center" href="<?php echo e("/branches/create"); ?>">
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
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laundry\resources\views/settings/partials/branches.blade.php ENDPATH**/ ?>