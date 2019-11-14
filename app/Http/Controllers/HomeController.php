<?php

namespace App\Http\Controllers;

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
//        Role::create(['name' => 'writer']);

        //Permission id = 1 for edit................................
        /*$permission = Permission::create(['name' => 'edit post']);
        $role = Role::findById(1);
        $permission = Permission::findById(1);
        $role->givePermissionTo($permission);*/
        //..........................................................

        //Remove Permission..........................................
        /*$permission = Permission::findById(1);
        $role = Role::findById(1);
        $permission->removeRole($role);*/
        //.......................................................
        return view('home');
    }
}
