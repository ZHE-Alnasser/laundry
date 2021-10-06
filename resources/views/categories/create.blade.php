<x-layouts.app>
    {{--<x-feedback/>--}}
    <x-card>
    <h1 class="px-6">{{__('Create').' '.__('Categories')}}</h1>

    <div class=" mt-6 px-6 py-4 overflow-hidden">
        <x-form action="{{url('categories')}}" method="post" has-files>
            @csrf
            <label>{{__('Category Name')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="name" value="{{ old('name') }}"/>


            <div class="flex mt-8">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/categories/manage')"/>
            </div>
        </x-form>
    </div>
    </x-card>
</x-layouts.app>


