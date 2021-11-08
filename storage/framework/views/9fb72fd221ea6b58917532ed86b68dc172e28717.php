<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(app()->getLocale()=='ar'?'rtl':'ltr'); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="<?php echo e($description??''); ?>">
    <meta name="author" content="<?php echo e($author??__('Laundry')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($title??__('Laundry')); ?></title>
    <meta name="keyword" content="<?php echo e($keywords??''); ?>">
    <?php echo $__env->yieldPushContent('before_styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

    <style>

    </style>
    <?php echo $__env->yieldPushContent('after_styles'); ?>
</head>
<body>
<button class="btn  btn-info d-print-none pb-2 my-5 print:invisible" onclick="myFunction()"><?php echo app('translator')->get('Print'); ?></button>

<script>
    function myFunction() {
        window.print();
    }
</script>
<div class="fluid-container">

    <?php echo $__env->yieldContent('content'); ?>
    <?php echo e($slot??''); ?>

</div>

<?php echo $__env->yieldPushContent('before_scripts'); ?>

<?php echo $__env->yieldPushContent('after_scripts'); ?>
</body>
</html>




<?php /**PATH C:\xampp\htdocs\laundry\resources\views/components/layouts/print.blade.php ENDPATH**/ ?>