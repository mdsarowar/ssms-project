<?php


namespace App\helper;


class Customhelper
{
    public static $teacher;
    public  static $imageName;
    public static $directory;
    public static $imageUrl;
    public static function imageUpload($image,$directory,$fileName=null){

        if ($image){
            if (file_exists($fileName)){
                unlink($fileName);

            }
            self::$imageName=time().rand(10,200).'.'.$image->getClientOriginalExtension();
            $image->move($directory,self::$imageName);
            return $directory.self::$imageName;
        }
        else{
            return $fileName;
        }

    }

}
