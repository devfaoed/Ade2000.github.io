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
                    <a href="#" class="navbar-brand"> ADMIN</a>
                </div>
                <div class="collapse navbar-collapse" id="Mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin_logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        
        
        <div class="col-md-2 tre">
                    <div class="btn-group">
                        
                        <div>
                            <h4 ><a href="management.php"><span class="glyphicon glyphicon-hand-left"></span> Back</a></h4>
                        </div>
                        <br><br>
                        
                        <div>
                            <h4 ><a href="set_class.php"><i class="fas fa-book-reader"></i> Set Class TT</a></h4>
                        </div>
                        <br><br>
                        
                        <div>
                            <h4 ><a href=set_test.php><i class="fab fa-readme"></i> Set Test TT</a></h4>
                        </div>
                        <br><br>
                        
                        <div>
                            <h4 ><a href="set_exam.php"><span class="glyphicon glyphicon-list-alt"></span> Set Exam TT</a></h4>
                        </div>
                        <br><br>
                        
                        <div>
                            <h4 ><a href="send_message.php"><i class="fas fa-envelope-open-text"></i> Send Info</a></h4>
                        </div>
                        <br><br>
                        
                    </div>
                </div>
            
       
              
     <script type="text/javascript" src="fontawesome-free-5.15.2-web/js/all.js"></script>
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>