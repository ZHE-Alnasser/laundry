


    <div id="sidebar" class="">
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full "  >

        <div class="bg-white pb-3  ">

            <div class="hidden md:flex">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts._menu','data' => []]); ?>
<?php $component->withName('layouts._menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


            </div>

<div class="md:hidden " x-data="{show: false}" @click.away="show = false" x-cloak

      >
    <div class="flex mx-5 justify-between"
        >
    <img  src="<?php echo e(asset('/img/favicon/android-icon-192x192.png')); ?>" alt="<?php echo e(__('logo')); ?>" class="mx-3 mt-2 w-20">


<div class="fixed inset-0 z-20"

            x-show="show"
            class="fixed left-0 top-0 p-6"

    >
    <div
            @click.away="show=false"
            class="bg-white bottom-0 fixed right-0 top-0 z-10 pt-4 pb-4 w-4/6 overflow-y-auto"
    >
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts._menu','data' => []]); ?>
<?php $component->withName('layouts._menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>


    </div>
        <button    @click="show = ! show"
                   class="flex-row text-gray-500 cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent
        rounded bg-transparent block md:hidden outline-none focus:outline-none mr-2"
                 type="button" >
            <svg

                    xmlns="http://www.w3.org/2000/svg"
                    class="w-8 fill-current h-8"
                    style="color:#258ae0"
                    viewBox="0 0 32 32"
            >
                <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/>
            </svg>

            
                    
                    
                    
                    
                    
            
                
                        
            
        </button>
    </div>

</div>


</div>

        </div>
    </div>

    
        
    

    
        
        
    

    
        
            
        
    
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/components/layouts/_sidebar.blade.php ENDPATH**/ ?>