<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

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
        // $user = User::find(1);
        // $role = Role::findById(1);
        // $permission = Permission::create(['name' => 'edit articles']);
        // $permission = Permission::findById(3);
        // $role->givePermissionTo($permission);
        // $permission->removeRole($role);
        // auth()->user()->givePermissionTo('write post');
        // return auth()->user()->roles;
        return view('home');
    }
}
