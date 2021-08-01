<x-layouts.app>
    <x-card>
        <x-form action="{{url('settings')}}" :crudButton="false" method="post">
            <x-tabs :active="__('Information')">
                @include('settings.partials.company-info')
            </x-tabs>
            <button>{{__('Edit')}}</button>
        </x-form>
    </x-card>
</x-layouts.app>