<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function createSubject(){
        return view('admin.teacher.create');
    }

    public function manageSubject(){
        return view('admin.teacher.teacher-view',[
            'subjects'=>Subject::all(),
        ]);

    }

    public function newSubject(Request $request){
        Subject::saveDate($request);
        return redirect()->back()->with('message','Teacher create successfully');

    }

    public function subjectEdit($id){
        return view('admin.teacher.teacher-edit',[
            'subject'=>Teacher::findOrFail($id),
        ]);
    }

    public function updateSubject(Request $request,$id){
        Subject::saveDate($request,$id);
        return redirect(route('manage_teacher'))->with('message','Teacher update successfully');
    }

    public function subjectDelete($id){
        $subject=Subject::findOrFail($id);
//        if (file_exists($teacher->teacher_image)){
//            unlink($teacher->teacher_image);
//        }
        $subject->delete();
        return redirect()->back()->with('messager','Teacher delete successfully');
    }

    public function changeSubjectStatus($id){

    }
}
