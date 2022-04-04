<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentData;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function manageStudent(){
        return view('student.student.manage',[
            'students'=>StudentData::latest()->get(),
        ]);
    }
    public function createStudent(){
        return view('student.student.create');
    }

    public function newStudent(Request $request){
        StudentData::saveStudentInfo($request);
        return redirect()->back()->with('message','save successfully');

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

    public function changeStudentstatus($id){
        $student=StudentData::findOrFail($id);
    }
}
