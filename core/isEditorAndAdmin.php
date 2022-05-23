<?php

if($_SESSION['user']['role']==0 && $_SESSION['user']['role']==1){
 header("Location:dashboard.php");
}


?>
