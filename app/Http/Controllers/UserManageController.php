<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserManageController extends Controller
{
    public function user_manage(){

    }

    public function roles_permission(){
        $users = User::orderBy('id', 'desc')->get();
        $roles = Role::orderBy('id', 'desc')->get();
        return view('roles-permission', compact('users', 'roles'));
    }

    public function role_submit(Request $request){
        Role::create([
            'name' => $request->role,
            'guard_name' => 'web',
        ]);
        return redirect()->route('roles-permission');
    }

    public function permission_to_role(Request $request){
        $user = User::find($request->user_id);
        $user->assignRole($request->role_id);
        return redirect()->route('roles-permission');
    }

}
