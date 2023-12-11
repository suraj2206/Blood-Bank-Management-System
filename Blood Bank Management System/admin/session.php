<?php 
session_start(); 
if(isset($_SESSION['back'])){
   header("Location:");
   exit;
}
else{
    echo "";
}


?>
