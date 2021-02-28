<?php 

include "database.php";


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
        
        <div class="navbar">
            <div class="navbar navbar-inverse">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand"> SIMS PROJECT</a>
                </div>
                <div class="collapse navbar-collapse" id="Mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        
         <?php
                        $query = "SELECT * FROM `message`";
                            $success = mysqli_query($connection, $query);
                            if(!$success){
                                die("database selection error".mysqli_error($connection));
                            }
                            while($go = mysqli_fetch_assoc($success)){
                                $id	= $go["id"];
                                $message = $go["message"];
                                $time	= $go["date_time"];  
                            }
            ?>
        
        
        <div class="col-md-2 tre">
                    <div class="btn-group">
                        
                        <div>
                            <h4 ><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></h4>
                        </div>
                        <br><br>
                        
                        <div>
                            <h4><a href="admin_login.php"><i class="fas fa-cogs"></i> Maintenance</a></h4>
                        </div>
                       <br><br>
                        <div>
                            <h4><a href="class.php"><i class="fas fa-book-reader"></i> Class TT</a></h4>
                        </div>
                       <br><br>
                        
                        <div>
                            <h4><a href="test.php"><i class="fab fa-readme"></i> Test TT</a></h4>
                        </div>
                       <br><br>
                        
                        <div>
                            <h4><a href="exam.php"><i class="fas fa-stream"></i> Exam TT</a></h4>
                        </div>
                        <br><br>
                        
                        <div>
                            <h4><a href=personal.php><i class="far fa-sticky-note"></i> Personal TT</a></h4>
                        </div>
                        
                        <br><br>
                        <div>
                            <h4><a href="messages.php"><i class="fas fa-envelope-open-text"></i> Messages <span class="badge"><?php echo $id; ?></span></a></h4>
                        </div>
                      
                        
                      
                    </div>
                </div>
            
       
                <div class="col-md-9">
                    <?php 
                    $query = "SELECT * FROM `register`";
                    $success = mysqli_query($connection, $query);
                    if(!$success){
                        die("database selection error".mysqli_error($connection));
                    }
                    while($go = mysqli_fetch_assoc($success)){
                        $student_id	= $go["id"];
                        $fullname	= $go["fullname"];  
                    }
                    ?>
                    <div class="well">
                        <a href="dashboard.php" class="das">Dashboard </a> / <h3>Hello <?php echo $fullname;    ?></h3>
                    </div>
                </div>
        
    <div>  
        <div class="col-md-2">
            <div id="deep">
                <h4>Class Time Table</h4>
                <hr>
                <a href="class.php">view Details</a>
            </div>
        </div>
        
        <div class="col-md-2">
            <div id="derp">
                <h4>Exam Time Table</h4>
                <hr>
                <a href="exam.php">view Details</a>
            </div>
        </div>
        
        <div class="col-md-2">
            <div id="drep">
                <h4>Personal Time Table</h4>
                <hr>
                <a href="personal.php">view Details</a>
            </div>
        </div>
        <div class="col-md-2">
            <div id="reep">
                <h4>Notice Board</h4>
                <hr>
                <a href="messages.php">view Details</a>
            </div>
            <br>
        </div>
        
    </div>
     
    
    
        
     <script type="text/javascript" src="fontawesome-free-5.15.2-web/js/all.js"></script>
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>