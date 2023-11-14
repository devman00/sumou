<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Role\UpdateRoleRequest;
use App\Http\Requests\Admin\Role\StoreRoleRequest;
use App\Models\Permission;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::latest()->get();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        $permissions = Permission::latest()->get();
        $perms_groups = [];
        foreach ($permissions as $perms) {
            $perms_name = explode("-", $perms->name);
            $perms_groups[$perms_name[0]][] =  [
                'id' => $perms->id,
                'name' => $perms->name,
                'display_name' => $perms->display_name,
            ];
        }
        return view('admin.roles.create', compact('permissions', 'perms_groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->safe()->except('permissions'));
        if($request->exists('permissions')){
            $role->givePermissions($request->input('permissions'));
        }
        // Role::create($request->validated());
        return redirect()->route('admin.roles.index')->with('success', 'Role Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::latest()->get();
        $perms_groups = [];
        foreach ($permissions as $perms) {
            $perms_name = explode("-", $perms->name);
            $perms_groups[$perms_name[0]][] =  [
                'id' => $perms->id,
                'name' => $perms->name,
                'display_name' => $perms->display_name,
            ];
        }
        return view('admin.roles.edit', compact('role', 'permissions', 'perms_groups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update($request->safe()->except('permissions'));
        if($request->exists('permissions'))
        {
            $role->syncPermissions($request->input('permissions'));
        }
        return back()->with('message', 'Role Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with('success', 'Deleted sussussfully');
    }
}
