<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.print','data' => []]); ?>
<?php $component->withName('layouts.print'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <div class="bg-white mx-4">

        <div class="flex flex-col justify-between">
            <div class="text-right">
                <div class="field text-right mx-10 mt-5">
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    


                </div>
   <?php dd(asset(setting('logo'))); ?>
                <img class="img-fluid d-block mx-auto" src="<?php echo e(asset(setting('logo'))); ?>" alt="<?php echo e(__('Company Logo')); ?>">
                <p><?php echo e(setting('company_name')); ?></p>
                   <div class="flex">

                   <p><?php echo e(__('Branch Name')); ?>: <?php echo e(optional($order->branch)->name); ?></p>

                   </div>




                <p><?php echo e(__('Address')); ?>: <?php echo e($order->branch->address); ?></p>
            
                <p><?php echo e(__('VAT Number').__(':')); ?><?php echo e($order->branch->vat_number); ?></p>
            </div>
            <div class="flex flex-col ">
                <hr class="my-4">
                <div><p><?php echo app('translator')->get('Order Id'); ?>: <b><?php echo e(sprintf('%04d',$order->id)); ?></b></p>


                    <div><p><?php echo app('translator')->get('Accountant'); ?>: <b><?php echo e(optional($order->employee)->name); ?></b></p></div>

                    <div></div>

                    <div><p><?php echo app('translator')->get('Customer Name'); ?>: <b><?php echo e(optional($order->customer)->name); ?></b></p></div>



                </div>

                <div>
                    <p><?php echo app('translator')->get('Date'); ?>: <b><?php echo e($order->created_at); ?></b></p>
                </div>

            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        


        
        


        <hr class=" my-5">
        <div class="">
            <table class="table table-auto table-bordered table-condensed using-font mx-2">
                <thead class="text-center bg-light">
                <th><?php echo app('translator')->get('Services'); ?></th>
                <th><?php echo app('translator')->get('Quantity'); ?></th>
                <th><?php echo app('translator')->get('Amount'); ?></th>

                </thead>
                
                
                
                
                
                
                

                
                <?php $__currentLoopData = $order->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        
                        
                        <td><?php echo e($item->name); ?> </td>
                        <td><?php echo e($item->pivot->quantity); ?></td>
                        <td> <?php echo e($item->pivot->price); ?></td>
                    </tr>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>

<div class="flex flex-col">
                
                

                
                <div>
                    <p class="bg-light"><?php echo app('translator')->get('Total amount without VAT'); ?>: <?php echo e($order->sub_total.' '.currency()); ?></p>
                </div>
                <div>
                    <p class="bg-light"><?php echo app('translator')->get('Total VAT'); ?>: (<?php echo e(setting('vat_rate')); ?>%)

                   <?php echo e($order->vat.' '.currency()); ?></p>
                </div>

                <div>
                    <p class="bg-light"><?php echo app('translator')->get('Total amount with VAT'); ?>:
                   <?php echo e($order->total.' '.currency()); ?></p>
                </div>

</div>
            <div class="my-5 mx-4">


                <?php echo e(QrCode::encoding('UTF-8')->generate(
 json_encode(
    [
        'seller_name'=>setting('company_name'),
        'vat_number'=>$order->branch->vat_number,
        'timestamp'=>$order->created_at,
        'total_amount'=>$order->total,
        'vat_amount'=>$order->vat
    ],JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE
)
)); ?>


                
            </div>
            <p class="my-3 mx-4"><?php echo app('translator')->get('Thank you ..'); ?></p>
        </div>
    </div>


 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/orders/reports/invoice.blade.php ENDPATH**/ ?>