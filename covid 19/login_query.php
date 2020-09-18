<?php 

include "database.php";

function access(){
    global $connection;
    
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
if($username = "" || empty($username) || $password = "" || empty($password)){
        
        echo "either of thr field cannot be left blank";
    }
else{
    
    $query = "SELECT * FROM user_table WHERE username = '$username' AND password = '$password' ";
    $faith = mysqli_query($connection, $query); 
    
while($boi = mysqli_fetch_assoc($faith)){
    $bob = $boi["username"];
    $bab = $boi["password"];
    
   
} 
    
        }
      include "interface.php";  
    }
     

}

?>