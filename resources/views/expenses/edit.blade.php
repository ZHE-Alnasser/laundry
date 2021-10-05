<x-layouts.app>
    <x-card>
        <x-feedback/>
        <div class="w-full">
            <div class="mt-8 p-4">
                <div>
                    <x-form action="{{ route('expenses.update',['expense'=>$expense->id]) }} " method="PUT">
                        @csrf

                        <div class="flex flex-col md:flex-row">
                            <div class="w-full sm:mx-10 flex-1">
                                <label>{{__('Expense Name')}}<span class="text-red-600"> *</span></label>
                                <div >
                                    <x-input required  name="name" value="{{$expense->name}}" class="input"/>
                                </div>
                            </div>
                        </div>
                <div class="flex flex-col md:flex-row mt-5">
                            <div class="w-full sm:mx-10 flex-1">
                                <label>{{__('Amount')}}<span class="text-red-600"> *</span></label>
                                <div >
                                    <x-input type="number" required  name="amount" value="{{$expense->amount}}" class="input"/>
                                </div>
                            </div>
                        </div>

         

                        <div class="flex p-2 mt-8 sm:mx-10">
                            <button type="Submit" class="btn ml-2">{{__('Save')}}</button>
                            <input type="button" class="btn-cancel"
                                   name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/expenses/manage')"/>
                        </div>
                    </x-form>
                </div>
            </div>
        </div>
    </x-card>
</x-layouts.app>
