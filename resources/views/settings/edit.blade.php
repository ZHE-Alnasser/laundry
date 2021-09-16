<x-layouts.admin>
        <x-form action="{{url('settings')}}" :crudButton="false" method="post">
            <x-tabs :active="__('Information')">
                @include('settings.partials.company-info')
            </x-tabs>
           <div class="mx-5"><button class="btn mt-8">{{__('Edit')}}</button></div>

            {{--@include('app_settings::_settings')--}}
        </x-form>
</x-layouts.admin>