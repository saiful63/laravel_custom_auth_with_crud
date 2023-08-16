<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function AssignUser(){
        $role = Role::with('permissions')->latest()->get();
        $user = User::get();
        return view('user.user-assign',compact(['user','role']));
    }
}
