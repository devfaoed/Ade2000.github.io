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
        <title>message</title>
    </head>
    
    <body>
      
        
        <div class="col-md-8">
                <h2 class="text-center">Message Platform</h2>
                <table class="table table-bordered table-stripped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>SOURCE</th>
                        <th>TITLE</th>
                        <th>SOURCE EMAIL</th>
                        <th>MESSAGE</th>
                        <th>TIME DELIVERED</th>
                    </tr>
                </thead>
                <?php
                        $query = "SELECT * FROM `message` ORDER BY id DESC";
                            $success = mysqli_query($connection, $query);
                            if(!$success){
                                die("database selection error".mysqli_error($connection));
                            }
                            while($go = mysqli_fetch_assoc($success)){
                                $id	= $go["id"];
                                $name = $go["name"];
                                $title = $go["title"];
                                $email = $go["email"];
                                $message = $go["message"];
                                $time	= $go["date_time"];               
                                
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><b><?php echo $name; ?></b></td>
                            <td><b><?php echo $title; ?></b></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $message; ?></td>
                            <td><?php echo $time; ?></td>
                        </tr>
                    </tbody>
                     <?php } ?>
            </table>
            </div>  
        
                

        
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>