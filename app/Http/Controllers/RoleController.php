<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Role\StoreRoleRequest;
use App\Http\Requests\Admin\Role\UpdateRoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->all());
        $role->permissions()->sync($request->get('permissions'));
        return redirect()->route('admin.roles.index')->with('store', 'ok');
    }

    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update($request->all());
        $role->permissions()->sync($request->permissions);
        return redirect()->route('admin.roles.index')->with('update', 'ok');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return back();
    }
}
