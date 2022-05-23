<?php
function con(){
 return mysqli_connect("localhost","root","","blog");
 }
$url="http://{$_SERVER['HTTP_HOST']}/Developer_Class/5_Blog";

$role=array("Admin","Editor","User");
date_default_timezone_set("Asia/Yangon");
?>