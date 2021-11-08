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
    <div class="w-full">
        <div class="mt-8 p-4">
            <div>
                <?php if (isset($component)) { $__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Form::class, ['action' => ''.e(route('items.update',['item'=>$item->id])).' ','method' => 'PUT']); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <?php echo csrf_field(); ?>

                    <div class="flex flex-col md:flex-row">
                        <div class="w-full flex-1">
                            <label><?php echo e(__('Item Name')); ?><span class="text-red-600"> *</span></label>
                            <div >
                                <?php if (isset($component)) { $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2 = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Inputs\Input::class, ['name' => 'name','value' => ''.e($item->name).'']); ?>
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
                        </div>
                    </div>

                        <div class="field text-right mx-10 mt-5">

                                <?php if($item->hasMedia('items') ): ?>
                                    <div class="object-cover mb-5 ">
                                        <?php $__currentLoopData = $item->getMedia('items'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="h-25 w-25">
                                                <?php echo e($attachment); ?>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>


                        </div>


                        
                            
                            
                                
                            
                        
                    
                        
                               
                        

                            

                                    

                                
                            
                        

                    <div class="field mb-5 mt-5">

                        
                               
                        

                            
                                    

                                
                            
                        
                        <label for="file-upload" class="btn">
<span>
<i data-feather="image" class="ml-1"></i>
    <?php echo e(__('Upload image')); ?>

</span>
                            <input class="hidden" id="file-upload"  name="image" type="file"/>
                        </label>

                    </div>
                        <div class="mt-5"> <h1><?php echo e(__('Update Services')); ?></h1></div>
<?php echo $__env->make('items.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="flex p-2 mt-8 sm:mx-10">
                        <button type="Submit" class="btn ml-2"><?php echo e(__('Save')); ?></button>
                        <input type="button" class="mx-2 btn-cancel"
                               name="cancel" value="<?php echo e(__('Cancel')); ?>" onClick="window.location.replace('/items/manage')"/>
                    </div>
                    </div>
                 <?php if (isset($__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb)): ?>
<?php $component = $__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb; ?>
<?php unset($__componentOriginal6396012a6cef5c19b3389606f3cd6f8d35a08cbb); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

            </div>
        </div>
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
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/items/edit.blade.php ENDPATH**/ ?>