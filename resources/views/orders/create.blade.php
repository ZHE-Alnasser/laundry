<x-layouts.app>
    <x-card x-data="{isPickedUp:{{old('is_pickup',$order->is_pickup)?'true':'false'}}}">
        <div class="flex items-center">
            <h1 class="px-6 w-full">{{__('Create').' '.__('Order')}}</h1>




        @if(isRTL())
            <style>
                .steps {
                    direction: rtl
                }

                .steps .step:before {
                    margin-right: -100%;
                    margin-left: 0;
                }
            </style>
        @endif
        <ul class="w-full steps text-primary">
            <li data-content="!" :class="!isPickedUp? '':'step-info' " class="step">{{__('Waiting for Pickup')}}</li>
            <li data-content="֍" :class="isPickedUp? 'step-info':'' " class="step">{{__('Picked Up & In Progress')}}</li>
            <li data-content="✓" class="step step-info">{{__('Ready for delivery')}}</li>
            <li data-content="●" class="step step-info">{{__('deliver')}}</li>
        </ul>
        </div>

        <div class="divider"></div>

        <div class="w-full  mt-6 px-6 py-4 bg-white  overflow-hidden sm:rounded-lg">
            <x-feedback/>

            <x-form action="{{url('orders')}}" method="post" has-files>
            @csrf
            @include('orders._fields')
            @include('orders.services.create')

        {{--</div>--}}
        <div class="flex mt-8">
            <button type='submit' class="btn ml-3">{{__('Create')}}</button>

            <input type="button" class="btn-cancel"
                   name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/services/manage')"/>
        </div>


        </x-form>
        </div>
    </x-card>
</x-layouts.app>

