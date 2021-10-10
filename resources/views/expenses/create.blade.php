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
                    <div><label>{{__('Branch Name')}}</label></div>
                    <x-select name="branch_id" id="branch_id" class="select">
                        @foreach($branches as $branch )
                            {{--@dd($branch->name)--}}
                            <option value="{{$branch->id}}">{{ $branch->name }} </option>
                        @endforeach
                    </x-select>
                </div>

              <div class="mt-5">
                    <div><label>{{__('Category')}}</label></div>
                    <x-select name="category_id" id="category_id" class="select">
                        @foreach($categories as $category )
                            {{--@dd($branch->name)--}}
                            <option value="{{$category->id}}">{{ $category->name }} </option>
                        @endforeach
                    </x-select>
                </div>


                <div class="mt-5">
                <label>{{__('Amount')}}<span class="text-red-600" > *</span></label>
                <x-input required class="input" type="number" name="amount" value="{{ old('amount') }}"/>
                </div>

                <div class="mt-5">
                <label>{{__('Exchange Date')}}<span class="text-red-600" > *</span></label>
                <x-input required  x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"
                         class="date-range input" name="date" value="{{ old('date') }}"/>
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


