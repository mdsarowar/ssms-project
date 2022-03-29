<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function createTeacher(){
        return view('admin.teacher.create');
    }

    public function manageTeacher(){
        return view('admin.teacher.teacher-view',[
            'teachers'=>Teacher::all(),
        ]);

    }

    public function newTeacher(Request $request){
        Teacher::saveDate($request);
        return redirect()->back()->with('message','Teacher create successfully');

    }

    public function teacherEdit($id){
        return view('admin.teacher.teacher-edit',[
            'teacher'=>Teacher::findOrFail($id),
        ]);
    }

    public function updateTeacher(Request $request){
        Teacher::saveDate($request);
        return redirect(route('manage_teacher'))->with('message','Teacher update successfully');
    }
}
