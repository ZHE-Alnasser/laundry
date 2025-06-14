<div class="flex flex-col md:flex-row">
    <div class="w-full mx-2 mt-5 flex-1">
        <label>{{__('Name')}}<span class="text-red-600"> *</span></label>
        <div class="divUser">
            <x-input required name="name" value="{{old('name',$user->name)}}" class="input"/>
        </div>
    </div>




    <div class="w-full mx-2 mt-5 flex-1">
        <label>{{__('Email')}}<span class="text-red-600"> *</span></label>
        <div class="divUser">
            <x-input required  name="email" value="{{$user->email}}" class="input"/>
        </div>
    </div>
    <div class="w-full mx-2 mt-5 flex-1">
        <label>{{__('Phone')}}<span class="text-red-600"> *</span></label>
        <div class="divUser">
            <x-input required minlength="10" maxlength="10" name="phone" value="{{$user->phone}}" class="input"/></div>
    </div>
    <div class="w-full mt-5 flex-1">
        <label>{{__('Category')}}<span class="text-red-600"> *</span></label>
        <div class="divUser">
            <x-select required name="category_id" class="input"  id="category_id">
                @foreach($categories as $category )
                    <option {{old('category_id',$user->category_id)==$category->id?'selected':''}} value="{{$category->id}}">{{ $category->name }} </option>
                @endforeach
            </x-select></div>
</div>


<div class="flex mx-2 flex-col md:flex-row">


    </div>

</div>
<div class="flex flex-col md:flex-row">
    <div class="w-full mx-2 mt-5 ">
        <label>{{__('District')}}<span class="text-red-600"> *</span></label>
        <div class="divUser">
            <x-select required name="district_id" id="district_id" class="input">
                @foreach($districts as $district )
                    <option {{old('district_id',$user->district_id)==$district->id?'selected':''}} value="{{$district->id}}">{{ $district->name }} </option>
                @endforeach
            </x-select>
        </div>
    </div>

    <div class=" w-full mt-5 mx-2">
        <label>{{__('Longitude')}}</label>
        <x-input  type="number" class="input" name="longitude" value="{{$user->longitude}}"/>
    </div>
    <div class="mt-5 w-full mx-2">
        <label>{{__('Latitude')}}</label>
        <x-input type="number" class="input" name="latitude" value="{{$user->latitude}}"/>
    </div>
</div>

<div class="flex flex-col md:flex-row">
<div class="mt-5 w-full mx-2 ">
    <label>{{ __('Password') }}<span class="text-red-600"> *</span></label>
    <x-input id="password" class="input" type="password" name="password" required
             autocomplete="new-password" minlength="8"/>

</div>
<div class="mt-5 w-full mx-2 ">
    <label>{{ __('Confirm Password') }}<span class="text-red-600"> *</span></label>
    <x-input id="password_confirmation" class="input" type="password"
             name="password_confirmation" required autocomplete="new-password"/>
</div>
</div>


<div class="mt-5 inline-flex items-center mx-2 space-x-4 form-group {{ $errors->has('is_active') ? 'has-error' : '' }}">
    <input name="is_active" type="hidden" value="0">
    <input type="checkbox" class="checkbox checkbox-primary w-5 h-5 " id="is_active" name="is_active"
           value="1"{{ (isset($user) && old('is_active',$user->is_active)) || old('is_active', 0) === 1 ? 'checked' : '' }}>
    <p class="flex-1 text-s font-medium text-gray-600 "> {{__('Approve')}}</p>
    @if($errors->has('is_active'))
        <p class="help-block">
            {{ $errors->first('is_active') }}
        </p>
    @endif
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
                        <input type="radio" class="radio radio-primary w-5 h-5" id="role_id" name="role_id[]" value="{{ $role->id }}"
                                {{in_array(old('role_id[]',$role->id) , $userRoles) ? 'checked' : '' }}/>
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

