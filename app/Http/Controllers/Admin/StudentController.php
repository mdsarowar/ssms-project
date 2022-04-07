<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentData;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;
    public function manageStudent(){
        return view('student.student.manage',[
            'students'=>StudentData::latest()->get(),
        ]);
    }
    public function createStudent(){
        $this->student=StudentData::where('user_id'.Auth::id())->first();
        return view('student.student.create',[
            'student'=>$this->student,
        ]);
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
        if (file_exists($student->image)){
            unlink($student->image);
        }
        $student->delete();
        return redirect()->back()->with('message','delete successfully');
    }

    public function changeStudentstatus($id){
        $student=StudentData::findOrFail($id);
        $student->status=$student->status==0? '1':'0';
        $student->save();
        return redirect()->back()->with('message','change successfully');

    }
}
