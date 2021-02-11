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
      
        <div class="col-md-8">
            <h2 class="text-center">Set your personal/reading timetabel with the form below:</h2>
        </div> 
        <?php 
            
        if(isset($_POST["submit"])){
            $level = stripslashes($_POST["level"]);
            $day = stripslashes($_POST["day"]);
            $first = stripslashes($_POST["first"]);
            $second = stripslashes($_POST["second"]);
            $date = date("Y-m-d H:i:s l");
            
             $level = mysqli_real_escape_string($connection, $level);
             $day = mysqli_real_escape_string($connection, $day);
             $first = mysqli_real_escape_string($connection, $first);
             $second = mysqli_real_escape_string($connection, $second);
            
            $query = "INSERT INTO `personal`(level, day, first, second, date) VALUES('$level', '$day', '$first', '$second', '$date')";
            $nope = mysqli_query($connection, $query);
            if(!$nope){
                die("error in creating personal timetable".mysqli_error($connection));
            }
            else{
                    echo "<br>" . "personal timetable created successfully";
                }
        }else{
        ?>
       <br>
            <form method="post" action="personal.php">
                <div class="form-group">
                    <div class="col-md-2">
                        <label for="day">level</label>
                        <input type="text" name="level" id="level" class="form-control" placeholder="Mon">
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-2">
                        <label for="day">Day</label>
                        <input type="text" name="day" id="day" class="form-control" placeholder="Mon">
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-2">
                        <label for="first">first subject</label>
                        <input type="text" name="first" id="first" class="form-control" placeholder="CSC 200">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-2">
                        <label for="first">second subject</label>
                        <input type="text" name="second" id="second" class="form-control" placeholder="EDU 100">
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-2"><br>
                        <input type="submit" name="submit" class="btn btn-success btn-block" value="SET">
                    </div>
                </div>
            </form>
            <?php } ?>
        
        <div class="col-md-8">
                <h2 class="text-center">Personal Timetable</h2>
                <table class="table table-bordered table-stripped table-hover">
                    <thead>
                    <tr>
                       <th>Day</th>
                        <th>8am - 10am</th>
                        <th>10am - 12pm</th>
                    </tr>
                </thead>
                <?php
                        $query = "SELECT * FROM `personal`";
                            $success = mysqli_query($connection, $query);
                            if(!$success){
                                die("database selection error".mysqli_error($connection));
                            }
                            while($go = mysqli_fetch_assoc($success)){
                                $id	= $go["id"];
                                $day	= $go["day"];
                                $level	= $go["level"];               
                                $first	= $go["first"];               
                                $second	= $go["second"]; 
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $day; ?></td>
                            <td><?php echo $first; ?></td>
                            <td><?php echo $second; ?></td>
                        </tr>
                    </tbody>
                     <?php } ?>
            </table>
            </div>  
        
                

        
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>