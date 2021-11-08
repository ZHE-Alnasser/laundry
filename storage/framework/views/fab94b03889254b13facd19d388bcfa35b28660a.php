<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="_token" content="<?php echo csrf_token(); ?>">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body dir="<?php echo e(isRTL()?'rtl':'ltr'); ?>"  data-theme="light"
      class="min-h-screen bg-base-200" id="wrapper">


<?php echo $__env->yieldContent('header'); ?>

<?php echo $__env->yieldContent('sidebar'); ?>

<?php echo $__env->yieldContent('content'); ?>
<?php echo e($slot??''); ?>










</body>

</html>
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/components/layouts/base.blade.php ENDPATH**/ ?>