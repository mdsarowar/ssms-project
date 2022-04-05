<?php

namespace App\Models;

use App\helper\Customhelper;
use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Subject extends Model
{
    use HasFactory;

    protected $guarded=[];

    public static function saveDate($request,$id=null){
        Subject::updateOrCreate(['id'=>$id],[
            'teacher_id' =>Auth::id(),
            'title'=>$request->title,
            'code'=>Subject::generateCode(),
            'fee'=>$request->fee,
            'image'=>Customhelper::imageUpload($request->file('image'),'admin/assets/images/subject-images/',isset($id)? Subject::find($id)->image:null),
            'short_description'=>$request->short_description,
            'long_description'=>$request->long_description,

        ]);
    }

    public static function generateCode(){
        $code='BITM-'.rand(10,1000);
        $existCode=Subject::where('code',$code)->first();
        if ($existCode){
            Subject::generateCode();
        }else{
            return $code;
        }
    }

    public function teacher(){
        $this->belongsTo(Teacher::class);
    }
}
