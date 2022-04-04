<?php

namespace App\Models;

use App\helper\Customhelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class StudentData extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected static $student;

    public static function saveStudentInfo ($request){

        self::$student=StudentData::where('user_id', Auth::id())->first();
        self::$student->name=$request->name;
        self::$student->email=$request->email;
        self::$student->phone=$request->phone;
        self::$student->image=Customhelper::imageUpload($request->file('image'),'admin/assets/images/student_images/');
        self::$student->address=$request->address;
        self::$student->save();
    }
}