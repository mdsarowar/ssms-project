<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(){
       return view('admin.user.create');
    }
    public function manageUser(){
        return view('admin.user.manage',[
            'users'=>User::latest()->get(),
        ]);
    }
    public function newUser(Request $request){
        return $request;
    }
    public function editUser($id){
        return view('admin.user.edit',[
            'user'=>User::find($id),
        ]);
    }
    public function updateUser(Request $request,$id){
        return $request;
    }
    public function deleteUser($id){
        return redirect()->back()->with('message','User delete successfully');
    }
}
