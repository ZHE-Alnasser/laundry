<x-layouts.app>
    <x-card>
        {{--<x-feedback/>--}}
        <h1 class="px-6">{{__('Create').' '.__('Branches')}}</h1>

        <div class="w-full  mt-6 px-6 py-4 overflow-hidden ">
            <x-form action="{{url('branches')}}" method="post" has-files>
                @csrf
                <label>{{__('Name')}}<span class="text-red-600" > *</span></label>
                <x-input required class="input" name="name" value="{{ old('name') }}"/>

                <div class="mt-5">
                <label>{{__('Branch Address')}}<span class="text-red-600" > *</span></label>
                <x-input required class="input" name="address" value="{{ old('address') }}"/>

                </div>
                <div class="mt-5">
                <label>{{__('Phone')}}<span class="text-red-600" > *</span></label>
                <x-input required class="input" type="number" name="phone" value="{{ old('phone') }}"/>
                </div>
                <div class="mt-5">
                <label>{{__('VAT Number')}}<span class="text-red-600" > *</span></label>
                <x-input required class="input" type="number" name="vat_number" value="{{ old('vat_number') }}"/>
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


