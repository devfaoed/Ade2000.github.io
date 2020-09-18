<?php 

$connection = mysqli_connect("localhost", "root", "", "cms");
if(!$connection){
    die("error in category database connection" . mysqli_error($connection));
}



?>