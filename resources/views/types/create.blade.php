<x-layouts.admin>
    <x-feedback/>
    <h1 class="px-6">{{__('Create').' '.__('Types')}}</h1>

    <div class=" mt-6 px-6 py-4 overflow-hidden">
        <x-form action="{{url('types')}}" method="post" has-files>
            @csrf
            <label>{{__('Type Name')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="name" value="{{ old('name') }}"/>


            <div class="flex mt-8">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/types/manage')"/>
            </div>
        </x-form>
    </div>
</x-layouts.admin>


