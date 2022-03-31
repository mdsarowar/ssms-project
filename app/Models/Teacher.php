<?php

namespace App\Models;

use App\helper\Customhelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected static $teacher;

    public static function saveDate($request,$id=null){

        Teacher::updateOrCreate(['id'=>$id],[
            'teacher_name'=>$request->teacher_name,
            'teacher_email'=> $request->teacher_email,
            'teacher_phone'=>$request->teacher_phone,
            'teacher_code'=>$request->teacher_code,
            'teacher_image'=>Customhelper::imageUpload($request->file('teacher_image'),'admin/assets/teacher-image/',isset($id)?Teacher::find($id)->teacher_image:null),
            'teacher_address'=>$request->teacher_address,
            'description'=>$request->description,
            'status'=>$request->status,
            'code'=>$id!= null? Teacher::find($id)->code:Customhelper::generateCode(),
        ]);

//        self::$teacher=new Teacher();
//        self::$teacher->teacher_name                =$request->teacher_name;
//        self::$teacher->teacher_email               =$request->teacher_email;
//        self::$teacher->teacher_phone               =$request->teacher_phone;
//        self::$teacher->teacher_code                =$request->teacher_code;
//        self::$teacher->teacher_image               =Customhelper::imageUpload($request->file('teacher_image'),'admin/assets/teacher-image/',self::$teacher->teacher_image);
//        self::$teacher->teacher_address             =$request->teacher_address;
//        self::$teacher->description                 =$request->description;
//        self::$teacher->status                      =$request->status;
//        self::$teacher->save();



    }
}
