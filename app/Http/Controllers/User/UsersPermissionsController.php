<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class UsersPermissionsController extends Controller
{
    public function index()
    {
        $permissions = Permission::get();

        return view('pages.users.permissions', ['permissions' => $permissions]);
    }
    
}
