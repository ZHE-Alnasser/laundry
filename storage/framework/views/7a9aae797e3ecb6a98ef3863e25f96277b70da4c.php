

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.tab','data' => ['name' => __('General')]]); ?>
<?php $component->withName('tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('General'))]); ?>
    <?php if (isset($component)) { $__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Form::class, ['action' => ''.e(url('settings')).'','method' => 'post']); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['crudButton' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>

    <div class="sm:flex my-2">

        <span class=" flex-1 mx-2 "><label class="text-sm font-bold"><?php echo e(__('Company Name')); ?></label><?php if (isset($component)) { $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2 = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Inputs\Input::class, ['name' => 'company_name','value' => setting('company_name')]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'input mx-2 ']); ?>
<?php if (isset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2)): ?>
<?php $component = $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2; ?>
<?php unset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?></span>
       
        
        
    </div>

    <hr>
    <div class="sm:flex my-2 mt-4">
        <span class=" flex-1 mx-2 "><label class="text-sm font-bold"><?php echo e(__('Company Email')); ?></label><?php if (isset($component)) { $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2 = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Inputs\Input::class, ['name' => 'company_email','value' => setting('company_email')]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'input mx-2']); ?>
<?php if (isset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2)): ?>
<?php $component = $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2; ?>
<?php unset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?></span>
        <span class=" flex-1 mx-2 "><label class="text-sm font-bold"><?php echo e(__('Company Website')); ?></label><?php if (isset($component)) { $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2 = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Inputs\Input::class, ['name' => 'company_website','value' => setting('company_website')]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'input mx-2']); ?>
<?php if (isset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2)): ?>
<?php $component = $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2; ?>
<?php unset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?></span>
    
        <span class=" flex-1 mx-2 "><label class="text-sm font-bold"><?php echo e(__('VAT Rate')); ?></label><?php if (isset($component)) { $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2 = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Inputs\Input::class, ['name' => 'vat_rate','value' => setting('vat_rate')]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'input mx-2']); ?>
<?php if (isset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2)): ?>
<?php $component = $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2; ?>
<?php unset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?></span>
    </div>

    <hr>
    
        
            
            
        
        
            
            
        
        
    
    <div class="w-full px-1">
        <label><?php echo e(__('Language')); ?></label>
        <div class="mt-3">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select','data' => ['name' => 'language']]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'language']); ?>
                <option value="ar" <?php echo e(setting('language')=='ar'?'selected':''); ?>><?php echo e(__('Arabic')); ?></option>
                <option value="en" <?php echo e(setting('language')=='en'?'selected':''); ?>><?php echo e(__('English')); ?></option>
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


        </div>
    </div>


        

            
                
            
        
        <div class="field mb-5 mt-5">
            <label class=" font-extrabold leading-8 tracking-tight  sm:leading-9"
                   for="logo"><?php echo e(__('Add Image')); ?></label>
            <div class="mt-1">

                <label for="logo" class="btn">
<span>

    <i data-feather="image" class="ml-1"></i>
    <?php echo e(__('Upload image')); ?>

</span>
                    <input class="hidden"  id="logo" name="logo" type="file"/>
                </label>





            </div>
        </div>
    <button  class="btn mt-8"><?php echo e(__('Edit')); ?></button>
     <?php if (isset($__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb)): ?>
<?php $component = $__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb; ?>
<?php unset($__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>




<?php /**PATH C:\xampp\htdocs\laundry\resources\views/settings/partials/general.blade.php ENDPATH**/ ?>