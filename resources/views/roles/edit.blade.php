<x-layouts.app>
    <x-feedback/>
    <h1 class="mb-10 text-center text-xl">{{$role->name}}</h1>
    <div class="text-right">

        <x-form action="{{ route('roles.update',['role'=>$role->slug]) }}" method="PUT">
            @csrf

            <label>{{__('Name').' '.__('Role')}}</label>
            <x-input id="name" name="name" value="{{$role->name}}" placeholder="{{__('Name')}}"/>

            <table>
                <thead>
                <tr>
                    <th>{{__('     ')}}</th>
                    <th>{{__('Create')}}</th>
                    <th>{{__('Edit')}}</th>
                    <th>{{__('Delete')}}</th>
                    <th>{{__('Show').''.__('History')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($PermissionGroup as $group => $permissions)
                    <tr>
                        <td>
                            <p>{{$group}}</p>
                        </td>
                        @foreach($permissions as $permission)
                            <td>
                                <input type="checkbox" name="permissions[]" value="{{$permission->id}}"
                                        {{in_array($permission->id , $rolePermissions) ? 'checked' : '' }}/>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="flex mt-3">
                <button type="submit" class="btn ml-3">
                    {{__('Edit')}}
                </button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/roles');"/>
            </div>
        </x-form>
    </div>
</x-layouts.app>