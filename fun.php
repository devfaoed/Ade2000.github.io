<?php
include "database.php";

    function select(){
        global $connection;
        
        $query = "SELECT * FROM `100`";
        $success = mysqli_query($connection, $query);
        if(!$success){
            die("unabe to select info from database".mysqli_error($connection));
        }
        while($fetch = mysqli_fetch_assoc($success)){
            $id = $fetch["id"];
            $day = $fetch["Day"];
             echo "<option value='$day'>$day</option>";
        }
       
    }

    function test(){
        global $connection;
        
        $query = "SELECT * FROM `test`";
        $yess = mysqli_query($connection, $query);
        if(!$yess){
            die("unabe to select info from database".mysqli_error($connection));
        }
        while($fetch = mysqli_fetch_assoc($yess)){
            $day = $fetch["DAY"];
             echo "<option value='$day'>$day</option>";
        }
       
    }


    function exam(){
        global $connection;
        
        $query = "SELECT * FROM `exam`";
        $jest = mysqli_query($connection, $query);
        if(!$jest){
            die("unabe to select info from database".mysqli_error($connection));
        }
        while($fetch = mysqli_fetch_assoc($jest)){
            $day = $fetch["Day"];
             echo "<option value='$day'>$day</option>";
        }
       
    }


?>
