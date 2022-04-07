<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{

    protected $subjects;
    public function createSubject(){
        return view('admin.subject.create');
    }

    public function manageSubject(){

        if (Auth::user()->role=='admin'){
            $this->subjects=Subject::latest()->get();
        }elseif (Auth::user()->role=='teacher'){
            $this->subjects=Subject::where('teacher_id',Auth::id())->latest()->get();
        }
        return view('admin.subject.subject-view',[
            'subjects'=>$this->subjects,
        ]);

    }

    public function newSubject(Request $request){
        Subject::saveDate($request);
        return redirect()->back()->with('message','Teacher create successfully');

    }

    public function subjectEdit($id){
        return view('admin.subject.edit-subject',[
            'subject'=>Subject::findOrFail($id),
        ]);
    }

    public function updateSubject(Request $request,$id){
        Subject::saveDate($request,$id);
        return redirect(route('manage_subject'))->with('message','subject update successfully');
    }

    public function subjectDelete($id){
        $subject=Subject::findOrFail($id);
        if (file_exists($subject->image)){
            unlink($subject->image);
        }
        $subject->delete();
        return redirect()->back()->with('messager','subject delete successfully');
    }

    public function changeSubjectStatus($id){
        $subject=Subject::findOrFail($id);
        $subject->status=$subject->status==0? '1':'0';
        $subject->save();
        return redirect()->back()->with('message','status change successfully');

    }
}
