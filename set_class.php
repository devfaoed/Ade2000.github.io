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
        
        <div class="text col-md-9">
            <h2 class="text-center">Set 100 Level TT</h2>
            <?php
            if(isset($_POST["submit"])){
                $day = stripslashes($_POST["day"]);
                $first = stripslashes($_POST["first"]);
                $second = stripslashes($_POST["second"]);
                $third = stripslashes($_POST["third"]);
                
                $day = mysqli_real_escape_string($connection, $day);
                $first = mysqli_real_escape_string($connection, $first);
                $second = mysqli_real_escape_string($connection, $second);
                $third = mysqli_real_escape_string($connection, $third);
                
                $query = "INSERT INTO `100`(`Day`, `8am - 10am`, `10am - 12pm`, `12pm - 2pm`) VALUES('$day', '$first', '$second', '$third')";
                $yes = mysqli_query($connection, $query);
                if(!$yes){
                    die("error in setting timetable".mysqli_error($connection));
                }
                else{
                    echo "<h3> 100 Level TT set Successfully </h3>";
                }
            }
            
            ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <div class="col-md-3">
                    <label for="day" class="text-center"> DAY</label>
                    <select name="day" id="day" class="form-control">
                        <option value="MON">MON</option>
                        <option value="TUE">TUE</option>
                        <option value="WED">WED</option>
                        <option value="THUR">THUR</option>
                        <option value="FRI">FRI</option>
                    </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-3">
                    <label for="8am - 10am"> 8am - 10am</label>
                    <input type="text" name="first" id="first" placeholder="CSC 102" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label for="10am - 12pm"> 10am - 12pm</label>
                    <input type="text" name="second" id="second" placeholder="EDU 101" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-3">
                    <label for="12pm - 2pm"> 12pm - 2pm</label>
                    <input type="text" name="third" id="third" placeholder="EDU 101" class="form-control">
                         <br>
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-md-3">
                    <input type="submit" name="submit" value="SET 100 TT" class="btn btn-success btn-block btn-lg">
                    </div>
                </div>
                
                
            </form>
        </div>
        
        <div class="t col-md-9">
            <h2 class="text-center">Set 200 Level TT</h2>
            <?php
            if(isset($_POST["submit1"])){
                $day1 = stripslashes($_POST["day1"]);
                $first1 = stripslashes($_POST["first1"]);
                $second1 = stripslashes($_POST["second1"]);
                $third1 = stripslashes($_POST["third1"]);
                
                $day1 = mysqli_real_escape_string($connection, $day1);
                $first1 = mysqli_real_escape_string($connection, $first1);
                $second1 = mysqli_real_escape_string($connection, $second1);
                $third1 = mysqli_real_escape_string($connection, $third1);
                
                $query = "INSERT INTO `200`(`Day`, `8am - 10am`, `10am - 12pm`, `12pm - 2pm`) VALUES('$day1', '$first1', '$second1', '$third1')";
                $yes = mysqli_query($connection, $query);
                if(!$yes){
                    die("error in setting timetable".mysqli_error($connection));
                }
                else{
                    echo "<h3> 200 Level TT set Successfully </h3>";
                }
            }
            
            ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <div class="col-md-3">
                    <label for="day" class="text-center"> DAY</label>
                    <select name="day1" id="day1" class="form-control">
                        <option value="MON">MON</option>
                        <option value="TUE">TUE</option>
                        <option value="WED">WED</option>
                        <option value="THUR">THUR</option>
                        <option value="FRI">FRI</option>
                    </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-3">
                    <label for="8am - 10am"> 8am - 10am</label>
                    <input type="text" name="first1" id="first1" placeholder="CSC 200" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label for="10am - 12pm"> 10am - 12pm</label>
                    <input type="text" name="second1" id="second1" placeholder="EDU 200" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-3">
                    <label for="12pm - 2pm"> 12pm - 2pm</label>
                    <input type="text" name="third1" id="third1" placeholder="MAT 204" class="form-control">
                         <br>
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-md-3">
                    <input type="submit" name="submit1" value="SET 200 TT" class="btn btn-primary btn-block btn-lg">
                    </div>
                </div>
                
                
            </form>
        </div>
        
        <div class="te col-md-9">
            <h2 class="text-center">Set 300 Level TT</h2>
            <?php
            if(isset($_POST["submit2"])){
                $day2 = stripslashes($_POST["day2"]);
                $first2 = stripslashes($_POST["first2"]);
                $second2 = stripslashes($_POST["second2"]);
                $third2 = stripslashes($_POST["third2"]);
                
                $day2 = mysqli_real_escape_string($connection, $day2);
                $first2 = mysqli_real_escape_string($connection, $first2);
                $second2 = mysqli_real_escape_string($connection, $second2);
                $third2 = mysqli_real_escape_string($connection, $third2);
                
                $query = "INSERT INTO `300`(`Day`, `8am - 10am`, `10am - 12pm`, `12pm - 2pm`) VALUES('$day2', '$first2', '$second2', '$third2')";
                $yes = mysqli_query($connection, $query);
                if(!$yes){
                    die("error in setting timetable".mysqli_error($connection));
                }
                else{
                    echo "<h3> 300 Level TT set Successfully </h3>";
                }
            }
            
            ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <div class="col-md-3">
                    <label for="day" class="text-center"> DAY</label>
                    <select name="day2" id="day2" class="form-control">
                        <option value="MON">MON</option>
                        <option value="TUE">TUE</option>
                        <option value="WED">WED</option>
                        <option value="THUR">THUR</option>
                        <option value="FRI">FRI</option>
                    </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-3">
                    <label for="8am - 10am"> 8am - 10am</label>
                    <input type="text" name="first2" id="first2" placeholder="CSC 300" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label for="10am - 12pm"> 10am - 12pm</label>
                    <input type="text" name="second2" id="second2" placeholder="EDU 305" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-3">
                    <label for="12pm - 2pm"> 12pm - 2pm</label>
                    <input type="text" name="third2" id="third2" placeholder="CSC 304" class="form-control">
                         <br>
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-md-3">
                    <input type="submit" name="submit2" value="SET 300 TT" class="btn btn-info btn-block btn-lg">
                    </div>
                </div>
                
                
            </form>
        </div>
        
        <div class="e col-md-9">
            <h2 class="text-center">Set 400 Level TT</h2>
            <?php
            if(isset($_POST["submit3"])){
                $day3 = stripslashes($_POST["day3"]);
                $first3 = stripslashes($_POST["first3"]);
                $second3 = stripslashes($_POST["second3"]);
                $third3 = stripslashes($_POST["third3"]);
                
                $day3 = mysqli_real_escape_string($connection, $day3);
                $first3 = mysqli_real_escape_string($connection, $first3);
                $second3 = mysqli_real_escape_string($connection, $second3);
                $third3 = mysqli_real_escape_string($connection, $third3);
                
               $query = "INSERT INTO `400`(`Day`, `8am - 10am`, `10am - 12pm`, `12pm - 2pm`) VALUES('$day3', '$first3', '$second3', '$third3')";
                $yes = mysqli_query($connection, $query);
                if(!$yes){
                    die("error in setting timetable".mysqli_error($connection));
                }
                else{
                    echo "<h3> 400 Level TT set Successfully </h3>";
                }
            }
            
            ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <div class="col-md-3">
                    <label for="day" class="text-center"> DAY</label>
                    <select name="day3" id="day3" class="form-control">
                        <option value="MON">MON</option>
                        <option value="TUE">TUE</option>
                        <option value="WED">WED</option>
                        <option value="THUR">THUR</option>
                        <option value="FRI">FRI</option>
                    </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-3">
                    <label for="8am - 10am"> 8am - 10am</label>
                    <input type="text" name="first3" id="first3" placeholder="CSC 402" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label for="10am - 12pm"> 10am - 12pm</label>
                    <input type="text" name="second3" id="second3" placeholder="EDU 400" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-3">
                    <label for="12pm - 2pm"> 12pm - 2pm</label>
                    <input type="text" name="third3" id="third3" placeholder="EDU 405" class="form-control">
                         <br>
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-md-3">
                    <input type="submit" name="submit3" value="SET 100 TT" class="btn btn-default btn-block btn-lg">
                    </div>
                </div>
                
                
            </form>
        </div>
        
        
     <script type="text/javascript" src="fontawesome-free-5.15.2-web/js/all.js"></script>
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>