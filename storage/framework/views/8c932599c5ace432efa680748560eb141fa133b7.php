<div class="sm:flex">
    <div class="mx-2 sm:flex-col sm:w-1/2">
        <label><?php echo e(__('Employee Name')); ?><span class="text-red-600"> *</span></label>

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select','data' => ['required' => true,'class' => 'select  ','name' => 'employee_id','id' => 'employees']]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['required' => true,'class' => 'select  ','name' => 'employee_id','id' => 'employees']); ?>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                

                <option value="<?php echo e($employee->id); ?>"
                        <?php if(!is_null($order->employee_id) && $order->employee_id == $employee->id): ?>
                        selected
                        <?php elseif( is_null($order->employee_id) && $employee->email == auth()->user()->email): ?> selected
                        <?php endif; ?>
                ><?php echo e($employee->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>


    <div class="mx-2 sm:mr-6 mt-5 sm:mt-0  sm:flex-col sm:w-1/2">
        <label><?php echo e(__('Customer Name')); ?><span class="text-red-600"> *</span></label>

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select','data' => ['required' => true,'class' => 'select  ','name' => 'customer_id','id' => 'customers']]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['required' => true,'class' => 'select  ','name' => 'customer_id','id' => 'customers']); ?>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                

                <option <?php echo e($order->customer_id==$customer->id?'selected':''); ?> value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>

</div>


<div class="flex items-center mt-5">
    <div class="flex flex-col" x-cloak x-data="{isPickedUp:<?php echo e(old('is_pickup',$order->is_pickup)?'true':'false'); ?> }">
        <div class="mx-2 flex">
            <input name="is_pickup" type="hidden" value="0">
            <input @click="isPickedUp =!isPickedUp" type="checkbox" class="checkbox checkbox-primary" id="is_pickup" name="is_pickup"
                   value="1"<?php echo e((isset($order) && $order->is_pickup) || old('is_pickup', 0) === 1 ? 'checked' : ''); ?> >
            <p class="flex-1 text-s mx-2 font-medium text-gray-600 "> <?php echo e(__('Needs Pickup?')); ?></p>
        </div>

        <div x-show="isPickedUp" x-transition>
            <div class="flex mx-2 mt-5 ">
                <div class="w-full">
                    <p><?php echo e(__('Pickup Frame')); ?> :<span class="text-red-600"> *</span></p>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select','data' => ['class' => 'select  ','name' => 'pickup_time_frame_id','id' => 'pickup_time_frame_id']]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'select  ','name' => 'pickup_time_frame_id','id' => 'pickup_time_frame_id']); ?>
                        <?php $__currentLoopData = $timeframes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            

                            <option  <?php echo e($order->pickup_time_frame_id==$time->id?'selected':''); ?> value="<?php echo e($time->id); ?>"><?php echo e($time->name); ?> <?php echo e($time->description); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>

                <div class="mx-2 flex-col w-full">

                    <label><?php echo e(__('Request Pickup Date')); ?></label>

                    
                    <?php if (isset($component)) { $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2 = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Inputs\Input::class, ['value' => ''.e($order->requested_pickup_date).'','name' => 'requested_pickup_date','type' => 'text']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['x-init' => '$nextTick(() => {new flatpickr($el,{dateFormat: \'Y-m-d\'})})','class' => 'date-range input']); ?>
<?php if (isset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2)): ?>
<?php $component = $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2; ?>
<?php unset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                </div>
            </div>
            <div class=" sm:flex w-full mt-5">


                <div class="mx-2 flex-col w-full">

                    <label><?php echo e(__('Agent Pickup Date')); ?></label>
                    <div class="divUser">
                        <?php if (isset($component)) { $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2 = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Inputs\Input::class, ['value' => ''.e($order->agent_picked_up_date).'','name' => 'agent_picked_up_date','type' => 'text']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['x-init' => '$nextTick(() => {new flatpickr($el,{dateFormat: \'Y-m-d\'})})','class' => 'input']); ?>
