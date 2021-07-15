<x-layouts.admin>
    <x-feedback/>
    <h1>{{__('Create').' '.__('Users')}}</h1>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <x-form action="{{url('users')}}" method="post" has-files>
            @csrf
            <label>{{__('first').' '.__('name')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="first_name" value="{{ old('first_name') }}"/>

            <label>{{__('Last').' '.__('Name')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="last_name" value="{{ old('last_name') }}"/>

            <label>{{__('Type')}}</label><span class="text-red-600"> *</span>
            {{--<x-input class="w-full" name="item_id" value="{{ old('item_id') }}" placeholder="{{__('item')}}"/>--}}
            <x-select name="type_id" id="type_id" class="input">
                @foreach($types as $type )
                    <option value="{{$type->id}}">{{ $type->name }} </option>
                @endforeach
            </x-select>

            <label>{{__('Email')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="email" type="email" value="{{ old('email') }}" />

            <label>{{__('Phone')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="phone" type="text" value="{{ old('phone') }}" />

            <label>{{__('District')}}</label><span class="text-red-600"> *</span>
            <x-select name="district_id" id="district_id" class="input">
                @foreach($districts as $district )
                    <option value="{{$district->id}}">{{ $district->name }} </option>
                @endforeach
            </x-select>

            <label>{{ __('Password') }}"</label>
                <x-input id="password" class="input" type="password" name="password" required
                             autocomplete="new-password"/>


            <label>{{ __('Confirm Password') }}"</label>
                <x-input id="password_confirmation" class="input" type="password"
                             name="password_confirmation" required autocomplete="new-password"/>
            <div class="flex mt-3">
                <button type='submit' class="btn ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/users/manage')"/>
            </div>
        </x-form>
    </div>
</x-layouts.admin>


