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
        
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="text-uppercase"><b>Set General EXAM TT For All Student</b></p>
                </div>
            <?php
            if(isset($_POST["submit"])){
                $dayyt = stripslashes($_POST["dayyt"]);
                $firt = stripslashes($_POST["firt"]);
                $sect = stripslashes($_POST["sect"]);
                $thirt = stripslashes($_POST["thirt"]);
                $hall = stripslashes($_POST["hall"]);
                
                $dayyt = mysqli_real_escape_string($connection, $dayyt);
                $firt = mysqli_real_escape_string($connection, $firt);
                $sect = mysqli_real_escape_string($connection, $sect);
                $thirt = mysqli_real_escape_string($connection, $thirt);
                $hall = mysqli_real_escape_string($connection, $hall);
                
               $query = "INSERT INTO `exam`(`Day`, `8am - 10am`, `10am - 12pm`, `12pm - 2pm`, `hall`) VALUES('$dayyt', '$firt', '$sect', '$thirt', '$hall')";
                $yes = mysqli_query($connection, $query);
                if(!$yes){
                    die("error in setting exam timetable".mysqli_error($connection));
                }
                else{
                    echo "<h3> Exam TT set Successfully </h3>";
                }
            }
            
            ?>
                <div class="panel-body">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                           <div class="form-group">
                                <div class="col-md-3">
                                <label for="dayt" class="text-center"> DAY</label>
                                <select name="dayyt" id="dayyt" class="form-control">
                                    <option value="MON">MON</option>
                                    <option value="TUE">TUE</option>
                                    <option value="WED">WED</option>
                                    <option value="THUR">THUR</option>
                                    <option value="FRI">FRI</option>
                                </select>
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <div class="col-md-2">
                                <label for="8am - 10am"> 8am - 10am</label>
                                <textarea cols="50" rows="5" class="form-control" name="firt" id="firt"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-2">
                                <label for="10am - 12pm"> 10am - 12pm</label>
                                <textarea cols="50" rows="5" class="form-control" name="sect" id="sect"></textarea>
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <div class="col-md-2">
                                <label for="12pm - 2pm"> 12pm - 2pm</label>
                                <textarea cols="50" rows="5" class="form-control" name="thirt" id="thirt"></textarea>
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <div class="col-md-3">
                                <label for="venue"> Hall</label>
                                <input type="text" name="hall" id="hall" class="form-control">
                                     <br>
                                </div>
                               
                            </div> 
                            
                            <div class="form-group">
                                <div class="col-md-3">
                                <input type="submit" name="submit" value="SET Exam TT" class="btn btn-danger btn-block btn-lg">
                                </div>
                            </div>
                
                            
                        </form>
                    </div>    
                </div>
        </div>
       
        

        
     <script type="text/javascript" src="fontawesome-free-5.15.2-web/js/all.js"></script>
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>