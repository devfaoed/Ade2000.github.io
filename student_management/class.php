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
        <title>Class</title>
    </head>
    
    <body>
        
        <div class="col-md-9">
                <h2 class="text-center"> 100 Level Timetable</h2>
                <table class="table table-bordered table-stripped table-hover">
                    <thead>
                    <tr>
                       <th>Day</th>
                        <th>8am - 10am</th>
                        <th>10am - 12pm</th>
                        <th>12pm - 2pm</th>
                    </tr>
                </thead>
                <?php
                        $query = "SELECT * FROM `100`";
                            $success = mysqli_query($connection, $query);
                            if(!$success){
                                die("database selection error".mysqli_error($connection));
                            }
                            while($go = mysqli_fetch_assoc($success)){
                                $day	= $go["Day"];
                                $first	= $go["8am - 10am"];               
                                $second	= $go["10am - 12pm"];               
                                $third	= $go["12pm - 2pm"]; 
                    ?>
                    
                   
                    
                    <tbody>
                        <tr>
                            <td><?php echo $day; ?></td>
                            <td><?php echo $first; ?></td>
                            <td><?php echo $second; ?></td>
                            <td><?php echo $third; ?></td>
                        </tr>
                    </tbody>
                     <?php } ?>
            </table>
            </div>  
        
        <div class="col-md-9">
                <h2 class="text-center"> 200 Level Timetable</h2>
                <table class="table table-bordered table-stripped table-hover">
                    <thead>
                    <tr>
                       <th>Day</th>
                        <th>8am - 10am</th>
                        <th>10am - 12pm</th>
                        <th>12pm - 2pm</th>
                    </tr>
                </thead>
                <?php
                        $query = "SELECT * FROM `200`";
                            $success = mysqli_query($connection, $query);
                            if(!$success){
                                die("database selection error".mysqli_error($connection));
                            }
                            while($go = mysqli_fetch_assoc($success)){
                                $day	= $go["Day"];
                                $first	= $go["8am - 10am"];               
                                $second	= $go["10am - 12pm"];               
                                $third	= $go["12pm - 2pm"]; 
                    ?>
                    
                   
                    
                    <tbody>
                        <tr>
                            <td><?php echo $day; ?></td>
                            <td><?php echo $first; ?></td>
                            <td><?php echo $second; ?></td>
                            <td><?php echo $third; ?></td>
                        </tr>
                    </tbody>
                     <?php } ?>
            </table>
            </div>  
        
            <div class="col-md-9">
                <h2 class="text-center"> 300 Level Timetable</h2>
                <table class="table table-bordered table-stripped table-hover">
                    <thead>
                    <tr>
                       <th>Day</th>
                        <th>8am - 10am</th>
                        <th>10am - 12pm</th>
                        <th>12pm - 2pm</th>
                    </tr>
                </thead>
                <?php
                        $query = "SELECT * FROM `300`";
                            $success = mysqli_query($connection, $query);
                            if(!$success){
                                die("database selection error".mysqli_error($connection));
                            }
                            while($go = mysqli_fetch_assoc($success)){
                                $day	= $go["Day"];
                                $first	= $go["8am - 10am"];               
                                $second	= $go["10am - 12pm"];               
                                $third	= $go["12pm - 2pm"]; 
                    ?>
                    
                   
                    
                    <tbody>
                        <tr>
                            <td><?php echo $day; ?></td>
                            <td><?php echo $first; ?></td>
                            <td><?php echo $second; ?></td>
                            <td><?php echo $third; ?></td>
                        </tr>
                    </tbody>
                     <?php } ?>
            </table>
            </div>  
            
            <div class="col-md-9">
                <h2 class="text-center">400 Level Timetable</h2>
                <table class="table table-bordered table-stripped table-hover">
                    <thead>
                    <tr>
                       <th>Day</th>
                        <th>8am - 10am</th>
                        <th>10am - 12pm</th>
                        <th>12pm - 2pm</th>
                    </tr>
                </thead>
                <?php
                        $query = "SELECT * FROM `400`";
                            $success = mysqli_query($connection, $query);
                            if(!$success){
                                die("database selection error".mysqli_error($connection));
                            }
                            while($go = mysqli_fetch_assoc($success)){
                                $day	= $go["Day"];
                                $first	= $go["8am - 10am"];               
                                $second	= $go["10am - 12pm"];               
                                $third	= $go["12pm - 2pm"]; 
                    ?>
                    
                   
                    
                    <tbody>
                        <tr>
                            <td><?php echo $day; ?></td>
                            <td><?php echo $first; ?></td>
                            <td><?php echo $second; ?></td>
                            <td><?php echo $third; ?></td>
                        </tr>
                    </tbody>
                     <?php } ?>
            </table>
            </div>  
        
            
        
          
                

        
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>