<x-layouts.app>
    <x-card>
        {{--<x-feedback/>--}}
        <h1 class="px-6">{{__('Create').' '.__('Expenses')}}</h1>

        <div class="w-full  mt-6 px-6 py-4 overflow-hidden ">
            <x-form action="{{url('expenses')}}" method="post" has-files>
                @csrf
                <label>{{__('Expense Name')}}<span class="text-red-600" > *</span></label>
                <x-input required class="input" name="name" value="{{ old('name') }}"/>
                <div class="mt-5">
                <label>{{__('Amount')}}<span class="text-red-600" > *</span></label>
                <x-input required class="input" name="amount" value="{{ old('amount') }}"/>
                </div>
                <div class="flex mt-8">
                    <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                    <input type="button" class="btn-cancel"
                           name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/expenses/manage')"/>
                </div>
            </x-form>
        </div>
    </x-card>
</x-layouts.app>


