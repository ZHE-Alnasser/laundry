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

    public function index()
    {
        return view('roles.manage');
    }

    public function manage()
    {
        return view('roles.manage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $PermissionGroup = Permission::all()->groupBy('group');
        $rolePermissions = [];

        $role = new Role;
        return view('roles.create', compact('role', 'PermissionGroup','rolePermissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
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
            ->with('success', 'Your Role has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $PermissionGroup = Permission::all()->groupBy('group');
        $rolePermissions = $role->permissions()->pluck('id')->toArray();
        return view('roles.edit', compact('role', 'PermissionGroup', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int  Role  $role
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {

        $role->delete();

        return redirect('roles/manage');
    }
}
