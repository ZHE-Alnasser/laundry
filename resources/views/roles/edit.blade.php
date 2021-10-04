<x-layouts.app>
    <x-card>
    <x-feedback/>

    <h1 class="mb-10 text-center text-xl">{{$role->name}}</h1>
    <div class="text-right">

        <x-form action="{{ route('roles.update',['role'=>$role->slug]) }}" method="PUT">
            @csrf

            <div class="mt-10"><label>{{__('Name').' '.__('Role')}}<span class="text-red-600"> *</span></label></div>
            <x-input id="name" class="input" name="name" value="{{$role->name}}" placeholder="{{__('Name')}}"/>

            <table class="table w-full mt-8">
                <thead>
                <tr>
                    <th>{{__('     ')}}</th>
                    <th><p>{{__('Create')}}</p></th>
                    <th><p>{{__('Edit')}}</p></th>
                    <th><p>{{__('Delete')}}</p></th>
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
                                <input class="rounded" type="checkbox" name="permissions[]" value="{{$permission->id}}"
                                        {{in_array($permission->id , $rolePermissions) ? 'checked' : '' }}/>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="flex mt-8">
                <button type="submit" class="btn ml-3">
                    {{__('Edit')}}
                </button>

                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/roles');"/>
            </div>
        </x-form>
    </div>
    </x-card>
</x-layouts.app>