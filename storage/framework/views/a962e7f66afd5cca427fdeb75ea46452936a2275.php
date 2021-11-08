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
        
        <h1 class="px-6"><?php echo e(__('Create').' '.__('Branches')); ?></h1>

        <div class="w-full  mt-6 px-6 py-4 overflow-hidden ">
            <?php if (isset($component)) { $__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Form::class, ['action' => ''.e(url('branches')).'','method' => 'post','hasFiles' => true]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <?php echo csrf_field(); ?>
                <label><?php echo e(__('Name')); ?><span class="text-red-600" > *</span></label>
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

                <div class="mt-5">
                <label><?php echo e(__('Branch Address')); ?><span class="text-red-600" > *</span></label>
                <?php if (isset($component)) { $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2 = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Inputs\Input::class, ['name' => 'address','value' => ''.e(old('address')).'']); ?>
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

                </div>
                <div class="mt-5">
                <label><?php echo e(__('Phone')); ?><span class="text-red-600" > *</span></label>
                <?php if (isset($component)) { $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2 = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Inputs\Input::class, ['type' => 'number','name' => 'phone','value' => ''.e(old('phone')).'']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['required' => true,'minlength' => '10','maxlength' => '10','class' => 'input']); ?>
<?php if (isset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2)): ?>
<?php $component = $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2; ?>
<?php unset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
                <div class="mt-5">
                <label><?php echo e(__('VAT Number')); ?><span class="text-red-600" > *</span></label>
                <?php if (isset($component)) { $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2 = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Inputs\Input::class, ['type' => 'number','name' => 'vat_number','value' => ''.e(old('vat_number')).'']); ?>
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
                </div>
                <div class="flex mt-8">
                    <button type='submit' class="btn ml-3"><?php echo e(__('Create')); ?></button>

                    <input type="button" class="btn-cancel"
                           name="cancel" value="<?php echo e(__('Cancel')); ?>" onClick="window.location.replace('/settings')"/>
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


<?php /**PATH C:\xampp\htdocs\laundry\resources\views/branches/create.blade.php ENDPATH**/ ?>