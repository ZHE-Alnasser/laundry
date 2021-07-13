<x-layouts.admin>
    {{--<x-card>--}}
        <x-feedback/>
        <div class="w-full">
            <div class="mt-8 p-4">
                <div>
                    <x-form action="{{ route('users.update',['user'=>$user->id]) }} " method="PUT">
                        @csrf
                        {{--@method('PUT')--}}

                        <div class="flex flex-col md:flex-row">
                            <div class="w-full mx-2 flex-1">
                                <label>{{__('First Name')}}</label>
                                <div class="divUser">
                                    <x-input name="first_name" value="{{$user->first_name}}" class="input"/>
                                </div>
                            </div>
                            <div class="w-full mx-2 flex-1">
                                <label>{{__('Last Name')}}</label>
                                <div class="divUser">
                                    <x-input name="last_name" value="{{$user->last_name}}" class="input"/></div>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row">
                            <div class="w-full mx-2 flex-1">
                                <label>{{__('Email')}}</label>
                                <div class="divUser">
                                    <x-input name="email" value="{{$user->email}}" class="input"/>
                                </div>
                            </div>
                            <div class="w-full mx-2 flex-1">
                                <label>{{__('Phone')}}</label>
                                <div class="divUser">
                                    <x-input name="phone" value="{{$user->phone}}" class="input"/></div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full mx-2 flex-1">
                                <label>{{__('Address 1')}}</label>
                                <div class="divUser">
                                    <x-input name="address_1"  value="{{$user->address_1}}" class="input"/></div>
                            </div>
                            <div class="w-full mx-2 flex-1">
                                <label>{{__('Address 2')}}</label>
                                <div class="divUser">
                                    <x-input name="address_2"  value="{{$user->address_2}}" class="input"/></div>
                            </div>
                        </div>
                            <div class="flex flex-col md:flex-row">
                                <div class="w-full mx-2 flex-1">
                                    <label>{{__('Type')}}</label>
                                    <div class="divUser">
                                        <x-select name="type_id" class="input"  id="type_id">
                                            @foreach($types as $type )
                                                <option {{$user->type_id==$type->id?'selected':''}} value="{{$type->id}}">{{ $type->name }} </option>
                                            @endforeach
                                        </x-select></div>
                                {{--</div>--}}
                                {{--<div class="w-full mx-2 flex-1">--}}
                                    {{--<label>{{__('Address 2')}}</label>--}}
                                    {{--<div class="divUser">--}}
                                        {{--<x-input name="address_2"  value="{{$user->address_2}}" class="input"/></div>--}}
                                </div>




                        </div>

                        <div class="inline-flex items-center space-x-4 p-5">
                            <div class="inline-flex items-center space-x-4 form-group {{ $errors->has('is_active') ? 'has-error' : '' }}">
                                <input name="is_active" type="hidden" value="0">
                                <input type="checkbox" id="is_active" name="is_active"
                                       value="1"{{ (isset($user) && $user->is_active) || old('is_active', 0) === 1 ? 'checked' : '' }}>
                                <p class="flex-1 text-s font-medium text-gray-600 "> {{__('Approved')}}</p>
                                @if($errors->has('is_active'))
                                    <p class="help-block">
                                        {{ $errors->first('is_active') }}
                                    </p>
                                @endif
                            </div>

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
    {{--</x-card>--}}
</x-layouts.admin>
