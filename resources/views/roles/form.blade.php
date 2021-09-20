<x-layouts.app>

<x-card>
    <x-form action="{{ $role->path() }}" :entity="$role" has-files>

        <x-input id="name" name="name" :value="$role->name" placeholder="{{__('Name')}}"/>

            @foreach($PermissionGroup as $group => $permissions)
            @php($selectAll = array_diff($permissions->pluck('id')->toArray(), $rolePermissions)? 'false':'true')
                    <h1 class="text-right ms-3 border-b-4 border-blue-600 mb-1">{{$group}}</h1>
                    <div class="grid lg:grid-cols-4 sm:grid-cols-3 grid-flow-col gap-4">
                    @foreach($permissions as $permission)
                            <x-input.checkbox id="{{$permission->id}}" :label="__($permission->name)" name="permissions[]" :value="$permission->id" :checked="in_array($permission->id , $rolePermissions) ? 'checked' : null" />

                    @endforeach
                    </div>
            @endforeach
        <x-ctmn :entity="$role"/>
    </x-form>
</x-card>

</x-layouts.app>
