<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Enroll extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected static $enroll;

    protected static function newEnroll($id){
        self::$enroll=new Enroll();
        self::$enroll->subject_id=$id;
        self::$enroll->user_id =Auth::id();
        self::$enroll->enroll_date=date('y-m-d');
        self::$enroll->save();


    }
}
