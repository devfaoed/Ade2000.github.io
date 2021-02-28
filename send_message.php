<?php 

include "database.php";
require "admin.php";
require "fun.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="project.css">
        <link rel="stylesheet" type="text/css" href="google%2520font/AkayaTelivigala-Regular.ttf">
        <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.2-web/css/all.css">
        <title>Index</title>
    </head>
    
    <body>
            <div class="col-md-offset-4">
            <div class="col-md-8">
                <div class="well">
                    <h2 class="text-uppercase text-center">message box</h2>
                    <hr>
                        <?php
                        if(isset($_POST["submit"])){
                            $name = stripslashes($_POST["name"]);
                            $title = stripslashes($_POST["title"]);
                            $email = stripslashes($_POST["email"]);
                            $message = stripslashes($_POST["message"]);
                            $date = date("Y-m-d H:i:sla");
                        
                          
                            $name = mysqli_real_escape_string($connection, $name);
                            $title = mysqli_real_escape_string($connection, $title);
                            $email = mysqli_real_escape_string($connection, $email);
                            $message = mysqli_real_escape_string($connection, $message);
                         
                           $query = "INSERT INTO `message`(`name`, `title`, `email`, `message`, `date_time`) VALUES('$name', '$title', '$email', '$message', '$date')";
                            $yes = mysqli_query($connection, $query);
                            if(!$yes){
                                die("error in setting exam timetable".mysqli_error($connection));
                            }
                            else{
                                echo "<h3> Message Successfully Send </h3>";
                            }
                        }

                        ?>
                <div class="panel-body">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                
                                 <div class="form-group">
                                    <label for="message">Your message</label>
                                    <textarea class="form-control" cols="4" rows="10" name="message" id="message"></textarea>
                                </div>
                                
                                 <div class="form-group">
                                    <input type="submit" name="submit" value="SEND MESSAGE" class="btn-primary btn-lg btn-block">
                                </div>                                    
                                    
                            </form>
                            </div>
                            
                        </div>
                    </div> 
                </div>
       
       
        

        
     <script type="text/javascript" src="fontawesome-free-5.15.2-web/js/all.js"></script>
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>