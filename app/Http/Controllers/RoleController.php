<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(){

        $role = Role::with('permissions')->latest()->get();
        return view('role.role-interface',compact('role'));
    }

    public function create(){

        return view('role.role-create');
    }

    public function AssignUser(){

        return view('user.user-assign');
    }
}
