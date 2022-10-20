<?php

$db = mysqli_connect("localhost","root","","upload");
class upload {
    public $name;
    public $path;
    public $type;
    public $size;
    public $userid;
    

    public function uploadfun (){
        global $db;
        $path_name="$this->userid"."-"."$this->name";
        $target_path = "D:/xampp/htdocs/project/upload/mupload/files/".$path_name;
        move_uploaded_file($this->path , $target_path);
       // $res = "فایل با موفقیت آپلود شد<br>"."$target_path";
       $squery = mysqli_query($db , "SELECT * FROM `files` WHERE `PathName` LIKE '$path_name'");
       $check= mysqli_fetch_row($squery);
       if($check == NULL){
        $query=mysqli_query($db , "INSERT INTO `files` (`FileName`, `Type`, `Size`, `UserId`, `UploadedAt`, `DownloadLink`, `PathName`) VALUES ('$this->name', '$this->type', '$this->size', '$this->userid', current_timestamp(), '$target_path', '$path_name');");
        return $target_path;
        
       }else{
        
echo "فایل از قبل موجود میباشد لطفا فایل دیگری آپلود نمائید"."<hr><a href='index.php'>برای آپلود دوباره کلیک کنید</a>";
die;
       }
    }
    
    public function files (){
        global $db;
        $query = mysqli_query($db , "SELECT * FROM `files` WHERE `UserId` LIKE '$this->userid'");
        $res = array();
        while($a = mysqli_fetch_object($query)){
            array_push($res , $a);
        }
return $res;
    }
    
}