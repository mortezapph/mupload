<?php
include "../process/upload.php";


if(isset($_GET['userid'])&&is_numeric($_GET['userid'])){
    $files = new upload();
    $files -> userid = $_GET['userid'];
$res = $files -> files();
include "../tpl/admin-tpl.php";

}
include "../tpl/admin-log-tpl.php";