<?php if (isset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2)): ?>
<?php $component = $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2; ?>
<?php unset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div class="divider divider-vertical opacity-50"></div>

    <div class="flex flex-col" x-cloak x-data="{isDelivery:<?php echo e(old('is_delivery',$order->is_delivery)?'true':'false'); ?> }">
        <div class="mx-2 flex">
            <input name="is_delivery" type="hidden" value="0">
            <input

                    type="checkbox"  @click="isDelivery =!isDelivery" class="checkbox checkbox-primary" id="is_delivery" name="is_delivery"
                    value="1"<?php echo e((isset($order) && $order->is_delivery) || old('is_delivery', 0) === 1 ? 'checked' : ''); ?>

            >
            <p class="flex-1 text-s mx-2 font-medium text-gray-600 "> <?php echo e(__('Delivery Order?')); ?></p>
        </div>
        <div x-show="isDelivery" x-transition>

            <div class="flex mx-2 mt-5">
                <div class="w-full">
                    <p><?php echo e(__('Delivery Frame')); ?> :<span class="text-red-600"> *</span></p>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select','data' => ['class' => 'select  ','name' => 'delivery_time_frame_id','id' => 'delivery_time_frame_id']]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'select  ','name' => 'delivery_time_frame_id','id' => 'delivery_time_frame_id']); ?>
                        <?php $__currentLoopData = $timeframes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            

                            <option <?php echo e($order->delivery_time_frame_id==$time->id?'selected':''); ?> value="<?php echo e($time->id); ?>"><?php echo e($time->name); ?> <?php echo e($time->description); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
                <div class="mx-2 flex-col w-full">

                    <label><?php echo e(__('Request Delivery Date')); ?></label>

                    
                    <?php if (isset($component)) { $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2 = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Inputs\Input::class, ['name' => 'requested_delivery_date','type' => 'text','value' => ''.e($order->requested_delivery_date).'']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['x-init' => '$nextTick(() => {new flatpickr($el,{dateFormat: \'Y-m-d\'})})','class' => 'date-range input']); ?>
<?php if (isset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2)): ?>
<?php $component = $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2; ?>
<?php unset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                </div>
            </div>

        </div>




        
        

        
        
        

        

        

        

        
        
        
        


        


    </div>
    <div class="divider divider-vertical opacity-50"></div>
    <div class="mx-2">

        <label><?php echo e(__('Delivered Date')); ?></label>
        <div class="divUser">
            <?php if (isset($component)) { $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2 = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUIKit\Components\Forms\Inputs\Input::class, ['name' => 'agent_delivered_date','type' => 'text','value' => ''.e($order->agent_delivered_date).'']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['x-init' => '$nextTick(() => {new flatpickr($el,{enableTime: true,
    dateFormat: \'Y-m-d H:i\',    altInput: true})})','class' => 'input']); ?>
<?php if (isset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2)): ?>
<?php $component = $__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2; ?>
<?php unset($__componentOriginalb51b1b30e62d8370abafefa0e19e7c1d6e111ab2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>
    </div>
</div>


<div class="flex">
<div class="mx-2 mt-3">
    <label><?php echo e(__('Payment Method')); ?>:<span class="text-red-600"> *</span></label>
    <div  class="mt-1 flex-col" name="payment_method">

            <label class="mb-1 inline-flex items-center">

        <input class="w-5 h-5 mx-1 radio radio-primary" type="radio" required name="payment" value="cash"<?php echo e($order->payment === 'cash' ? "checked" : ""); ?>/>
                <span class="label-text"><?php echo e(__('Cash')); ?></span>
            </label>
        <label class="inline-flex mb-1 items-center">

        <input class="w-5 h-5 mx-1 radio radio-primary" type="radio" name="payment" value="cash"<?php echo e($order->payment === 'card' ? "checked" : ""); ?>/>
                <span class="label-text"><?php echo e(__('Card')); ?></span>
            </label>
        <label class="inline-flex items-center">

        <input class="w-5 h-5 mx-1 radio radio-primary" type="radio" name="payment" value="transfer"<?php echo e($order->payment === 'transfer' ? "checked" : ""); ?>/>
                <span class="label-text"><?php echo e(__('Transfer')); ?></span>
            </label>

        </div>
</div>

    
        

        
            
                
            
        
    

</div>

<?php /**PATH C:\xampp\htdocs\laundry\resources\views/orders/_fields.blade.php ENDPATH**/ ?>