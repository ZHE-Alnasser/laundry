<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    function __construct()
//    {
//        $this->addMiddlewaresFor('Roles');
//        $this->middleware('auth');
//    }
    function __construct()
    {
        $this->addMiddlewaresFor('Roles');
        $this->middleware('auth');
    }
    public function index()
    {
        return view('roles.manage');
    }

    public function manage()
    {
        return view('roles.manage');
    }


    public function create()
    {

        $PermissionGroup = Permission::all()->groupBy('group');
        $rolePermissions = [];

        $role = new Role;
        return view('roles.create', compact('role', 'PermissionGroup','rolePermissions'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        $data['slug'] = Str::slug($request->name, '-');

        $role = Role::create($data);
        $permissions = request()->validate([
            'permissions' => 'required',
        ]);
        $role->syncPermissions($permissions);

        return redirect('roles/manage')
            ->with('success', __('Your Role has been created successfully'));
    }

    public function show(Role $role)
    {
        //
    }


    public function edit(Role $role)
    {
        $PermissionGroup = Permission::all()->groupBy('group');
        $rolePermissions = $role->permissions()->pluck('id')->toArray();
        return view('roles.edit', compact('role', 'PermissionGroup', 'rolePermissions'));
    }


    public function update(Request $request, Role $role)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        $data['slug'] = Str::slug($request->name, '-');

        $role->update($data);

        $permissions = $request->validate([
            'permissions' => 'nullable',
        ]);

        $role->syncPermissions($permissions);

        return redirect('roles/manage');
    }


    public function destroy(Role $role)
    {

        $role->delete();

        return redirect('roles/manage');
    }
}
