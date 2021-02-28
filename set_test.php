<?php 
include "database.php";
require "admin.php";
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
                   <p class="text-uppercase"><b>Set General TEST TT For All Student</b></p>
                </div>
            <?php
            if(isset($_POST["submit"])){
                $dayy = stripslashes($_POST["dayy"]);
                $fir = stripslashes($_POST["fir"]);
                $sec = stripslashes($_POST["sec"]);
                $thir = stripslashes($_POST["thir"]);
                $venue = stripslashes($_POST["venue"]);
                
                $dayy = mysqli_real_escape_string($connection, $dayy);
                $fir = mysqli_real_escape_string($connection, $fir);
                $sec = mysqli_real_escape_string($connection, $sec);
                $thir = mysqli_real_escape_string($connection, $thir);
                $venue = mysqli_real_escape_string($connection, $venue);
                
                $query = "INSERT INTO `test`(`DAY`, `8am - 10am`, `10am - 12pm`, `12pm - 2pm`, `venue`) VALUES('$dayy', '$fir', '$sec', '$thir', '$venue')";
                $yes = mysqli_query($connection, $query);
                if(!$yes){
                    die("error in setting test timetable".mysqli_error($connection));
                }
                else{
                    echo "<h3> Test TT set Successfully </h3>";
                }
            }
            
            ?>
                <div class="panel-body">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                           <div class="form-group">
                                <div class="col-md-3">
                                <label for="day" class="text-center"> DAY</label>
                                <select name="dayy" id="dayy" class="form-control">
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
                                <textarea cols="50" rows="5" class="form-control" name="fir" id="fir"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-2">
                                <label for="10am - 12pm"> 10am - 12pm</label>
                                <textarea cols="50" rows="5" class="form-control" name="sec" id="sec"></textarea>
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <div class="col-md-2">
                                <label for="12pm - 2pm"> 12pm - 2pm</label>
                                <textarea cols="50" rows="5" class="form-control" name="thir" id="thir"></textarea>
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <div class="col-md-3">
                                <label for="venue"> Venue</label>
                                <input type="text" name="venue" id="venue" class="form-control">
                                     <br>
                                </div>
                               
                            </div> 
                            
                            <div class="form-group">
                                <div class="col-md-3">
                                <input type="submit" name="submit" value="SET Test TT" class="btn btn-primary btn-block btn-lg">
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