<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        Role::create(['name' => 'edit']);

        //Permission id = 1 for edit................................
//        $permission = Permission::create(['name' => 'write post']);

        /*$role = Role::findById(1);
        $permission = Permission::findById(2);
        $role->givePermissionTo($permission);*/
        //..........................................................

        //Remove Permission..........................................
        /*$permission = Permission::findById(1);
        $role = Role::findById(2);
        $permission->removeRole($role);*/
        //.......................................................

//        auth()->user()->givePermissionTo('edit post');
//        auth()->user()->assignRole('writer');
//        return auth()->user()->getAllPermissions();

//        return User::role('edit')->get();
        return view('home');
    }
}
