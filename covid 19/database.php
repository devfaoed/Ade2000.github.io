<?php

$connection = mysqli_connect("localhost", "root", "", "pandemic");

if(!$connection){
    die("error in database connection" . mysqli_error($connection));
}

?>