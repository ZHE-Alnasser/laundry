<x-layouts.admin>
    <x-feedback/>
    <h1 class="px-6">{{__('Create').' '.__('User')}}</h1>

    <div class="  mt-6 px-6 py-4 overflow-hidden ">
        <x-form action="{{url('users')}}" method="post" has-files>
            @csrf
            <div class="mt-5">
            <label>{{__('First Name')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="name" value="{{ old('first_name') }}"/>
            </div>
            {{--<div class="mt-5">--}}
            {{--<label>{{__('Last Name')}}<span class="text-red-600"> *</span></label>--}}
            {{--<x-input class="input " name="last_name" value="{{ old('last_name') }}"/>--}}
            {{--</div>--}}
            <div class="mt-5">
           <div><label>{{__('Type')}}</label><span class="text-red-600"> *</span></div>
                {{--<x-input class="w-full" name="item_id" value="{{ old('item_id') }}" placeholder="{{__('item')}}"/>--}}
            <x-select name="type_id" id="type_id" class="select">
                @foreach($types as $type )
                    <option value="{{$type->id}}">{{ $type->name }} </option>
                @endforeach
            </x-select>
            </div>
<div class="mt-5">
            <label>{{__('Email')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="email" type="email" value="{{ old('email') }}" />
</div>
            <div class="mt-5">
            <label>{{__('Phone')}}<span class="text-red-600"> *</span></label>
            <x-input class="input" name="phone" type="text" value="{{ old('phone') }}" />
            </div>
            <div class="mt-5">
            <div><label class="mt-5">{{__('District')}}</label><span class="text-red-600"> *</span></div>
            <x-select name="district_id" id="district_id" class="select">
                @foreach($districts as $district )
                    <option value="{{$district->id}}">{{ $district->name }} </option>
                @endforeach
            </x-select>
            </div>
            <div class="mt-5">
            <label>{{ __('Password') }}"</label>
                <x-input id="password" class="input" type="password" name="password" required
                             autocomplete="new-password"/>

            </div>
            <div class="mt-5">
            <label>{{ __('Confirm Password') }}"</label>
                <x-input id="password_confirmation" class="input" type="password"
                             name="password_confirmation" required autocomplete="new-password"/>
            </div>


            <div class="form-group {{ $errors->has('role_id') ? 'has-error' : '' }}">
                <table class="border w-full table mt-5">
                    <thead>
                    <tr class="text-center">
                        <th ><h2>{{__('Assign Role for the user')}}</h2></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <tr class="tr">
                            <td class="td p-2 text-center">
                                <p class="text-s font-medium text-gray-600 ">
                                    {{ $role->name }}
                                    <input type="checkbox" id="role_id" name="role_id[]" value="{{ $role->id }}"
                                           />
                                </p>
                            </td>
                            @endforeach
                            @if($errors->has('role_id'))
                                <p class="help-block">
                                    {{ $errors->first('role_id') }}
                                </p>
                            @endif
                        </tr>
                    </tbody>
                </table>
            </div>
                <div class="flex mt-8">
                <button type='submit' class="btn  ml-3">{{__('Create')}}</button>

                <input type="button" class="btn-cancel "
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/users/manage')"/>
            </div>
        </x-form>
    </div>
</x-layouts.admin>


