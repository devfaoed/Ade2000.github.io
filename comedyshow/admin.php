<?php 

include "connection.php";
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="enter.css">
        <title>Admin</title>
    </head>
    
    <body>
      
            <div class="navbar-default">
                <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">ComedyShow</a>
                </div>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="navbar-nav nav navbar-right">
                        <li><a href="news.php">NEWS</a></li>
                        <li><a href="hompage.php">HOME</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                        <li><a href="register.php">REGISTRATION</a></li>
                        <li><a href="index.php">LOGIN</a></li>
                        <li><a href="admin_login.php" >ADMIN</a></li>
                        <li><a href="logout.php" >LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        
    
        
        <div class="col-md-2">
                   <div class="list-group">
                        
                       <div class="list-group-item"><span class="glyphicon glyphicon-user"></span>
                            <a href="about_admin.php">About Admin</a>
                        </div>


                        <div class="dropdown list-group-item"><span class="glyphicon glyphicon-film"></span>
                            <a href="view_video.php" class="dropdown-toggle" data-toggle="dropdown">Video Management<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="video_upload.php">Video Upload</a></li>
                                <li><a href="view_video.php">View_Uploaded Video</a></li>
                            </ul>
                        </div>


                        <div class="list-group-item"><span class="glyphicon glyphicon-envelope"></span>
                            <a href="message.php">Message Management</a>
                        </div>



                       <div class="dropdown list-group-item"><span class="glyphicon glyphicon-list-alt"></span>
                            <a href="admin.php" class="dropdown-toggle" data-toggle="dropdown">News Management<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="news_input.php">News Input</a></li>
                                    <li><a href="view_news.php">View News</a></li>
                                </ul>                                              
                        </div>


                    <div class="list-group-item"><span class="glyphicon glyphicon-film"></span>
                        <a href="user.php" >Users Management</a>
                    </div>


                    <div class="list-group-item"><span class="glyphicon glyphicon-log-out"></span>
                        <a href="admin_logout.php" >Logout</a>
                    </div>
                        
                    </div>
        </div>
        
        <?php 
        
        $query = "SELECT * FROM `admin`";
        $success = mysqli_query($connect, $query);
        if(!$success){
            die("error".mysqli_error($connect));
        }
        while($fetch = mysqli_fetch_assoc($success)){
            $id = $fetch["id"];
            $name = $fetch["name"];
            $email = $fetch["email"];
        }
        ?>
        
        <div>
            <h2>Welcome Back Admin <small><?php echo $name ?></small></h2>
        </div>

    
    
    <script type="text/javascript" src="jquery/jquery-2.1.1.min.js.download"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>