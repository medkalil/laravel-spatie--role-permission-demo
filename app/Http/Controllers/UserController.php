<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use App\Models\Role;
use Spatie\Permission\Models\Role;
use App\Models\Permission;
use App\Models\ModelHasRoles;

class UserController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get role permissions
        // $role = Role::findByName('admin'); 
        // $permissions = $role->permissions;
        // return $permissions;

        // get user role
        // $user = User::find(1);
        // $roles = $user->roles;
        // return $roles;

        // add role with permisssions
        // $role = Role::create(['name' => 'role_name']);
        // $permissions = Permission::whereIn('name', ['permission1', 'permission2'])->get();
        // $role->syncPermissions($permissions);

        // get user with role and permissions
        // $user = User::find(1);
        // $roles = $user->roles;
        // foreach ($roles as $role) {         
        //     $permissions = $role->permissions;
        // }
        // return $roles;

        // get all users permissions
        $user = User::find(2);
        return $user->getPermissionsViaRoles();

        // checking if a user has certain permissions
        // $user = User::find(1);
        // return $user->hasPermissionTo('publish articles');

        // get user & role & permissions
        // $role = Role::where('name', 'writer')->first();
        // $user = User::find(2);
        // $user->assignRole($role);
        // return $user = User::with('roles.permissions')->find(2);
    }
}
