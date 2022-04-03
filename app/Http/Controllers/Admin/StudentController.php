<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentData;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function manageStudent(){
        return view('student.student.manage',[
            'students'=>StudentData::all(),
        ]);
    }
    public function createStudent(){
        return view('student.student.create');
    }

    public function newStudent(Request $request){
        return $request;

    }

    public function editStudent($id){
        return view('student.student.edit',[
            'student'=>StudentData::findOrFail($id),
        ]);
    }

    public function updateStudent(Request $request,$id){
        return $request;
    }

    public function deleteStudent($id){
        $student=StudentData::findOrFail($id);

        $student->delete();
        return redirect()->back()->with('message','delete successfully');
    }
}
