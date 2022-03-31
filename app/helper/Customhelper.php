<?php


namespace App\helper;


use App\Models\Teacher;

class Customhelper
{
    public static $teacher;
    public  static $imageName;
    public static $directory;
    public static $imageUrl;
    public static $code;

    public static function imageUpload($image,$directory,$fileName=null){

        if ($image){
            if (file_exists($fileName)){
                unlink($fileName);

            }
            self::$imageName=time().rand(10,200).'.'.$image->getClientOriginalExtension();
            $image->move($directory,self::$imageName);
            self::$imageUrl= $directory.self::$imageName;
        }
        else
            {
                if (isset($fileName)){
                    self::$imageUrl=$fileName;
                }
                else{
                    self::$imageUrl='';
                }

        }
        return self::$imageUrl;

    }

    public static function generateCode(){

        self::$code='BITM-'.rand(10,1000);

            $exitcode=Teacher::where('code',self::$code)->first();
            if($exitcode){
                Customhelper::generateCode();

        }
            else
            {
                return self::$code;
            }

    }
}
