<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class UsersRoleController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->get();

        return view('admin.pages.users.roles', ['roles' => $roles]);
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $rolePermissions = $role->permissions->pluck('id')->all();
        $permissions = Permission::get();

        return view('admin.pages.users.rolesEdit', ['role' => $role, 'permissions' => $permissions, 'rolePermissions' => $rolePermissions]);
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $input = $request->all();
        $role->syncPermissions($input['permissons']);

        toastr()->success('Updated Successfully');

        return redirect()->route('roles');
    }
}
