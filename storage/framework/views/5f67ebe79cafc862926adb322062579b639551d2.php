<footer>
    <div class="flex justify-center mb-3 mt-3">
        &copy; <a class="flex items-end lg:mt-0 mt-1 mr-1 ml-1" href="<?php echo e(url('/')); ?>"
                  title="<?php echo e(config('app.name')); ?>"><?php echo e(config('app.name')); ?></a><?php echo e(date('Y')); ?>.
    </div>
</footer>

<?php echo \Livewire\Livewire::scripts(); ?>

<script src="https://unpkg.com/feather-icons"></script>
<script src="<?php echo e(mix('js/app.js')); ?>"></script>

<?php echo $__env->yieldPushContent('scripts'); ?>
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/components/layouts/_footer.blade.php ENDPATH**/ ?>