<x-layouts.app>
    <x-card>
    <h1 class="px-6">{{__('Create').' '.__('Time Frames')}}</h1>

    <div class="mt-6 px-6 py-4 overflow-hidden ">
        <x-form action="{{url('timeframes')}}" method="post" has-files>
            @csrf
            <label>{{__('Time Frame Name')}}<span class="text-red-600"> *</span></label>
            <x-input required  class="input" name="name" value="{{ old('name') }}"/>

<div class="mt-5">
            <label>{{__('Description')}}<span class="text-red-600"> *</span></label>
            <x-input required class="input" name="description" type="text" value="{{ old('description') }}" />
</div>


            <div class="flex mt-8">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/settings')"/>
            </div>
        </x-form>
    </div>
    </x-card>
</x-layouts.app>


