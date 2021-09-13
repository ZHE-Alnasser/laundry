<x-layouts.admin>
    <x-feedback/>
    <h1>{{__('Create').' '.__('Time Frames')}}</h1>

    <div class="mt-6 px-6 py-4 overflow-hidden ">
        <x-form action="{{url('timeframes')}}" method="post" has-files>
            @csrf
            <label>{{__('Time Frame Name')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="name" value="{{ old('name') }}"/>


            <label>{{__('Description')}}</label>
            <x-input class="input" name="description" type="text" value="{{ old('description') }}" />



            <div class="flex mt-3">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/timeframes/manage')"/>
            </div>
        </x-form>
    </div>
</x-layouts.admin>


