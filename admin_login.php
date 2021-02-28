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
        <title>Admin_login</title>
    </head>
    
    <body class="squad">
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
        
        <div class="container">
        <div class="row ">
            <div class="col-md-5">
            <div class="col-md-offset-5">
                <p>Management Admin Log In Page</p>
            </div>
            <div class="well col-md-offset-4 form">
                        <?php 
                              session_start();
                            
                            if(isset($_POST["submit"])){
                                
                                $username = stripslashes($_POST["username"]);
                                $password = stripslashes($_POST["password"]);
                                $date = date("Y-m-d H:i:s");
                              
                                $username = mysqli_real_escape_string($connection, $username);
                                $password = mysqli_real_escape_string($connection, $password);
                                
                                $query = "SELECT * FROM `admin` WHERE username = '$username' and password = '$password'";                               
                                $pass = mysqli_query($connection, $query);
                                
                                $success = mysqli_num_rows($pass);
                                if($success == 1){
                                    $_session["submit"] = $submit;
                                    header("location: set_class.php");
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
                    </div>
          </div>
        </div>
        </div>
  
        
        
     <script type="text/javascript" src="project.js"></script>
     <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.4.1-dist/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
    </body>
</html>