<?php if(count($errors)): ?>
    <div class="bg-red-100 border-r-4 border-red-500 p-4 my-3" role="alert">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="text-red-700"> - <?php echo e(__($error)); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<?php if(session('info')): ?>
    <div class="bg-blue-100 border-r-4 border-blue-500 p-4 my-3" role="alert">
        <p class="text-blue-700"><?php echo e(session('info')); ?></p>
    </div>
<?php endif; ?>

<?php if(session('message') ): ?>
    <div class="bg-blue-100 border-r-4 border-blue-500 p-4 my-3" role="alert">
        <p class="text-blue-700"><?php echo e(session('message')); ?></p>
    </div>
<?php endif; ?>

<?php if(session('success')): ?>
    <div class="bg-green-100 border-r-4 border-green-500 p-4 my-3" role="alert">
        <p class="text-green-700"><?php echo e(session('success')); ?></p>
    </div>
<?php endif; ?>
<?php if(session('danger')): ?>
    <div class="bg-red-100 border-r-4 border-red-500 p-4 my-3" role="alert">
        <p class="text-red-700"><?php echo e(session('danger')); ?></p>
    </div>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\laundry\resources\views/components/feedback.blade.php ENDPATH**/ ?>