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
        <title>Index</title>
    </head>
    
    <body>
        
        <div class="navbar">
            <div class="navbar navbar-inverse">
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
        
        
        <div class="col-md-2 tre">
                    <div class="btn-group">
                        
                        <div>
                            <h4><a href="dashboard.php">Dashboard</a></h4>
                        </div>
                        <br><br>
                        
                        <div>
                            <h4><a href="class.php">Class TT</a></h4>
                        </div>
                       <br><br>
                        
                        <div>
                            <h4><a href="test.php">Test TT</a></h4>
                        </div>
                       <br><br>
                        
                        <div>
                            <h4><a href="exam.php">Exam TT</a></h4>
                        </div>
                        <br><br>
                        
                        <div>
                            <h4><a href=personal.php>Personal TT</a></h4>
                        </div>
                        
                        <br><br>
                        <div>
                            <h4><a href="messages.php">Messages</a></h4>
                        </div>
                        
                        <br><br>
                        <div>
                            <h4><a href=student.php>Student Details</a></h4>
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
                        $student_id	= $go["student_id"];
                        $fullname	= $go["fullname"];               
                    ?>
                    <div class="well">
                        <a href="dashboard.php" class="das">Dashboard </a> / <h3>Hello <?php echo $fullname;   } ?></h3>
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
     
    
      <div class="col-md-2">
            <div class="dip">
                <br><br><br><br>
                <h3><a href="http://freebooks.com" class="liy">Read Online</a></h3>
            </div>
        </div>
        
        <div class="col-md-2">
            <div class="result">
                <br><br><br>
                <h3><a href="#" class="li">Result Management</a></h3>
            </div>
        </div>
        
        <div class="col-md-2">
            <div class="contact">
                <br><br>
                <h3><a href="#" class="liy">Contact Management</a></h3>
            </div>
        </div>
        
        <div class="col-md-2">
            <div class="message">
                <br><br><br><br>
                <h3><a href="messages.php" class="liy">Messages</a></h3>
            </div>
            <br>
        </div>
        
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>