<div class ="card">
    <div class=" m-5 flex-1">
    <h2 class="text-gray-800 font-bold"><?php echo e(__('Latest 10 Orders')); ?></h2>
        <hr class="my-5">
    <div>
        <div id="chart" style="min-height: 237.981px;">
            <apexchart  type="line" width="380" hight="100" :options="chartOptions" :series="series"></apexchart> </div>
    </div>
    </div>
</div>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.chart','data' => []]); ?>
<?php $component->withName('chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <script>

                <?php
                    $resultArr = $latestOrders->pluck('total' )->toArray();
               $resultStr = implode(", ", $resultArr);
                ?>
                <?php
                    $Arr = $orders->pluck('created_at' )->toArray();



                ?>

        var options = {
                chart: {
                    type: 'area',
                    height: 250
                },
                series: [{
                    name: 'orders',
                    data:  [<?php echo e($resultStr); ?>]
                }],
                xaxis: {
                    categories: [1,2,3,4,5,6,7,8,9,10]
                },
                    stroke: {
                        curve: 'straight',
                    }
            }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
    </script>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laundry\resources\views/dashboard/orders.blade.php ENDPATH**/ ?>