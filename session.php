<?php 
    session_start();

if(!isset($_session["submit"])){
    header("location: management.php");
    
    exit();
}

?>