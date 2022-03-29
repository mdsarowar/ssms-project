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

    public static function saveDate($request, $id=null){

        self::$teacher=new Teacher();
        self::$teacher->teacher_name                =$request->teacher_name;
        self::$teacher->teacher_email               =$request->teacher_email;
        self::$teacher->teacher_phone               =$request->teacher_phone;
        self::$teacher->teacher_code                =$request->teacher_code;
        self::$teacher->teacher_image               =Customhelper::imageUpload($request->teacher_image,'admin/assets/teacher-image/',self::$teacher->teacher_image);
        self::$teacher->teacher_address             =$request->teacher_address;
        self::$teacher->description                 =$request->description;
        self::$teacher->status                      =$request->status;
        self::$teacher->save();



    }
}
