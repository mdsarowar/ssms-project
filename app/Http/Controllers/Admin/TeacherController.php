<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    protected $teacher;
    public function createTeacher(){
        $this->teacher=Teacher::where('user_id',Auth::id())->first();
        return view('admin.teacher.create',[
            'teacher'=>isset($this->teacher)? $this->teacher:null,
        ]);
    }

    public function manageTeacher(){
        return view('admin.teacher.teacher-view',[
            'teachers'=>Teacher::all(),
        ]);

    }

    public function newTeacher(Request $request,$id=null){
        Teacher::saveDate($request,$id);
        return redirect()->back()->with('message','Teacher create successfully');

    }

    public function teacherEdit($id){
        return view('admin.teacher.teacher-edit',[
            'teacher'=>Teacher::findOrFail($id),
        ]);
    }

    public function updateTeacher(Request $request,$id){
        Teacher::saveDate($request,$id);
        return redirect(route('manage_teacher'))->with('message','Teacher update successfully');
    }

    public function teacherDelete($id){
        $teacher=Teacher::findOrFail($id);
        if (file_exists($teacher->teacher_image)){
            unlink($teacher->teacher_image);
        }
        $teacher->delete();
        return redirect()->back()->with('messager','Teacher delete successfully');
    }

    public function changeTeacherStatus($id){
        $teacher=Teacher::findOrFail($id);
        $teacher->status=$teacher->status==0? '1':'0';
        $teacher->save();
        return redirect()->back()->with('message','Teacher status change successfully');
    }
}
