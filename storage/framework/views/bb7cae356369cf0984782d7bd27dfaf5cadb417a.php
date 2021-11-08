<div class="card">

    
    <div class=" m-5 flex-1">
        <h2 class="text-gray-800 font-bold"><?php echo e(__('Most Purchased Customers')); ?></h2>
        <hr class="my-5">
        
        <table class=" text-gray-600 w-full using-font col-11 mx-2">
            <thead class="bg-gray-100">
            <th class="py-3"><?php echo app('translator')->get('Customer Name'); ?></th>
            <th class="py-3"><?php echo app('translator')->get('Number of Orders'); ?></th>

            </thead>


            


            
            <?php $__currentLoopData = $topCustomers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr class=" border-b">
                    <td class="text-center py-3"><span>
                            <?php echo e($user->name); ?></span></td>

                    <td class="text-center py-3"> <?php echo e($user->customer_orders_count); ?></td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <td></td>
            <td></td>



            

        </table>
    </div>
    

    

</div><?php /**PATH C:\xampp\htdocs\laundry\resources\views/dashboard/top-customers.blade.php ENDPATH**/ ?>