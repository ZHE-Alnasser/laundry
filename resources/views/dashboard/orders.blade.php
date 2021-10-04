<div class ="card">
    <div class=" m-5 flex-1">
    <h2 class="text-gray-800 font-bold">{{__('Latest 10 Orders')}}</h2>
        <hr class="my-5">
    <div>
        <div id="chart" style="min-height: 237.981px;">
            <apexchart  type="line" width="380" hight="100" :options="chartOptions" :series="series"></apexchart> </div>
    </div>
    </div>
</div>

<x-chart>
    <script>

                @php
                    $resultArr = $latestOrders->pluck('total' )->toArray();
               $resultStr = implode(", ", $resultArr);
                @endphp
                @php
                    $Arr = $orders->pluck('created_at' )->toArray();



                @endphp

        var options = {
                chart: {
                    type: 'area',
                    height: 250
                },
                series: [{
                    name: 'orders',
                    data:  [{{$resultStr}}]
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
</x-chart>