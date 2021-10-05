<x-layouts.app>
    <x-card>
        <x-feedback/>
        <div class="w-full">
            <div class="mt-8 p-4">
                <div>
                    <x-form action="{{ route('users.update',['user'=>$user->id]) }} " method="PUT">
                        @csrf


                        <div class="flex flex-col md:flex-row">
                            <div class="w-full mx-2 mt-5 flex-1">
                                <label>{{__('Name')}}<span class="text-red-600"> *</span></label>
                                <div class="divUser">
                                    <x-input required name="name" value="{{$user->name}}" class="input"/>
                                </div>
                            </div>

                        </div>

                        <div class="flex flex-col md:flex-row">
                            <div class="w-full mx-2 mt-5 flex-1">
                                <label>{{__('Email')}}<span class="text-red-600"> *</span></label>
                                <div class="divUser">
                                    <x-input required  name="email" value="{{$user->email}}" class="input"/>
                                </div>
                            </div>
                            <div class="w-full mx-2 mt-5 flex-1">
                                <label>{{__('Phone')}}<span class="text-red-600"> *</span></label>
                                <div class="divUser">
                                    <x-input required name="phone" value="{{$user->phone}}" class="input"/></div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full mx-2 mt-5 flex-1">
                                <label>{{__('District')}}<span class="text-red-600"> *</span></label>
                                <div class="divUser">
                                    <x-select required name="district_id" id="district_id" class="input">
                                        @foreach($districts as $district )
                                            <option {{$user->district_id==$district->id?'selected':''}} value="{{$district->id}}">{{ $district->name }} </option>
                                        @endforeach
                                    </x-select>
                            </div>
                            </div>
                        </div>
                            <div class="flex flex-col md:flex-row">
                                <div class="w-full mt-5 flex-1">
                                    <label>{{__('Type')}}<span class="text-red-600"> *</span></label>
                                    <div class="divUser">
                                        <x-select required name="type_id" class="input"  id="type_id">
                                            @foreach($types as $type )
                                                <option {{$user->type_id==$type->id?'selected':''}} value="{{$type->id}}">{{ $type->name }} </option>
                                            @endforeach
                                        </x-select></div>

                                </div>

                        </div>
                        <div class="mt-5">
                            <label>{{__('Longitude')}}<span class="text-red-600"> *</span></label>
                            <x-input required class="input" name="longitude" value="{{$user->longitude}}"/>
                        </div>
                        <div class="mt-5">
                            <label>{{__('Latitude')}}<span class="text-red-600"> *</span></label>
                            <x-input required class="input" name="latitude" value="{{$user->latitude}}"/>
                        </div>
                        <div class="mt-5 inline-flex items-center space-x-4 form-group {{ $errors->has('is_active') ? 'has-error' : '' }}">
                            <input name="is_active" type="hidden" value="0">
                            <input type="checkbox" class="checkbox checkbox-primary" id="is_active" name="is_active"
                                   value="1"{{ (isset($user) && $user->is_active) || old('is_active', 0) === 1 ? 'checked' : '' }}>
                            <p class="flex-1 text-s font-medium text-gray-600 "> {{__('Approved')}}</p>
                            @if($errors->has('is_active'))
                                <p class="help-block">
                                    {{ $errors->first('is_active') }}
                                </p>
                            @endif
                        </div>

                        <div class="mt-5">
                            <label>{{ __('Password') }}<span class="text-red-600"> *</span></label>
                            <x-input id="password" class="input" type="password" name="password" required
                                     autocomplete="new-password"/>

                        </div>
                        <div class="mt-5">
                            <label>{{ __('Confirm Password') }}<span class="text-red-600"> *</span></label>
                            <x-input id="password_confirmation" class="input" type="password"
                                     name="password_confirmation" required autocomplete="new-password"/>
                        </div>


                        <div class="form-group {{ $errors->has('role_id') ? 'has-error' : '' }}">
                                    <table class="table border w-full mt-8">
                                        <thead>
                                        <tr class="text-center">
                                            <th><h2>{{__('Assign Role for the user')}}</h2></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($roles as $role)
                                            <tr class="tr">
                                                <td class="td p-2 text-center">
                                                    <p class="text-s font-medium text-gray-600 ">
                                                        {{ $role->name }}
                                                        <input type="checkbox" id="role_id" name="role_id[]" value="{{ $role->id }}"
                                                                {{in_array($role->id , $userRoles) ? 'checked' : '' }}/>
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

                        <div class="flex p-2 mt-4">
                            <button type="Submit" class="btn ml-2">{{__('Save')}}</button>
                            <input type="button" class="btn-cancel"
                                   name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/users/manage')"/>
                        </div>


                    </x-form>
                </div>
            </div>
        </div>
    </x-card>
</x-layouts.app>
