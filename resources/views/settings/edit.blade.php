<x-layouts.app>
    <x-card>
        <x-form action="{{url('settings')}}" :crudButton="false" method="post">

            <x-tabs :active="__('Information')">
            @include('settings.partials.company-info')
            @include('settings.partials.time-frame')
            @include('settings.partials.general')
            </x-tabs>
         <button type="submit" class="btn mt-8">{{__('Edit')}}</button>
        </x-form>
    </x-card>
</x-layouts.app>