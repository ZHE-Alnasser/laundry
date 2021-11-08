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
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.feedback','data' => []]); ?>
<?php $component->withName('feedback'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <h1 class="px-6"><?php echo e(__('Create').' '.__('Items')); ?></h1>

    <div class="w-full  mt-6 px-6 py-4 overflow-hidden ">
        <?php if (isset($component)) { $__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Form::class, ['action' => ''.e(url('items')).'','method' => 'post','hasFiles' => true]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <?php echo csrf_field(); ?>
            <label><?php echo e(__('Item Name')); ?><span class="text-red-600" > *</span></label>
            <?php if (isset($component)) { $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2 = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Inputs\Input::class, ['name' => 'name','value' => ''.e(old('name')).'']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['required' => true,'class' => 'input']); ?>
<?php if (isset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2)): ?>
<?php $component = $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2; ?>
<?php unset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

            <div class="field mb-5 mt-5">
                <label class=" font-extrabold leading-8 tracking-tight  sm:leading-9"
                       for="image"><?php echo e(__('Add Image')); ?></label>
                <div class="mt-1">

                    
                    

                    
                    
                    

                    <label for="file-upload" class="btn">
<span>

    <i data-feather="image" class="ml-1"></i>
    <?php echo e(__('Upload image')); ?>

</span>
                        <input class="hidden"  id="file-upload" name="image" type="file"/>
                    </label>





                </div>
            </div>
            <div class="mt-5"> <h1><?php echo e(__('Create Services')); ?></h1></div>
            <?php echo $__env->make('items.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="flex mt-8">
                <button type='submit' class="btn ml-3"><?php echo e(__('Create')); ?></button>

                <input type="button" class="mx-2 btn-cancel"
                       name="cancel" value="<?php echo e(__('Cancel')); ?>" onClick="window.location.replace('/items/manage')"/>
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



<?php /**PATH C:\xampp\htdocs\laundry\resources\views/items/create.blade.php ENDPATH**/ ?>