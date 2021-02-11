<?php 

include "database.php";
include "management.php";

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="project.css">
        <title>Exam</title>
    </head>
    
    <body>
        
           
            <div class="col-md-4">
                <h2 class="text-center"> Student Personal Information</h2>
               <?php 
                    $query = "SELECT * FROM `register`";
                    $success = mysqli_query($connection, $query);
                    if(!$success){
                        die("database selection error".mysqli_error($connection));
                    }
                    while($go = mysqli_fetch_assoc($success)){
                        $id	= $go["student_id"];
                        $fullname	= $go["fullname"];               
                        $parentname	= $go["parentname"];               
                        $level	= $go["level"]; 
                        $date_of_birth	= $go["date_of_birth"]; 
                        $email	= $go["email"]; 
                        $nationality = $go["nationality"]; 
                        $reg_date	= $go["reg_date"]; 
                    ?>
                <ul class="list-group">
                    <li class="list-group-item"><b>Student_id:</b> <?php echo $id ?></li>
                    <li class="list-group-item"><b>Fullname:</b> <?php echo $fullname ?></li>
                    <li class="list-group-item"><b>Parentname:</b> <?php echo $parentname ?></li>
                    <li class="list-group-item"><b>Level:</b> <?php echo $level ?></li>
                    <li class="list-group-item"><b>Date_of_birth:</b> <?php echo $date_of_birth ?></li>
                    <li class="list-group-item"><b>Email Address:</b> <?php echo $email ?></li>
                    <li class="list-group-item"><b>Nationality:</b> <?php echo $nationality ?></li>
                    <li class="list-group-item"><b>Reg_date:</b> <?php echo $reg_date ?></li>
                </ul>
                    
                   <?php } ?>
                
        </div> 

        
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>