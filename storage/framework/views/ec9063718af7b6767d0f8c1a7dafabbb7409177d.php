<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.app','data' => []]); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

        <div class="w-full  mx-auto flex flex-grow items-center justify-between mt-0 ">
            
            
            
            
            
            
            
            
            <div class="flex justify-between items-center lg:ml-0 ml-3">
                <a href="/home" class="font-bold text-xl text-indigo-600">
                </a>
                <div class="lg:visible invisible flex">
                    <h2 class=" px-5 text-center text-3xl"><?php echo e(__('Welcome')); ?></h2>
                    <p class="mt-2"><?php echo e($name); ?></p>

                </div>
            </div>



        </div>
        <div class="flex mt-5 mx-5">
          <div>  <button class="btn my-2 " onClick="window.location.replace('/orders/create')"><i data-feather="shopping-cart" class="ml-1"></i><span class="hidden sm:flex"><?php echo e(__('New Order')); ?></span></button></div>
            <div> <button class="btn my-2 mx-2" onClick="window.location.replace('/users/create')"><i data-feather="user-plus" class="ml-1"></i><span class="hidden sm:flex"><?php echo e(__('Add User')); ?></span></button></div>
            <div> <button class="btn my-2 " onClick="window.location.replace('/items/create')"><i data-feather="file-plus" class="ml-1"></i><span class="hidden sm:flex"><?php echo e(__('Add Item')); ?></span></button></div>

        </div>


        <div class="sm:flex overflow-x-auto  mt-5">
            

            <div class=" mx-5 card w-full">
                <div class="flex">
            <div class="mx-auto cart mb-3">
            <div class="bg-card-1">
                <h2 class="mx-1  mb-2"><?php echo e(__('Total Customers')); ?></h2>
                <div class="flex mb-2 justify-center text-center">
                <span class="text-2xl mx-2" ><?php echo e($todayCustomers); ?></span>
                    <i data-feather="users" class="mb-2 ml-1"></i>
                    
                </div>
                <div class="mx-10 card-text"> <h3 ><?php echo e(__('Today')); ?></h3></div>
            </div></div>
         <div class="mx-auto cart mb-3">
             <div class=" bg-card-2">
                 <h2 class="mx-1  mb-2"><?php echo e(__('Total Orders')); ?></h2>
                 <div class="mb-2  text-center">
                 <span class="text-2xl"><?php echo e($today); ?></span>
                     <i data-feather="dollar-sign" class=" mb-2 ml-1"></i>
                 </div>
                 <div class="mx-10 card-text"><h3 ><?php echo e(__('Today')); ?></h3></div>

             </div>
         </div>
         <div class="mx-auto cart mb-3">
             <div class=" bg-card-3">
                 
                 <div class="mb-2 mt-8 pt-2 text-center">
                 <span class="text-2xl"><?php echo e($thisMonth); ?></span>
                     <i data-feather="dollar-sign" class="mb-2 ml-1"></i>
                 </div>
                     <div class="mx-10 card-text"><h3><?php echo e(__('This Month')); ?></h3></div>

             </div>
         </div>  <div class="cart mx-auto mb-3">
             <div class= "bg-card-4">

                 
                 <div class="mb-2 mt-8 pt-2 text-center">
                     
                 <span class="text-2xl"><?php echo e($thisYear); ?></span>
                     <i data-feather="dollar-sign" class="mb-2 ml-1"></i>

                 </div>
                     <div class="mx-10 card-text"><h3><?php echo e(__('This Year')); ?></h3></div>
             </div>
             </div></div></div>
        </div>


            <div class="m-5 sm:flex-1"><?php echo $__env->make('dashboard.orders', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>

 <div class="sm:flex">

     <div class=" sm:w-1/3 m-5 sm:flex-1"><?php echo $__env->make('dashboard.top-customers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
    <div class="sm:w-1/3 m-5 sm:flex-1"><?php echo $__env->make('dashboard.top-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>




<?php /**PATH C:\xampp\htdocs\laundry\resources\views//dashboard.blade.php ENDPATH**/ ?>