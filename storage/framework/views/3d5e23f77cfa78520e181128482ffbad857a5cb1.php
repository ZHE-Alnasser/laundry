<div class="card">

        
        <div class=" m-5 flex-1">
            <h2 class="text-gray-800 font-bold"><?php echo e(__('Most Requested Services')); ?></h2>
            <hr class="my-5">
            
                <table class=" text-gray-600 w-full using-font col-11 mx-2">
                    <thead class="bg-gray-100">
                    <th class="py-3"><?php echo app('translator')->get('Service Name'); ?></th>
                    <th class="py-3"><?php echo app('translator')->get('Number of Orders'); ?></th>

                    </thead>


                    


                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class=" border-b">
                            <td class="text-center py-3"><span><?php echo e($service->name); ?></span></td>


                            



                            <td class="text-center py-3"> <span><?php echo e($service->orders_count); ?></span></td>

                        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            <td></td>
                            <td></td>



                    

                </table>
            </div>
        

        

</div><?php /**PATH C:\xampp\htdocs\laundry\resources\views/dashboard/top-items.blade.php ENDPATH**/ ?>