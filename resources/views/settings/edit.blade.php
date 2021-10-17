<x-layouts.app>
    <x-card>

            <x-tabs :active="__('General')">
                @include('settings.partials.general')
                {{--</x-form>--}}
            @include('settings.partials.time-frame')
            @include('settings.partials.branches')

            </x-tabs>
            {{--<button  class="btn mt-8">{{__('Edit')}}</button>--}}

    </x-card>
</x-layouts.app>