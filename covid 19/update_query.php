<?php 
include "database.php";


function reading(){
    global $connection;         
        $query = "SELECT * FROM `info` ";
        $read = mysqli_query($connection, $query);
        if(!$read){
            die("unable tp read info from database" . mysqli_error($connection));
        }
        
        while($compose = mysqli_fetch_assoc($read)){
            $state = $compose["id"];
            
            echo "
            <option value='$state'>$state</option>
            ";
        }
    }

?>
 