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
        <title>login</title>
    </head>
    
    <body>
        <div class="navbar navbar-default nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-target="#navbar" data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">STUDENT INFORMATION MANAGEMENT SYSTEM</a>
                </div>
                
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="register.php" class="btn btn-default">New User</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row too">
                    <div class="col-md-5">
                        <img src="image/sims.jpg" alt="sims image" class="img-responsive">
                        <h3>SIMS helps school management to connect and share information with the with the college student.</h3>
                    </div>
                    <div class="col-md-offset-7">
                        <div class="well tro">
                            <?php 
                              session_start();
                            
                            if(isset($_POST["submit"])){
                                
                                $username = stripslashes($_POST["username"]);
                                $password = stripslashes($_POST["password"]);
                                $date = date("Y-m-d H:i:s");
                              
                                $username = mysqli_real_escape_string($connection, $username);
                                $password = mysqli_real_escape_string($connection, $password);
                                
                                $query = "SELECT * FROM `register` WHERE username = '$username' and password = '".md5($password)."'";                               
                                $pass = mysqli_query($connection, $query);
                                
                                $success = mysqli_num_rows($pass);
                                if($success == 1){
                                    $_session["submit"] = $submit;
                                    header("location: dashboard.php");
                                }
                                else{
                                    die("wrong username or password");
                                }                                                                
                            }
                            else {
                            ?>
                            
                           
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                                                        
                                 <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username?">
                                </div>
                                
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="password?">
                                </div>
                                                                
                                 <div class="form-group">
                                   <input type="submit" name="submit" value="Log In" class="btn btn-primary btn-block btn-lg" onclick="display();">
                                </div>                                        
                            </form>
                              <?php } ?>
                            <hr>
                            
                            <div class="form-group">
                                <h4><a href="register.php" class="btn btn-success btn-lg btn-block">Create New Account</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
     
        
     <script type="text/javascript" src="project.js"></script>
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>