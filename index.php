<?php
include "./process/upload.php";
if(isset($_FILES['file'])){
    $upload = new upload();
    $upload -> name=$_FILES['file']['name'];
    $upload -> path = $_FILES['file']['tmp_name'];
    $upload -> uploadfun();
    $targett_path = "C:/xampp/htdocs/project/upload/".$_FILES['file']['name'];
}

include "./tpl/index-tpl.php";
