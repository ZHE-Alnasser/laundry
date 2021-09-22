<x-layouts.admin>
    <h1>{{__('Create').' '.__('role')}}</h1>
    <x-feedback/>
    <div class="sm:mx-3 text-right">
        <x-form action="{{url('roles')}}" method="post">
            @csrf
<div class="mt-10">
            <label class="mt-10">{{__('name').' '.__('Role')}}<span class="text-red-600"> *</span></label></div>
            <x-input class="input" name="name" value="{{ old('name') }}" placeholder="{{__('Name')}}"/>

            <table class="table w-full mt-10 text-center" >
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
                            @php($pieces = explode("-", $permission->name))
                            <td>
                                <p class="lg:hidden">{{__($pieces[0])}}</p>
                                <input type="checkbox" class="rounded" name="permissions[]" value="{{$permission->id}}"/>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="flex mt-8">
                <button class="btn ml-3" type="submit">
                    {{__('Create')}}
                </button>
                <input type="button" class="btn-cancel"
                       name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/roles/manage')"/>
            </div>
        </x-form>
    </div>
</x-layouts.admin>
