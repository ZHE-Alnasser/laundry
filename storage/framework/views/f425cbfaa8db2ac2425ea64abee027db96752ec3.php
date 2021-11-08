<nav   id="nav-content" class="mt-2  sm:mx-0 menu" id="example-collapse-navbar">
    <img src="<?php echo e(asset('/img/favicon/android-icon-192x192.png')); ?>" alt="<?php echo e(__('logo')); ?>" class=" mx-auto w-32">

  <label class="side-items"><i data-feather="git-branch" class="ml-1"></i><?php echo e(__('Select Branch')); ?>:</label>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('branches-list')->html();
} elseif ($_instance->childHasBeenRendered('47fvCjs')) {
    $componentId = $_instance->getRenderedChildComponentId('47fvCjs');
    $componentTag = $_instance->getRenderedChildComponentTagName('47fvCjs');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('47fvCjs');
} else {
    $response = \Livewire\Livewire::mount('branches-list');
    $html = $response->html();
    $_instance->logRenderedChild('47fvCjs', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <a class="side-items<?php echo e(active('dashboard')); ?>"  href="/dashboard"><i data-feather="home" class="ml-1"></i><span class="side-text"><?php echo e(__("Dashboard")); ?></span></a>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['Update-Orders','Create-Orders','Delete-Orders'])): ?>
        <a class="side-items<?php echo e(active('orders')); ?>" href="/orders/manage"><i data-feather="shopping-cart" class="ml-1"></i><span class="side-text"><?php echo e(__("Orders")); ?></span></a>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['Update-Users','Create-Users','Delete-Users'])): ?>
        <a class="side-items<?php echo e(active('users')); ?>" href="/users/manage">


            <i data-feather="users" class="ml-1"></i> <span class="side-text"><?php echo e(__('Users')); ?></span></a>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['Update-Items','Create-Items','Delete-Items'])): ?>
        <a class="side-items<?php echo e(active('items')); ?>" <?php echo e((Request::is('item') || request()->is('items')) ? 'primary-color-bg text-white' : ''); ?> href="/items/manage"><i data-feather="shopping-bag" class="ml-1"></i><span class="side-text"><?php echo e(__("Items")); ?></span></a>
    <?php endif; ?>


    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['Update-Districts','Create-Districts','Delete-Districts'])): ?>
        <a class="side-items<?php echo e(active('districts')); ?>" href="/districts/manage"><i data-feather="map-pin" class="ml-1"></i><span class="side-text"><?php echo e(__("Delivery Map")); ?></span></a>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['Update-Expenses','Create-Expenses','Delete-Expenses'])): ?>
        <a class="side-items<?php echo e(active('expenses')); ?>" href="/expenses/manage">
            <i data-feather="dollar-sign" class="ml-1"></i>

            <span class="side-text"><?php echo e(__("Expenses")); ?></span></a>
    <?php endif; ?>


    
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['Update-Settings','Create-Settings','Delete-Settings'])): ?>
        <a class="side-items<?php echo e(active('settings')); ?>" href="/settings"><i data-feather="settings" class="ml-1"></i><span class="side-text"><?php echo e(__("Settings")); ?></span></a>
    <?php endif; ?>
    <?php if(auth()->guard()->guest()): ?>
        <?php if(Route::has('login')): ?>
            <li class="nav-item">
                <a class="links"
                   href="<?php echo e(route('login')); ?>">
                    <span class="ml-2"><?php echo e(__('Login')); ?></span>
                </a>
            </li>
        <?php endif; ?>

        <?php if(Route::has('register')): ?>
            <li class="nav-item ">
                <a class="links"
                   href="<?php echo e(route('register')); ?>">
                    <span class="ml-2"><?php echo e(__('Register')); ?></span>
                </a>
            </li>
        <?php endif; ?>
    <?php else: ?>


        
        
        
        
        
        

        <a class="side-items"
           href="<?php echo e(route('logout')); ?>"
           onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
            <i data-feather="log-out" class="ml-1"></i>
            <span class="side-text"><?php echo e(__('Logout')); ?></span>
        </a>


        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
        </form>
    <?php endif; ?>


</nav><?php /**PATH C:\xampp\htdocs\laundry\resources\views/components/layouts/_menu.blade.php ENDPATH**/ ?>