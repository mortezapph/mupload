<?php
class upload {
    public $name;
    public $path;
    

    public function uploadfun (){
        $target_path = "C:/xampp/htdocs/project/upload/"."$this->name";
        move_uploaded_file($this->path , $target_path);
       // $res = "فایل با موفقیت آپلود شد<br>"."$target_path";
        return $target_path;
    }
    
}