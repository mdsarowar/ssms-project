<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use function Symfony\Component\Finder\name;

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

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8',
            'role'=>'required',
        ]);

        User::createNewUserByAdmin($request);
        return redirect()->back()->with('message','user create successfully');
    }
    public function editUser($id){
        return view('admin.user.edit',[
            'user'=>User::find($id),
        ]);
    }
    public function updateUser(Request $request,$id){
        User::updateUser($request,$id);
        return redirect('/manage_user')->with('message','user update successfully');
    }
    public function deleteUser($id){
        return redirect()->back()->with('message','User delete successfully');
    }
}
