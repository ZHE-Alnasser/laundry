<x-layouts.app>



    <x-card>
        {{--<x-feedback/>--}}

        <x-tabs :active="__('Edit')">


            <x-tab :name="__('Edit')">
        <div class="w-full">
            <div class="mt-8 p-4">
                <div>
                    <x-form action="{{ route('orders.update',['order'=>$order->id]) }} " method="PUT">
                        @csrf
                        @include('orders._fields')

                        @include('orders.services.pos')

                        <div class="flex p-2 mt-8">
                            <button type="Submit" class="btn ml-2">{{__('Save')}}</button>
                            <input type="button" class="btn-cancel"
                                   name="cancel" value="{{__('Cancel')}}"
                                   onClick="window.location.replace('/orders/manage')"/>
                        </div>
                        {{--</div>--}}

                    </x-form>


                </div>
            </div>
        </div>
            </x-tab>
            <x-tab :name="__('Activities')">
                <x-activity :activities="$order->activities"/>

            </x-tab>
        </x-tabs>
    </x-card>
</x-layouts.app>
