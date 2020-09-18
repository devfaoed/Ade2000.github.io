<?php
include "database.php";
require "update_query.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
   <div class="container">
   <?php 

       if(isset($_REQUEST["submit"])){
        $state = stripslashes($_POST["state"]);
        $new = stripslashes($_POST["new"]);
        $id = stripslashes($_POST["id"]);
        $cases = stripslashes($_POST["cases"]);
        $date = date("Y-m-d H:i:S");
        
        $state = mysqli_real_escape_string($connection, $state);
        $new = mysqli_real_escape_string($connection, $new);
        $id = mysqli_real_escape_string($connection, $id);
        $cases = mysqli_real_escape_string($connection, $cases);
         
        $query ="UPDATE info SET State='$state', New ='$new', Cases='$cases', time = '$date' WHERE id=$id ";
        $read = mysqli_query($connection, $query);
        if(!$read){
            die("unable to  update info from database" . mysqli_error($connection));
        }
            }
                 
    ?>
    <div class="col-md-5">
        <h2>Update Form</h2>
        <p class="lead"><b>Use the form below to update new cases.</b></p>
            <form method="post" action="update.php" name="update-form">
                <div class="form-group">
                    <label for="State">Enter State to update</label>
                    <input name="state" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>New Confirmed Cases</label>
                    <input type="text" name="new" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>State to update</label>
                   <select name="id" id="state" class="form-control">
                   /*   <?php 
                       reading();
                       
                       ?>
                   </select>
                </div>
                
                <div class="form-group">
                    <label>Total Confirmed Cases</label>
                    <input type="text" name="cases" class="form-control">
                </div>
                
                <div class="form-group">
                    <input type="submit" name="submit" value="UPDATE" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</body>
</html>