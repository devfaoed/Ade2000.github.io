<?php 
include "database.php";

function create(){
    global $connection;
    
if(isset($_REQUEST["submit"])){
    $username = stripslashes($_REQUEST["username"]); 
    $password = stripslashes($_REQUEST["password"]);
    $first = stripslashes($_REQUEST["first"]);
    $last = stripslashes($_REQUEST["last"]);
    $date = stripslashes($_REQUEST["birth"]);
    $email = stripslashes($_REQUEST["email"]);
    $origin = stripslashes($_REQUEST["city"]);
    $sex = stripslashes($_REQUEST["sex"]);
    $trn_date = date("Y-m-d H:i:s");
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    $first = mysqli_real_escape_string($connection, $first);
    $last = mysqli_real_escape_string($connection, $last);
    $date = mysqli_real_escape_string($connection, $date);
    $email = mysqli_real_escape_string($connection, $email);
    $origin = mysqli_real_escape_string($connection, $origin);
    $sex = mysqli_real_escape_string($connection, $sex);
    

$query = "INSERT INTO info(username, password, first, last, birth, email, city, sex, date ) VALUES( '$username','$password', '$first', '$last', '$date', '$email', '$origin', '$sex', '$trn_date')";
    $faith = mysqli_query($connection, $query);
    if(!$faith){
        die("not successful" . mysqli_error($connection));
        }
    }
}



?>