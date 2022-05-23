<?php require_once "core/auth.php"; ?>
<?php require_once "core/isEditorAndAdmin.php" ?>
<?php require_once "core/base.php"; ?>
<?php require_once "core/functions.php"; ?>
<?php 
$id=$_GET['id'];
$photo=$_GET['photo'];
if(adsDelete($id)){
 unlink($photo);
 linkTo('ads_list.php');
}
?>
