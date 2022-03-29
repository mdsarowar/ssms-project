<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function createRole(){
        return view('admin.role.create');
    }

    public function newRole(Request $request){
        Role::create($request->except('_token'));
        return redirect()->back()->with('message','Role create successfully');

    }

    public function manageRole(){
        return view('admin.role.role-view',[
            'roles'=>Role::all(),
        ]);
    }
}
