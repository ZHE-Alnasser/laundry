<x-layouts.admin>
    <x-feedback/>
    <h1>{{__('Create').' '.__('Order')}}</h1>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <x-form action="{{url('services')}}" method="post" has-files>
            @csrf
            <label>{{__('Employee Name')}}<span class="text-red-600"> *</span></label>

            <select class="ml-4 select  appearance-none border-2 border-gray-200 rounded w-48" name="user_id" id="employees" >
            @foreach($employees as $employee)
                {{--@dd($customer)--}}

                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
            @endforeach
            </select>
            <label>{{__('Item Name')}}</label><span class="text-red-600"> *</span>
            {{--<x-input class="w-full" name="item_id" value="{{ old('item_id') }}" placeholder="{{__('item')}}"/>--}}
            <x-select name="item_id" id="item_id" class="input">
                @foreach($items as $item )
                    <option value="{{$item->id}}">{{ $item->name }} </option>
                @endforeach
            </x-select>

            <label>{{__('price')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="price" type="text" value="{{ old('price') }}" />



            <div class="flex mt-3">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/services/manage')"/>
            </div>
        </x-form>
    </div>
</x-layouts.admin>


