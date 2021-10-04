<x-layouts.app>
    <x-card>
    <x-feedback/>
    <h1>{{__('Create').' '.__('Cities')}}</h1>

    <div class=" mt-6 px-6 py-4 overflow-hidden">
        <x-form action="{{url('cities')}}" method="post" has-files>
            @csrf
            <label>{{__('City Name')}}<span class="text-red-600"> *</span></label>
            <x-input required  class="input" name="name" value="{{ old('name') }}"/>


            <div class="flex mt-8">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/cities/manage')"/>
            </div>
        </x-form>
    </div>
    </x-card>
</x-layouts.app>


