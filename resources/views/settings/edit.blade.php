<x-layouts.admin>
        <x-form action="{{url('settings')}}" :crudButton="false" method="post">
            <x-tabs :active="__('Information')">
                @include('settings.partials.company-info')
            </x-tabs>
            <button>{{__('submit')}}</button>

            {{--@include('app_settings::_settings')--}}
        </x-form>
</x-layouts.admin>