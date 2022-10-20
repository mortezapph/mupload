<?php
include "./process/upload.php";
if(isset($_FILES['file'])){
    $upload = new upload();
    $upload -> name=$_FILES['file']['name'];
    $upload -> path = $_FILES['file']['tmp_name'];
    $upload -> type = $_FILES['file']['type'];
    $upload -> size = $_FILES['file']['size'];
    $upload -> userid = $_POST['userid'];
    $upload -> uploadfun();
    $targett_path = "D:/xampp/htdocs/project/upload/mupload/files/".$_POST['userid']."-".$_FILES['file']['name'];
}



include "./tpl/index-tpl.php";
