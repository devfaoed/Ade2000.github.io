<?php
session_start();
if(!isset($_session["submit"])){
    header("Location: personal.php");
}
exit();

?>