<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.app','data' => []]); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card','data' => ['xData' => '{isPickedUp:'.e(old('is_pickup',$order->is_pickup)?'true':'false').'}']]); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['x-data' => '{isPickedUp:'.e(old('is_pickup',$order->is_pickup)?'true':'false').'}']); ?>
        <div class="flex items-center">
            <h1 class="px-6 w-full"><?php echo e(__('Create').' '.__('Order')); ?></h1>




        
            
                
                    
                

                
                    
                    
                
            
        
        
            
            
            
            
        
        </div>

        <div class="divider"></div>

        <div class="w-full  mt-6 px-6 py-4 bg-white  overflow-hidden sm:rounded-lg">
            

            <?php if (isset($component)) { $__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Form::class, ['action' => ''.e(url('orders')).'','method' => 'post','hasFiles' => true]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('orders._fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('orders.services.pos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        <div class="flex mt-8">
            <button type='submit' class="btn ml-3"><?php echo e(__('Create')); ?></button>

            <input type="button" class="btn-cancel"
                   name="cancel" value="<?php echo e(__('Cancel')); ?>" onClick="window.location.replace('/orders/manage')"/>
        </div>


         <?php if (isset($__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb)): ?>
<?php $component = $__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb; ?>
<?php unset($__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
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
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\laundry\resources\views/orders/create.blade.php ENDPATH**/ ?>