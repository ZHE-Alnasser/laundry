<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.base','data' => []]); ?>
<?php $component->withName('layouts.base'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <section class="flex flex-col md:flex-row h-screen items-center">

        <div class="bg-blue-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">

            <img src="/img/laundry.png"
                 alt="" class="w-full h-full object-cover">
        </div>

        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

            <div class="w-full  h-100">

                <img src="<?php echo e(asset('/img/favicon/apple-icon-180x180.png')); ?>" alt="<?php echo e(__('logo')); ?>" class="mx-auto mt-8 w-32">

                <h1 class="text-2xl md:text-2xl font-bold leading-tight mt-8"><?php echo e(__('Log in to your account')); ?></h1>

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
                <form class="mt-6" action="<?php echo e(route('login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div>
                        <label class="block text-gray-700"><?php echo e(__('Email')); ?></label>
                        <input type="email" name="email" id="" placeholder="<?php echo e(__('Enter Email Address')); ?>"
                               class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                               autofocus autocomplete required>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700"><?php echo e(__('Password')); ?></label>
                        <input type="password" name="password" id="" placeholder="<?php echo e(__('Enter Password')); ?>"
                               minlength="6"
                               class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
                    </div>

                    <?php if(Route::has('password.request')): ?>
                        <div class="text-right mt-2">
                            <a href="<?php echo e(route('password.request')); ?>"
                               class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700"> <?php echo e(__('Forgot your password?')); ?>

                                -</a>
                        </div>
                    <?php endif; ?>

                    <button type="submit" class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">  <?php echo e(__('Login')); ?></button>
                </form>

                <hr class="my-6 border-gray-300 w-full">

                <p class="text-sm text-gray-500 mt-12">&copy; <?php echo e(date('Y')); ?> <?php echo e(env('app_name')); ?> - <?php echo e(__('All Rights Reserved.')); ?></p>
            </div>
        </div>

    </section>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/auth/login.blade.php ENDPATH**/ ?>